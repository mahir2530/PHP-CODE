<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <h2>Vehicle</h2>
        Enter brand: <input type="text" name="brand">
        Enter model: <input type="text" name="model">
        Enter year: <input type="number" name="year">
        <input type="submit" name="submitVehicle" value="Check Vehicle">
    </form>

    <?php

    class Vehicle {
        public $brand;
        public $model;
        public $year;

        function setValue($brand, $model, $year) {
            $this->brand = $brand;
            $this->model = $model;
            $this->year = $year;
        }
        function display() {
            echo "Brand: " . $this->brand . "<br>";
            echo "Model: " . $this->model . "<br>";
            echo "Year: " . $this->year . "<br>";
        }
    }

    if (isset($_POST['submitVehicle'])) {
        $brand = $_POST['brand'];
        $model = $_POST['model'];
        $year = $_POST['year'];

        $vehicle = new Vehicle();
        $vehicle->setValue($brand, $model, $year);

        echo "<h2>Vehicle</h2>";
        $vehicle->display();
    }
    ?>
</body>
</html>
