<?php
include 'session.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
        <p>This is a protected page.</p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
