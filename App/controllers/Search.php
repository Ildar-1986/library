<?php


namespace App\controllers;


use App\Controller;

class Search extends Controller
{


    public function __invoke()
    {
        dump($_POST);
    }
}