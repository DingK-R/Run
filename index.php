<?php
define('DS', DIRECTORY_SEPARATOR);
define('APP', dirname(__FILE__));
define('EXT', '.php');
/**
 * 加载错误信息
 */
/*
require __DIR__.'/php_error.php';
\php_error\reportErrors();
//*/
/**
 * 加载composer
 */
if (file_exists(APP.'/vendor')) {
    require __DIR__.'/vendor/autoload.php';
}
require APP.DS.'libs'.DS.'Bootstrap'.EXT;
// Controller\Test::a();
// echo '<pre>';
// var_dump($_SERVER);
