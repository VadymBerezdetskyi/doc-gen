<?php


namespace Oft\Generator\Traits;


trait SortingTrait
{
    private function sort(array $arr, string $column = 'code'): array
    {
        $cols = array_column($arr, $column);
        array_multisort($cols, SORT_ASC, $arr);

        return $arr;
    }
}