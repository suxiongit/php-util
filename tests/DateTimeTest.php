<?php
if (file_exists(dirname(__DIR__) . '/vendor/autoload.php')) {
    require_once dirname(__DIR__) . '/vendor/autoload.php';
} elseif (is_file(dirname(__DIR__) . '/../vendor/autoload.php')) {
    require_once dirname(__DIR__) . '/../vendor/autoload.php';
}

use App\Helpers\DateTime;

/**
 * 获取近一年所有月份
 */
function testGetMonths()
{
    $months = DateTime::getMonths();

    print_r($months);
}

testGetMonths();