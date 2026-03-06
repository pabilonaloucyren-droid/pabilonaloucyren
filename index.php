<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Form Page</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>

        .container{
            width: 550px;
            background-color: white;
        }
        body{
            background-color: #F4F6F9;
        }
        h2{
            font-family: "Verdana";
            font-weight: bold;
            background-color: #F4F6F9;
        }

    </style>
</head>

<body>

<body>
    <div class="container">
        <div class="row my-4">
            <div class="col  mx-2 shadow p-5">
                <h2 class="text-center mb-4">Profile Form Page</h2><hr>
                <form action="profile.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col">
                            <label class="fullname" for="name">Full Name: </label>
                            <input type="text" name="name" id="name" class="form-control" required/><br>

                            <label for="age" for="age">Age: </label>
                            <input type="number" age="age" id="age" class="form-control" min="1" max="120" required/><br>

                            <label class="course" for="course">Course/Program: </label>
                            <input type="text" name="course" id="course" class="form-control" required/><br>

                            <label class="emailAddress" for="emailAddress">Email Address: </label>
                            <input type="emailAddress" name="emailAddress" id="emailAddress" class="form-control"><br>

                            <div class="row">
                                <div class="col-6">
                                    <label for="">Select Gender:</label>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="gender" id="gender"
                                            value="Male" required/><label for="gender" class="form-check-label">Male</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="gender" id="gender"
                                            value="Female"><label for="gender" class="form-check-label">Female</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="gender" id="gender"
                                            value="None"><label for="gender" class="form-check-label">Prefer not to say</label>
                                    </div>
                                </div>


                                <div class="col-6">
                                    <label for="hobby">Hobbies:</label><br>
                                    <input type="checkbox" name="hobby1" id="hobby1" value="music">
                                    <label for="hobby1">Listening to Music</label><br>

                                    <input type="checkbox" name="hobby2" id="hobby2" value="reading">
                                    <label for="hobby2">Reading Books</label><br>

                                    <input type="checkbox" name="hobby3" id="hobby3" value="games">
                                    <label for="hobby3">Playing online games</label><br>

                                    <input type="checkbox" name="hobby4" id="hobby4" value="movies">
                                    <label for="hobby4">Watching Movies</label><br>

                                    <input type="checkbox" name="hobby5" id="hobby5" value="drawing">
                                    <label for="hobby5">Drawing / Painting</label><br>

                                    <input type="checkbox" name="hobby6" id="hobby5" value="sports">
                                    <label for="hobby6">Sports</label><br>
                                </div>
                            </div>

                            <div class="form-floating">
                                <textarea class="form-control mt-4 mb-4" placeholder="Short Biography" id="bio" style="height: 110px;"></textarea>
                                <label for="bio">Please enter a short biography.</label>
                            </div>

                            <div class="">
                                <label for="fileInput" class="form-label">Upload Profile Image</label>
                                <input class="form-control" type="file" name="profileImage" id="fileInput" accept="image/*" required>
                            </div>

                            <div class="d-grid mt-3">
                                <button type="submit" class="btn btn-outline-info">Submit</button>
                            </div>

                </form>

            </div>
        </div>
        </form>
    </div>

</body>
    
</body>
</html>