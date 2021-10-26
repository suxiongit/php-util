<?php

namespace App\Helpers;

class Arr
{
    /**
     * 计算多维数组差集
     * @param $arr1
     * @param $arr2
     * @return array
     */
    public static function multiDiff($arr1, $arr2)
    {
        return array_udiff($arr1, $arr2, function ($a, $b) {
            return strcmp(implode("", $a), implode("", $b));
        });
    }
}