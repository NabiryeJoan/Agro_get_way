<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT); // Hash the password

    // Store the user's data in your database (replace this with your database code)
    // For example, using PDO for MySQL:
    // $db = new PDO("mysql:host=localhost;dbname=your_database", "your_username", "your_password");
    // $query = $db->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    // $query->execute([$username, $password]);

    // Redirect the user to the login page after successful registration
    header("Location: index.html");
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Retrieve the user's data from your database (replace this with your database code)
    // For example, using PDO for MySQL:
    // $db = new PDO("mysql:host=localhost;dbname=your_database", "your_username", "your_password");
    // $query = $db->prepare("SELECT password FROM users WHERE username = ?");
    // $query->execute([$username]);
    // $user = $query->fetch(PDO::FETCH_ASSOC);

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