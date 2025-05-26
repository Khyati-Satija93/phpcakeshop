<?php
include 'config.php';
$id = $_POST['id'];
$newName = $_POST['newName'];
$sql = "UPDATE Category SET Cat_name=? WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("si", $newName, $id);
$stmt->execute();
echo "Updated successfully";
?>
