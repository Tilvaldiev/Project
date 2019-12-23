<?php
  include ("include/db_connect.php");

  $search = $_GET["q"];
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Search <?php $search ?></title>
    <link rel="stylesheet" href="css/style1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <?php
      include ("include/block-header.php");
     ?>
        <div class="ads">
          <?php
            $num = 2;
            $page = (int)$_GET["page"];
            $count = mysqli_query($conn, "SELECT COUNT(*) FROM poducts")
            $temp = mysqli_fetch_array($count);

            if($temp[0]>0){
              $tempcount = $temp[0];

              $totalPages = (($tempcount - 1)/num)+1;
              $totalPages = intval($totalPages);
              $page = intval($page);

              if(empty($page) or $page < 0) $page = 1;
              if($page> $totalPages) $page = $totalPages;

              $start = $page * $num - $num;
              $qury_start_num = " LIMIT $start, $num " ;

            }
          ?>
          <?php
            $sql = "SELECT * FROM products $qury_start_num";
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
              if($page - 5 > 0) $page5left = '<li><a href = "MainPage.php?page='.($page - 5).'">'.($page - 5).'</a></li>'
              if($page - 4 > 0) $page4left = '<li><a href = "MainPage.php?page='.($page - 4).'">'.($page - 4).'</a></li>'
              if($page - 3 > 0) $page3left = '<li><a href = "MainPage.php?page='.($page - 3).'">'.($page - 3).'</a></li>'
              if($page - 2 > 0) $page2left = '<li><a href = "MainPage.php?page='.($page - 2).'">'.($page - 2).'</a></li>'
              if($page - 1 > 0) $page1left = '<li><a href = "MainPage.php?page='.($page - 1).'">'.($page - 1).'</a></li>'

              if($page + 5 <= $total 0) $page5right = '<li><a href = "MainPage.php?page='.($page + 5).'">'.($page + 5).'</a></li>'
              if($page + 4 <= $total 0) $page4right = '<li><a href = "MainPage.php?page='.($page + 4).'">'.($page + 4).'</a></li>'
              if($page + 3 <= $total 0) $page3right = '<li><a href = "MainPage.php?page='.($page + 3).'">'.($page + 3).'</a></li>'
              if($page + 2 <= $total 0) $page2right = '<li><a href = "MainPage.php?page='.($page + 2).'">'.($page + 2).'</a></li>'
              if($page + 1 <= $total 0) $page1right = '<li><a href = "MainPage.php?page='.($page + 1).'">'.($page + 1).'</a></li>'

              if($total > 1){
                echo '
                  <div class = "pstnav">
                  <ul>
                  ';
                  echo $page5left.$page4left.$page3left.$page2left.$page1left;
                  echo '
                  </ul>
                  </div>
                  ';
              }
             ?>


    <?php
      include ("include/block-footer.php");
     ?>
  </body>
</html>
