<?php


namespace App\controllers;


use App\Controller;

/**
 * Class Index
 * @package App\controllers
 */
class Index extends Controller
{


    public function __invoke()
    {

        $this->view->contents = $this->mysql->findAll();
        /** @var TYPE_NAME $this */
        echo $this->view->display(__DIR__ . '/../../views/index.php');
    }

    public function index()
    {
        $this->view->contents = $this->mysql->findAll();
        /** @var TYPE_NAME $this */
        echo $this->view->display(__DIR__ . '/../../views/index.php');
    }



}