<html>
  <head>
    <title>Lovely Nails Salon</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/lightslider.css">
    <link rel="icon" type="image/png" href="images/lovelynailsfavicon.png">
    <link href="http://fonts.googleapis.com/css?family=Avenir+Next" rel="stylesheet" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/lightslider.min.js"></script>
    <script src="js/gallery_script.js"></script>
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
    </nav>
