<?php


namespace Core;
use Core\Db;


use Core\interfece\DkMetod;

class MySql implements DkMetod
{

    public static function findAll($name = '*')
    {
        $a = new \Core\Db();

        $sql = 'SELECT' . $name .' FROM books_authors
                JOIN books ON books.id = books_authors.id_book 
                JOIN authors ON authors.id = books_authors.id_author';
        return $a->query($sql, [], '\Core\MySql');
    }





    public static function findOne($id)
    {
        // TODO: Implement findOne() method.
    }

    public static function genres()
    {
        // TODO: Implement genres() method.
    }
}