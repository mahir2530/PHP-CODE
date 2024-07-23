<!-- Create a PHP program which will create buttons for the following functions -
• sort
• search
• sum
• merge
and print the data accordingly. -->

<?php
echo "<br>" . "=======| SORT |===========================================================" . "<br>";
$array = array(4, 2, 8, 6);
sort($array);
print_r($array); // Outputs: Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 )

echo "<br>" . "=======| SEARCH |===========================================================" . "<br>";
$fruits = array("apple", "banana", "cherry");
$key = array_search("banana", $fruits);

if ($key !== false) {
    echo "Banana found at key: $key";
} else {
    echo "Banana not found.";
}

echo "<br>" . "=======| SUM |=====================================================================" . "<br>";
$array = array(1, 2, 3, 4, 5);
$sum = array_sum($array);
echo "Sum: " . $sum; // Outputs: Sum: 15

echo "<br>" . "=======| MERGE |===========================================================" . "<br>";
$array1 = array("red", "green");
$array2 = array("blue", "yellow");
$result = array_merge($array1, $array2);
print_r($result); // Outputs: Array ( [0] => red [1] => green [2] => blue [3] => yellow )


?>