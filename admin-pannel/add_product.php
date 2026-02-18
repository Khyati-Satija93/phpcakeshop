<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Products</title>
  <link href="style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
<?php include 'sidebar.php'; ?>
<?php include 'topbar.php'; ?>

<div class="container-fluid">
  <div class="home">
    <h4 class="fw-bold mb-4">Add New Product</h4>

    <form action="insert_product.php" method="POST" enctype="multipart/form-data" class="row g-3 shadow-sm p-4 bg-white rounded">

      <!-- Product Name -->
      <div class="col-md-6">
        <label for="productName" class="form-label">Product Name</label>
        <input type="text" class="form-control" name="productName" id="productName" required>
      </div>

      <!-- Category -->
      <div class="col-md-6">
        <label for="category" class="form-label">Category</label>
        <select name="category" id="category" class="form-select" required>
          <option value="" disabled selected>---SELECT CATEGORY---</option>
          <?php
          $result = $conn->query("SELECT * FROM Category");
          while ($row = $result->fetch_assoc()) {
              echo '<option value="' . $row["cat_id"] . '">' . htmlspecialchars($row["Cat_name"]) . '</option>';
          }
          ?>
        </select>

        <!-- Buttons -->
        <div class="mt-2 d-flex gap-2">
          <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
            <i class="bi bi-plus-circle"></i> Add Category
          </button>
          <button type="button" class="btn btn-sm btn-outline-danger" id="deleteCategoryBtn">
            <i class="bi bi-trash3"></i> Delete Category
          </button>
        </div>
      </div>

      <!-- Price -->
      <div class="col-md-4">
        <label for="price" class="form-label">Price (₹)</label>
        <input type="number" class="form-control" name="price" required>
      </div>

      <!-- Stock -->
      <div class="col-md-4">
        <label for="stock" class="form-label">Stock</label>
        <input type="number" class="form-control" name="stock" required>
      </div>

      <!-- Product Image -->
      <div class="col-md-4">
        <label for="image" class="form-label">Product Image</label>
        <input type="file" class="form-control" name="image" accept="image/png, image/jpeg" required>
      </div>

      <!-- Highlights -->
      <div class="col-md-12">
        <label for="Highlight" class="form-label fw-bold">Highlights :</label>
        <br>
        <input type="checkbox" name="highlight_tags[]" value="Trending" required> Trending
        <input type="checkbox" name="highlight_tags[]" value="New" required> New
        <input type="checkbox" name="highlight_tags[]" value="Sale" required> Sale
        <input type="checkbox" name="highlight_tags[]" value="Featured" required> Featured
        <input type="checkbox" name="highlight_tags[]" value="Hot" required> Hot
        <input type="checkbox" name="highlight_tags[]" value="Premium" required> Premium
        <input type="checkbox" name="highlight_tags[]" value="Best Seller" required> Best Seller
        <input type="checkbox" name="highlight_tags[]" value="Limited Edition" required> Limited Edition
      </div>

      <!-- Occasion Tags -->
      <div class="col-md-12">
        <label class="form-label fw-bold">Occasion Tags :</label>
        <input type="text" name="tags" class="form-control" 
        placeholder="e.g., trending, hot, premium, birthday, wedding">
        <small class="text-muted">Add multiple tags separated by commas.</small>
      </div>

      <!-- Description -->
      <div class="col-12">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" rows="4" required></textarea>
      </div>

      <!-- Add Product Button -->
      <div class="col-12 text-end">
        <input type="submit" class="btn btn" name="submit" value="Add Product">
      </div>

    </form>
  </div>
</div>

<!-- Add Category Modal -->
<div class="modal fade" id="addCategoryModal" tabindex="-1">
  <div class="modal-dialog">
    <form id="addCategoryForm">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add New Category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="cat_name" class="form-label">Category Name</label>
            <input type="text" class="form-control" id="cat_name" name="cat_name" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Add Category</button>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- Delete Category Modal -->
<div class="modal fade" id="deleteCategoryModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete Categories</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body" id="categoryList">
        <!-- AJAX-loaded category buttons -->
      </div>
    </div>
  </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  // Add Category
  $('#addCategoryForm').submit(function(e) {
    e.preventDefault();
    const catName = $('#cat_name').val().trim();

    if (catName !== '') {
      $.post('add_category.php', { cat_name: catName }, function(response) {
        $('#category').html(response);
        $('#addCategoryModal').modal('hide');
        $('#addCategoryForm')[0].reset();
      });
    }
  });

  // Load Delete Category Modal
  $('#deleteCategoryBtn').click(function() {
    $.get('get_categories.php', function(data) {
      $('#categoryList').html(data);
      $('#deleteCategoryModal').modal('show');
    });
  });

  // Delete a category
  function deleteCategory(id) {
    if (confirm('Are you sure you want to delete this category?')) {
      $.post('delete_category.php', { cat_id: id }, function(response) {
        $('#category').html(response);
        $.get('get_categories.php', function(data) {
          $('#categoryList').html(data); // Refresh list
        });
      });
    }
  }
</script>

</body>
</html>
