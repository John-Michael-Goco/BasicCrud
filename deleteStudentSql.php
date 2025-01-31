<?php
include '/includes/dbconn.php';

$studentID = $_GET['studentID'];

$newsID = mysqli_real_escape_string($conn, $agentID);

$sql = "UPDATE `agents` SET agentStatus = 'Inactive' WHERE agentID = '$agentID'";

$result = mysqli_query($conn, $sql);

if ($result) {
  // Successful deletion
  echo '<script>alert("News deleted successfully!");</script>';
} else {
  // Deletion failed
  echo '<script>alert("Failed to delete news!");</script>';
}

echo '<script>setTimeout(function(){ window.location.href = "../Agents.php"; }, 200);</script>';
exit(); // Make sure to exit after redirect