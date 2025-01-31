<?php
include '../includes/dbconn.php';
session_start();
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
</head>
<body>
    <!--Container Main start-->
    <div class="bg-body text-center">
        <div class="text-start">
        <a href="../index.php" class="btn btn-primary mt-3">Back</a>
        </div>
        <p class="text-start fw-bold fs-3 my-2">Edit User - See IDS Below</p>
        <div class="container">
            <div class="row justify-content-center">
                <form class="text-start" method="POST" action="./sql/update.php">
                    <div class="mb-3">
                        <label for="inputID" class="form-label">ID</label>
                        <input type="Text" class="form-control" id="inputID" name="inputID" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputAge" class="form-label">Age</label>
                        <input type="Text" class="form-control" id="inputAge" name="inputAge" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputGender" class="form-label">Gender</label>
                        <input type="Text" class="form-control" id="inputGender" name="inputGender" required>
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
                        <button type="submit" class="btn btn-primary" onclick="checkPosition();">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <table id="studentsTable" class="table table-hover table-dark" style="width:100%">
    <thead>
      <tr>
        <th>Students ID</th>
        <th>Student No.</th>
        <th>Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Contact</th>
        <th>Add</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = 'SELECT * FROM `students-info`';
      $result = mysqli_query($conn, $sql);

      while ($row = mysqli_fetch_assoc($result)) {
      ?>
        <tr>
          <td><?php echo $row['studentID']; ?></td>
          <td><?php echo $row['studentNo']; ?></td>
          <td><?php echo $row['Name']; ?></td>
          <td><?php echo $row['Age']; ?></td>
          <td><?php echo $row['Gender']; ?></td>
          <td><?php echo $row['Address']; ?></td>
          <td><?php echo $row['Contact']; ?></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>


</body>
</html>