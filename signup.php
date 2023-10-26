<?php
session_start();
error_reporting(0);
include('includes/db_config.php');
error_reporting(0);

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = md5($_POST['password']);
    // $password=md5($_POST['password']);

    $ret = mysqli_query($con, "select email from users where Email='$email' || contact='$contact'");
    $result = mysqli_fetch_array($ret);
    if ($result > 0) {

        echo "<script>alert('This email or Contact Number already associated with another account!.');</script>";
    } else {
        $query = mysqli_query($con, "insert into users (name,email, contact, password) values('$name','$email','$contact','$password')");
        if ($query) {

            echo "<script>alert('You have successfully registered.');</script>";

        } else {

            echo "<script>alert('Something Went Wrong. Please try again.');</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/style-starter.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>

<body>
    <?php include_once('includes/header.php'); ?>
    <form action="" method="POST" class="signup-form">
        <h2 class="login">Sign Up</h2>
        <label for="name">Name:</label><br>
        <input class="login-input" type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input class="login-input" type="email" id="email" name="email" required><br><br>

        <label for="contact">Contact:</label><br>
        <input class="login-input" type="text" id="contact" name="contact" required><br><br>

        <label for="password">Password:</label><br>
        <input class="login-input" type="password" id="password" name="password" required><br><br>

        <input class="login-btn" type="submit" name="submit" value="Register">
    </form>

</body>

</html>