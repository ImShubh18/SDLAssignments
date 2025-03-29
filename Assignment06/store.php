<?php
$servername = "localhost";
$username = "root"; // Default for XAMPP
$password = ""; // Default for XAMPP
$database = "employee_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $department = $_POST['department'];
    $salary = $_POST['salary'];

    $sql = "INSERT INTO employees (name, email, phone, department, salary) VALUES ('$name', '$email', '$phone', '$department', '$salary')";

    if ($conn->query($sql) === TRUE) {
        echo "Employee registered successfully! <br><a href='index.php'>Go Back</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
