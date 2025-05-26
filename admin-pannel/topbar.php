<link rel="stylesheet" href="css/style.css">

<?php 
$email = $_SESSION['email']; // Get user email from session

// Fetch user details using prepared statement
$result = mysqli_query($conn, "SELECT * FROM admin WHERE email = '$email'");
$user = mysqli_fetch_assoc($result);
if (!$user) {
    echo "User not found!";
    exit();
}

$search = (isset($_GET['search'])) ? $_GET['search'] : ''; 
?>

<!-- Topbar -->
<div class="topbar d-flex justify-content-between align-items-center">
  <div class="form-container">
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="GET">
          <div class="input-group mb-3 shadow-sm rounded-pill overflow-hidden">
              <input type="text" name="search" value="<?=$search?>" class="form-control border-0 py-1 px-3" placeholder="search product..." aria-label="Search term">
              <button class="btn btn-outline-warning px-4 search-btn rounded" type="submit">
                  <i class="bi bi-search animated-icon"></i>
              </button>
          </div>
      </form>
  </div>
  <div class="d-flex align-items-center gap-3">
    <i class="bi bi-bell position-relative fs-5">
      <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill" style="background-color: #f08632; color: #fff;" >3</span>
    </i>
    <i class="bi bi-gear fs-5"></i>
    <div class="dropdown">
    <?php
    $profileImg = !empty($user['Profile_image']) ? $user['Profile_image'] : 'default.png'; // make sure 'default.png' exists in uploads/
    ?>
    <img src="uploads/<?= htmlspecialchars($profileImg) ?>" class="rounded-circle" alt="profile" width="35" height="35" data-bs-toggle="dropdown" aria-expanded="false">

    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="profile.php"><i class="bi bi-person me-2"></i>Profile</a></li>
      <li><a class="dropdown-item text-danger" href="logout.php"> <i class="bi bi-box-arrow-right me-2"></i>Logout</a></li>
    </ul>
    </div>
  </div>
</div>
