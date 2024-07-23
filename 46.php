<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Favorite Color</title>
</head>
<body>
    <form method="POST" action="">
        Enter your favorite color: <input type="text" name="color"><br>
        Enter the reason: <input type="text" name="reason"><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $color = $_POST['color'];
        $reason = $_POST['reason'];

        $favColor = array($color => $reason);
        echo '<br>';

        foreach ($favColor as $key => $value) {
            echo '<br>';
            echo "Favorite color is $key because: $value";
        }
    }
    ?>
</body>
</html>
