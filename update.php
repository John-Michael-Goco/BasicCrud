<?php
include 'includes/dbconn.php';

$studentID = $_GET['studentID'];
$studentNo = $_POST['inputStudentNo'];
$name = $_POST['inputName'];
$age = $_POST['inputAge'];
$gender = $_POST['inputGender'];
$address = $_POST['inputAddress'];
$contact = $_POST['inputContact'];

$sql = "UPDATE `students-info` SET StudentNo = '$studentNo', Name = '$name', Age = '$age', Gender = '$gender', Address = '$address', Contact = '$contact' WHERE studentID = '$studentID'";

$result = mysqli_query($conn, $sql);

header('Location: index.php')
?>