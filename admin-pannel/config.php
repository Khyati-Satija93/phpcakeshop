<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "ecommerce_db";
define('SITE_URL','http://localhost/php_projects/E-commerce/admin-pannel/');

// Create connection
$conn = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

