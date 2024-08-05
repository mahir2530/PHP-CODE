<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruit Details</title>
</head>
<body>
<form method="post" >
    Enter Name : <input type="text" name="name" required>
    <br><br>
    <input type="submit" value="Submit">
</form>
<?php

class name {
    public $name;
    

    function __construct($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }

    
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $fruit_name = $_POST['name'];

    $obj = new name($fruit_name);
    
    echo "<h2>Fruit Details</h2>";
    echo "<p>The  name  is : " . $obj->get_name() . "</p>";
   
}
?>


</body>
</html>
