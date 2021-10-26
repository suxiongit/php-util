<?php
if (file_exists(dirname(__DIR__) . '/vendor/autoload.php')) {
    require_once dirname(__DIR__) . '/vendor/autoload.php';
} elseif (is_file(dirname(__DIR__) . '/../vendor/autoload.php')) {
    require_once dirname(__DIR__) . '/../vendor/autoload.php';
}

use App\Helpers\Arr;

/**
 * 计算多维数组差集
 */
function testMultiDiff()
{
    $arr1 = [['Red', 80], ['Green', 70], ['white', 60]];
    $arr2 = [['Green', 70], ['Black', 95]];

    $arr = Arr::multiDiff($arr1, $arr2);

    print_r($arr);
}

testMultiDiff();