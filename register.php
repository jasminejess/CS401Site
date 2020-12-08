<?php
    session_start();
    $pageName = "register";
    require_once "nav.php";

?>

<div>
  <div class="main-page">
    <div class="main-content">
        <p class="main-h1">Register as a User</p>
        <?php 
            if(isset($_SESSION['output'])) {
                foreach($_SESSION['output'] as $message) {
                    echo "<div class='output'>{$message}</div>";
                }
                unset($_SESSION['output']);
            }
        ?>
        <form method="POST" action="register_handler.php">
            <div>
                <label for="name">Name: </label> <input type="text" name="name"/>
            </div>
            <div>
                <label for="email">Email: </label> <input type="text" name="email"/>
            </div>
            <div>
                <label for="password">Password: </label> <input type="password" name="password"/>
            </div>
            <div>
                <input type="submit" name="register" />
            </div>
            <hr/>
            <div>
                <a href="login.php">Click here to login to an existing account</a>
            </div>
        </form>
    </div>
  </div>
<div>
<?php require_once "footer.php"; ?>
