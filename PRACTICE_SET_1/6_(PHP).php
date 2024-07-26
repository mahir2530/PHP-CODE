<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
        $fullname = ($_POST['fullname']);
        $email = ($_POST['email']);
        $username = ($_POST['username']);
        $password = ($_POST['password']);
        $confirm_password = ($_POST['confirm_password']);

       
        if ($password !== $confirm_password) {
            echo "<p style='color:red;'>Passwords do not match!</p>";
        } else {
            $data = [
                'fullname' => $fullname,
                'email' => $email,
                'username' => $username,
                'password' => password_hash($password, PASSWORD_DEFAULT) // Encrypting password
            ];

            echo "<p style='color:green;'>Registration successful!</p>";
        }
    }
    ?>
