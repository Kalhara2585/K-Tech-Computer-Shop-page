

<?php
session_start();
require 'dbcon.php'; // Include your database connection

$inputUsername = htmlspecialchars($_POST['email']);
$inputPassword = htmlspecialchars($_POST['password']);

// Prepare and execute the SQL statement
$stmt = $conn->prepare("SELECT pass FROM reg WHERE email = ?");
$stmt->bind_param("s", $inputUsername);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    // Bind result variable
    $stmt->bind_result($storedPassword);
    $stmt->fetch();

    // Check the password validation  
    if ($inputPassword === $storedPassword) {
        
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $inputUsername;

        // Redirect to the next page
        header("Location: store.php");
        exit;
    } else {
        echo "Invalid password. <a href='index.php'>Try again</a>";
    }
} else {
    echo "Invalid email. <a href='index.php'>Try again</a>";
}

$stmt->close();
$conn->close();
?>
