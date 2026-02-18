<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>CakeBliss – Checkout</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
<link href="style.css" rel="stylesheet">
</head>

<body>

<!-- Topbar -->
<?php
include "topbar.php";
?>

<div class="container py-5">
  <h3 class="fw-bold mb-4">Checkout</h3>

  <div class="row">

    <!-- Delivery Address -->
    <div class="col-md-8">
      <div class="border rounded p-4 mb-4">
        <h5 class="fw-bold mb-3">Delivery Details</h5>

        <div class="row g-3">
          <div class="col-md-6"><input class="form-control" placeholder="Full Name"></div>
          <div class="col-md-6"><input class="form-control" placeholder="Phone Number"></div>
          <div class="col-md-12"><input class="form-control" placeholder="Full Address"></div>
          <div class="col-md-6"><input class="form-control" placeholder="City"></div>
          <div class="col-md-6"><input class="form-control" placeholder="Pincode"></div>
        </div>
      </div>

      <!-- Payment -->
      <div class="border rounded p-4">
        <h5 class="fw-bold mb-3">Payment Method</h5>

        <div class="form-check mb-2">
          <input type="radio" class="form-check-input" name="pay"> Cash on Delivery
        </div>

        <div class="form-check">
          <input type="radio" class="form-check-input" name="pay"> UPI / Cards / NetBanking
        </div>
      </div>

    </div>

    <!-- Summary -->
    <div class="col-md-4">
      <div class="border rounded p-4">
        <h5 class="fw-bold mb-3">Order Summary</h5>

        <div class="d-flex justify-content-between">
          <span>Item Total</span> <span>₹599</span>
        </div>
        <div class="d-flex justify-content-between mb-3">
          <span>Delivery</span> <span>₹40</span>
        </div>
        <hr>
        <div class="d-flex justify-content-between fw-bold mb-3">
          <span>Total</span> <span>₹639</span>
        </div>

        <button class="btn-orange w-100">Place Order</button>
      </div>
    </div>

  </div>
</div>

<!-- Footer -->
<?php
include "footer.php";
?>

</body>
</html>
