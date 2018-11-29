<?php


namespace App\controllers;


use App\Controller;

class Search extends Controller
{


    /**
     *
     */
    public function __invoke()
    {

        $this->view->content = $this->mysql->search($_POST);
       echo $this->view->display(__DIR__ . '/../../views/scan.php');
    }

//    public function error($arr = []){
//
//        if ('name_author' == $arr['author'] &&  'name_genre' == $arr['genre'] && !$arr['search']) {
//            $ee['mysql'] = findAll();
//            $ee ['view'] = $this->view->display(__DIR__ . '/../../views/index.php');
//            return $ee;
//
//        }elseif('name_author' == $arr['author'] &&  'name_genre' == !$arr['genre'] && !$arr['search']){
//            $ee['mysql'] = findAllAuthor();
//            $ee ['view'] = $this->view->display(__DIR__ . '/../../views/author.php');
//            return $ee;
//
//        }elseif(!'name_author' == $arr['author'] &&  'name_genre' == $arr['genre'] && !$arr['search']){
//            $ee['mysql'] = findAllGenre();
//            $ee ['view'] = $this->view->display(__DIR__ . '/../../views/genre.php');
//            return $ee;
//
//        }elseif ('name_author' == $arr['author'] &&  'name_genre' == $arr['genre'] && $arr['search']){
//            $ee['mysql'] = search();
//            $ee ['view'] = $this->view->display(__DIR__ . '/../../views/scan.php');
//            return $ee;
//
//        }elseif ('name_author' == !$arr['author'] &&  'name_genre' == $arr['genre'] && $arr['search']){
//            $ee['mysql'] = search();
//            $ee ['view'] = $this->view->display(__DIR__ . '/../../views/genre.php');
//            return $ee;
//
//        }elseif ('name_author' == $arr['author'] &&  'name_genre' == !$arr['genre'] && $arr['search']){
//            $ee['mysql'] = search();
//            $ee ['view'] = $this->view->display(__DIR__ . '/../../views/author.php');
//            return $ee;
//        }

//    }



}