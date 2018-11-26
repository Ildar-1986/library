
<?php
//
//$options = [
//    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
//];
//
//$pdo = new PDO('mysql:host=localhost;dbname=library', 'local', '6', $options);
//
//
//if ($pdo){
//    echo  'success <br>';
//}
//else{
//    echo 'error';
//}
//
//
//if (@$_POST['sql']) {
//
////echo '<br>' . "'{$a}'" .'<br>';
//    $sth = $pdo->query(@$_POST['sql']);
//    $res = $sth->fetchAll();
//
//    echo '<pre> '. print_r($res, true) .'</pre>';
//
//}


use App\MySql;

include __DIR__ . '/../local/helper.php';

require_once __DIR__ . '/../vendor/autoload.php';


$path = $_SERVER['REQUEST_URI'];
$res = explode('/', $path);



$controller = $res[1] ?: 'Index';
$class = '\App\controllers\\' . $controller;

$controller = new $class();
$controller();










