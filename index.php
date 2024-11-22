<?php
include_once "Config/config.php";

// Create a Config object and connect to the database
$c1 = new Config();


// Handle form submission
if (isset($_POST['submit'])) {
    $bookname = $_POST['carname'];
    $author = $_POST['model'];
    $price = $_POST['price'];

    $c1->insertDatabase($bookname, $author, $price);
}

// Fetch book details
$result = $c1->selectDatabase();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <center>
        <h1>Car Details</h1>
        <br>
        <div class="col-4">
            <form method="POST" action="">
                <input class="form-control" name="carname" placeholder="Car Name" required>
                <br>
                <input class="form-control" name="model" placeholder="Model" required>
                <br>
                <input class="form-control" name="price" placeholder="Price" required>
                <br>
                
                <div class="row">
                                <div class="col text-center">
                                <button type="submit" name="submit" class="btn btn-primary">Add Book</button>
                                    <button name="show" onclick="location.href='showdata.php'" class="btn btn-secondary">Show Data</button>
                                </div>
                            </div>
            </form>
        </div>
        
        
        </table>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>