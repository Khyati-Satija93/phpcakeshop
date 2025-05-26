<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}
include 'config.php';

$id = $_GET['id'] ?? null;
if (!$id || !is_numeric($id)) {
    die("Invalid product ID");
}

$stmt = $conn->prepare("SELECT * FROM products WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$product = $result->fetch_assoc();
$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Product</title>
  <link href="style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

<?php include 'sidebar.php'; ?>
<?php include 'topbar.php'; ?>

<div class="container-fluid">
  <div class="home">
    <h4 class="fw-bold mb-4">Edit Product</h4>

    <form action="update_product.php" method="POST" enctype="multipart/form-data" class="row g-3 shadow-sm p-4 bg-white rounded">
      <input type="hidden" name="id" value="<?= $product['id'] ?>">

      <div class="col-md-6">
        <label for="productName" class="form-label">Product Name</label>
        <input type="text" class="form-control" name="productName" value="<?= htmlspecialchars($product['name']) ?>" required>
      </div>

      <div class="col-md-6">
        <label for="category" class="form-label">Category</label>
        <select name="category" class="form-select" required>
          <option value="" disabled>---SELECT CATEGORY---</option>
          <?php
          $categories = $conn->query("SELECT * FROM Category");
          while ($cat = $categories->fetch_assoc()) {
              $selected = $product['category_id'] == $cat['cat_id'] ? 'selected' : '';
              echo "<option value='{$cat['cat_id']}' $selected>" . htmlspecialchars($cat['Cat_name']) . "</option>";
          }
          ?>
        </select>
      </div>

      <div class="col-md-4">
        <label class="form-label">Price (₹)</label>
        <input type="number" class="form-control" name="price" value="<?= $product['price'] ?>" required>
      </div>

      <div class="col-md-4">
        <label class="form-label">Stock</label>
        <input type="number" class="form-control" name="stock" value="<?= $product['stock'] ?>" required>
      </div>

      <div class="col-md-4">
        <label class="form-label">Product Image</label>
        <input type="file" class="form-control" name="image" accept="image/png, image/jpeg">
        <small class="text-muted">Leave blank to keep current image</small>
      </div>

      <div class="col-12">
        <label class="form-label">Description</label>
        <textarea class="form-control" name="description" rows="4" required><?= htmlspecialchars($product['description']) ?></textarea>
      </div>

      <div class="col-12 text-end">
        <input type="submit" class="btn btn-warning" value="Update Product">
      </div>
    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
