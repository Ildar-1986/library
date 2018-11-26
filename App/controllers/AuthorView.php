<?php


namespace App\controllers;


use App\Controller;

class AuthorView extends Controller
{

    public function __invoke()
    {
        $this->view->content = $this->mysql->findByAuthor($_GET['id']);
        echo $this->view->render(__DIR__ . '/../../views/authorview.php');
    }
}