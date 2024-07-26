<?php
$name = $_REQUEST['name'];
$pwd = $_REQUEST['pwd'];
$gender = $_REQUEST['gender'];
$continent = $_REQUEST['continent'];
$meals = $_REQUEST['meals'];

if (isset($_REQUEST['Submit'])) {
    echo "Name: " . $name . "<br>";
    echo "Password: " . $pwd . "<br>";
    echo "Gender: " . $gender . "<br>";
    echo "Continent: " . $continent . "<br>";

    if (!empty($meals)) {
        echo "You selected meal(s): ";
        foreach ($meals as $meal) {
            echo $meal . " ";
        }
    } else {
        echo "You selected no meals.";
    }
}
?>
