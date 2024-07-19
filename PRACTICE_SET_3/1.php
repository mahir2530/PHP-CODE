<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form method="POST">
        Enter length: <input type="number" name="length">
        Enter width: <input type="number" name="width">
        <input type="submit" name="submit" value="Check">
    </form>
    <?php
    class Rectangle {
        public $length;
        public $width;

        function setValue($length, $width) {
            $this->length = $length;
            $this->width = $width;
        }
        function area() {
            return $this->length * $this->width;
        }
        function perimeter() {
            return 2 * ($this->length + $this->width);
        }
    }
    if (isset($_POST['submit'])) {
        $length = $_POST['length'];
        $width = $_POST['width'];
        
        $rectangle = new Rectangle();
        $rectangle->setValue($length, $width);
        
        echo "The area of the rectangle is: " . $rectangle->area() . "<br>";
        echo "The perimeter of the rectangle is: " . $rectangle->perimeter() . "<br>";
    }
    ?>
</body>
</html>
