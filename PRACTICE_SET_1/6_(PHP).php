<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['Register'])) {

    $fullname = ($_POST['fullname']);
    $email = ($_POST['email']);
    $username = ($_POST['username']);
    $password = ($_POST['password']);
    $confirmPassword = ($_POST['confirm_password']);

    if (empty($fullname) || empty($email) || empty($username) || empty($password) || empty($confirmPassword)) {
        echo "Please fill in all fields.";
    } elseif ($password !== $confirmPassword) {
        echo "Passwords do not match.";
    } else {
        echo "<h2>Registration successful!</h2>";
        echo "<p><strong>Full Name:</strong> $fullname</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Username:</strong> $username</p>";
        echo "<p><strong>Password:</strong> $password</p>";
    }
}
?>
