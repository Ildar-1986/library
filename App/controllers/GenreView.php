<?php


namespace App\controllers;


use App\Controller;

class GenreView extends Controller
{

    public function __invoke()
    {
        $this->view->content = $this->mysql->findByGenre($_GET['id']);
        echo $this->view->display(__DIR__ . '/../../views/genreview.php');
    }
}