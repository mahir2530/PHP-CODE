<?php
echo "==========|2D Array|==========" . "<br>";
$num = array(array(1, 2, 3), array(4, 5, 6), array(7, 8, 9));
print_r($num) . "<br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $num[$i][$j];
    }
    echo "<br>"; 
}
?>
