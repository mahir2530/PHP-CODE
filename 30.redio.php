<?php
    $a=$_POST['bank'];
    if (empty($a)) {
        echo"You didn't selected  ";
    }
    else{
        echo"you selected : ".$a;
    }
?>
