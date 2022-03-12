<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, "iwp_project");
if ($conn->connect_error) {
  die("Connection failed: ".$conn->connect_error);
}

$us  = $_REQUEST['username'];
$rollno  = $_REQUEST['rollno'];
$phno  = $_REQUEST['phno'];
$email = $_REQUEST['email'];
$pass  = $_REQUEST['pass'];
$repass  = $_REQUEST['repass'];

$sql = "INSERT INTO info  VALUES('$us','$pass')";
if(mysqli_query($conn, $sql)){
} else{}
header("Location: http://localhost/Software_Engineering-/signup.html");
exit;
$conn->close();
?>