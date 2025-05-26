<?php
include 'config.php';

$sql = "SELECT * FROM Category";
$result = mysqli_query($conn, $sql);

echo '<table class="table table-bordered">';
echo '<thead><tr><th>ID</th><th>Name</th><th>Actions</th></tr></thead><tbody>';

while ($row = mysqli_fetch_assoc($result)) {
  echo '<tr>';
  echo '<td>' . $row['id'] . '</td>';
  echo '<td contenteditable="true" onBlur="updateCategory(' . $row['id'] . ', this.innerText)">' . $row['Cat_name'] . '</td>';
  echo '<td>
          <button class="btn btn-danger btn-sm" onclick="deleteCategory(' . $row['id'] . ')">
            <i class="bi bi-trash"></i>
          </button>
        </td>';
  echo '</tr>';
}

echo '</tbody></table>';
?>
