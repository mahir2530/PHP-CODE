<?php
    if(isset($_REQUEST['submit']))
    {
        $name=$_REQUEST['uname'];
        $color=$_REQUEST['ucolor'];

        echo"your name is $name";
        echo"<br>";
        echo"your name is $color";
    }
    else{
        echo "GO back";
    }
?>