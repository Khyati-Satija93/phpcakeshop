<?php
session_start();
include 'config.php';

$email = $_SESSION['email'];

// Collect form data
$password = $_POST['password'];
// Simple update query
$sql = "UPDATE Admin SET 
            password='$password'
        WHERE email = '$email'";

// Execute the query
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Profile updated successfully!');</script>";
     header("Location: profile.php"); 
} else {
    echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
}
?>
