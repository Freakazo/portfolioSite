<?php
/**
 * Created by PhpStorm.
 * User: freakazo
 * Date: 16/10/15
 * Time: 9:56 PM
 */

if(isset($js)) {
    foreach($js as $file) {
        echo '<script src="' . WEBROOT . 'js/' . $file . '"></script>';
    }
}
?>
</body>


