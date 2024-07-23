<?php

$Books = [
    "Where the Crawdads Sing" => 9,
    "Becoming" => 8,
    "The Silent Patient" => 10,
    "The Night Circus" => 10
];

echo "<h2>Initial Movie Ratings:</h2>";
echo "<ul>";
foreach ($Books as $Book => $rating) {
    echo "<li>$Book: $rating</li>";
}
echo "</ul>";

?>
