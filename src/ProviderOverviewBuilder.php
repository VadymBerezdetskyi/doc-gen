<?php


namespace Oft\Generator;


use Oft\Generator\Dto\MdTableColumnDto;
use Oft\Generator\Dto\ProviderDto;
use Oft\Generator\Enums\MdTableColumnAlignEnum;
use Oft\Generator\Enums\TextEmphasisPatternEnum;
use Oft\Generator\Md\MdCode;
use Oft\Generator\Md\MdCodeBlock;
use Oft\Generator\Md\MdHeader;
use Oft\Generator\Md\MdImage;
use Oft\Generator\Md\MdLink;
use Oft\Generator\Md\MdTable;
use Oft\Generator\Md\MdText;

class ProviderOverviewBuilder extends MdBuilder
{
    use ImagesTrait;

    /* @var ProviderDto */
    private $data;

    public function __construct(array $data)
    {
        $this->data = ProviderDto::fromArray($data);
    }

    public function build(): void
    {
        $this->add(new MdHeader($this->data->getName()->en ?? '', 1), true);
        $this->add(new MdImage($this->getProviderLogo($this->data->code), $this->data->code), true);

        $this->add(new MdHeader('General', 2), true);
        $this->add(new MdText(new TextEmphasisPatternEnum(TextEmphasisPatternEnum::BOLD), 'Code:'));
        $this->add(new MdCode($this->data->code), true);

        $this->add(new MdText(new TextEmphasisPatternEnum(TextEmphasisPatternEnum::BOLD), 'Vendor:'));
        $this->add(new MdCode($this->data->vendor), true);

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

        if (null !== $this->data->categories) {
            $this->add(new MdText(new TextEmphasisPatternEnum(TextEmphasisPatternEnum::BOLD), 'Categories:'), true);

            foreach ($this->data->categories as $category) {
                $this->add(new MdCode($category));
                if ($category !== end($this->data->categories)) {
                    $this->add(new MdText(new TextEmphasisPatternEnum(TextEmphasisPatternEnum::PLAIN), " ,"));
                }
            }

            $this->br();
        }

        if (null !== $this->data->countries) {
            $this->add(new MdText(new TextEmphasisPatternEnum(TextEmphasisPatternEnum::BOLD), 'Countries:'), true);

            foreach ($this->data->countries as $code) {
                $this->add(new MdImage($this->getFlagIcon($code), $code), true);
            }

            $this->br();
        }

        $this->add(new MdHeader('Images', 2), true);
        $this->add(new MdHeader('Logo', 3), true);
        $this->add(new MdImage($this->getProviderLogo($this->data->code), $this->data->code), true);
        $this->add(new MdCodeBlock($this->getProviderLogo($this->data->code)), true);

        $this->add(new MdHeader('Icon', 3), true);
        $this->add(new MdImage($this->getProviderIcon($this->data->code), $this->data->code), true);
        $this->add(new MdCodeBlock($this->getProviderIcon($this->data->code)), true);

        if (null !== $this->data->paymentMethod) {
            $this->add(new MdHeader('Payment Methods', 2), true);
            $this->add(new MdText(new TextEmphasisPatternEnum(TextEmphasisPatternEnum::PLAIN), 'The list of supported '));
            /*
             * TODO: link to methods list page
            */
            $this->add(new MdLink("Payment Methods", "#"), true);
            $this->add(new MdTable($this->data->paymentMethod, [
                MdTableColumnDto::fromArray([
                    'key' => 'Code',
                    'align' => new MdTableColumnAlignEnum(MdTableColumnAlignEnum::LEFT),
                    'set_template' => function (string $code) {
                    /*
                     * TODO: link to method page
                    */
                        return new MdCode($code);
                    },
                ]),
            ]), true);
        }

        if (null !== $this->data->payoutMethod) {
            $this->add(new MdHeader('Payout Methods', 2), true);
            $this->add(new MdText(new TextEmphasisPatternEnum(TextEmphasisPatternEnum::PLAIN), 'The list of supported '));
            /*
             * TODO: link to methods list page
            */
            $this->add(new MdLink("Payout Methods", "#"), true);
            $this->add(new MdTable($this->data->payoutMethod, [
                MdTableColumnDto::fromArray([
                    'key' => 'Icon',
                    'align' => new MdTableColumnAlignEnum(MdTableColumnAlignEnum::CENTER),
                    'set_template' => function (string $code) {
                        return new MdImage($this->getPayoutMethodIcon($code), $code);
                    },
                ]),
                MdTableColumnDto::fromArray([
                    'key' => 'Name',
                    'align' => new MdTableColumnAlignEnum(MdTableColumnAlignEnum::CENTER),
                    'set_template' => function (string $code) {
                        /*
                         * TODO: link to method overview page
                        */
                        return new MdLink($code, '#');
                    },
                ]),
                MdTableColumnDto::fromArray([
                    'key' => 'Code',
                    'align' => new MdTableColumnAlignEnum(MdTableColumnAlignEnum::CENTER),
                    'set_template' => function (string $code) {
                        return new MdCode($code);
                    },
                ]),
            ]), true);
        }

        $this->add(new MdHeader('JSON Object', 2), true);
        $this->add(new MdCodeBlock(json_encode($this->data->toArray()), 'json'), true);
    }
}