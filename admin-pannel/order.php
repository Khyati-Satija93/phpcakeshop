<?php
session_start();
if(!isset($_SESSION['loggedin'])){
    header('Location: login.php');
    exit;
}
include 'config.php';

// Fetch orders
$sql = "SELECT orders.order_id, orders.order_date, orders.total_price, orders.status, users.name AS customer 
        FROM orders 
        LEFT JOIN users ON orders.user_id = users.id 
        ORDER BY orders.id DESC";
$result = mysqli_query($conn, $sql);
$orders = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Orders</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
<?php include 'sidebar.php'; ?>
<?php include 'topbar.php'; ?>

<div class="container-fluid">
    <div class="home">
        <h4 class="fw-bold mb-4">Orders</h4>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Customer</th>
                    <th>Date</th>
                    <th>Total (₹)</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1; foreach($orders as $row): ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $row['customer'] ?? 'Guest' ?></td>
                    <td><?= $row['order_date'] ?></td>
                    <td>₹<?= $row['total_price'] ?></td>
                    <td>
                        <span class="badge 
                            <?= $row['status']=='Pending'?'bg-warning':
                               ($row['status']=='Completed'?'bg-success':'bg-secondary') ?>">
                            <?= $row['status'] ?>
                        </span>
                    </td>
                    <td>
                        <a href="view_order.php?id=<?= $row['id'] ?>" class="btn btn-info btn-sm" title="View"><i class="bi bi-eye"></i></a>
                        <a href="delete_order.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Are you sure?');"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
