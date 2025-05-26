<?php
include 'config.php';

if (isset($_POST['cat_id'])) {
    $id = intval($_POST['cat_id']); // Ensure it's an integer

    // Delete category using prepared statement
    $stmt = $conn->prepare("DELETE FROM Category WHERE cat_id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();

    // Fetch updated category list
    $result = $conn->query("SELECT * FROM Category");
    $options = '<option disabled selected>---SELECT CATEGORY---</option>';
    while ($row = $result->fetch_assoc()) {
        $options .= '<option value="' . htmlspecialchars($row['cat_id']) . '">' . htmlspecialchars($row['Cat_name']) . '</option>';
    }

    echo $options;
} else {
    echo '<option disabled selected>Error: ID missing</option>';
}
?>
