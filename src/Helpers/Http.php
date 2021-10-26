<?php

namespace App\Helpers;

class Http
{
    /**
     * 允许跨域访问
     * @param string $origin 允许访问的域名
     */
    public static function allowCrossDomainAccess($origin = '*')
    {
        header("Access-Control-Allow-Origin: $origin");
        header('Access-Control-Allow-Methods: OPTIONS, GET, POST');
        header('Access-Control-Allow-Headers: x-requested-with, content-type');
    }

    /**
     * 获取 POST 参数（在 content_type 为 application/json 时，自动解析 json）
     * @param $contentType
     * @return array
     */
    public static function postParams($contentType)
    {
        $post = $_POST;

        if (empty($post) && false !== strpos($contentType, 'application/json')) {
            $content = file_get_contents('php://input');
            $post = (array)json_decode($content, true);
        }

        return $post;
    }

    /**
     * 拼接 URL 查询参数
     * @param $params
     * @return string
     */
    public static function buildQueryString($params)
    {
        $out = array();
        foreach ($params as $key => $value) {
            $out[] = $key . "=" . urlencode($value);
        }

        return implode("&", $out);
    }
}