<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>

<body>
    <form method="POST">
        Enter a number: <input type="text" name="number" required>
        <input type="submit" name="submit" value="Generate Table">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $n = $_POST['number'];

        if (is_numeric($n)) {
            for ($i = 1; $i <= 10; $i++) {
                echo "$n * $i = " . ($n * $i) . "<br>";
            }
        } else {
            echo "Please enter a valid number.";
        }
    }
    ?>
</body>

</html>
