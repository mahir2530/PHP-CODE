<?php
$number = 12345;
$count = 0;

while ($number != 0) {
    $number = (int)($number / 10);
    $count++;
}

echo "Number of digits in $number is: $count";
