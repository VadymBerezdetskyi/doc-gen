<?php

namespace Oft\Generator\Service;

use Oft\Generator\DataProvider;
use Oft\Generator\Dto\PaymentMethodDto;
use Oft\Generator\Enums\TextEmphasisPatternEnum;
use Oft\Generator\Traits\ImagesTrait;
use Oft\Generator\Md\MdCode;
use Oft\Generator\Md\MdCodeBlock;
use Oft\Generator\Md\MdHeader;
use Oft\Generator\Md\MdImage;
use Oft\Generator\Md\MdText;

final class PaymentMethodOverviewBuilder extends MdBuilder
{
    use ImagesTrait;

    /* @var PaymentMethodDto */
    private $data;

    public function __construct(DataProvider $dataProvider, PaymentMethodDto $data)
    {
        parent::__construct($dataProvider);
        $this->data = $data;
    }

    public function build(): void
    {
        /*
         * TODO: add logo
         * */
        $this->add(new MdHeader($this->data->getName()->en ?? '', 1), true);
//        $this->add(new MdImage($this->getProviderLogo($this->data->code), $this->data->code), true);

        $this->add(new MdHeader('General', 2), true);
        $this->add(new MdText(new TextEmphasisPatternEnum(TextEmphasisPatternEnum::BOLD), 'Code:'));
        $this->add(new MdCode($this->data->code), true);

        if (null !== $this->data->vendor) {
            $this->add(new MdText(new TextEmphasisPatternEnum(TextEmphasisPatternEnum::BOLD), 'Vendor:'));
            $this->add(new MdCode($this->data->vendor), true);
        }

        $this->add(new MdText(new TextEmphasisPatternEnum(TextEmphasisPatternEnum::BOLD), 'Name:'), true);
        foreach ($this->data->name as $lang => $val) {
            $this->add(new MdText(new TextEmphasisPatternEnum(TextEmphasisPatternEnum::PLAIN), ":\t[$lang] $val"), true);
        }

        if (null !== $this->data->description) {
            $this->add(new MdText(new TextEmphasisPatternEnum(TextEmphasisPatternEnum::BOLD), 'Description:'), true);

            foreach ($this->data->description as $lang => $val) {
                $this->add(new MdText(new TextEmphasisPatternEnum(TextEmphasisPatternEnum::PLAIN), ": [$lang] $val"), true);
            }
        }

        $this->add(new MdText(new TextEmphasisPatternEnum(TextEmphasisPatternEnum::BOLD), 'Category:'));
        $this->add(new MdCode($this->data->category), true);

        if (null !== $this->data->countries) {
            $this->add(new MdText(new TextEmphasisPatternEnum(TextEmphasisPatternEnum::BOLD), 'Countries:'), true);

            foreach ($this->data->countries as $code) {
                $this->add(new MdImage($this->getFlagIcon($code), $code), true);
            }

            $this->br();
        }

        /*
         * FIXME: add logo, icon
         * */
        $this->add(new MdHeader('Images', 2), true);
        $this->add(new MdHeader('Logo', 3), true);
//        $this->add(new MdImage($this->getProviderLogo($this->data->code), $this->data->code), true);
//        $this->add(new MdCodeBlock($this->getProviderLogo($this->data->code)), true);

        $this->add(new MdHeader('Icon', 3), true);
//        $this->add(new MdImage($this->getProviderIcon($this->data->code), $this->data->code), true);
//        $this->add(new MdCodeBlock($this->getProviderIcon($this->data->code)), true);

        /*
         * TODO: add Payment services, payment providers tables
         * */

        $this->add(new MdHeader('JSON Object', 2), true);
        $this->add(new MdCodeBlock(json_encode($this->data->toArray()), 'json'), true);
    }
}