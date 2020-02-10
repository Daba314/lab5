<?php
  $conn = mysqli_connect("localhost", "root", null, "lesson_03");

  $result = mysqli_query($conn, "SELECT * FROM products");

  // Step 1: Using the correct MySQLi function, fetch all the rows as associative arrays (replace the null value with the expression)
  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
  <head>
    <title>Document</title>

    <style>
      table, tr, td {
        border: 1px solid #ccc;
        padding: 0.25em;
      }
    </style>
  </head>

  <body>
    <table>
      <thead>
        <tr>
          <th>Product Name</th>
          <th>Product Price</th>
          <th>Actions</th>
        </tr>
      </thead>

      <tbody>
        <?php
          // Step 2: Using a foreach loop, iterate over the rows and display the product name and price in the provided cells (<td></td>)
          foreach ($rows as $row) {
            // HINT: Wrap the lines below with the foreach block
            echo "<tr>";
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row['price']}</td>";
            echo "<td>";
            // Step 1: Add the appropriate query parameter to the link below
            echo "<a href='./edit.php?id={$row['id']}'>edit</a>";
            echo "|";
            // Step 2: Add the appropriate query parameter to the link below
            echo "<a href='./delete.php?id={$row['id']}'>delete</a>";
            echo "</td>";
            echo "</tr>";
          }
        ?>
      </tbody>
    </table>
  </body>
</html>