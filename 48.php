<!-- Array Function -->

<?php
echo "=======| SUM |==================================================================" . "<br>";
$array = array(1, 2, 3, 4, 5);
$sum = array_sum($array);
echo "Sum: " . $sum; // Outputs: Sum: 15

echo "<br>" . "=======| SORT |==========================================================" . "<br>";
$array = array(4, 2, 8, 6);
sort($array);
print_r($array); // Outputs: Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 )


echo "<br>" . "=======| REVERSED_SORT |==================================================" . "<br>";
$array = array(4, 2, 8, 6);
rsort($array);
print_r($array); // Outputs: Array ( [0] => 8 [1] => 6 [2] => 4 [3] => 2 )


echo "<br>" . "=======| MERGE |===========================================================" . "<br>";
$array1 = array("red", "green");
$array2 = array("blue", "yellow");
$result = array_merge($array1, $array2);
print_r($result); // Outputs: Array ( [0] => red [1] => green [2] => blue [3] => yellow )

echo "<br>" . "=======| CHUNK |============================================================" . "<br>";
$array = array("a", "b", "c", "d", "e", "f");
$chunked_array = array_chunk($array, 2);
print_r($chunked_array);
// Outputs: Array ( [0] => Array ( [0] => a [1] => b ) [1] => Array ( [0] => c [1] => d ) [2] => Array ( [0] => e ) )

echo "<br>" . "=======| PUSH |=============================================================" . "<br>";
echo "Before push : <br>";
$array = array("red", "green");
print_r($array);
array_push($array, "blue", "yellow");
echo "<br>" . "After push : <br>";
print_r($array); // Outputs: Array ( [0] => red [1] => green [2] => blue [3] => yellow )


echo "<br>" . "=======| POP |===============================================================" . "<br>";
echo "Before pop : <br>";
$array = array("red", "green", "yellow", "blue");
print_r($array);
array_pop($array);
echo "<br>" . "After pop : <br>";
print_r($array); // Outputs: Array ( [0] => red [1] => green [2] => yellow )

echo "<br>" . "=======| SHUFFLE |===============================================================" . "<br>";
$array = array(1, 2, 3, 4, 5);
shuffle($array);
print_r($array); // Outputs: Array ( [0] => 3 [1] => 1 [2] => 4 [3] => 5 [4] => 2 ) // Random order



?>