<?php

namespace Core;

class Db
{
    public $pdo;

    public function __construct()
    {
        $options = [
           \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
           \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
           \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        ];

        $this->pdo = new \PDO('mysql:host=localhost;dbname=baba;', 'local', '6', $options );
    }

    public function query($sql, $data = [], $class)
    {
        $sth = $this->pdo->prepare($sql);
        $sth->execute($data);
        return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
    }

}