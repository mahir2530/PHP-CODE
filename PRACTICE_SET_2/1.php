<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <form method="POST">
        Enter SR No : <input type="text" name="sr">
        Enter Name : <input type="text" name="name">
        Enter Email : <input type="text" name="email">
        <input type="submit" name="submit" value="click">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $SR = $_POST['sr'];
        $NAME = $_POST['name'];
        $EMAIL = $_POST['email'];

        echo "<table border=2>
        <tr>
            <th>SR NO.</th>
            <th>NAME</th>
            <th>EMAIL</th>
        </tr>";
        for ($i = 1; $i <= 3; $i++) {
         echo "<tr>
        <td>$SR</td>
        <td>$NAME</td>
        <td>$EMAIL</td>
    </tr>";
        }

        "</table> ";
    }
    ?>
</body>

</html>
