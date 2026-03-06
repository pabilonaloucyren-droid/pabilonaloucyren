<php?
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
        }
        check{
            
        }

    </style>
</head>

<body>

<div class = "container" >
    <div class="row my-4">
        <!-- Profile Generator -->
        <div class="col  mx-2 shadow p-3">
                <h1 class="text-center" >Profile Form Page</h1>
                <form action="profile.php" method="post" target="_blank" enctype="multipart/formdata">
                <div class = "row">
                    <div class = "col">
                        <div class = "mb-3">
                            <label class = "form-label">Full Name: </label>
                            <input type = "text" name = "fullname" class="form-control" required>
                        </div>
                        <div class = "mb-3">
                            <label class = "form-label">Age: </label>
                            <input type = "number" name = "age" class="form-control" min="1" max="120" required>
                        </div>
                        <div class = "mb-3">
                            <label class = "form-label">Course/Program: </label>
                            <input type = "text" name = "course" class="form-control" required>
                        </div>
                        <div class = "mb-3">
                            <label class = "form-label">Email Address: </label>
                            <input type = "email" name = "email" class="form-control" required>
                        </div>
                        <div class = "mb-3">
                            <label class = "form-label">Gender: </label><br>
                                <div class="check mx-2">
                                    <input type = "radio" name = "gender" value ="Male"> Male
                                    <input type = "radio" name = "gender" value ="Female"> Female
                                </div>
                        </div>
                        <div class = "mb-3">
                            <label class = "form-label">Hobbies: </label><br>
                            <input type="checkbox" name="hobby1" value="Reading Comics">Reading Comics
                            <input type="checkbox" name="hobby2" value="Online Shopping">Online shopping
                            <input type="checkbox" name="hobby3" value="Playing Online Games">Playing Online Games
                            <input type="checkbox" name="hobby4" value="">Reading
                            <input type="checkbox" name="hobby5" value="">Reading
                        </div>



                    </div>
                </div>




                </form>
        </div>

    </div>
</div>
    
</body>
</html>