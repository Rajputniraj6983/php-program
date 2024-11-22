<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="display-4">Car Details</h1>
            <p class="lead">Update products seamlessly.</p>
        </div>
        <?php
        session_start();

        include("config/config.php");

        $c1 = new Config();

        $id = $_SESSION['id'];
        $carname = $_SESSION['carname'];
        $model = $_SESSION['model'];
        $price = $_SESSION['price'];


        if (isset($_REQUEST['submit'])) {
            $carname = $_REQUEST['carname'];
            $model = $_REQUEST['model'];
            $price = $_REQUEST['price'];
            $c1->updateDatabase($id, $carname, $model, $price);
            header("Location: showdata.php");
        }

        ?>

        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Add New Car</h3>
                        <form method="POST" action="">
                            <div class="mb-3">
                                <label for="name" class="form-label">Car Name</label>
                                <input id="name" class="form-control" name="carname" type="text" placeholder="Product "
                                    value="<?php echo $carname; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input id="price" class="form-control" name="price" type="number" placeholder="Price"
                                value="<?php echo $price; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="category" class="form-label">Category</label>
                                <input id="category" class="form-control" name="model" type="text"
                                    placeholder="Category" value="<?php echo $model; ?>"required>
                            </div>

                            <div class="row">
                                <div class="col text-center">
                                    <button name="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>