<?php
  include ("include/db_connect.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>KuProday</title>
    <link rel="stylesheet" href="css/style1.css">
  </head>
  <body>
    <?php
        include ("include/block-header.php");
     ?>
      <div class="newAd">
        <div class="chooseImg">
          <div class="adDescription">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
              <label for="title">Title</label><br>
              <input type="text" required="required" name="title"><br>
              <label for="category">Category</label><br>
              <select name="category">
                <option disabled selected>Select</option>
                <option>Electronics</option>
                <option>Furnitures</option>
                <option>Realties</option>
                <option>Clothes</option>
                <option>Transports</option>
              </select><br>
              <label for="price">Price</label><br>
              <input type="number" required="required"  name="price">
              <label for="price">kzt</label><br>
              <label for="description">Description</label><br>
              <textarea name="description" rows="8" cols="69"></textarea> <br>
              <label for="addresss">City</label><br>
              <input type="text" required="required"  name="address" ><br>
              <label for="phoneNumber">Phone</label><br>
              <input type="number" required="required"  name="phoneNumber"><br>
              <input type="file" name="image" value="Choose Image"><br>
              <input type="submit" name="submit" value="Submit"><br>
            </form>
          </div>
          </div>

          <?php
          if ($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($_POST['submit'])){
              $tittle = $_POST['title'];
              $price = intval($_POST['price']);
              $category = $_POST['category'];
              $description = $_POST['description'];
              $city =  $_POST['address'];
              $phone =  intval($_POST['phoneNumber']);
              if (!$conn) {
                  die("Connection failed: " . mysqli_connect_error());
              }
              if(isset($_POST['submit'])){
                $sql = "INSERT INTO products (title, price, category, description, city, phone)
                VALUES ("$tittle", "$price", "$category", "$description", "$city", "$phone")";
              }
              if (mysqli_query($conn, $sql)) {
                  echo "New record created successfully";
              } else {
                  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
              }

              mysqli_close($conn);
            }}
          ?>
      </div>
      <?php
      include ("include/block-footer.php"); ?>
  </body>
</html>
