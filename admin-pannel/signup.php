<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign up</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS & Css  -->
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
  <!-- Custom CSS -->
</head>
<body>
<div class="container-fluid">
    <div class="login"> 
    <div class="login-box ">
      <div class="text-center mb-4">
        <h4>Sign up </h4>
      </div>
     <form action="insert-admin.php" method="post">
        <div class="mb-3">
                <label for="signupName" class="form-label">Name</label>
                <input type="text" required name="name" class="form-control" id="signupName" placeholder="Enter your name">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Email address" required>
        </div>
        <div class="mb-2">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password"required>
        </div>
        <div class="mb-2">
          <label for="confirmPassword" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password" name="confirm_password"required>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="remember">
            <label class="form-check-label" for="remember">I agree to Portal's Terms of Service and Privacy Policy.</label>
          </div>
        </div>
        <button type="submit" class="btn btn-warning w-100">SIGN UP</button>
      </form>
      <p class="text-center mt-3">Already have an account? <a href="login.php">Log in</a>.</p>
      </div>
    </div>
  </div>
</body>
</html>
