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

    
    <!-- Icons -->
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        .card-header {
          background-color:rgb(48, 48, 48);
          color: #fff;
        }

        .card {
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
          transition: 0.3s;
        }
    </style>
</head>
<body>
    <!--Container Main start-->
    <div class="container">
    <div class="card mt-4 shadow">
        <div class="card-header">  
            <h4 class="mb-0">
            <a href="index.php" class="btn btn-danger"><i class="fas fa-angle-double-left"></i></a>
                &nbsp; Add Student</h4>
            

        </div>
        <div class="card-body">
            <form class="text-start" method="POST" action="sqlAddStudent.php">
            <div class="row justify-content-center">
                
                    <div class="col-md-6 mb-3">
                        <label for="inputstudentNo" class="form-label">Student No.</label>
                        <input type="Text" class="form-control" id="inputstudentNo" name="inputstudentNo" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="inputName" class="form-label">Name</label>
                        <input type="Text" class="form-control" id="inputName" name="inputName" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="inputAge" class="form-label">Age</label>
                        <input type="number" class="form-control" id="inputAge" name="inputAge" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="inputGender" class="form-label">Gender</label>
                        <input type="Text" class="form-control" id="inputGender" name="inputGender" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="Text" class="form-control" id="inputAddress" name="inputAddress" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="inputContact" class="form-label">Contact</label>
                        <input type="number" class="form-control" id="inputContact" name="inputContact" required>
                    </div>
                    
                    <div class="mb-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>

                    </div>
                </form>
            </div>
        </div>

    </div>
</body>
</html>