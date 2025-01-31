<?php
include 'includes/dbconn.php';
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
</head>
<body>
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
          <td>
            <a class="btn btn-success" href="addStudent.php?studentID=<?php echo $row['studentID']; ?>" data-toggle="tooltip" title="View">
              <i class="bi bi-eye-fill"></i>
            </a>
            <a class="btn btn-success" href="addStudent.php?studentID=<?php echo $row['studentID']; ?>" data-toggle="tooltip" title="View">
              <i class="bi bi-eye-fill"></i>
            </a>
          </td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</body>
</html>