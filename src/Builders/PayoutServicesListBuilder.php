<?php

namespace Oft\Generator\Builders;


use Oft\Generator\Dto\MdTableColumnDto;
use Oft\Generator\Dto\PayoutMethodDto;
use Oft\Generator\Enums\MdTableColumnAlignEnum;
use Oft\Generator\Enums\TextEmphasisPatternEnum;
use Oft\Generator\ImagesTrait;
use Oft\Generator\Md\MdCode;
use Oft\Generator\Md\MdHeader;
use Oft\Generator\Md\MdImage;
use Oft\Generator\Md\MdTable;
use Oft\Generator\Md\MdText;

final class PayoutServicesListBuilder extends MdBuilder
{
    use ImagesTrait;

    /* @var array */
    private $data;

    public function __construct(array $data)
    {
        $this->data = $this->groupProviders($data);
    }

    private function groupProviders(array $data): array
    {
        $grouped = [];

        $codes = array_column($data, 'code');
        array_multisort($codes, SORT_ASC, $data);

        foreach ($data as $el) {
            /* @var PayoutMethodDto $payoutMethod */
            $payoutMethod = PayoutMethodDto::fromArray($el);
            $key = strtoupper($payoutMethod->code[0]);

            if (array_key_exists($key, $grouped)) {
                array_push($grouped[$key], $payoutMethod);
            } else {
                $grouped[$key] = [$payoutMethod];
            }
        }

        return $grouped;
    }

    public function build(): void
    {
        $this->add(new MdHeader('Payout Services', 1), true);

        foreach ($this->data as $h => $group) {
            $this->add(new MdHeader((string) $h, 2), true);
            $this->add(new MdTable($group, [
//                MdTableColumnDto::fromArray([
//                    'key' => 'Logo',
//                    'align' => new MdTableColumnAlignEnum(MdTableColumnAlignEnum::CENTER),
//                    'set_template' => function (PayoutMethodDto $row) {
//                        return new MdImage($this->getProviderLogo($row->code), $row->code);
//                    },
//                ]),
                MdTableColumnDto::fromArray([
                    'key' => 'Code',
                    'align' => new MdTableColumnAlignEnum(MdTableColumnAlignEnum::CENTER),
                    'set_template' => function (PayoutMethodDto $row) {
                        return new MdCode($row->code);
                    },
                ]),
                MdTableColumnDto::fromArray([
                    'key' => 'Currency',
                    'align' => new MdTableColumnAlignEnum(MdTableColumnAlignEnum::CENTER),
                    'set_template' => function (PayoutMethodDto $row) {
                        return new MdCode($row->currency ?? '');
                    },
                ]),
                MdTableColumnDto::fromArray([
                    'key' => 'Fields',
                    'align' => new MdTableColumnAlignEnum(MdTableColumnAlignEnum::CENTER),
                    'set_template' => function (PayoutMethodDto $row) {
                        return new MdCode((string) count($row->fields ?? []));
                    },
                ]),
            ]));
        }
    }

}