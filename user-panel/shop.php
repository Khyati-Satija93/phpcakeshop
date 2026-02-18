<!-- Topbar -->
<?php
include "topbar.php";
?>
  <!-- Page Header -->
    <div class="text-center">
      <h3 class="fw-bold mt-4">Our Cakes</h3>
      <p class="text-muted">Freshly baked with love</p>
    </div>

  <!-- FILTER + SEARCH SECTION-->
    <section class="container py-4">
    <div class="row g-3 align-items-center">

        <!-- Search Bar -->
        <div class="col-md-4">
        <input type="text" class="form-control rounded-pill" placeholder="Search cakes...">
        </div>

        <!-- Category Filter -->
        <div class="col-md-3">
        <select class="form-select rounded-pill">
            <option selected disabled>Filter by Category</option>
            <option>Chocolate Cakes</option>
            <option>Red Velvet</option>
            <option>Photo Cakes</option>
            <option>Fruit Cakes</option>
            <option>Designer Cakes</option>
        </select>
        </div>

        <!-- Price Filter -->
        <div class="col-md-3">
        <select class="form-select rounded-pill">
            <option selected disabled>Price Range</option>
            <option>Under ₹499</option>
            <option>₹500 - ₹999</option>
            <option>₹1000 - ₹1499</option>
            <option>₹1500 & Above</option>
        </select>
        </div>

        <!-- Sort -->
        <div class="col-md-2">
        <select class="form-select rounded-pill">
            <option selected disabled>Sort By</option>
            <option>Newest First</option>
            <option>Price: Low to High</option>
            <option>Price: High to Low</option>
            <option>Best Selling</option>
        </select>
        </div>
    </div>

    <!-- Delivery Filters (Button Group) -->
    <div class="mt-4 d-flex flex-wrap gap-2">

        <button class="btn btn-outline-dark rounded-pill px-4">
        Same Day Delivery
        </button>

        <button class="btn btn-outline-dark rounded-pill px-4">
        Midnight Delivery
        </button>

        <button class="btn btn-outline-dark rounded-pill px-4">
        2 Hour Delivery
        </button>

        <button class="btn btn-outline-dark rounded-pill px-4">
        Best Seller Cakes
        </button>

    </div>
    </section>


  <!-- Product Grid -->
  <section class="container py-5">
    <div class="row g-4">

      <div class="col-md-3">
        <div class="cake-card">
          <img src="https://images.unsplash.com/photo-1599785209707-28bb3167c5d6?w=300">
          <div class="cake-card-title"><a href="product.php">Chocolate Truffle Cake</div></a>
          <div class="price">₹599</div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="cake-card">
          <img src="https://images.unsplash.com/photo-1505935428862-770b6f24f629?w=300">
          <div class="cake-card-title"><a href="product.php">Red Velvet Cake</div></a>
          <div class="price">₹699</div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="cake-card">
          <img src="https://images.unsplash.com/photo-1519864602471-937bda6235b6?w=300">
          <div class="cake-card-title">Vanilla Cake</div>
          <div class="price">₹499</div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="cake-card">
          <img src="https://images.unsplash.com/photo-1589308078055-369abc6b5035?w=300">
          <div class="cake-card-title">Fruit Cake</div>
          <div class="price">₹799</div>
        </div>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <?php
  include "footer.php";
  ?>

</body>
</html>
