<?php
class student {
    public $name;

    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }
}

$s1 = new student();
$s2 = new student();

$s1->set_name('tirth');
$s2->set_name('dhruv');

echo "Student 1 : <br>";
echo "name 1 : " . $s1->get_name() . "<br>";
echo "Student 2 : <br>";
echo "name 2 : " . $s2->get_name() . "<br>";
?>
