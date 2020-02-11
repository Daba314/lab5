<?php

  // Connect to our MySQL server
  // Our database connection
  include('./.env.php');
  $conn = mysqli_connect(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASS'), getenv('DB'));

  // Fetch the single country by its provided ID
  $result = mysqli_query($conn, "SELECT * FROM products WHERE id = {$_GET['id']}");

  // Step 1: Replace null with the mysqli function that will return the single row as an associative array
  $row = mysqli_fetch_assoc($result);
  var_dump($row);
?>

<!DOCTYPE html>
  <head>
    <title>The Form</title>
  </head>

  <body>
    <form action="./update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
      <div>
        <label>Product Name:</label><br>
        <!-- Step 2: Set the value with the corresponding value from the row -->
        <input type="text" name="name" value="<?php echo $row['name']; ?>">
      </div>

      <div>
        <label>Product Price:</label><br>
        <!-- Step 3: Set the value with the corresponding value from the row -->
        <input type="text" name="price" value="<?php echo $row['price']; ?>">
      </div>
      
      <button type="submit">Submit</button>
    </form>
  </body>
</html>