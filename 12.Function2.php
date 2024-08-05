<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Details</title>
</head>
<body>
  <form method="POST">
     Enter Name: <input type="text" name="student_name" required> (br)
    <input type="submit" name="submit" value="Submit">
  </form>
</body>
</html>

<?php
class Student {
  public $name;

  function set_name($name) {
    $this->name = $name;
  }

  function get_name() {
    return $this->name;
  }
}

$student = new Student();

if (isset($_POST['submit'])) {
        $student_name = $_POST['student_name'];
    if (!empty($student_name)) {
        $student->set_name($student_name);

        echo "<h2>Student:</h2>";
        echo "<p>Name: " . $student->get_name() . "</p>";
    } else {
        echo "<p>Please enter a name.</p>";
    }
}
?>

?>


