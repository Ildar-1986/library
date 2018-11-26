<?php


namespace App;


abstract class Controller
{
    protected $views;
    protected $mysql;

    public function __construct()
    {
        $this->view = new View();
        $this->mysql = new MySql();
    }


    abstract public function __invoke();

}