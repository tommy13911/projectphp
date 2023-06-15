<h2>Form result</h2>

<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = isset($_POST['cf-name']) ? htmlspecialchars($_POST['cf-name']) : '';
        $email = isset($_POST['cf-email']) ? filter_var($_POST['cf-email'], FILTER_SANITIZE_EMAIL) : '';
        $age = isset($_POST['cf-age']) ? htmlspecialchars($_POST['cf-age']) : '';
        $message = isset($_POST['cf-message']) ? htmlspecialchars($_POST['cf-message']) : '';

        $db_host = 'localhost';
        $db_name = 'test';
        $db_user = 'root';
        $db_pass = '';

        $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

        if ($conn->connect_error) {
            die('DB connection error: ' . $conn->connect_error);
        }

 
        $sql = "INSERT INTO user (user_name, user_email, user_age, user_message) VALUES ('{$name}', '{$email}', '{$age}', '{$message}')";
        if ($conn->query($sql) === true) {
            echo 'New submit saved successfully.';
        } else {
            echo 'Error: ' . $conn->error;
        }

        echo "<p>Name: {$name}</p>";
        echo "<p>Email: {$email}</p>";
        echo "<p>Age: {$age}</p>";
        echo "<p>Message: {$message}</p>";
    } else {
        echo 'Error in data!';
    }
