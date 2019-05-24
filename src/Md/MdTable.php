<?php

namespace Oft\Generator\Md;

use Oft\Generator\Dto\MdTableColumnDto;
use Oft\Generator\Dto\BaseDto;

class MdTable implements MdElementInterface
{
    /* @var array */
    private $data;

    /* @var array */
    private $cols;

    /* @var string */
    private $table = "";

    public function __construct(array $data, array $cols)
    {
        $this->data = $data;
        $this->cols = $cols;
    }

    private function br(): void
    {
        $this->table = $this->table." \n";
    }

    private function add(string $str): void
    {
        $this->table = $this->table.$str;
    }

    private function separator(): void
    {
        if (substr($this->table, -1) === "|") {
            return;
        }

        $this->table = $this->table."|";
    }

    private function addHeader(): void
    {
        /* @var MdTableColumnDto $col */
        foreach ($this->cols as $col) {
            $this->separator();
            $this->add($col->key);
            $this->separator();
        }

        $this->br();

        /* @var MdTableColumnDto $col */
        foreach ($this->cols as $col) {
            $this->separator();
            $this->add($col->align->getValue());
            $this->separator();
        }

        $this->br();
    }

    private function addRow(BaseDto $row): void
    {
        /* @var MdTableColumnDto $col */
        foreach ($this->cols as $col) {
            $this->separator();

            /* @var MdElementInterface $element */
            $element = call_user_func($col->setTemplate, $row);

            $this->add($element->toString());
            $this->separator();
        }
        
        $this->br();
    }

    private function build(): void
    {
        $this->addHeader();

        /* @var BaseDto $item */
        foreach ($this->data as $item) {
            $this->addRow($item);
        }
    }

    public function toString(): string
    {
        $this->build();

        return $this->table;
    }
}