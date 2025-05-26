<?php
include 'config.php';

$id = intval($_GET['id'] ?? 0);
if ($id <= 0) {
    echo json_encode(['error' => 'Invalid product ID']);
    exit;
}

$sql = "SELECT * FROM products WHERE id = $id";
$result = mysqli_query($conn, $sql);
$product = mysqli_fetch_assoc($result);

if (!$product) {
    echo json_encode(['error' => 'Product not found']);
    exit;
}

echo json_encode([
    'id' => $product['id'],
    'name' => $product['productName'],
    'price' => $product['price'],
    'category' => $product['category'],
    'description' => $product['description'],
    'image' => $product['image']
]);
?>
