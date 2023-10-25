<?php
require 'database.php'; 

$collection = (new Mysql\Client)->Agrogetaway->users;

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve user input
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate user input
    $errors = [];

    if (empty($username)) {
        $errors[] = "Username is required.";
    }

    if (empty($password)) {
        $errors[] = "Password is required.";
    }

    if (empty($errors)) {
        // Find the user by username
        $user = $collection->findOne(['username' => $username]);

        if ($user && password_verify($password, $user['password'])) {
            // Successful login
            // You can set session variables here for authentication
            session_start();
            $_SESSION['user_id'] = $user['_id'];
            // Redirect to a dashboard or another authenticated page
            header("Location: dashboard.php");
            exit();
        } else {
            $errors[] = "Invalid username or password.";
        }
    }

    // Display validation or login errors
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
}
?>

