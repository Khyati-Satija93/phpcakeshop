<?php
include 'config.php';

if (isset($_POST['cat_name']) && !empty(trim($_POST['cat_name']))) {
    $cat_name = trim($_POST['cat_name']);

    // Insert the new category
    $stmt = $conn->prepare("INSERT INTO Category (Cat_name) VALUES (?)");
    $stmt->bind_param("s", $cat_name);
    $stmt->execute();
    $last_id = $conn->insert_id;
    $stmt->close();

    // Fetch all categories with the latest one selected
    $result = $conn->query("SELECT * FROM Category");
    $options = '<option disabled>---SELECT CATEGORY---</option>';
    while ($row = $result->fetch_assoc()) {
        $selected = ($row['cat_id'] == $last_id) ? ' selected' : '';
        $options .= '<option value="' . htmlspecialchars($row['cat_id']) . '"' . $selected . '>' . htmlspecialchars($row['Cat_name']) . '</option>';
    }

    echo $options;
} else {
    echo '<option disabled selected>Category name is required</option>';
}
?>
