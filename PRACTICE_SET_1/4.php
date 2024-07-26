<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
</head>

<body>
    <h4>Switch case</h4>
    <form method="POST">
        <h4>1.square</h4>
        <h4>2.Factorial</h4>
        <h4>3.squareroot</h4>
        Enter a choice (1 to 4): <input type="text" name="ch"><br>
        Enter a number:<input type="text" name="num">
        <input type="submit" name="submit" value="click"><br><br>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $ch = $_POST['ch'];
        $num = $_POST['num'];
        switch ($ch) {
           case 1:
                $result = $num * $num;
                echo "Square of $num is $result";
                break;
            case 2:
                $fact = 1;
                for ($i = 1; $i <= $num; $i++) {
                    $fact *= $i;
                }
                echo "Factorial of $num is $fact";
                break;
            case 3:
                $result = sqrt($num);
                echo "Square root of $num is $result";
                break;
            default:
                echo "Invalid choice";
                break;
        }
    }
    ?>
</body>

</html>
