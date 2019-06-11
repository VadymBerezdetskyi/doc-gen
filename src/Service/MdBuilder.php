<?php

namespace Oft\Generator\Service;

use Oft\Generator\DataProvider;
use Oft\Generator\Md\MdElementInterface;

class MdBuilder
{
    /** @var string */
    private $content = "";

    /* @var DataProvider */
    protected $dataProvider;

    public function __construct(DataProvider $dataProviderProvider)
    {
        $this->dataProvider = $dataProviderProvider;
    }

    public function br(): void
    {
        $this->content = $this->content." \n";
    }

    public function add(MdElementInterface $element, bool $return = false): void
    {
        $this->content = $this->content.$element->toString();

        if ($return) {
            $this->br();
        }
    }

    public function addString(string $string, bool $return = false): void
    {
        $this->content = $this->content.$string;

        if ($return) {
            $this->br();
        }
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
}