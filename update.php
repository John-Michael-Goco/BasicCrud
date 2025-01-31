<?php
include 'includes/dbconn.php';

$studentID = $_GET['studentID'];
$userID = $_POST['inputNo'];
$name = $_POST['inputName'];
$age = $_POST['inputAge'];
$gender = $_POST['inputGender'];
$address = $_POST['inputAddress'];
$contact = $_POST['inputContact'];

$sql = "UPDATE `students-info` SET Name = '$name', Age = '$age', Gender = '$gender', Address = '$address', Contact = '$contact' WHERE studentID = '$studentID'";

$result = mysqli_query($conn, $sql);

header('Location: index.php')
?>