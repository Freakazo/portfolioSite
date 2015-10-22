<?php

/**
 * Created by PhpStorm.
 * User: freakazo
 * Date: 18/10/15
 * Time: 11:34 PM
 */
class Contact
{
    public function index()
    {
        $css = array('main.css');
        require ROOT . 'views/header.php';
        require ROOT . 'views/contact.php';
        require ROOT . 'views/footer.php';
    }
}