<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Electronics</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php
    include ("include/block-header.php");
     ?>

    <section>
    <div class="aboutProduct">
      <div class="productFlex">
        <div id="bigImage">
        <img src="products/iphone.jpg" width="500px" height="350px;"/>
        </div>
        <div id="carousel">
            <img id="i1" src="products/pc1.png" width="120" height="90"/>
            <img id="i2" src="products/pc2.png" width="120" height="90"/>
            <img id="i3" src="products/pc5.jpg" width="120" height="90"/>
            <img id="i4" src="products/pc3.jpg" width="120" height="90"/>
        </div>
      </div>
      <div class="aboutProductDescription">
        <h2>Apple iPhone 7 64 GB, Black</h2>
        <p id="price">130 000 ₸</p>
        <p id="prDescription">The iPhone 7 and iPhone 7 Plus launch this
          September represented a departure from tradition for Apple - and in many
          ways, a risk. Instead of the usual tick-tock cycle where each ’S’
          release is followed by a brand-new design, the new iPhone models
          look pretty similar to their counterparts from the previous two years,
          and sport nearly identical dimensions.
        </p>
        <p><strong>Display:</strong> 4.70-inch (750x1334)</p>
        <p><strong>Processor:</strong> Apple A10 Fusion</p>
        <p><strong>Front Camera:</strong> 7MP</p>
        <p><strong>Rear Camera:</strong> 12MP</p>
        <p><strong>RAM:</strong> 2GB</p>
        <p><strong>Storage:</strong> 64GB</p>
        <p style="margin-bottom: 30px;"><strong>OS:</strong> iOS 10</p>
        <p style="font-size: 20px;"><strong>City:</strong> Almaty, Auezov District</p>
        <p style="font-size: 20px;"><strong>Phone number:</strong> +7 778 665 65 65</p>

      </div>
    </div>
    </section>

    <?php
      include ("include/block-footer.php")
     ?>
  </body>
</html>
