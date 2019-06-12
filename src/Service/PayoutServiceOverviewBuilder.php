<?php

namespace Oft\Generator\Service;

use Oft\Generator\DataProvider;
use Oft\Generator\Dto\MdTableColumnDto;
use Oft\Generator\Dto\PayoutServiceDto;
use Oft\Generator\Dto\ServiceFieldDto;
use Oft\Generator\Enums\MdTableColumnAlignEnum;
use Oft\Generator\Enums\TextEmphasisPatternEnum;
use Oft\Generator\Traits\ImagesTrait;
use Oft\Generator\Md\MdCode;
use Oft\Generator\Md\MdCodeBlock;
use Oft\Generator\Md\MdHeader;
use Oft\Generator\Md\MdImage;
use Oft\Generator\Md\MdLink;
use Oft\Generator\Md\MdTable;
use Oft\Generator\Md\MdText;

final class PayoutServiceOverviewBuilder extends MdBuilder
{
    use ImagesTrait;

    /* @var PayoutServiceDto */
    private $data;

    public function __construct(DataProvider $dataProvider, PayoutServiceDto $data)
    {
        parent::__construct($dataProvider);
        $this->data = $data;
    }

    public function build(): void
    {
        /* TODO: add header, logo */
//        $this->add(new MdHeader('', 1), true);
//        $this->add(new MdImage($this->getProviderLogo($this->data->code), $this->data->code), true);

        $this->add(new MdHeader('General', 2),true);
        $this->add(new MdText(new TextEmphasisPatternEnum(TextEmphasisPatternEnum::BOLD), 'Code:'));
        $this->add(new MdCode($this->data->code),true);

        if (null !== $this->data->method) {
            $this->add(new MdText(new TextEmphasisPatternEnum(TextEmphasisPatternEnum::BOLD), 'Method:'));
            $this->add(new MdCode($this->data->method),true);
        }

        if (null !== $this->data->currency) {
            $this->add(new MdText(new TextEmphasisPatternEnum(TextEmphasisPatternEnum::BOLD), 'Currency:'));
            $this->add(new MdCode($this->data->currency));
            /*
            *  FIXME: add link
            */
            $this->add(new MdLink('show -->', ''), true);
        }

        /*
         * TODO: add name???
         * */
//        $this->add(new MdText(new TextEmphasisPatternEnum(TextEmphasisPatternEnum::BOLD), 'Name:'));
        $this->add(new MdText(new TextEmphasisPatternEnum(TextEmphasisPatternEnum::BOLD), 'Amount limits:'));
        $this->addString('from '.((new MdCode($this->data->amountMin))->toString()).' to '.((new MdCode($this->data->amountMax))->toString()),null === $this->data->currency);
        if (null !== $this->data->currency) {
            $this->add(new MdText(new TextEmphasisPatternEnum(TextEmphasisPatternEnum::PLAIN), ' '.$this->data->currency));
        }

        if (null !== $this->data->fields) {
            $this->add(new MdHeader('Fields', 2),true);
            $this->add(new MdHeader('Overview', 3),true);

            $this->add(new MdTable($this->data->getFields(), [
                MdTableColumnDto::fromArray([
                    'key' => 'Key',
                    'align' => new MdTableColumnAlignEnum(MdTableColumnAlignEnum::CENTER),
                    'set_template' => function (ServiceFieldDto $field) {
                        return new MdCode($field->key);
                    },
                ]),
                MdTableColumnDto::fromArray([
                    'key' => 'Required',
                    'align' => new MdTableColumnAlignEnum(MdTableColumnAlignEnum::CENTER),
                    'set_template' => function (ServiceFieldDto $field) {
                        return new MdText(new TextEmphasisPatternEnum(TextEmphasisPatternEnum::PLAIN), $field->required ? '✔' : '✗');
                    },
                ]),
                MdTableColumnDto::fromArray([
                    'key' => 'Type',
                    'align' => new MdTableColumnAlignEnum(MdTableColumnAlignEnum::CENTER),
                    'set_template' => function (ServiceFieldDto $field) {
                        return new MdCode($field->type);
                    },
                ]),
                MdTableColumnDto::fromArray([
                    'key' => 'Regexp',
                    'align' => new MdTableColumnAlignEnum(MdTableColumnAlignEnum::CENTER),
                    'set_template' => function (ServiceFieldDto $field) {
                        return new MdCode($field->regexp);
                    },
                ]),
            ]), true);

            $this->add(new MdHeader('Details', 3),true);
            foreach ($this->data->getFields() as $index => $field) {
                /* @var ServiceFieldDto $field */
                $this->addString(((string) $index).' '.((new MdText(new TextEmphasisPatternEnum(TextEmphasisPatternEnum::BOLD), (new MdCode($field->key))->toString()))->toString()), true);

                $this->addString('Type: ');
                $this->add(new MdCode($field->type), true);

                $this->addString('Regexp: ');
                $this->add(new MdCode($field->regexp), true);

                $this->addString('Required: ');
                $this->add(new MdCode((string) $field->required), true);

                $this->addString('Label: ', true);
                foreach ($field->label as $lang => $val) {
                    $this->add(new MdText(new TextEmphasisPatternEnum(TextEmphasisPatternEnum::PLAIN), ": [$lang] $val"), true);
                }

                $this->addString('Hint: ', true);
                foreach ($field->hint as $lang => $val) {
                    $this->add(new MdText(new TextEmphasisPatternEnum(TextEmphasisPatternEnum::PLAIN), ": [$lang] $val"), true);
                }
            }

            $this->add(new MdHeader('JSON Object', 2), true);
            $this->add(new MdCodeBlock(json_encode($this->data->toArray()), 'json'), true);
        }
    }
}