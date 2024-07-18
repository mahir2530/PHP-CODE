<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
        <select name="color">
            <option>select</option>
            <option value="RED">RED</option>
            <option value="BLACK">BLACK</option>
            <option value="yellow">yellow</option>
            <option value="white">white</option>
        </select>
        <input type="submit" name="submit" value="check">
    </form>
    <?php  
        if (isset($_POST['submit'])) {
            $s = $_POST['color'];
            echo "You selected: " . $s;
        }
    ?>
</body>
</html>
