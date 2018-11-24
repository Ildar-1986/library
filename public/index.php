

<?php

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
];

$pdo = new PDO('mysql:host=localhost;dbname=library', 'local', '6', $options);


if ($pdo){
    echo  'success <br>';
}
else{
    echo 'error';
}


if (@$_POST['sql']) {

//echo '<br>' . "'{$a}'" .'<br>';
    $sth = $pdo->query(@$_POST['sql']);
    $res = $sth->fetchAll();

    echo '<pre> '. print_r($res, true) .'</pre>';

}



?>

<form action="" method="post">
    <textarea name="sql" id="" cols="100" rows="20"></textarea>
    <button type="submit">Отправить</button>
</form>


SELECT books.name FROM auth_book
JOIN books ON books.id = auth_book.books_id
JOIN auth ON auth.id = auth_book.auth_id
WHERE auth_book.auth_id =