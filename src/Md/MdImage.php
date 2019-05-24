<?php

namespace Oft\Generator\Md;

class MdImage implements MdElementInterface
{
    private const PATTERN = '![$alt]($str)';

    /* @var string */
    private $str;

    /* @var string */
    private $alt;

    public function __construct(string $str, string $alt = '')
    {
        $this->str = $str;
        $this->alt = $alt;
    }

    public function toString(): string
    {
        return strtr(self::PATTERN, ['$str' => $this->str, '$alt' => $this->alt]);
    }
}