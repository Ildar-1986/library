<?php


namespace App\controllers;


use App\Controller;

class Main extends Controller
{


    public function __invoke()
    {

       echo $this->view->display(__DIR__ . '/../../views/main.php');
    }

    public function footer()
    {
        echo $this->view->display(__DIR__ . '/../../views/footer.php');
    }



}