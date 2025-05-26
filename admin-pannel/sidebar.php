<link rel="stylesheet" href="css/style.css">


<!-- Sidebar -->
<div class="sidebar p-3">
  <a href="#" class="d-flex align-items-center mb-3 text-decoration-none">
    <i class="bi bi-cupcake fs-3 me-2 text-success"></i>
    <img src ="images/logo.png" alt="logo" width="100px" height="40px">
  </a>
  <hr>
  <ul class="nav nav-pills flex-column mb-auto">
    <li class="nav-item">
      <a href="index.php" class="nav-link active"><i class="bi bi-house-door me-2"></i> Dashboard</a>
    </li>

    <li>
    <a class="nav-link link-dark d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#productsCollapse" role="button" aria-expanded="false">
        <span><i class="bi bi-box-seam me-2"></i> Products</span>
        <i class="bi bi-chevron-down"></i>
    </a>
    <div class="collapse" id="productsCollapse">
        <ul class="btn-toggle-nav list-unstyled fw-normal small ps-3">
        <li>
            <a href="add_product.php" class="nav-link link-dark">
            <i class="bi bi-plus-square me-2"></i> Add Product
            </a>
        </li>
        <li>
            <a href="product_list.php" class="nav-link link-dark">
            <i class="bi bi-card-list me-2"></i> Product List
            </a>
        </li>
        </ul>
    </div>
    </li>
    <li><a href="#" class="nav-link link-dark"><i class="bi bi-basket3"></i> Orders</a></li>
    <li>
    
      <a class="nav-link link-dark d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#customCollapse" role="button">
        <span><i class="bi bi-brush"></i> Custom Cakes</span><i class="bi bi-chevron-down"></i>
      </a>
      <div class="collapse" id="customCollapse">
        <ul class="btn-toggle-nav list-unstyled fw-normal small ps-3">
          <li><a href="#" class="nav-link link-dark"><i class="bi bi-envelope-plus me-2"></i> New Requests</a></li>
          <li><a href="#" class="nav-link link-dark"><i class="bi bi-hourglass-split me-2"></i> In Progress</a></li>
          <li><a href="#" class="nav-link link-dark"><i class="bi bi-check2-circle me-2"></i> Completed</a></li>
        </ul>
      </div>
    </li>
    <li>
      <a class="nav-link link-dark d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#offersCollapse" role="button">
        <span><i class="bi bi-gift me-2"></i> Offers & Coupons</span><i class="bi bi-chevron-down"></i>
      </a>
      <div class="collapse" id="offersCollapse">
        <ul class="btn-toggle-nav list-unstyled fw-normal small ps-3">
          <li><a href="#" class="nav-link link-dark"><i class="bi bi-megaphone me-2"></i> Create Offer</a></li>
          <li><a href="#" class="nav-link link-dark"><i class="bi bi-ticket-perforated me-2"></i> All Coupons</a></li>
        </ul>
      </div>
    </li>
    <li><a href="#" class="nav-link link-dark"><i class="bi bi-bar-chart-line me-2"></i> Sales Analytics</a></li>
    <li><a href="#" class="nav-link link-dark"><i class="bi bi-people me-2"></i> Customers</a></li>
    <li><a href="#" class="nav-link link-dark"><i class="bi bi-question-circle me-2"></i> Help</a></li>
  </ul>
  <hr>
  <div class="mt-auto">
    <ul class="nav nav-pills flex-column">
      <li><a href="#" class="nav-link link-dark"><i class="bi bi-gear me-2"></i> Settings</a></li>
      <li><a href="#" class="nav-link link-dark"><i class="bi bi-download me-2"></i> Download Report</a></li>
      <li><a href="#" class="nav-link link-dark"><i class="bi bi-clipboard"></i> License Info</a></li>
    </ul>
  </div>
</div>