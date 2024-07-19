<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bank Account</title>
</head>
<body>
    <form method="POST">
        <h2>Bank Account</h2>
        Enter account number: <input type="text" name="accountNumber" required><br>
        Enter initial balance: <input type="number" name="balance" required><br>
        <input type="radio" name="transaction" value="deposit" required> Deposit <br>
        <input type="radio" name="transaction" value="withdraw" required> Withdraw <br>
        <input type="submit" name="submitTransaction" value="Submit">
    </form>

    <?php
    class BankAccount {
        public $accountNumber;
        public $balance;

        public function __construct($accountNumber, $balance) {
            $this->accountNumber = $accountNumber;
            $this->balance = $balance;
        }

        public function deposit($amount) {
            $this->balance += $amount;
        }

        public function withdraw($amount) { 
                $this->balance -= $amount;
        }

        public function display() {
            echo "Account Number: " . $this->accountNumber . "<br>";
            echo "Balance: " . $this->balance . "<br>";
        }
    }

    if (isset($_POST['submitTransaction'])) {
        $accountNumber = $_POST['accountNumber'];
        $balance = $_POST['balance'];
        $transaction = $_POST['transaction'];

        $bankAccount = new BankAccount($accountNumber, $balance);

        if ($transaction == "deposit") {
            $bankAccount->deposit(2000);
        } elseif ($transaction == "withdraw") {
            $bankAccount->withdraw(2000);
        }

        echo "<h2>Updated Account Details</h2>";
        $bankAccount->display();
    }
    ?>
</body>
</html>
