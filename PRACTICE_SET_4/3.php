<?php

// Initialize an associative array to store movie ratings
$Ratings = [
    "KGF" => 9,
    "BAHUBALI" => 8,
    "AVANGERS" => 10,
    "DC" => 10
];

echo "<h2>Initial Movie Ratings:</h2>";
echo "<ul>";
foreach ($Ratings as $movie => $rating) {
    echo "<li>$movie: $rating</li>";
}
echo "</ul>";

?>
