<!DOCTYPE html>
<html>

<head>
    <title>Registration Form</title>
</head>

<body>
    <form action="6(php).php" method="POST">
        <table border="2" align="center">
            <tr>
                <td>Full Name</td>
                <td><input name="fullname" type="text" value="John Cena"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input name="email" type="text" value="john.cena@krazytech.cc"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input name="username" type="text" value="john"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input name="password" type="password" value="********"></td>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td><input name="confirm password" type="password" value="********"></td>
            </tr>
            <tr>
                <td>
                <td colspan="2" bgcolor="green" align="center">
                    <input name="Register" type="submit" value="Register">
                    <input name="reset" type="submit" value="Reset">
                </td>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
