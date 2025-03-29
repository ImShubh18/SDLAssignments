<!DOCTYPE html>
<html>
<head>
    <title>Employee Registration</title>
</head>
<body>
    <h2>Employee Registration Form</h2>
    <form method="post" action="store.php">
        <label>Name:</label>
        <input type="text" name="name" required><br><br>

        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label>Phone:</label>
        <input type="text" name="phone" required><br><br>

        <label>Department:</label>
        <input type="text" name="department" required><br><br>

        <label>Salary:</label>
        <input type="number" step="0.01" name="salary" required><br><br>

        <input type="submit" name="submit" value="Register">
    </form>

    <h2>Employee List</h2>
    <a href="view.php">View Employees</a>
</body>
</html>
