<?php

session_start();
error_reporting(0);
include('includes/db_config.php');
error_reporting(0);

if(isset($_POST['login']))
  {
    $emailcon=$_POST['email'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"select name from users where  (email='$emailcon') && password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
        echo "<script>localStorage.setItem('user_id','$name');</script>";
        $redirectToIndex = true;
     header('location:Search.php');
    }
    else{
    echo "<script>alert('Invalid Details.');</script>";
    }
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style-starter.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Login Page</title>
    <style>
        form {
            width: 300px;
            margin: 50px auto;
            padding: 10px;
            border: 1px solid #ccc;
            box-shadow: 2px 2px 5px rgba(0,0,0,0.3);
        }
    </style>
</head>
<body>
<?php include_once('includes/header.php'); ?>
<form action="login.php" method="POST">
    <h2 class="login">Log In</h2>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" class="login-input" placeholder="email@gmail.com" required><br><br>

    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" class="login-input" required><br><br>

    <input type="submit" name="login" value="Login" class="login-btn">
</form>

</body>
</html>
=======
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT); // Hash the password


    // Redirect the user to the login page after successful registration
    header("Location: index.html");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    

    // Check if the username exists and the password matches the stored hash
    if ($user && password_verify($password, $user["password"])) {
        // Start a session or generate a token for the authenticated user
        // For example, you can use PHP sessions:
        // session_start();
        // $_SESSION["username"] = $username;

        // Redirect the user to a dashboard or protected page
        header("Location: dashboard.html");
    } else {
        // Invalid login, redirect back to the login page
        header("Location: index.html");
    }
}
?>
>>>>>>> 03b6023f96730447cfadc5e745a7a4443dae38f5
