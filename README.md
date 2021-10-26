# php-util

PHP 常用工具类/方法实现

[TOC]

## 环境准备

- PHP 7+
- Composer

## 目录结构

- src/Helpers/Log.php 基于 Monolog 封装的日志

  安装扩展：

  ```bash
  $ composer require monolog/monolog
  ```

  使用说明：

  ```php
  Log::info('这是日志内容');
  // 调用前，引入 use common\log\Log;
  // Log 是基于 Monolog 封装日志类
  // info 是写入日志的静态方法，也是日志保存的文件名，可以自定义，如果与日志级别相同，可以省略第三个参数（levelName）
  // 第二个参数是数组
  
  Log::test('这是日志内容'); // 报错
  Log::test('这是日志内容', [], 'info'); // 写入 info 级别的日志
  ```

- 

## 方法说明

- `Arr::mutiDiff()` 计算多维数组差集

  ```php
  $arr1 = [['Red', 80], ['Green', 70], ['white', 60]];
  $arr2 = [['Green', 70], ['Black', 95]];
  
  $arr = Arr::multiDiff($arr1, $arr2);
  
  print_r($arr);
  ```

  结果：

  ```php
  Array
  (
      [0] => Array
          (
              [0] => Red
              [1] => 80
          )
  
      [2] => Array
          (
              [0] => white
              [1] => 60
          )
  
  )
  ```

- 
