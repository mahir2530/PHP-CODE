<!-- Constants  -->
<?php
    class first{
        const MESSEGE="Hello Kem cho";
        public static function function_f(){
           return self::MESSEGE;
        } 
    }
    class second{
        public static function function_t(){
            return first::function_f();
        }
    }
    
    echo second::function_t();
 ?>