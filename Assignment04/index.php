<!DOCTYPE html>
<html>
<head>
    <title>Search Employee Name</title>
</head>
<body>
    <h2>Employee Search</h2>
    <form method="post">
        Enter Employee Name: <input type="text" name="search_name" required>
        <input type="submit" value="Search">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Define an indexed array with 20 Indian employee names
        $employees = [
            "Amit Sharma", "Priya Verma", "Rahul Gupta", "Neha Patil", "Suresh Kumar",
            "Pooja Singh", "Vikram Joshi", "Anjali Nair", "Rajesh Rao", "Meena Iyer",
            "Karan Thakur", "Swati Mishra", "Arun Menon", "Deepika Reddy", "Manoj Das",
            "Sneha Choudhury", "Ravi Kapoor", "Jyoti Bansal", "Siddharth Malhotra", "Kavita Mehta"
        ];
        
        // Get the search name from the form input
        $search_name = trim($_POST['search_name']);
        
        // Check if the name exists in the array
        if (in_array($search_name, $employees)) {
            echo "<p style='color: green;'>$search_name exists in the employee list.</p>";
        } else {
            echo "<p style='color: red;'>$search_name was not found in the employee list.</p>";
        }
    }
    ?>
</body>
</html>
