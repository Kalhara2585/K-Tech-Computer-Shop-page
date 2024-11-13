<?php

require 'dbcon.php';



$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$pass = htmlspecialchars($_POST['password']);



$sql = "INSERT INTO reg (name ,email, num ,pass) VALUES ('$name' ,'$email', '$phone','$pass')";

if ($conn->query($sql) === TRUE) {
    echo "Register successfully";
    header("Location: reg.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}