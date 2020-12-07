<html>
  <head>
    <title>CS401 Site</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/lightslider.js"></script>
    <script src="js/gallery_script.js"></script>
    
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/lightslider.css" />
    <link rel="icon" type="image/png" href="images/lovelynailsfavicon.png">
    <meta charset="UTF-8">
  </head>
  <body>
    <nav>
      <img class="logo" alt="lovely-nails-logo" src="images/lovelynailslogo.png">
      <a <?php if ($pageName == "home") { echo "class='active';"; } ?> href="index.php">HOME</a>
      <a <?php if ($pageName == "about") { echo "class='active';"; } ?> href="about.php">ABOUT</a>
      <a <?php if ($pageName == "services") { echo "class='active';"; } ?> href="services.php">SERVICES</a>
      <a <?php if ($pageName == "login") { echo "class='active';"; } ?> href="login.php">LOGIN</a>
      <div class="nav-item">
        <p>208-433-1777</p>
        <p>2721 Broadway Ave. Boise, ID</p>
      </div>
      <a href="https://www.instagram.com/lovelynailsboise/"><img class="social-logo" alt="instagram-logo" src="images/ig-logo.png"></a>
      <a href="https://www.facebook.com/lovelynailsboise/?rf=1697763800314152"><img class="social-logo" alt="facebook-logo" src="images/fb-logo.png"></a>
</nav>
