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



//The Controller listen
class Controller{

    //Home Page shows all articles

    public function homeController()
    {
        ob_start();
        // Database Connexion.
        $db = DatabaseConnexion::getDatatabaseConnect();

        //Call the Model
        $articleRepo = new ArticleRepository($db);
        $articles = $articleRepo->findAll('Article');

        //Call the Home page view
        include('View/home.phtml');

        // Get current buffer contents and delete current output buffer
        $html = ob_end_flush();
     //  die(var_dump($html));

        return $html;

    }

    //Article Detail
     public function articleController($id)
    {
        ob_start();
        $db = DatabaseConnexion::getDatatabaseConnect();
        $articleRepo = new ArticleRepository($db);
        $article = $articleRepo->find($id, 'Article');

        include('View/article.phtml');
        $html = ob_end_flush();
        return $html;
    }

    //Erreur 404
     public function errorController()
    {
        ob_start();
        include('View/error.phtml');
        $html = ob_end_flush();
        return $html;
    }



}