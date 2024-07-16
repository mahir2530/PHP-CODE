<!-- ABSTRACT CLASS -->
<?php
    abstract class BASE{
        function a(){
        }
    }
    class Derived extends BASE {
        function a(){
            echo"A member of child class";
        }
    }

    $obj=new Derived();
    $obj->a();
?>
