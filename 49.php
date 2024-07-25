<?php

$input = array(
    'color' => array("red", 'blue'),
    'fruit' => array('a' => 'apple', 'b' => 'banana')
);

// Display color
echo "<h1>Colors</h1>";
echo "First color: " . $input['color'][0]; 
echo "<br>";
echo "Second color: " . $input['color'][1]; 
echo "<br>";

// Display fruit
echo "<h1>Fruits</h1>";
echo "Fruit : " . $input['fruit']['a']; 
echo "<br>";
echo "Fruit : " . $input['fruit']['b']; 
echo "<br>";

// Using Foreach Loop to display all values
echo "<h1>Using Foreach Loop</h1>";
foreach ($input as $category => $items) {
    echo "<h2>" . ucfirst($category) . "</h2>"; 
    foreach ($items as $key => $value) {
        echo " - " . $value; 
        echo "<br>";
    }
}
?>
