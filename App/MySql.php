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
        $sql = 'SELECT * FROM `books_authors`
                JOIN books ON books_authors.book_id = books.id_book
                JOIN authors ON books_authors.author_id = authors.id_author
                JOIN genres ON books_authors.genre_id = genres.id_genre';
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
        $sql = 'SELECT * FROM `books_authors`
                JOIN books ON books_authors.book_id = books.id_book
                JOIN authors ON books_authors.author_id = authors.id_author
                JOIN genres ON books_authors.genre_id = genres.id_genre
                where books_authors.genre_id =' . $id;

        return $this->pdo->query($sql);
    }

    public function findByAuthor($id)
    {
        $sql = 'SELECT * FROM `books_authors`
                JOIN books ON books_authors.book_id = books.id_book
                JOIN authors ON books_authors.author_id = authors.id_author
                JOIN genres ON books_authors.genre_id = genres.id_genre
                where books_authors.author_id =' . $id;

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