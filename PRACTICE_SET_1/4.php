<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
</head>
<body>
    <form method="post">
        <label for="choice">Choose an operation:</label>
        <select name="choice" id="choice">
            <option value="1">Square</option>
            <option value="2">Factorial</option>
            <option value="3">Square Root</option>
        </select><br>

        <label for="number">Enter a number:</label>
        <input type="number" name="number" id="number"><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $choice = intval($_POST["choice"]);
        $num = intval($_POST["number"]);

        switch ($choice) {
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
        }
    }
    ?>
</body>
</html>
