<?php
  include ("include/db_connect.php");


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kuproday</title>
    <link rel="stylesheet" href="css/style1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <?php
      include ("include/block-header.php");
     ?>
        <div class="ads">

          <?php
            $sql = "SELECT * FROM products ";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result)>0){
              $row = mysqli_fetch_array($result);

              do {
                echo '
                <div class="ad">
                  <div class="ProductDescription">
                    <img src="products/'.$row['image'].'" width="300" height="200">
                  </div>
                  <p style="font-size: 22px;"><strong>'.$row['price'].' ₸</strong></p>
                  <a style="font-size: 21px" href="">'.$row['title'].'</a>
                </div>
                ';
              } while ($row = mysqli_fetch_array($result));
            }
            ?>
            </div>


    <?php
      include ("include/block-footer.php");
     ?>
  </body>
</html>
