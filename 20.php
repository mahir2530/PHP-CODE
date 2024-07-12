<!DOCTYPE html>
<html lang="en">

<head>
    <title>Simple Interest Calculator</title>
</head>

<body>
    <h4>Simple Interest Calculator</h4>
    <form method="POST">
        Enter Principal (P): <input type="text" name="principal" required><br>
        Enter Rate (R): <input type="text" name="rate" required><br>
        Enter Time (T): <input type="text" name="time" required><br>
        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php
    class SimpleInterestCalculator {
        public $principal;
        public $rate;
        public $time;

        public function setValues($principal, $rate, $time) {
            $this->principal = $principal;
            $this->rate = $rate;
            $this->time = $time;
        }

        public function calculate() {
            return ($this->principal * $this->rate * $this->time) / 100;
        }

        public function display() {
            $simple_interest = $this->calculate();
            echo "Simple Interest is: $simple_interest";
        }
    }

    if (isset($_POST['submit'])) {
        $principal = $_POST['principal'];
        $rate = $_POST['rate'];
        $time = $_POST['time'];

        if (is_numeric($principal) && is_numeric($rate) && is_numeric($time)) {
            $calculator = new SimpleInterestCalculator();
            $calculator->setValues($principal, $rate, $time);
            $calculator->display();
        } else {
            echo "Please enter valid numeric values.";
        }
    }
    ?>
</body>

</html>
