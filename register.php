<?php

session_start();

$conn = new mysqli('localhost','root','','studentregester');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$rollno = $_POST['rollno'];
$m1 = $_POST['m1'];
$m2 = $_POST['m2'];

$stmt = $conn->prepare("insert into student(firstname , lastname , age , rollno , m1 , m2) values(?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssi", $firstname, $lastname, $age, $rollno, $m1, $m2);
$execval = $stmt->execute();
echo $execval;
header("Location: yes.html");
$stmt->close();
$conn->close();


?>