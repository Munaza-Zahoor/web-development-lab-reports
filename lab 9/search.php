<?php
// Receive data from form
$product_name = $_POST['product_name'];

// Database connection
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query
$sql = "SELECT * FROM products WHERE product_name LIKE '%$product_name%'";

// Execute query
$result = $conn->query($sql);

// Display results
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Product Name: " . $row["product_name"]. "<br>";
        echo "Description: " . $row["description"]. "<br>";
        echo "Price: " . $row["price"]. "<br><br>";
    }
} else {
    echo "No products found.";
}

// Close connection
$conn->close();
?>
