<?php
session_start();
if(!isset($_SESSION['loggedin'])|| !isset($_SESSION['email'])){
    header('Location:login.php');
    exit;
}
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Account</title>
  <link href="style.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
<?php include 'sidebar.php'; ?>
<?php include 'topbar.php'; ?>

<div class="row" style="max-width: 1000px; margin-left: 320px; margin-top: 30px;">
  <!-- Left Column -->
  <div class="col-md-7">
    <div class="card shadow-sm rounded-4 p-4 mb-4">
      <div class="d-flex align-items-center mb-4">
        <h4 class="mb-0">Profile</h4>
      </div>

      <form action="update_account.php" method="POST" enctype="multipart/form-data">
        <!-- Photo -->
        <div class="border-bottom text-center py-3">
          <div>
            <img src="uploads/<?php echo htmlspecialchars($user['Profile_image']); ?>" alt="Profile" class="rounded-circle mb-2" width="100" height="100" id="profileImage">
          </div>
          <div>
            <input type="file" name="Profile_image" class="form-control d-none" id="photoInput">
            <button type="button" class= "btn btn-outline-warning btn-sm mt-1" onclick="document.getElementById('photoInput').click()"><i class='bi bi-pencil-square'></i></button>
          </div>
        </div>

        <!-- Email -->
        <div class="d-flex align-items-center justify-content-between border-bottom py-3">
          <div>
            <strong>Email</strong><br>
            <?= htmlspecialchars($user['email']) ?>
            <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" class="form-control d-none mt-2" id="emailInput">
          </div>
        </div>
        
        <!-- Name -->
        <div class="d-flex align-items-center justify-content-between border-bottom py-3">
          <div>
            <strong>Name</strong><br>
            <?= htmlspecialchars($user['Name']) ?>
            <input type="text" name="name" value="<?= htmlspecialchars($user['Name']) ?>" class="form-control d-none mt-2" id="nameInput">
          </div>
          <button type="button" class="btn btn-outline-warning btn-sm" onclick="toggleInput('nameInput')"><i class='bi bi-pencil-square'></i></button>
        </div>

        <!-- Website -->
        <div class="d-flex align-items-center justify-content-between border-bottom py-3">
          <div>
            <strong>Website</strong><br>
            <?= htmlspecialchars($user['website']) ?>
            <input type="url" name="website" value="<?= htmlspecialchars($user['website']) ?>"  class="form-control d-none mt-2" id="websiteInput">
          </div>
          <button type="button" class="btn btn-outline-warning btn-sm" onclick="toggleInput('websiteInput')"><i class='bi bi-pencil-square'></i></button>
        </div>

        <!-- Location -->
        <div class="d-flex align-items-center justify-content-between border-bottom py-3">
          <div>
            <strong>Location</strong><br>
            <?= htmlspecialchars($user['location']) ?>
            <input type="text" name="location" value="<?= htmlspecialchars($user['location']) ?>" class="form-control d-none mt-2" id="locationInput">
          </div>
          <button type="button" class="btn btn-outline-warning btn-sm" onclick="toggleInput('locationInput')"><i class='bi bi-pencil-square'></i></button>
        </div>

        <!-- Save Button -->
        <div class="mt-4 text-end">
          <button type="submit" class="btn btn-warning">Update Profile</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Right Column (Password Box) -->
  <div class="col-md-5">
    <div class="card shadow-sm rounded-4 p-4 mb-4">
      <h5 class="mb-3">Security</h5>
      <form action="update_password.php" method="POST">
      <!-- Password -->
      <div class="d-flex align-items-center justify-content-between border-bottom py-3">
        <div>
          <strong>Password</strong><br>
          <span id="passwordDisplay"><strong>........</strong></span>
          <input type="password" name="password" value="" class="form-control d-none mt-2" id="passwordInput" required>
        </div>
        <button type="button" class="btn btn-outline-warning btn-sm" onclick="toggleInput('passwordInput')"><i class='bi bi-pencil-square'></i></button>
      </div>
      <div class="mt-4 text-end">
          <button type="submit" class="btn btn-warning">Update Security</button>
    </div>
    </div>
  </div>
</div>

<script>
  function toggleInput(id) {
    const input = document.getElementById(id);
    if (input.classList.contains('d-none')) {
      input.classList.remove('d-none');
      input.focus();
    } else {
      input.classList.add('d-none');
    }
  }
</script>
 <!-- Bootstrap -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>