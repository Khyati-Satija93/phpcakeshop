<?php
session_start();
include 'config.php';

$id = $_GET['id']; // Get the product ID from the URL parameter
$sql = "DELETE FROM `products` WHERE `id` = $id";
if ($conn->query($sql) === TRUE) {
    header("Location: product_list.php");
} else {
    echo "Error: " . $conn->error;
}
?>
