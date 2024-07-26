<!-- Find The Duplicate Email -->
<?php
    $arr=array("tirth@gmail.com",'Dhruv@gmail.com','tirth@gmail.com');
    foreach($arr as $key=>$val){
        unset($arr[$key]);
        if(in_array($val,$arr)){
            echo "The duplicate Email is : ".$val." ";
        }
    }
?>
