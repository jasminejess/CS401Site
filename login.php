<?php
    $pageName = "login";
    require_once "nav.php";

    session_start();
    $_SESSION['login'] = "user";
?>

<div>
  <div class="main-page">
    <p class="main-h1">Login</p>
    <div class="main-content">
      <?php 
            if(isset($_SESSION['output'])) {
                foreach($_SESSION['output'] as $message) {
                    echo "<div class='output'>{$message}</div>";
                }
                unset($_SESSION['output']);
            }
        ?>
        <h3>Log in to see other users</h3>
        <form method="post" action="login_handler.php">
            <div>Email: <input type="text" name="Email"/></div>
            <div>Password: <input type="password" name="Password"/></div>
            <div><input type="submit" name="Login" /></div>
<hr/>
            <div><a href="register.php">Click here to create an account</a></div>
        </form>
    </div>
  </div>
<div>
<?php 
    require_once "footer.php"; 
?>