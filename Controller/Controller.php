<?php
/**
 * Created by PhpStorm.
 * User: smainemilianni
 * Date: 04/07/2017
 * Time: 20:54
 */

require ('Model/Article.php');
require ('Model/ArticleRepository.php');
require ('Model/DatabaseConnexion.php');

class Controller{

    public function homeController()
    {
        $db = DatabaseConnexion::getDatatabaseConnect();
        $articleRepo = new ArticleRepository($db);
        $articles = $articleRepo->findAll('Article');
        return include('View/home.phtml');

    }

     public function articleController($id)
    {

        $db = DatabaseConnexion::getDatatabaseConnect();
        $articleRepo = new ArticleRepository($db);
        $article = $articleRepo->find($id, 'Article');
        return include('View/article.phtml');

    }

     public function errorController()
    {
        return ('View/error.phtml');
    }



}