<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "ecommerce_db";
define('SITE_URL','http://localhost/guithub_php_projects/phpcakeshop/admin-pannel/');

// Create connection
$conn = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

