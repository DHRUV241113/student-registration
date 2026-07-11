<?php
include("database.php");

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO students(fullname,email,password)
VALUES('$fullname','$email','$password')";

if(mysqli_query($conn,$sql)){
    header("Location: index.php");
    exit();
}else{
    echo "Registration Failed";
}
?>