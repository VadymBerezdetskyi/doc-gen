<?php

namespace Oft\Generator;

use Oft\Generator\Dto\MdTableColumnDto;
use Oft\Generator\Dto\ProviderDto;
use Oft\Generator\Enums\MdTableColumnAlignEnum;
use Oft\Generator\Enums\TextEmphasisPatternEnum;
use Oft\Generator\Md\MdCode;
use Oft\Generator\Md\MdHeader;
use Oft\Generator\Md\MdImage;
use Oft\Generator\Md\MdTable;
use Oft\Generator\Md\MdText;

final class ProvidersListBuilder extends MdBuilder
{
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
            /* @var ProviderDto $provider */
            $provider = ProviderDto::fromArray($el);
            $key = strtoupper($provider->code[0]);

            if (array_key_exists($key, $grouped)) {
                array_push($grouped[$key], $provider);
            } else {
                $grouped[$key] = [$provider];
            }
        }

        return $grouped;
    }

    private function getProviderLogo(string $code): string
    {
        return "https://static.openfintech.io/payment_providers/$code/logo.svg?w=600&c=v0.59.26#w100";
    }

    public function build(): void
    {
        $this->add(new MdHeader('Payment providers', 1));
        $this->br();

        foreach ($this->data as $h => $group) {
            $this->add(new MdHeader((string) $h, 1));
            $this->br();

            $this->add(new MdTable($group, [
                MdTableColumnDto::fromArray([
                    'key' => 'Logo',
                    'align' => new MdTableColumnAlignEnum(MdTableColumnAlignEnum::CENTER),
                    'set_template' => function (ProviderDto $row) {
                        return new MdImage($this->getProviderLogo($row->code), $row->code);
                    },
                ]),
                MdTableColumnDto::fromArray([
                    'key' => 'Name',
                    'align' => new MdTableColumnAlignEnum(MdTableColumnAlignEnum::CENTER),
                    'set_template' => function (ProviderDto $row) {
                        return new MdText(new TextEmphasisPatternEnum(TextEmphasisPatternEnum::PLAIN), $row->getName()->en ?? '');
                    },
                ]),
                MdTableColumnDto::fromArray([
                    'key' => 'Code',
                    'align' => new MdTableColumnAlignEnum(MdTableColumnAlignEnum::CENTER),
                    'set_template' => function (ProviderDto $row) {
                        return new MdCode($row->code);
                    },
                ]),
            ]));
        }
    }
}