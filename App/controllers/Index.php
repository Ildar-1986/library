<?php


namespace App\controllers;


use App\Controller;

class Index extends Controller
{


    public function __invoke()
    {
        $this->view->content = $this->mysql->findAll();
        /** @var TYPE_NAME $this */
        echo $this->view->display(__DIR__ . '/../../views/index.php');
    }

}