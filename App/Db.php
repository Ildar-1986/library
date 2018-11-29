<?php

namespace App;

class Db
{
    public $pdo;

    public function __construct()
    {
        $dsn = (include __DIR__ . '/../config/db.php')['dsn'];
        $options = [
           \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
           \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
           \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        ];
try {
    $this->pdo = new \PDO('mysql:host=' . $dsn['host'] . ';dbname=' . $dsn['dbname'],
        $dsn['user'], $dsn['password'], $options);
//        $this->pdo = new \PDO('mysql:host=localhost;dbname=test;', 'root', '', $options );
}catch (\PDOException $exception){
    echo 'Подключение не удалось: ' . $exception->getMessage();
}
    }

    public function query($sql)
    {
        $sth = $this->pdo->prepare($sql);
        $sth->execute();
//        $sth->fetchAll(\PDO::FETCH_ASSOC);
        if ($sth){
            return $sth->fetchAll(\PDO::FETCH_ASSOC);
        }echo 'Что-то пошло не так';
    }

    public  function BasicQueryString()
    {
        return 'SELECT DISTINCT books.id as id_book, books.name_book, books.description, books.img,
                authors.id AS id_author, authors.name_author, genres.id_genre, genres.name_genre 
                FROM book_auth 
                JOIN authors ON authors.id = book_auth.id_auth 
                JOIN books ON books.id = book_auth.id_book 
                JOIN book_genre 
                JOIN books AS book ON books.id = book_genre.id_book 
                JOIN genres ON genres.id_genre = book_genre.id_genre ';
    }

    public function fullText($post = []){
        return "
        WHERE
                MATCH (name_author) AGAINST ('$post[search]') OR
                 MATCH (name_genre) AGAINST ('$post[search]') OR
                  MATCH (book.name_book) AGAINST ('$post[search]')";
    }

}