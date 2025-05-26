<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product List</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .product-card {
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            align:center;

        }
        .product-card:hover {
            transform: translateY(-5px);
        }
        .product-img {
            height: 200px;
            object-fit: cover;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
        .table td, .table th {
            vertical-align: right;
        }
    </style>
</head>
<body class="bg-light">
    <?php include 'sidebar.php'; ?>
    <?php include 'topbar.php'; ?>
    
    <div class="container my-5">
        <h2 class="mb-4 text-center"></h2>
        <div class="row g-4">
            <?php
            include 'config.php'; // Database connection
            $query = "SELECT * FROM products";
            $result = $conn->query($query);

            while ($row = $result->fetch_assoc()) {
                echo '<div class="col-md-4">';
                echo '  <div class="card product-card">';
                echo '    <img src="uploads/' . $row['image'] . '" class="card-img-top product-img" alt="Product Image">';
                echo '    <div class="card-body">';
                echo '      <h5 class="card-title">' . $row['name'] . '</h5>';
                echo '      <table class="table table-sm">';
                echo '        <tr><th>Price:</th><td>₹' . $row['price'] . '</td></tr>';
                echo '        <tr><th>Quantity:</th><td>' . $row['quantity'] . '</td></tr>';
                echo '        <tr><th>Details:</th><td>' . $row['details'] . '</td></tr>';
                echo '      </table>';
                echo '    </div>';
                echo '  </div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</body>
</html>
