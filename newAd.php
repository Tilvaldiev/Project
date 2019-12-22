<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>KuProday</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php
        include ("include/block-header.php");
     ?>
      <div class="newAd">
        <div class="chooseImg">
          <img src="images/choose.png" height="170px" width="170px"><br>
          <input type="button" name="chooseImg" value="Choose Image">
        </div>
        <div class="adDescription">
          <form action="index.html" method="post">
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
            <input type="submit" name="submit" value="Submit"><br>
          </form>
        </div>
      </div>
      <?php
      include ("include/block-footer.php"); ?>
  </body>
</html>
