

<?php
session_start();
error_reporting(0);

include('db_config.php');
error_reporting(0);
if (isset($_POST['submit'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $contact = $_POST['contact'];
      $password = $_POST['password'];


      $ret=mysqli_query($con,"INSERT INTO users (name, email, contact, password) VALUES ('$name', '$email', '$contact', '$password')");
      $result=mysqli_fetch_array($ret);
}

    // Check if the form was submitted
    // if ($_['REQUEST_METHOD'] === 'POST') {

    //   // Get the user's input
    //   $name = $_POST['name'];
    //   $email = $_POST['email'];
    //   $contact = $_POST['contact'];
    //   $password = $_POST['password'];

      // Validate the user's input
    //   $errors = [];
    //   if (empty($name)) {
    //     $errors[] = 'Please enter your full name.';
    //   }
    //   if (empty($email)) {
    //     $errors[] = 'Please enter your email address.';
    //   } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //     $errors[] = 'Please enter a valid email address.';
    //   }
    //   if (empty($contact)) {
    //     $errors[] = 'Please enter your contact number.';
    //   } elseif (!preg_match('/^\d{10}$/', $contact)) {
    //     $errors[] = 'Please enter a valid contact number.';
    //   }
    //   if (empty($password)) {
    //     $errors[] = 'Please enter a password.';
    //   } elseif (strlen($password) < 8) {
    //     $errors[] = 'Password must be at least 8 characters long.';
    //   } elseif ($password !== $_POST['confirm_password']) {
    //     $errors[] = 'Password and confirm password do not match.';
    //   }

      // If there are no errors, insert the user's information into the database
    //   if (empty($errors)) {
    //     $sql = "INSERT INTO users (name, email, contact, password) VALUES ('$name', '$email', '$contact', '$password')";
    //     $result = $conn->query($sql);
    //     if ($result) {
    //       header('Location: login.php');
    //       exit;
    //     } else {
    //       echo '<p class="error">Registration failed. Please try again.</p>';
    //     }
    //   } else {
    //     foreach ($errors as $error) {
    //       echo '<p class="error">' . $error . '</p>';
    //     }
    //   }
////////////
  ?>