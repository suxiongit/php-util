<?php

namespace App\Helpers;

class Number
{
    /**
     * 拆分2的次方（幂）
     *
     * PHP pow() 函数返回 x 的 y 次方
     * PHP decbin() 函数把十进制数转换为二进制数
     * PHP str_split() 函数把字符串分割到数组中
     *
     * @param $num
     * @return array
     */
    public static function splitPow($num): array {
        $bin = str_split(decbin($num)); // 把十进制转二进制，后分割成数组
        $pow = [];
        for ($i = 0, $j = 0, $n = count($bin); $i < $n; $i ++) {
            if ($bin[$i] <= 0) continue;
            $pow[$j] = pow(2, $n - $i - 1);
            $j ++;
        }
        return $pow;
    }

}