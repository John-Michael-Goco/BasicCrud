<?php
$conn = new mysqli('localhost', 'root', '', 'db_students');

if ($conn->connect_error) {
    die("Connection error: " . $conn->connect_error);
}