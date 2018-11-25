<?php


namespace App\controllers;


use App\Controller;

class Books extends Controller
{

    /**
     *
     */
    public function __invoke()
    {

        $this->view->content = $this->mysql->findAllAuthor();


        echo $this->view->display(__DIR__ . '/../../views/author.php');

    }
}