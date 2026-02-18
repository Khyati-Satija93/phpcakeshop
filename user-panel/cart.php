<!-- Topbar -->
<?php
include "topbar.php";
?>
<div class="container py-5">

  <h3 class="fw-bold mb-4">Your Cart</h3>

  <div class="row">
    <div class="col-md-8">

      <!-- cart item -->
      <div class="d-flex align-items-center p-3 border rounded mb-3">
        <img src="https://images.unsplash.com/photo-1505935428862-770b6f24f629?w=200" width="90" height="90" class="rounded">
        <div class="ms-3 flex-grow-1">
          <h6 class="fw-bold mb-1">Chocolate Truffle Cake</h6>
          <p class="price mb-0">₹599</p>
        </div>
        <input type="number" class="form-control w-25" value="1">
      </div>

    </div>

    <!-- summary -->
    <div class="col-md-4">
      <div class="border rounded p-3">
        <h5 class="fw-bold mb-3">Order Summary</h5>

        <div class="d-flex justify-content-between mb-2">
          <span>Subtotal</span> <span>₹599</span>
        </div>

        <div class="d-flex justify-content-between mb-3">
          <span>Delivery</span> <span>₹40</span>
        </div>

        <hr>

        <div class="d-flex justify-content-between fw-bold mb-3">
          <span>Total</span> <span>₹639</span>
        </div>

        <a href="checkout.php" class="btn-orange w-100 text-center d-block">Proceed to Checkout</a>
      </div>
    </div>
  </div>

</div>

 <!-- Footer -->
<?php
include "footer.php";
?>
