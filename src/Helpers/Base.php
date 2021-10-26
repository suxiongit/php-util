<?php

namespace App\Helpers;

class Base
{
    /**
     * 蛇形命名转换为小驼峰命名
     * @param string $value
     * @return string
     */
    public static function snakeToLowerCamel(string $value): string
    {
        $value = ucwords(str_replace(['_', '-'], ' ', $value));
        $value = str_replace(' ', '', $value);
        return lcfirst($value);
    }

    /**
     * 蛇形命名转换为大驼峰命名
     * @param string $value
     * @return string
     */
    public static function snakeToUpperCamel(string $value): string
    {
        $value = ucwords(str_replace(['_', '-'], ' ', $value));
        $value = str_replace(' ', '', $value);
        return $value;
    }

    /**
     * 驼峰命名转换为蛇形命名
     * @param string $value
     * @return string
     */
    public static function camelToSnake(string $value): string
    {
        // 以 UTF-8 模式删除空字符
        $value = preg_replace('/\s+/u', '', $value);
        // “?=”为正向预查，在任何开始匹配圆括号内的正则表达式模式的位置来匹配搜索字符串
        // 这里的正则表达式匹配所有大写字符的前一个字符
        $value = strtolower(preg_replace('/(.)(?=[A-Z])/u', "$1_", $value));
        return $value;
    }
}