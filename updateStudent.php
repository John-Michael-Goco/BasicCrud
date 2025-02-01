<?php
include 'includes/dbconn.php';
$studentID = $_GET['studentID'];

$sql = "SELECT * FROM `students-info` WHERE `studentID` = '{$studentID}'";
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();
$studentID = $row['studentID'];
$studentNo= $row['studentNo'];
$name = $row['Name'];
$age = $row['Age'];
$gender = $row['Gender'];
$address = $row['Address'];
$contact = -$row['Contact'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Info</title>

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
    <div class="container">
    <div class="card mt-4 shadow">
        <div class="card-header">
        <h4 class="mb-0">
            <a href="index.php" class="btn btn-danger"><i class="fas fa-angle-double-left"></i></a>
                &nbsp; Edit Student - See IDS Below</h4>
            

        </div>
    <!--Container Main start-->
    <div class="card-body">                           
            <form class="text-start" method="POST" action="./update.php?studentID=<?php echo $row['studentID']; ?>">
                <div class="row justify-content-center">
                    <div class="col-md-6 mb-3">
                        <label for="inputStudentNo" class="form-label">Student No</label>
                        <input type="Text" class="form-control" id="inputStudentNo" name="inputStudentNo" value="<?php echo $studentNo; ?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="inputName" class="form-label">Name</label>
                        <input type="Text" class="form-control" id="inputName" name="inputName" value="<?php echo $name; ?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="inputAge" class="form-label">Age</label>
                        <input type="Text" class="form-control" id="inputAge" name="inputAge" value="<?php echo $age; ?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="inputGender" class="form-label">Gender</label>
                        <input type="Text" class="form-control" id="inputGender" name="inputGender" value="<?php echo $gender; ?>" required>            
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="Text" class="form-control" id="inputAddress" name="inputAddress" value="<?php echo $address; ?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="inputContact" class="form-label">Contact</label>
                        <input type="number" class="form-control" id="inputContact" name="inputContact" value="<?php echo $contact; ?>" required>
                    </div>
                    <div class="mb-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </table>


</body>
</html>