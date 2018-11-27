<?php


namespace App\controllers;


use App\Controller;

class Search extends Controller
{


    public function __invoke()
    {
//            dump($_POST);
        $this->view->content = $this->mysql->search
        (@$_POST['author'], @$_POST['book'], @$_POST['genre'], @$_POST['search']);
       echo $this->view->display(__DIR__ . '/../../views/scan.php');
    }



}