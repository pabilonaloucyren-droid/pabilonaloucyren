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
            background-color: #ffffff;
            border-radius: 10px;
            overflow: hidden;
        }

        body{
            background-color: #E8F0F7;
        }

        h2{
            font-family: "Verdana";
            font-weight: bold;
            background-color: transparent;
            color: #482c3d;
        }

        .col.mx-2.shadow.p-5 {
            border-top: 5px solid #bd8e89;
            border-radius: 10px;
        }

        label {
            color: #7f6269;
            font-weight: 600;
            font-size: 0.88rem;
        }

        .form-control:focus {
            border-color: #482c3d;
            box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.2);
        }

        input[type="radio"],
        input[type="checkbox"] {
            accent-color: #482c3d;
        }

        hr {
            border-color: #b8d4e8;
        }

        .btn-outline-info {
            color: #ffffff;
            background-color: #482c3d;
            border-color: #482c3d;
            font-weight: 600;
        }

        .btn-outline-info:hover {
            background-color: #bd8e89;
            border-color: #482c3d;
            color: #ffffff;
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
                            <input type="number" name="age" id="age" class="form-control" min="1" max="120" required/><br>

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
                                    <input type="checkbox" name="hobbies[]" id="hobby1" value="Listening to Music">
                                    <label for="hobby1">Listening to Music</label><br>

                                    <input type="checkbox" name="hobbies[]" id="hobby2" value="Reading Books">
                                    <label for="hobby2">Reading Books</label><br>

                                    <input type="checkbox" name="hobbies[]" id="hobby3" value="Playing online games">
                                    <label for="hobby3">Playing online games</label><br>

                                    <input type="checkbox" name="hobbies[]" id="hobby4" value="Watching Movies">
                                    <label for="hobby4">Watching Movies</label><br>

                                    <input type="checkbox" name="hobbies[]" id="hobby5" value="Drawing / Painting">
                                    <label for="hobby5">Drawing / Painting</label><br>

                                    <input type="checkbox" name="hobbies[]" id="hobby6" value="Sports">
                                    <label for="hobby6">Sports</label><br>
                                </div>
                            </div>

                            <div class="form-floating">
                                <textarea class="form-control mt-4 mb-4" name="bio" placeholder="Short Biography" id="bio" style="height: 110px;"></textarea>
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