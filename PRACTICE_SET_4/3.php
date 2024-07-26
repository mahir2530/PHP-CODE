<?php
$Movies = [
    "KGF" => [
        "rating" => 9,
        "genre" => "Action",
        "year" => 2022,
        "director" => "Prashanth Neel"
    ],
    "BAHUBALI" => [
        "rating" => 8,
        "genre" => "Historical Fiction",
        "year" => 2015,
        "director" => "S.S. Rajamouli"
    ],
    "AVENGERS" => [
        "rating" => 10,
        "genre" => "Superhero",
        "year" => 2012,
        "director" => "Joss Whedon"
    ],
    "DC" => [
        "rating" => 10,
        "genre" => "Superhero",
        "year" => 2013,
        "director" => "Zack Snyder"
    ]
];

echo "<h2>Movie Details:</h2>";
echo "<ul>";
foreach ($Movies as $movie => $details) {
    echo "<li>$movie:</li>";
    echo "<ul>";
    foreach ($details as $key => $value) {
        echo "<li>$key: $value</li>";
    }
    echo "</ul>";
}
echo "</ul>";
?>
