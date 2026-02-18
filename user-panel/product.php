<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CakeBliss – Product Details</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>

  <!-- Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

  <style>
    body { font-family: "Inter", sans-serif; background:#fff; }

    .product-image {
      width: 100%;
      border-radius: 10px;
      object-fit: cover;
    }

    .thumbs img {
      width: 90px;
      height: 90px;
      object-fit: cover;
      margin-bottom: 10px;
      border-radius: 8px;
      cursor: pointer;
      border: 2px solid #eee;
      transition: 0.3s ease;
    }

    .thumbs img:hover {
      border-color: #f96d00;
    }

    .build-cake label {
      margin-top: 12px;
      font-weight: 600;
    }

    .btn-primary {
      background: #f96d00;
      border: none;
    }
    .btn-primary:hover {
      background: #e06100;
    }

    .btn-outline-dark:hover {
      background:#000;
      color:#fff;
    }
  </style>
</head>
<body>

  <!-- NAVBAR -->
  <?php include("topbar.php"); ?>
  <!-- Product Section -->
  <div class="container py-5">
    <div class="row g-4">

      <!-- Left: Images -->
      <div class="col-md-5">
        <img src="https://images.unsplash.com/photo-1614707267537-3ec1c34c545f" class="product-image" alt="Chocolate Truffle Cake">

        <div class="thumbs mt-3 d-flex flex-column">
          <img src="https://images.unsplash.com/photo-1614707267537-3ec1c34c545f" alt="thumb1">
          <img src="https://images.unsplash.com/photo-1599785209707-28bb3167c5d6" alt="thumb2">
          <img src="https://images.unsplash.com/photo-1505935428862-770b6f24f629" alt="thumb3">
        </div>
      </div>

      <!-- Right: Product info -->
      <div class="col-md-7">
        <h2 class="fw-semibold">Chocolate Truffle Cake</h2>

        <p>
          <span class="badge bg-success">Eggless</span>
          &nbsp;
          <strong>&#8377; 595</strong>
        </p>

        <p class="text-muted">Make this gift extra special by customizing it below.</p>

        <!-- Build your cake -->
        <div class="build-cake">

          <label for="cakeSize">Choose Cake Size:</label>
          <select id="cakeSize" class="form-select">
            <option>0.5 Kg</option>
            <option>1 Kg</option>
            <option>2 Kg</option>
          </select>

          <label for="frosting">Select Frosting:</label>
          <select id="frosting" class="form-select">
            <option>Chocolate</option>
            <option>Vanilla</option>
            <option>Strawberry</option>
          </select>

          <label for="cakeMessage">Custom Message on Cake:</label>
          <input type="text" class="form-control" maxlength="25" placeholder="Write your message here">

          <label for="shape">Shape of Cake:</label>
          <select id="shape" class="form-select">
            <option>Round</option>
            <option>Heart</option>
            <option>Square</option>
          </select>

        </div>

        <button class="btn btn-primary mt-3">Add to Cart</button>
        <button class="btn btn-outline-dark mt-3">Buy Now | &#8377; 595</button>

        <div class="mt-4">
          <h5>Product Details</h5>
          <ul>
            <li>Flavour: Chocolate</li>
            <li>Shape: Round (customizable)</li>
            <li>Type: Cream Cake</li>
            <li>Toppings: Dark Chocolate</li>
            <li>Allergens: Milk, Nuts, Wheat (Gluten)</li>
          </ul>
        </div>

        <div class="mt-4">
          <h5>Care Instructions</h5>
          <ul>
            <li>Keep refrigerated.</li>
            <li>Use a serrated knife for clean slices.</li>
            <li>Consume within 24 hours.</li>
            <li>Avoid direct sunlight.</li>
          </ul>
        </div>

      </div>
    </div>
  </div>

  <!-- RELATED PRODUCTS -->
<div class="container mt-5">
  <h3 class="fw-bold mb-3">You May Also Like</h3>

  <div class="row g-4">

    <div class="col-md-3 col-6">
      <div class="related-product">
        <img src="https://picsum.photos/id/200/400" class="img-fluid mb-2">
        <h6 class="fw-semibold">Women's Kurti</h6>
        <span class="fw-bold">₹799</span>
      </div>
    </div>

    <div class="col-md-3 col-6">
      <div class="related-product">
        <img src="https://picsum.photos/id/201/400" class="img-fluid mb-2">
        <h6 class="fw-semibold">Denim Shirt</h6>
        <span class="fw-bold">₹999</span>
      </div>
    </div>

    <div class="col-md-3 col-6">
      <div class="related-product">
        <img src="https://picsum.photos/id/202/400" class="img-fluid mb-2">
        <h6 class="fw-semibold">Printed Top</h6>
        <span class="fw-bold">₹699</span>
      </div>
    </div>

    <div class="col-md-3 col-6">
      <div class="related-product">
        <img src="https://picsum.photos/id/203/400" class="img-fluid mb-2">
        <h6 class="fw-semibold">Sandals</h6>
        <span class="fw-bold">₹1,199</span>
      </div>
    </div>

  </div>
</div>

  <!-- FOOTER -->
   <?php include("footer.php"); ?>

</body>
</html>
