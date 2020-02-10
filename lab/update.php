<?php

  // Our database connection
  $conn = mysqli_connect("localhost", "root", null, "lesson_03");
  var_dump($_POST);
  // Step 1: Write the SQL to update the row (replace null with the string)
  $sql =  "UPDATE products SET
  name = '{$_POST['name']}',
  price = {$_POST['price']}
WHERE id = {$_POST['id']}";
  $res = mysqli_query($conn, $sql);

  if ($res) {
    // We were successful
    echo "The product was updated successfully.";
  } else {
    // We failed
    echo "There was an error updating the record: " . mysqli_error($conn);
  }

?>