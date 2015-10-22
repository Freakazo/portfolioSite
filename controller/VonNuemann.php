<?php

/**
 * Created by PhpStorm.
 * User: freakazo
 * Date: 18/10/15
 * Time: 1:16 PM
 */
class VonNuemann
{
    public function index()
    {
        //Define the css files to include
        $css = array('main.css', 'project.css');

        require ROOT . 'views/header.php';
        require ROOT . 'views/projects.php';
        require ROOT . 'views/footer.php';
    }

    public function embed()
    {
        require ROOT . 'views/vonNueman.php';
    }

    public function getCSS() {
        $css = array('CPU/main.css');
        return $css;
    }

    public function getJS() {
        return array('CPU/vendor/raphael-min.js', 'CPU/Register.js', 'CPU/InstructionRegister.js', 'CPU/main.js',
            'CPU/ALU.js', 'CPU/ControlUnit.js', 'CPU/SystemBus.js', 'CPU/Memory.js', 'CPU/RegisterFile.js',
            'CPU/ProgramCounter.js', 'CPU/CPU.js', 'CPU/Display.js');

    }


}