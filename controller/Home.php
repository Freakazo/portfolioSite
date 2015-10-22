<?php
class Home {

    public function index()
    {
        $css = array('main.css');
        $js = array('jquery-1.11.3.js', 'home.js');
        require ROOT . 'views/header.php';
        require ROOT . 'views/home.php';
        require ROOT . 'views/footer.php';
    }

}