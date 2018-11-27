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

    public  function findAll()
    {
        $sql = 'select DISTINCT books.id as id_book, books.name_book,  books.description, books.img, authors.id as id_author, authors.name_author, genres.id_genre, genres.name_genre from  book_auth
                join authors on authors.id = book_auth.id_auth
                join books on books.id = book_auth.id_book
                join book_genre
                join books AS books_ganre on books.id = book_genre.id_book
                join genres on genres.id_genre = book_genre.id_genre';
                        return $this->pdo->query($sql);
    }

    public  function findAllAuthor()
    {
        $sql = 'select id as id_author, name_author from authors';

        return $this->pdo->query($sql);
    }

    public  function findAllGenre()
    {
        $sql = 'select * from genres';

        return $this->pdo->query($sql);
    }



    public function findByGenre($id)
    {
        $sql = 'select DISTINCT books.id as id_book, books.name_book,  books.description, books.img, authors.id as id_author, authors.name_author, genres.id_genre, genres.name_genre from  book_auth
                join authors on authors.id = book_auth.id_auth
                join books on books.id = book_auth.id_book
                join book_genre
                join books AS books_ganre on books.id = book_genre.id_book
                join genres on genres.id_genre = book_genre.id_genre
                WHERE book_genre.id_genre =' . $id;

        return $this->pdo->query($sql);
    }


    public function findByAuthor($id)
    {
        $sql = 'select DISTINCT books.id as id_book, books.name_book,  books.description, books.img, authors.id as id_author, authors.name_author, genres.id_genre, genres.name_genre from  book_auth
                join authors on authors.id = book_auth.id_auth
                join books on books.id = book_auth.id_book
                join book_genre
                join books AS books_ganre on books.id = book_genre.id_book
                join genres on genres.id_genre = book_genre.id_genre
               WHERE book_auth.id_auth = ' . $id;

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