<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CakeBliss – Track Order</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>

<style>
  body{font-family:Inter,sans-serif;}
  .step-box{border-left:4px solid #ff7a3d;padding:15px;margin-bottom:20px;background:#fff;}
  .step-title{font-weight:600;}
</style>
</head>

<body>

<div class="top-bar text-center py-1 small" style="background:#f96d00;color:#fff;">
  Same-Day Delivery Across City • Call +91-9876543210
</div>

<nav class="navbar navbar-expand-lg bg-white py-3 border-bottom minimalist-nav">
  <div class="container">
    <a class="navbar-brand fw-bold fs-3 text-orange">CakeBliss.</a>
  </div>
</nav>

<div class="container py-5">

  <h3 class="fw-bold mb-4">Track Your Order</h3>

  <div class="mb-4">
    <input class="form-control" placeholder="Enter Order ID">
  </div>

  <button class="btn btn-dark mb-5">Track Now</button>

  <!-- Tracking Steps -->
  <div class="step-box shadow-sm">
    <div class="step-title">Order Confirmed</div>
    <small class="text-muted">Your order has been placed successfully.</small>
  </div>

  <div class="step-box shadow-sm">
    <div class="step-title">Cake Being Prepared</div>
    <small class="text-muted">Our chef is preparing your delicious cake.</small>
  </div>

  <div class="step-box shadow-sm">
    <div class="step-title">Out for Delivery</div>
    <small class="text-muted">Your cake is on the way.</small>
  </div>

  <div class="step-box shadow-sm">
    <div class="step-title">Delivered</div>
    <small class="text-muted">Package delivered successfully.</small>
  </div>

</div>

</body>
</html>
