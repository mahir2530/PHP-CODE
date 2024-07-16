<?php
    class add{
        public $a,$b;
        function __construct($a,$b)
        {
            $this->a=$a;
            $this->b=$b;
        }
        function get_sum(){
            return $this->a + $this->b;
        }
    }
    $c = new add(5,10);
    echo"the sum is : ".$c->get_sum();

?>
