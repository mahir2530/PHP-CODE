<?php
print "<pre>";

$n = array('cow' => 1, 'lion' => 5, 'tiger' => 3, 'dog' => 2);
echo "Original array:\n";
print_r($n);

echo "\nNormal sort:\n";
sort($n);
print_r($n);

echo "\nReverse Normal sort:\n";
rsort($n);
print_r($n);

echo "\nAsort (associative sort):\n";
asort($n);
print_r($n);

echo "\nArsort (associative reverse sort):\n";
arsort($n);
print_r($n);

echo "\nKsort (key sort):\n";
ksort($n);
print_r($n);

echo "\nKrsort (key reverse sort):\n";
krsort($n);
print_r($n);
