<?php

//Get the URL
#if(isset $url)
$url =  $_SERVER['REQUEST_URI'];
define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
define('WEBROOT', 'http://' . $_SERVER['HTTP_HOST'] . DIRECTORY_SEPARATOR);

if($url == '/' || $url == '/index.php') {
    //Display the homepage
    require ROOT . 'controller/Home.php';
    $app = new Home();
    $app->index();
} else if($url=='/projects' || $url=='/projects/') {
    require ROOT . 'controller/Projects.php';
    $app = new Projects();
    $app->index();
} else if($url=='/contact/') {
    require ROOT . 'controller/Contact.php';
    $app = new Contact();
    $app->index();
} else {
    echo $url;
}
?>