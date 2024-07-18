<?php
    $a=$_POST['formdoor'];
    if(empty($a))
    {
        echo "you did't select any building.";
    }
    else
    {
        $N = count($a);
        echo "you selected $N door(s) :"." ";
        for ($i=0; $i <$N ; $i++) { 
            echo($a[$i]. "      ");
        }
    }
?>
