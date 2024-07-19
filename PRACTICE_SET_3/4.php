<?php

class Maths {

    public static function add($a, $b) {
        return $a + $b;
    }

    
    public static function subtract($a, $b) {
        return $a - $b;
    }

        public static function multiply($a, $b) {
        return $a * $b;
    }

    
    public static function divide($a, $b) {
        if ($b != 0) {
            return $a / $b;
        } else {
            return "Division by zero is not allowed.";
        }
    }
}

echo "Addition: " . Maths::add(10, 5) . "<br>";
echo "Subtraction: " . Maths::subtract(10, 5) . "<br>";
echo "Multiplication: " . Maths::multiply(10, 5) . "<br>";
echo "Division: " . Maths::divide(10, 5) . "<br>";
echo "Division by zero: " . Maths::divide(10, 0) . "<br>";

?>
