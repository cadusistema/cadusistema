<?php
/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 12/07/2016
 * Time: 16:11
 */
?>
<html>
    <?php foreach ($teste as $a) {
        echo "id:" . $a->id."<br>";
        echo "usuario:" . $a->usuario."<br>";
        echo "senha:" . $a->senha."<br><br>";
    }
    ?>
</html>