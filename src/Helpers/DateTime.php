<?php

namespace App\Helpers;

class DateTime
{
    /**
     * 获取近一年所有月份
     * @param int $recent
     * @param string $format
     * @return array
     * @throws \Exception
     */
    public static function getMonths(int $recent = 12, string $format = 'Y-m'): array
    {
        $recent -= 1;
        $z = date($format);
        $a = date($format, strtotime("-{$recent} months"));
        $begin = new \DateTime($a);
        $end = new \DateTime($z);
        $end = $end->modify('+1 month');
        $interval = new \DateInterval('P1M');
        $dateRange = new \DatePeriod($begin, $interval, $end);

        $months = [];
        foreach ($dateRange as $date) {
            $months[] = $date->format($format);
        }
        return $months;
    }
}