<?php
$color=array('red','black','white','blue');
print"<pre>";
print_r ($color);
print"<pre>";
$number=array(
    'cow'=>1 ,'lion'=>5,'tiger'=>3,'dog'=>2 );
    print "<pre>";
    print_r ($number);
    print "<pre>";

    echo"simple sort";
    sort($number);
    print_r ($number);

    echo"Reversed sort";
    rsort($number);
    print_r ($number);

    echo"assosiative order sorting";
    asort($number);
    print_r ($number);

    echo"assosiative descending order sorting";
    arsort($number);
    print_r ($number);

    echo "ksort = keywise sorting";
    ksort($number);
    print_r ($number);

    echo"krsort = keywise descending order sorting";
    krsort($number);
    print_r($number);

    

?>