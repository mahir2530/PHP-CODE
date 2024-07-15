<?php
class Fruits {
    public $name;
    public $color;

    function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    function get_name() {
        return $this->name;
    }

    function get_color() {
        return $this->color;
    }
}

$obj = new Fruits("Apple", "Red");


echo "The fruit's name is " . $obj->get_name() . "<br>";
echo "The fruit's color is " . $obj->get_color() ;

?>
