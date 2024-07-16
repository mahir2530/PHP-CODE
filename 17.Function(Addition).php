<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of Two Numbers</title>
</head>

<body>
    <form method="POST">
        Enter num1: <input type="text" name="num1"><br>
        Enter num2: <input type="text" name="num2"><br>
        <input type="submit" name="submit" value="Check">
    </form>
    <?php
    class Sum
    {
        public $num1;
        public $num2;

        public function set_Value($num1, $num2)
        {
            $this->num1 = $num1;
            $this->num2 = $num2;
        }

        public function show()
        {
            $sum = $this->num1 + $this->num2;
            echo "Sum of two numbers $this->num1 & $this->num2 is: $sum";
        }
    }

    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

            $n = new Sum();
            $n->set_Value($num1, $num2);
            $n->show();
    
    }
    ?>
</body>

</html>
