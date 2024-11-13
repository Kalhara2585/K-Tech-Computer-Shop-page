<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "shop";
$port = 4306;

$conn = mysqli_connect($dbhost.':'.$port,$dbuser,$dbpass,$dbname);

// mysql connection eka
if (!$conn) {
  
  exit();
}
?>