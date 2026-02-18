<?php
session_start();
include 'config.php';

$id = $_GET['product_id']; // Get the product ID from the URL parameter
$sql = "DELETE FROM `products` WHERE `product_id` = $id";
if ($conn->query($sql) === TRUE) {
    header("Location: product_list.php");
} else {
    echo "Error: " . $conn->error;
}
?>
