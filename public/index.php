<!doctype html>
<html lang="en">
<head>
    <script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>




<textarea id="textField" name="text"></textarea> <br/>
<input type="button" id="btn" value="Go"/>

<script>
    $.ajax({
        url: '/test.php',
        method: 'POST',
        data: {text: textValue}
    });
</script>


<?php
/*
session_start();


use App\MySql;

include __DIR__ . '/../local/helper.php';

require_once __DIR__ . '/../vendor/autoload.php';


$path = $_SERVER['REQUEST_URI'];
$res = explode('/', $path);

$main = new \App\controllers\Main();
$main();

$controller = $res[1] ?: 'Index';
$class = '\App\controllers\\' . $controller;

$controller = new $class();
$controller();
$main->footer();










