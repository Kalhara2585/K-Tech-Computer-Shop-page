<?php
require 'dbcon.php';



$id = htmlspecialchars($_GET['id']);

$sql = "DELETE FROM cart WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: cart.php");
} else {
    echo "Error deleting record: " . $conn->error;
}