<?php
include 'config.php';

$id = intval($_POST['id']);
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];

$image = $_FILES['image'] ?? null;
$imageSql = '';

if ($image && $image['error'] === 0) {
    $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
    $newImageName = 'product_' . time() . '.' . $ext;
    move_uploaded_file($image['tmp_name'], 'uploads/' . $newImageName);
    $imageSql = ", image = '$newImageName'";
}

// Prepare query without category update
$sql = "UPDATE products SET 
            productName = ?,
            price = ?,
            description = ?" . $imageSql . "
        WHERE id = ?";

$stmt = $conn->prepare($sql);

if ($imageSql) {
    // If image uploaded, bind 4 params: name, price, description, id
    $stmt->bind_param("sssi", $name, $price, $description, $id);
} else {
    // If no image, bind 3 params + id
    $sql = "UPDATE products SET 
                productName = ?,
                price = ?,
                description = ?
            WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $name, $price, $description, $id);
}

if ($stmt->execute()) {
    echo json_encode(['status' => 'success']);
} else {
    echo json_encode(['status' => 'error', 'message' => $stmt->error]);
}
?>
