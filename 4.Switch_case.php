<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
</head>

<body>
    <h4>Switch case</h4>
    <form method="POST">
        Enter a number(1 to 7):<input type="text" name="num">
        <input type="submit" value="click">
    </form>
    <?php
    if (isset($_POST['num'])) {
        $num = $_POST['num'];
        switch ($num) {
            case '1':
                echo 'monday';
                break;
            case '2':
                echo 'Tuesday';
                break;
            case '3':
                echo 'Wednesday';
                break;
            case '4':
                echo 'Thursday';
                break;
            case '5':
                echo 'Friday';
                break;
            case '6':
                echo 'Saturday';
                break;
            case '7':
                echo 'Sunday';
                break;
            
            default:
                # code...
                break;
        }
    }
    ?>
</body>

</html>
