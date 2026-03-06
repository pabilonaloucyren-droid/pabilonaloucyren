<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row my-4">
            <!-- Registration -->
            <div class="col  mx-2 shadow p-3">
                <h1 class="text-center">Registration Page</h1>
                <form action="register.php" method="post" target="_blank">
                    <div class="row">
                        <div class="col">
                            <label class="form-label" for="name">Full Name</label>
                            <input type="text" name="name" id="name" class="form-control"><br>
                            <label for="">Select Gender:</label>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="gender" id="gender"
                                    value="Male"><label for="gender" class="form-check-label">Male</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="gender" id="gender"
                                    value="Female"><label for="gender" class="form-check-label">Female</label>
                            </div>
                        </div>
                        <div class="col">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" id="password" class="form-control"><br>
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="row">
                            <input type="reset" value="reset" class="form-control">
                            <div class="col d-grid">
                                <button class="btn btn-primary mt-3" type="submit" name="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Order Management -->
            <div class="col mx-2 shadow p-3">
                <h1 class="text-center">Order Management</h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Items</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>Burger</td>
                        <td>45.00</td>
                    </tr>
                    <tr>
                        <td>Fries</td>
                        <td>30.00</td>
                    </tr>
                    <tr>
                        <td>Chicken</td>
                        <td>99.00</td>
                    </tr>
                    <tr>
                        <td>Sundae</td>
                        <td>25.00</td>
                    </tr>
                    <tr>
                        <td>Coffee</td>
                        <td>50.00</td>
                    </tr>
                </table>
                <form action="order.php" method="get" target="_blank">
                    <label for="item" class="form-label">Choose an Item:</label>
                    <select name="item" id="item" class="form-select mb-2">
                        <option value="Burger">Burger</option>
                        <option value="Fries">Fries</option>
                        <option value="Chicken">Chicken</option>
                        <option value="Sundae">Sundae</option>
                        <option value="Coffee">Coffee</option>
                    </select>
                    <label for="quantity" class="form-label">Quantity:</label>
                    <input class="form-control" type="number" name="quantity" id="quantity">
                    <div class="d-grid mt-3">
                        <button type="submit" class="btn btn-outline-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>