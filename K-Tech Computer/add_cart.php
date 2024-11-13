<?php
require 'dbcon.php';



$name = htmlspecialchars($_POST['name']);
$price = htmlspecialchars($_POST['price']);
$uid = 1;

//$sql = "INSERT INTO users (uid ,name, price) VALUES (1,'JohnDoe', 'john@example.com')";
$sql = "INSERT INTO cart (uid ,name, price) VALUES ('$uid' ,'$name', '$price')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: cart.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

 /*
echo $name;
echo $price;
*/