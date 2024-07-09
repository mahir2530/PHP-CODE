<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Odd Number Checker</title>
</head>

<body>
    <h1>Check if a Number is Odd</h1>
    <form method="POST">
        Enter number: <input type="text" name="number" required>
        <input type="submit" name="submit" value="Check">
    </form>

    <?php
    // Process form submission only if the form is submitted
    if (isset($_POST['number'])) {
        $number = $_POST['number'];

        if (is_numeric($number)) {
            if($number==0)
            {
                echo "<p>Number is Zero .</p>";
            }
            else{
                for ($i = 1; $i < $number; $i++) {
                    if ($i % 2 != 0) {
                        echo "<p>The number $i is odd.</p>";
                    } 
                }
                echo "<h1>Even </h1>";
                for ($i = 1; $i < $number; $i++) {
                    if ($i % 2 == 0) {
                        echo "<p>The number $i is Even.</p>";
                    } 
                }
            }
        } else {
            echo "<p>Please enter a valid number.</p>";
        }
    }
    ?>
</body>

</html>