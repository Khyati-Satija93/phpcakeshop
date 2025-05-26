<?php
session_start();
include 'config.php';

$email = $_SESSION['email'];

// Collect form data
$name = $_POST['name'];
$email = $_POST['email'];
$location = $_POST['location'];
$website = $_POST['website'];
// Handle file upload
$target_dir = 'uploads/';
$basename = basename($_FILES['Profile_image']['name']);
$target_file = $target_dir . $basename;

if (move_uploaded_file($_FILES['Profile_image']['tmp_name'], $target_file)) {
    // Image uploaded successfully
}

// Simple update query
$sql = "UPDATE Admin SET 
            Name='$name', 
            location='$location', 
            website='$website', 
            Profile_image='$basename'
        WHERE email = '$email'";

// Execute the query
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Profile updated successfully!');</script>";
     header("Location: profile.php"); 
} else {
    echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
}
?>
