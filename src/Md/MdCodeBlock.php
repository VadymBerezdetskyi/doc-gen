<?php

namespace Oft\Generator\Md;

class MdCodeBlock implements MdElementInterface
{
    private const PATTERN = '```$highlight $str ```';

    /* @var string */
    private $str;

    /* @var string */
    private $highlight;

    public function __construct(string $string, string $highlight = '')
    {
        $this->str = $string;
        $this->highlight = $highlight;
    }

    public function toString(): string
    {
        return strtr(self::PATTERN, ['$str' => $this->str, '$highlight' => $this->highlight]);
    }

}