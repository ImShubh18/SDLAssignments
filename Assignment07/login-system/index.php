<?php
session_start();
include 'config.php';

if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}

$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = md5(trim($_POST['password']));

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        $_SESSION['username'] = $username;

        // Remember Me functionality
        if (!empty($_POST["remember"])) {
            setcookie("username", $username, time() + 86400, "/");
            setcookie("password", $_POST["password"], time() + 86400, "/");
        }

        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid Username or Password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <form method="POST">
            <h2>Login</h2>
            
            <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
            
            <label>Username:</label>
            <input type="text" name="username" value="<?php if (isset($_COOKIE["username"])) echo $_COOKIE["username"]; ?>" required>
            
            <label>Password:</label>
            <input type="password" name="password" value="<?php if (isset($_COOKIE["password"])) echo $_COOKIE["password"]; ?>" required>
            
            <div class="remember-me">
                <input type="checkbox" name="remember" <?php if (isset($_COOKIE["username"])) echo "checked"; ?>> Remember Me
            </div>
            
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
