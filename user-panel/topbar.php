<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CakeBliss – Fresh Cake Delivery</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"rel="stylesheet"/>

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>

  <!--Custom Css-->
   <link href="style.css" rel="stylesheet">
</head>
<body>
 <!-- Top bar -->
<div class="top-bar text-center py-1 small">
  Same-Day Delivery Across City • Call +91-9876543210
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white py-3 minimalist-nav">
  <div class="container">

    <!-- Logo -->
    <a href="index.php">
      <img src="images/logo2f.png" width="130" height="90" class="d-inline-block align-top" alt="CakeBliss.">
    </a>

    <!-- Mobile Toggle -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainNav">

      <!-- Search Bar -->
      <form class="d-flex align-items-center ms-lg-5 my-3 my-lg-0 flex-grow-1 nav-search">
        <div class="location-btn me-2">📍 Deliver To</div>
        <input
          class="form-control search-input"
          type="search"
          placeholder="Search cakes, pastries, cookies…"
        />
      </form>

      <!-- Menu Links -->
      <ul class="navbar-nav ms-lg-4 align-items-lg-center gap-lg-3 modern-links">

        <li class="nav-item">
          <a class="nav-link" href="#">Track Order</a>
        </li>

        <!-- CART -->
        <li class="nav-item position-relative">
          <a class="nav-link position-relative" href="cart.php">
            <i class="bi bi-bag fs-5"></i>
            <span class="cart-count">2</span>
          </a>
        </li>

        <!-- USER -->
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="bi bi-person fs-5"></i>
          </a>
        </li>

        <!-- LOGIN -->
        <li class="nav-item">
          <a class="nav-link" href="login.php">
            <i class="bi bi-box-arrow-in-right fs-5"></i>
          </a>
        </li>

        <!-- WISHLIST -->
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="bi bi-heart fs-5"></i>
          </a>
        </li>

      </ul>

    </div>
  </div>
</nav>