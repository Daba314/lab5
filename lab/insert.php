<?php
 // Our database connection
 include('./.env.php');
 $conn = mysqli_connect(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASS'), getenv('DB'));
  // Step 1: In the string provided below, write your SQL insert statement to create a new product
  $sql = "INSERT INTO products (
    name,
    price
  ) VALUES (
    '{$_POST['name']}',
    {$_POST['price']}
  )";

  

  // Step 3: Execute the SQL statement ($sql) using the MySQLi query function (replace the null value)
  $res = mysqli_query($conn, $sql);

  // If everything is working we should see the success message, otherwise we may get an error
  if ($res) {
    echo "The new product was created successfully.";
  } else {
    echo "There was an error creating the new product: " . mysqli_error($conn);
  }

?>