<!doctype html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style type="text/css">
    .spoiler_body {display:none;}
    .spoiler_links {cursor:pointer;}
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <a class="navbar-brand" href="/">Библиотека</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a style="color: white" class="nav-link" href="">Жанры</a>
            </li>
            <li class="nav-item">
                <a style="color: white" class="nav-link" href="/?controller=Books">Авторы</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input type="checkbox">
            <input type="checkbox">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
        </form>
    </div>
</nav>
<br>

<br>
<br>

<div class="container">







<div class="card-columns">
<?php
//var_dump($content['img_book']);die;
foreach ($this->content as $content):
?>
    <br>

    <div class="card">
        <img class="card-img-top" src="<?= $content['img_book'] ?>" alt="Card image cap">

        <div class="card-body">
            <h5 class="card-title"><?= $content['book_name'] ?></h5>
            <p class="card-text"><?= $content['description'] ?></p>
        </div>
        <div class="card-footer">


            <div>
                <a href="#" class="spoiler_links">Спойлер</a>
                <div class="spoiler_body">
                    Текст под спойлером<br>
                    плавно появляется<br>
                    и плавно исчезает<br>
                    при клике по спойлеру
                </div>
            </div>
<!--            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">-->
<!--                Больше информации-->
<!--            </a>-->
<!--            <div class="collapse" id="collapseExample">-->
<!--                <div class="card card-block">-->
<!--                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>

<?php endforeach; ?>
</div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('.spoiler_links').click(function(){
            $(this).parent().children('div.spoiler_body').toggle('normal');
            return false;
        });
    });
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
<?php
