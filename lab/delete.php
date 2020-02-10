<?php

  // Our database connection
  $conn = mysqli_connect("localhost", "root", null, "lesson_03");

  var_dump($_GET);

  // Updating our new row into the countries table
  // Step 1: Write the SQL to delete the row (replace null with the string)
  $res = mysqli_query($conn, "DELETE FROM products WHERE id = {$_GET['id']}");

  if ($res) {
    // We were successful
    echo "The product was delete successfully.";
  } else {
    // We failed
    echo "There was an error deleting the record: " . mysqli_error($conn);
  }

?>