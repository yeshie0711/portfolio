<!DOCTYPE html>
<html>
<head>
  <title>Fitness Equipment Ordering System : Products</title>
</head>
<body>
  <center>
    <h2>🏋️ Fitness Equipment Store</h2>

    <a href="index.php">Home</a> |
    <a href="products.php">Products</a> |
    <a href="customers.php">Customers</a> |
    <a href="staffs.php">Staffs</a> |
    <a href="orders.php">Orders</a>

    <hr>

    <!-- PRODUCT FORM -->
    <form action="products.php" method="post">
      Product ID
      <input name="pid" type="text"> <br>

      Equipment Name
      <input name="name" type="text"> <br>

      Price (RM)
      <input name="price" type="text"> <br>

      Brand
      <select name="brand">
        <option value="Life Fitness">Life Fitness</option>
        <option value="Technogym">Technogym</option>
        <option value="Matrix">Matrix</option>
        <option value="Body Solid">Body Solid</option>
      </select> <br>

      Category
      <input name="cat" type="radio" value="Cardio"> Cardio
      <input name="cat" type="radio" value="Strength"> Strength <br>

      Warranty
      <select name="year">
        <option value="1 Year">1 Year</option>
        <option value="2 Years">2 Years</option>
        <option value="3 Years">3 Years</option>
      </select> <br>

      Quantity
      <input name="quantity" type="text"> <br>

      <button type="submit" name="create">Create</button>
      <button type="reset">Clear</button>
    </form>

    <hr>

    <!-- PRODUCT TABLE -->
    <table border="1">
      <tr>
        <td>Product ID</td>
        <td>Image</td>
        <td>Name</td>
        <td>Price (RM)</td>
        <td>Brand</td>
        <td></td>
      </tr>

      <tr>
        <td>P001</td>
        <td><img src="https://i.imgur.com/1treadmill.jpg" width="120"></td>
        <td>Treadmill</td>
        <td>4500</td>
        <td>Life Fitness</td>
        <td>
          <a href="products_details.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>

      <tr>
        <td>P002</td>
        <td><img src="https://i.imgur.com/elliptical.jpg" width="120"></td>
        <td>Elliptical Trainer</td>
        <td>3800</td>
        <td>Technogym</td>
        <td><a href="#">Details</a> <a href="#">Edit</a> <a href="#">Delete</a></td>
      </tr>

      <tr>
        <td>P003</td>
        <td><img src="https://i.imgur.com/bike.jpg" width="120"></td>
        <td>Stationary Bike</td>
        <td>2500</td>
        <td>Matrix</td>
        <td><a href="#">Details</a> <a href="#">Edit</a> <a href="#">Delete</a></td>
      </tr>

      <tr>
        <td>P004</td>
        <td><img src="https://i.imgur.com/rowing.jpg" width="120"></td>
        <td>Rowing Machine</td>
        <td>3200</td>
        <td>Matrix</td>
        <td><a href="#">Details</a> <a href="#">Edit</a> <a href="#">Delete</a></td>
      </tr>

      <tr>
        <td>P005</td>
        <td><img src="https://i.imgur.com/stair.jpg" width="120"></td>
        <td>Stair Climber</td>
        <td>5200</td>
        <td>Life Fitness</td>
        <td><a href="#">Details</a> <a href="#">Edit</a> <a href="#">Delete</a></td>
      </tr>

      <tr>
        <td>P006</td>
        <td><img src="https://i.imgur.com/smith.jpg" width="120"></td>
        <td>Smith Machine</td>
        <td>6000</td>
        <td>Body Solid</td>
        <td><a href="#">Details</a> <a href="#">Edit</a> <a href="#">Delete</a></td>
      </tr>

      <tr>
        <td>P007</td>
        <td><img src="https://i.imgur.com/legpress.jpg" width="120"></td>
        <td>Leg Press Machine</td>
        <td>5500</td>
        <td>Body Solid</td>
        <td><a href="#">Details</a> <a href="#">Edit</a> <a href="#">Delete</a></td>
      </tr>

      <tr>
        <td>P008</td>
        <td><img src="https://i.imgur.com/cable.jpg" width="120"></td>
        <td>Cable Crossover</td>
        <td>4800</td>
        <td>Technogym</td>
        <td><a href="#">Details</a> <a href="#">Edit</a> <a href="#">Delete</a></td>
      </tr>

      <tr>
        <td>P009</td>
        <td><img src="https://i.imgur.com/chestpress.jpg" width="120"></td>
        <td>Chest Press Machine</td>
        <td>4100</td>
        <td>Matrix</td>
        <td><a href="#">Details</a> <a href="#">Edit</a> <a href="#">Delete</a></td>
      </tr>

      <tr>
        <td>P010</td>
        <td><img src="https://i.imgur.com/latpulldown.jpg" width="120"></td>
        <td>Lat Pulldown Machine</td>
        <td>3900</td>
        <td>Body Solid</td>
        <td><a href="#">Details</a> <a href="#">Edit</a> <a href="#">Delete</a></td>
      </tr>

    </table>
  </center>
</body>
</html>