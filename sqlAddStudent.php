<?php
include 'includes/dbconn.php';

$studentNo = $_POST['inputstudentNo'];
$Name = $_POST['inputName'];
$Age = $_POST['inputAge'];
$Gender = $_POST['inputGender'];
$Address = $_POST['inputAddress'];
$Contact = $_POST['inputContact'];

$sql = "INSERT INTO `students-info` (studentNo ,Name, Age, Gender, Address, Contact) VALUES ('$studentNo', '$Name', '$Age', '$Gender', '$Address', '$Contact')";

$result = mysqli_query($conn, $sql);

header('Location: index.php')
?>