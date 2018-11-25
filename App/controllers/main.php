<?php


use Core\MySql;
//
//dump($url = explode("/", $_SERVER['REDIRECT_URL']));
if ($_REQUEST)
require __DIR__ . '/../views/author.php';
$mysql = new MySql();
$data = $mysql->genre();

dump($data);




include_once __DIR__ . '/../views/index.php';