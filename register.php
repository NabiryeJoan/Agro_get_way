<?php
require 'database.php'; 
$collection = (new MongoDB\Client)->Agrogetaway->users;

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve user input
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate user input
    $errors = [];

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please provide a valid email address.";
    }

    if (empty($username)) {
        $errors[] = "Username is required.";
    }

    if (empty($password)) {
        $errors[] = "Password is required.";
    }

    // Check for existing username
    if ($collection->findOne(['username' => $username])) {
        $errors[] = "Username already exists. Please choose a different one.";
    }

    if (empty($errors)) {
        // Hash the password
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        // Create a new user document
        $user = [
            'username' => $username,
            'password' => $passwordHash,
            'email' => $email,
        ];

        // Insert the user document into the database
        $result = $collection->insertOne($user);

        if ($result->getInsertedCount() > 0) {
            // Registration successful
            echo "Registration successful. You can now log in.";
        } else {
            // Handle database insertion error
            echo "An error occurred during registration. Please try again.";
        }
    } else {
        // Display validation errors
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>
