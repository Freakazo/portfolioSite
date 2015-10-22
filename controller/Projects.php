<?php

/**
 * Created by PhpStorm.
 * User: freakazo
 * Date: 18/10/15
 * Time: 12:26 AM
 */
class Projects
{
    public function index()
    {
        //Define the css files to include
        $css = array('main.css', 'project.css');
        $js = array('jquery-1.11.3.js');

        require ROOT . 'controller/VonNuemann.php';

        $cpuSim = new VonNuemann();
        $css = array_merge($css, $cpuSim->getCSS());
        $js = array_merge($js, $cpuSim->getJS());

        require ROOT . 'views/header.php';
        require ROOT . 'views/projects.php';
        require ROOT . 'views/footer.php';
    }
}