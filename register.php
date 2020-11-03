<?php
    $pageName = "register";
    require_once "nav.php";

    session_start();
?>

<div>
  <div class="main-page">
    <p class="main-h1">Register as a User</p>
    <div class="main-content">
        <form method="post" action="register_handler.php">
            <div>Name: <input type="text" name="name"/></div>
            <div>Email: <input type="text" name="Email"/></div>
            <div>Password: <input type="password" name="Password"/></div>
            <div><input type="submit" name="register" /></div>
            <div><a href="login.php">Click here to login to an existing account</a></div>
        </form>
    </div>
  </div>
<div>
<?php 
    require_once "footer.php"; 
    
    if(isset($_SESSION['output'])) {
        foreach($_SESSION['output'] as $message) {
            echo "<div class='output{$message}</div>";
        }
    }
?>
