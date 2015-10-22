<?php
/**
 * Created by PhpStorm.
 * User: freakazo
 * Date: 18/10/15
 * Time: 12:26 AM
 */
?>

<div class="content" xmlns="http://www.w3.org/1999/html">
    <div class="contentTitle">
        <div class="name">
            <h2>Projects</h2>
        </div>
    </div>
    <div class="lawler">
        <div class="projectTitle">
            <h3>Lawler Financial Services Website</h3>
            <p><b>Designed and developed the Lawler FS website on a contract basis. The website frontend extensively uses Bootstrap.</b></p>
        </div>
        <div class="lawlerScreenshots contentRow">
            <div class="showcase contentColumn">
                <img src="/images/lawler_edit.png">
            </div>
            <div class="about contentColumn">
                <p> Full integration with Concrete5 CMS, allowing client to manage content in an intuitive manner.</p>
            </div>
        </div>
        <div class="lawlerScreenshots contentRow right">
            <div class="about contentColumn">
                <p> Site is mobile friendly with a responsive layout.</p>
            </div>
            <div class="showcase contentColumn">
                <img src="/images/lawler_responsive.png">
            </div>
        </div>
        <div class="logos">
            <div class="logo">
                <img src="/images/Boostrap_logo.png">
                <p><b>Uses bootstrap</b></p>
            </div>
            <div class="logo">
                <img src="/images/JQuery_logo.svg">
                <p><b>jQuery</b></p>
            </div>
            <div class="logo">
                <img src="/images/concrete5_Logo_DarkBG.png">
                <p><b>Concrete 5 CMS</b></p>
            </div>
            <div class="logo">
                <a href="https://github.com/Freakazo/lawler">
                    <img src="/images/github-mark.png">
                    <p><b>View Code</b></p>
                </a>
            </div>
        </div>
        <div class="visitWrapper">
            <a class="btn" href="/lawler/">Visit LawlerFS</a>
        </div>

    </div>


    <div class="CPU">
        <div class="projectTitle">
            <h3>Von Neumann CPU architecture simulator</h3>
            <p><b>A CPU simulator implemented in javascript, based on the Von Neumann CPU architecture and AVR instruction set.</b></p>
        </div>

        <?php $cpuSim->embed(); ?>

        <div class="visitWrapper">
            <button id="step-btn" class="btn">Step CPU</button>
        </div>
        <div class="logos">
            <div class="logo">
                <img src="/images/SVG_logo.png">
                <p><b>SVG for CPU visualization</b></p>
            </div>
            <div class="logo">
                <img src="/images/js.png">
                <p><b>Pure Javascript for simulation</b></p>
            </div>
            <div class="logo">
                <a href="https://github.com/Freakazo/VonNeumann">
                    <img src="/images/github-mark.png">
                    <p><b>View Code</b></p>
                </a>
            </div>
        </div>
    </div>

    <div class="racestats">
        <div class="projectTitle">
            <h3>Racestats</h3>
            <p><b>A web application for predicting the results of a horse race.</b></p>
        </div>
    </div>

</div>
