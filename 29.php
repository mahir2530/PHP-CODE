<!-- MULTIPLE INHERITANCE -->
<?php
    class perentclass{
        function a($var){
            echo"variable : ".$var."<br>";
        }
    }
    class childclass extends perentclass {
        function b(){
            echo"A member of child class";
        }
    }
    class childclass2 extends perentclass {
        function c(){
            echo"A member of child class";
        }
    }
    $var=1;
    $obj=new childclass();
    $obj2=new childclass2();
    $obj->a($var);
    $obj->b();
    $obj2->c();

?>