<?php
if (isset($_REQUEST['submit'])) {
    $name = $_REQUEST['name'];
    $gen = $_REQUEST['gender'];
    $bran = $_REQUEST['branch'];

    echo "<table border='2'>
    <tr>
        <td>Your name is   $name<br></td>
    </tr>
    <tr>
        <td>Your gender is  $gen<br></td>
    </tr>";

    if ($bran == 'select') {
        echo "<tr><td>Your branch is null</td></tr>";
    } else {
        echo "<tr><td>Your branch is   $bran</td></tr>";
    }

    echo "</table>";
} else {
    echo "Go back";
}
?>
