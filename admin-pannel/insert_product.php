<?php
session_start();
include 'config.php'; // Database connection

if (isset($_POST['submit'])) {
    $pname = $_POST['productName'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $stock = $_POST['stock'];
    $category = $_POST['category'];

    // Image Upload Handling
    $target_dir = 'uploads/';
    $basename = basename($_FILES['image']['name']);
    $target_file = $target_dir . $basename;
    
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
        // Image uploaded successfully
    }

    // Fixed SQL: remove extra spaces in column names
    $sql = "INSERT INTO products (`productName`, `price`,  `description`, `image`, `category` , `stock`) 
            VALUES ('$pname', '$price', '$description', '$basename', '$category' , '$stock')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Product added successfully!');</script>";
        header("Location: product_list.php"); 
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
}
?>
