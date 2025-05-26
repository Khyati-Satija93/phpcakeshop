<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login </title>
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
        <div class="logo mb-2"><i class="bi bi-infinity"></i></div>
          <h4>Log in </h4>
        </div>
        <?php
                if(isset($_SESSION['error'])){ ?>
                <div class="alert alert-danger" role="alert">
                    <?php    
                    echo $_SESSION['error'];
                    unset($_SESSION['error']); 
                    ?>
                </div>
                <?php }                ?>
      <form action="checkusers.php" method="post">
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Email address">
          </div>
          <div class="mb-2">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
          </div>
          <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="remember">
              <label class="form-check-label" for="remember">Remember me</label>
            </div>
            <a href="#" class="small">Forgot password?</a>
          </div>
          <button type="submit" name="submit" class="btn btn-warning w-100">Log In</button>
        </form>
      <p class="text-center mt-3">No Account? <a href="signup.php">Sign up here</a>.</p>
    </div>
    </div>
  </div>

</body>
</html>
