<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "product_store";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>🛒 Online Product Store</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f4f4; }
    h2 { color: #333; }
    form { margin-bottom: 20px; }
    input, button { padding: 8px; margin: 5px; }
    table { width: 100%; border-collapse: collapse; background-color: #fff; }
    th, td { border: 1px solid #ccc; padding: 10px; text-align: center; }
    th { background-color: #eee; }
  </style>
</head>
<body>
  <h2>🛒 Online Product Store</h2>

  <!-- Add Product Form -->
  <form method="POST" action="add.php">
    <input type="text" name="name" placeholder="Product Name" required>
    <input type="number" name="price" placeholder="Price (₹)" required>
    <button type="submit">Add Product</button>
  </form>

  <h3>Available Products</h3>

  <!-- ✅ Refresh Button -->
  <form method="GET" action="">
    <button type="submit">🔄 Refresh</button>
  </form>

  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Price (₹)</th>
      <th>Action</th>
    </tr>

    <?php
    $result = $conn->query("SELECT * FROM products");
    while($row = $result->fetch_assoc()) {
      echo "<tr>
              <td>{$row['id']}</td>
              <td>{$row['name']}</td>
              <td>{$row['price']}</td>
              <td><a href='delete.php?id={$row['id']}'>Delete</a></td>
            </tr>";
    }
    ?>
  </table>
</body>
</html>
