<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <form method="POST">
        Enter Unit : <input type="text" name="unit">
        <input type="submit" name="submit" value="click">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $Unit = $_POST['unit'];
        
        
        if ($Unit>50 and $Unit<100)
        {
           echo"More then 50 , Bill  : ",$Unit*3.50;
        }
        elseif ($Unit>100 and $Unit<200)
        {
           echo"More then 100 , Bill  : ",$Unit*4.00;
        }
        elseif ($Unit>200 and $Unit<250)
        {
           echo"More then 200 , Bill  : ",$Unit*5.20;
        }
        elseif ($Unit>250)
        {
           echo"More then 250 , Bill  : ",$Unit*6.50;
        }
    }
    ?>
</body>

</html>