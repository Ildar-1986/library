
<?php



use App\MySql;

include __DIR__ . '/../local/helper.php';

require_once __DIR__ . '/../vendor/autoload.php';


$path = $_SERVER['REQUEST_URI'];
$res = explode('/', $path);



$controller = $res[1] ?: 'Index';
$class = '\App\controllers\\' . $controller;

$controller = new $class();
$controller();0










