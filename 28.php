<!-- INHERITANCE -->
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
    
    $var=1;
    $obj=new childclass();
    $obj->a($var);
    $obj->b();
?>