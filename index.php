<?php
/**
 * Created by PhpStorm.
 * User: smainemilianni
 * Date: 04/07/2017
 * Time: 20:57
 */

//Display all erros
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include ('Controller/Controller.php');

$controller = new Controller();
if(empty($_SERVER['QUERY_STRING']))
{
    $controller->homeController();
}
elseif (isset($_GET['article']))
{
    $controller->articleController($_GET['article']);
}
else{

    $controller->errorController();
}