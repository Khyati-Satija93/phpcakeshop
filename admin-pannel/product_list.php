<?php
session_start();
if(!isset($_SESSION['loggedin'])){
    header('Location: login.php');
    exit;
}
include 'config.php';

// Optional: handle search input
$search = isset($_GET['search']) ? $_GET['search'] : '';

// SQL query
$sql = "SELECT * FROM products LEFT JOIN category as category ON products.category = category.cat_id  WHERE products.productName LIKE '%$search%' OR products.price LIKE '%$search%'";
$result = mysqli_query($conn, $sql);
$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product List</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
<?php include 'sidebar.php'; ?>
<?php include 'topbar.php'; ?>

<div class="container-fluid">
    <div class="home">
        <h4 class="fw-bold mb-4">Product List</h4>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Price (₹)</th>
                    <th>Category</th>
                    <th>Stock</th>
                    <th>Added On</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach($products as $row): ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><img src="uploads/<?= $row['image'] ?>" width="80" height="80" class="rounded shadow-sm"></td>
                        <td><?= $row['productName'] ?></td>
                        <td><?= $row['description'] ?></td>
                        <td>₹<?= $row['price'] ?></td>
                        <td><?= $row['Cat_name'] ?></td>
                        <td><?= $row['stock'] ?></td>
                        <td><?= $row['created_at'] ?></td>
                        <td>
                            <a href="view_product.php?id=<?= $row['id'] ?>" class="btn btn-info btn-sm" title="View"><i class="bi bi-eye"></i></a>
                            <!-- Inside Actions Column -->
                            <a href="javascript:void(0);" class="btn btn-warning btn-sm" title="Edit" onclick="openEditModal(<?= $row['id'] ?>)">
                            <i class="bi bi-pencil-square"></i>
                            </a>
                            <a href="delete_product.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Are you sure you want to delete this product?');"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<!-- Edit Product Modal -->
<div class="modal fade" id="editProductModal" tabindex="-1" aria-labelledby="editProductModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="editProductModalLabel">Edit Product</h5>
      </div>

      <div class="modal-body">
        <form id="editProductForm">
          <input type="hidden" id="editProductId">
          <div class="mb-3">
            <label>Product Name</label>
            <input type="text" id="editProductName" class="form-control">
          </div>
          <div class="mb-3">
            <label>Price</label>
            <input type="text" id="editProductPrice" class="form-control">
          </div>
          <div class="mb-3">
            <label>Description</label>
            <textarea id="editProductDescription" class="form-control"></textarea>
          </div>
          <div class="mb-3">
            <label>Current Image</label><br>
            <img id="editProductImagePreview" src="" width="100" class="img-thumbnail mb-2">
          </div>
          <div class="mb-3">
            <label>Change Image</label>
            <input type="file" id="editProductImage" class="form-control">
          </div>
        </form>
      </div>
      <!-- Edit Product Form -->
      <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select name="category" id="editCategory" class="form-select" required>
          <?php
            $sql = "SELECT * FROM Category";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)) {
              echo '<option value="'.$row['id'].'">'.$row['Cat_name'].'</option>';
            }
          ?>
        </select>
</div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="updateProduct()">Save Changes</button>
      </div>

    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
function openEditModal(id) {
    $.ajax({
        url: 'get_product.php?id=' + id,
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            $('#editProductId').val(response.id);
            $('#editProductName').val(response.name);
            $('#editProductPrice').val(response.price);
            $('#editProductDescription').val(response.description);
            $('#editCategory').val(response.category); // Assuming the category is stored as a string
            $('#editProductImagePreview').attr('src', 'uploads/' + response.image);

            var editModal = new bootstrap.Modal(document.getElementById('editProductModal'));
            editModal.show();
        },
        error: function() {
            alert('Failed to fetch product.');
        }
    });
}

function updateProduct() {
    var formData = new FormData();
    formData.append('id', $('#editProductId').val());
    formData.append('name', $('#editProductName').val());
    formData.append('price', $('#editProductPrice').val());
    formData.append('description', $('#editProductDescription').val());
    formData.append('category', $('#editCategory').val());

    var image = $('#editProductImage')[0].files[0];
    if (image) {
        formData.append('image', image);
    }

    $.ajax({
        url: 'update_product.php',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        dataType: 'json',
        success: function(response) {
            if (response.status === 'success') {
                alert('Product updated successfully!');
                location.reload();
            } else {
                alert('Update failed.');
            }
        },
        error: function() {
            alert('Error while updating.');
        }
    });
}
</script>

</body>
</html>
