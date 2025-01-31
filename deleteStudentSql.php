<?php
include 'includes/dbconn.php';

$studentID = $_GET['studentID'];

$sql = "DELETE FROM `students-info` WHERE studentID = '$studentID'";

$result = mysqli_query($conn, $sql);

if ($result) {
  // Successful deletion
  echo '<script>alert("Student deleted successfully!");</script>';
} else {
  // Deletion failed
  echo '<script>alert("Failed to delete student info!");</script>';
}

echo '<script>setTimeout(function(){ window.location.href = "index.php"; }, 200);</script>';
exit(); // Make sure to exit after redirect