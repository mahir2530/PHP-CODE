<?php

$data = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");

// a) Ascending order sort by value
echo "Ascending order by value: "."<br>";
asort($data);
print_r($data);

echo "<br>"; 

// b) Ascending order sort by key
echo "<br>"."Ascending order by key: "."<br>";
ksort($data);
print_r($data);

echo "<br>"; 

// c) Descending order sorting by value
echo "<br>"."Descending order by value: "."<br>";
arsort($data);
print_r($data);

echo "<br>";

// d) Descending order sorting by key
echo "<br>"."Descending order by key: "."<br>";
krsort($data);
print_r($data);
?>
