<?php
namespace App;

class MySql
{
    public $pdo;

    public function __construct()
    {
        $this->pdo = new Db();
    }

    public  function findAll()
    {
        $sql = $this->pdo->BasicQueryString();
        return $this->pdo->query($sql);
    }

    public  function findAllAuthor()
    {
        $sql = 'select * from authors';
        return $this->pdo->query($sql);
    }

    public  function findAllGenre()
    {
        $sql = 'select * from genres';
        return $this->pdo->query($sql);
    }



    public function findByGenre($id)
    {
        $sql = $this->pdo->BasicQueryString();
        $sql .= 'WHERE book_genre.id_genre =' . $id;
        return $this->pdo->query($sql);
    }


    public function findByAuthor($id)
    {
        $sql = $this->pdo->BasicQueryString();
        $sql .= 'WHERE book_auth.id_auth = ' . $id;
        return $this->pdo->query($sql);
    }

    public function search($post)
    {
       $sql = $this->pdo->BasicQueryString();
       if (!$post['search']){
           return $this->pdo->query($sql);
       }
       $sql .= $this->pdo->fullText($post);

       return $this->pdo->query($sql) ?? null;


    }

    private function implode($glue, $arr)
    {
        return implode($glue, $arr);
    }

}

