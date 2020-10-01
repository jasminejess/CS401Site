<html>
  <head>
    <title>CS401 Site</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/png" href="images/lovelynailsfavicon.png">
    <meta charset="UTF-8">
  </head>
  <body>
    <img class="logo" alt="lovely-nails-logo" src="images/lovelynailslogo.png">
    <nav>
        <a <?php if ($pageName == "home") { echo "class='active';"; } ?> href="index.php">Home</a>
        <a <?php if ($pageName == "about") { echo "class='active';"; } ?> href="about.php">About</a>
        <a <?php if ($pageName == "services") { echo "class='active';"; } ?> href="services.php">Services</a>
</nav>