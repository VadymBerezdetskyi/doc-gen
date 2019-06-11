<?php

namespace Oft\Generator\Service;

use Oft\Generator\DataProvider;
use Oft\Generator\Dto\MdTableColumnDto;
use Oft\Generator\Dto\ProviderDto;
use Oft\Generator\Enums\MdTableColumnAlignEnum;
use Oft\Generator\Enums\TextEmphasisPatternEnum;
use Oft\Generator\ImagesTrait;
use Oft\Generator\Md\MdCode;
use Oft\Generator\Md\MdHeader;
use Oft\Generator\Md\MdImage;
use Oft\Generator\Md\MdTable;
use Oft\Generator\Md\MdText;

final class ProvidersListBuilder extends MdBuilder
{
    use ImagesTrait;

    /* @var array */
    private $data;

    public function __construct(DataProvider $dataProvider)
    {
        parent::__construct($dataProvider);
        $this->data = $this->groupProviders($this->dataProvider->getProviders());
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

    public function build(): void
    {
        $this->add(new MdHeader('Payment providers', 1), true);

        foreach ($this->data as $h => $group) {
            $this->add(new MdHeader((string) $h, 2), true);
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