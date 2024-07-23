<?php
$num1 = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(13, 14, 15)
);
$num2 = array(
    array(7, 8, 9),
    array(10, 11, 12),
    array(16, 17, 18)
);

$sum = array();
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $sum[$i][$j] = $num1[$i][$j] + $num2[$i][$j];
        echo "The sum of array elements at position [$i][$j] is: " . $sum[$i][$j] . "<br>";
    }
    echo"<br>";
}

echo "Summed Array:<br>";
foreach ($sum as $row) {
    foreach ($row as $val) {
        echo "$val ";
    }
    echo "<br>";
}
?>
