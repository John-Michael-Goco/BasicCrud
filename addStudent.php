<?php
include 'includes/dbconn.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Crud</title>
     <!-- BS5 -->
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
<body>
    <!--Container Main start-->
    <div class="bg-body text-center">
        <div class="text-start">
        <a href="allUsers.php" class="btn btn-primary mt-3">Back</a>
        </div>
        <p class="text-start fw-bold fs-3 my-2">Add New User</p>
        <div class="container">
            <div class="row justify-content-center">
                <form class="text-start" method="POST" action="sqlAddStudent.php">
                    <div class="mb-3">
                        <label for="inputstudentNo" class="form-label">Student No.</label>
                        <input type="Text" class="form-control" id="inputstudentNo" name="inputstudentNo" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputName" class="form-label">Name</label>
                        <input type="Text" class="form-control" id="inputName" name="inputName" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputAge" class="form-label">Age</label>
                        <input type="number" class="form-control" id="inputAge" name="inputAge" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputGender" class="form-label">Gender</label>
                        <select class="form-select" name="inputGender" required>
                            <option value="Male">Male</option>
                            <option value="Female ">Female</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="Text" class="form-control" id="inputAddress" name="inputAddress" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputContact" class="form-label">Contact</label>
                        <input type="number" class="form-control" id="inputContact" name="inputContact" required>
                    </div>
                    
                    <div class="mb-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary" onclick="checkPosition();">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>