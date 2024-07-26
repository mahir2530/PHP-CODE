<?php
        $Age = 19;
        if (is_numeric($Age)) {
            if ($Age > 18) {
                echo "<h4>VALID</h4>";
            } else {
                echo "<font color='red'>NOT VALID</font>";
            }
        } else {
            echo "<font color='red'>Please enter a valid number</font>";
        }
?>
