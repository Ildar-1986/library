<?php


namespace App\controllers;


use App\Controller;

class Main extends Controller
{


    public  function __invoke()
    {
     /*$_SESSION['author'] = (int) isset($_POST['author']);
     $_SESSION['genre'] = (int) isset($_POST['genre']);
     $_SESSION['book'] = (int) isset($_POST['book']);
     $this->view->checkbox = [
    'author' => (isset($_SESSION['author']) && $_SESSION['author'] == 1 ? true : false),
    'genre' => (isset($_SESSION['genre']) && $_SESSION['genre'] == 1 ? true : false),
    'book' => (isset($_SESSION['book']) && $_SESSION['book'] == 1 ? true : false)];*/


       echo $this->view->display(__DIR__ . '/../../views/main.php');
    }

    public function footer()
    {
        echo $this->view->display(__DIR__ . '/../../views/footer.php');
    }



}