<<<<<<< HEAD
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mui/material@5.3.2/dist/css/mui.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mui/icons-material@5.3.2/dist/mui-icons.min.css">
    <title>Sign Up</title>
</head>
<body>
    <div class="container">
        <div class="main">
            <div class="avatar">
                <svg class="MuiSvgIcon-root MuiAvatar-icon MuiAvatar-colorSecondary" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path>
                    <path d="M9.5 12c-.28 0-.5.22-.5.5s.22.5.5.5h1c.28 0 .5-.22.5-.5s-.22-.5-.5-.5h-1zm5 0c-.28 0-.5.22-.5.5s.22.5.5.5h1c.28 0 .5-.22.5-.5s-.22-.5-.5-.5h-1z"></path>
                    <circle cx="12" cy="8.5" r="1.5"></circle>
                    <circle cx="12" cy="15.5" r="1.5"></circle>
                </svg>
            </div>
            <h1>Sign up</h1>
            <form id="signup-form" novalidate>
                <div class="grid-container">
                    <div class="grid-item">
                        <label for="firstName">First Name</label>
                        <input type="text" id="firstName" name="firstName" required>
                    </div>
                    <div class="grid-item">
                        <label for="lastName">Last Name</label>
                        <input type="text" id="lastName" name="lastName" required>
                    </div>
                    <div class="grid-item">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="grid-item">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="grid-item">
                        <input type="checkbox" id="allowExtraEmails" name="allowExtraEmails">
                        <label for="allowExtraEmails">I want to receive inspiration, marketing promotions, and updates via email.</label>
                    </div>
                </div>
                <button type="submit">Sign Up</button>
                <p>Already have an account? <a href="#">Sign in</a></p>
            </form>
        </div>
        <p class="copyright">Copyright &copy; Your Website <?php echo date("Y"); ?>.</p>
    </div>
</body>
</html>
