<?php


namespace App;
//use App\Db;




class MySql
{
    public $pdo;

    public function __construct()
    {
        $this->pdo = new Db();
    }

    public  function findAll($name = '*')
    {
        $sql = 'select * from books_authors 
                join books on books.id_book = books_authors.id_book
                join authors on authors.id_author = books_authors.id_author';
        return $this->pdo->query($sql);
    }

    public  function findAllAuthor()
    {
        $sql = 'select * from authors';

        return $this->pdo->query($sql);
    }


    public function genre()
    {
        $sql = 'SELECT * FROM authors';
        return $this->pdo->query($sql);
    }





    public static function findOne($id)
    {
        $sql = 'SELECT * FROM ';
    }

    public static function genres()
    {
        // TODO: Implement genres() method.
    }
}