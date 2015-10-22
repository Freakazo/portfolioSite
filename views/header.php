<?php
/**
 * Created by PhpStorm.
 * User: freakazo
 * Date: 14/10/15
 * Time: 11:42 PM
 */
?>
<head>
    <?php
    if(isset($css)) {
        foreach($css as $req) {
            echo '<link href="' . WEBROOT . 'css/' . $req . '" rel="stylesheet">';
        }
    }
    ?>
</head>
<div class="header">
    <div class="menuRow">
        <ul>
            <li>
                <a href="/index.php">Home</a>
            </li>
            <li>
                <a href="/projects/">Projects</a>
            </li>
            <li>
                <a href="/contact/">Contact</a>
            </li>
        </ul>
    </div>
</div>
