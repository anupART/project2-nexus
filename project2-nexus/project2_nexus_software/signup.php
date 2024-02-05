<?php
$a = $_POST["signupusername"];
$b = $_POST["signuppass"]; // Updated to match your form field names

$host='localhost';
$user='root';
$password='';
$dbname='anup';
session_start();
$con=mysqli_connect($host,$user,$password,$dbname);
if(!$con)
    die("Connection issue: " . mysqli_connect_error());
else
    echo 'Connected successfully';

// Add additional form fields
$city = $_POST["city"];
$phone = $_POST["phone"];
$age = $_POST["age"];

$sql = "INSERT INTO `user` (username, password, city, phone, age) VALUES ('$a', '$b', '$city', '$phone', '$age')";
if(mysqli_query($con, $sql))
    echo "<br> User added successfully";
else
    echo 'Entry not created';

mysqli_close($con);
header("Location: http://localhost/anup/index.php");
// exit;
?>
