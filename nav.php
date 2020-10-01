<html>
  <head>
    <title>CS401 Site</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/png" href="images/lovelynailsfavicon.png">
    <meta charset="UTF-8">
  </head>
  <body>
    <nav>
      <img class="logo" alt="lovely-nails-logo" src="images/lovelynailslogo.png">
      <a <?php if ($pageName == "home") { echo "class='active';"; } ?> href="index.php">Home</a>
      <a <?php if ($pageName == "about") { echo "class='active';"; } ?> href="about.php">About</a>
      <a <?php if ($pageName == "services") { echo "class='active';"; } ?> href="services.php">Services</a>
      <div class="nav-item">
        <p>208-433-1777</p>
        <p>2721 Broadway Ave. Boise, ID</p>
      </div>
      <a href="https://www.instagram.com/lovelynailsboise/"><img class="social-logo" alt="instagram-logo" src="images/ig-logo.png"></a>
      <a href="https://www.facebook.com/lovelynailsboise/?rf=1697763800314152"><img class="social-logo" alt="facebook-logo" src="images/fb-logo.png"></a>
</nav>