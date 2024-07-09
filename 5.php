<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Interest</title>
</head>

<body>
  <h4>Simple Interest Calculator</h4>
  <form method="POST">
    Enter Principal (P): <input type="text" name="Principle" required> <br>
    Enter Rate (R): <input type="text" name="Rate" required> <br>
    Enter Time (N): <input type="text" name="num" required> <br>
    <input type="submit" name="submit" value="Calculate">
  </form>

  <?php
  if (isset($_POST['submit'])) {
    $principle = $_POST['Principle'];
    $rate = $_POST['Rate'];
    $num = $_POST['num'];

    // Simple Interest formula: SI = (P * R * N) / 100
    $simpleInterest = ($principle * $rate * $num) / 100;

    echo 'Simple Interest (SI) is: ' . $simpleInterest;
  }
  ?>
</body>

</html>
