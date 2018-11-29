<?php


namespace App\controllers;


use App\Controller;

class Genre extends Controller
{



    public function __invoke()
    {
        $this->view->content = $this->mysql->findAllGenre();


        echo $this->view->display(__DIR__ . '/../../views/genre.php');
    }
}