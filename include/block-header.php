<div class="navigation">
  <div id="kuproday"> <a  href="MainPage.php">KuProday</a></div>
  <div class="navSecondColumn">
      <div class="aboutUs">
        <a href="MainPage.php">Home</a>
        <a href="aboutUs.php" target="_blank">About</a>
      </div>
      <div class="dropdown">
          <button id="dropbtn" type="button" name="button">Category</button>
          <div class="dropdown-content">
            <a href="electronics.php" target="_blank">Electronics</a>
            <a href="furnitures.php" target="_blank">Furnitures</a>
            <a href="realties.php" target="_blank">Realties</a>
            <a href="clothes.php" target="_blank">Clothes</a>
            <a href="transport.php" target="_blank">Transports</a>
          </div>
      </div>
  </div>
  <div class="search">
    <form action="search.php?q=" method="GET">
      <input type="text" name="q" placeholder="Search..." />
      <input type="button" name="searchButton" value="Find"/>
    </form>
  </div>
  <div class="createAd">
    <a target="_blank" href="newAd.php">Create Ad</a>
  </div>
</div>
