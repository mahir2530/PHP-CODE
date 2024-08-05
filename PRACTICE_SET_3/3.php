<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bank Account</title>
</head>
<body>
    <form method="POST">
        <h2>Bank Account</h2>
        Enter account number: <input type="text" name="accountNumber" required><br>
        Enter amount: <input type="number" name="amt" required><br>
        Choose Operation<br>
        <input type="radio" name="transaction" value="deposit" required> Deposit <br>
        <input type="radio" name="transaction" value="withdraw" required> Withdrawl <br>
        <input type="submit" name="submit" value="submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        
        $ac_no=$_POST['accountNumber'];
        $amt=$_POST['amt'];
        $tra=$_POST['transaction'];
        $bal=10000;

        class Bank{

            function deposit($bal,$amt){
                $bal+=$amt;
                echo "Balance after Deposit is:$bal";
            }

            function withdraw($bal,$amt){
                $bal-=$amt;
                echo "Balance after Withdrawl is:$bal";
            }
        }

        $obj=new Bank();

        if ($tra=='deposit') {
            $obj->deposit($bal,$amt);
        }
        else
            $obj->withdraw($bal,$amt);
    }
    ?>
</body>
</html>
