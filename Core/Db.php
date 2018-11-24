<?php


class Db
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new \PDO('mysql:host=localhost;dbname=baba;', 'local', '6');
    }

}