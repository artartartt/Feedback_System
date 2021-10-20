<?php

require 'application/lib/Dev.php';

use application\core\Router;

define('ROOT', '/php-framework-master/');


spl_autoload_register(function($class) {
    $path = str_replace('\\', '/', $class.'.php');
    if (file_exists($path)) {
        require $path;
    }
});
var_daamp('test');
session_start();

$router = new Router;
$router->run();