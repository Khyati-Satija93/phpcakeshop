<?php
session_start();
include('config.php'); // Include database connection

// Variables to store user input
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Check if all fields are set
    if (isset($_POST['name'], $_POST['email'], $_POST['password'], $_POST['confirm_password'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm = $_POST['confirm_password'];

        // Check if passwords match
        if ($password !== $confirm) {
            echo "Passwords do not match!";
            exit;
        }

        // Hash password with md5
        $hashed_password = md5($password);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Insert into users table
        $sql = "INSERT INTO admin (Name, email, password) VALUES ('$name', '$email', '$hashed_password')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Sign up successful!');</script>";
            header("Location: login.php");
        } else {
            echo "Error: " . $conn->error;
        }

        $conn->close();
    } else {
        echo "Please fill all fields.";
    }
} else {
    echo "Invalid request.";
}
?>
