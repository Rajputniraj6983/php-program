<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'product_db');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert product into database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $price = $conn->real_escape_string($_POST['price']);
    $description = $conn->real_escape_string($_POST['description']);

    $sql = "INSERT INTO products (name, price, description) VALUES ('$name', '$price', '$description')";
    if ($conn->query($sql) === TRUE) {
        echo "Product added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header("Location: products.php"); // Redirect to products page
    exit();
}
?>
