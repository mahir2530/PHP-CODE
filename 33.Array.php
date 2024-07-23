<?php
     echo"=========|Normal Array|============"."<br>";
    $a=array(10,20,30);
    echo $a[2]."<br>";

    echo"=========|Associative Array|============"."<br>";
    $color=array(1=>"Red",2=>"Yellow",3=>"Black",3=>"white");
    echo"=========|var_dump|============"."<br>";
    var_dump($color);
    echo"<br>"."=========|Print_r|============"."<br>";
    print_r($color);
?>
