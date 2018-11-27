<!doctype html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--    <link rel="stylesheet" href="/front/css/bootstrap.min.css">-->
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style type="text/css">
    .spoiler_body {
        display: none;
    }

    .spoiler_links {
        cursor: pointer;
    }
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
    <a class="navbar-brand" href="/">Библиотека</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a style="color: white" class="nav-link" href="/Genre">Жанры</a>
            </li>
            <li class="nav-item">
                <a style="color: white" class="nav-link" href="/Author">Авторы</a>
            </li>
        </ul>

        <form class="form-inline my-2 my-lg-0" method="post" action="Search/">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="asd" name="ganre" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    По жанрам
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="qwe" name="author" id="defaultCheck2">
                <label class="form-check-label" for="defaultCheck2">
                    По авторам
                </label>
                <input class="form-control mr-sm-2" type="search" placeholder="Search" value="asdf" name="id"
                       aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
        </form>
    </div>
</nav>

<div class="container">
    <div class="card-columns" style="margin-top: 200px">


