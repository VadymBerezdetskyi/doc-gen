<?php

namespace Oft\Generator;

use Oft\Generator\Md\MdElementInterface;

class MdBuilder
{
    /** @var string */
    private $content = "";

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

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
}