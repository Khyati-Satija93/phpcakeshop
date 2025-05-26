<?php
include 'config.php';

$result = mysqli_query($conn, "SELECT * FROM Category");
echo '<ul class="list-group">';
while ($row = mysqli_fetch_assoc($result)) {
    echo '<li class="list-group-item d-flex justify-content-between align-items-center">'
        . $row['Cat_name'] .
        '<button class="btn btn-sm btn-danger" onclick="deleteCategory(' . $row['cat_id'] . ')">
          <i class="bi bi-trash"></i>
         </button>
      </li>';
}
echo '</ul>';
?>
