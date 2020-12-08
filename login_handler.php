<?php

    session_start();
    require_once 'dao.php';
    require_once 'KLogger.php';
    $logger = new KLogger("log.txt", KLogger::DEBUG);
    $_SESSION['output'] = array();
    $_SESSION["access_granted"] = true;

    $dao = new Dao();

    if($dao->checkUserLogin($_POST['email'], $_POST['password']) == true) {
        // $_SESSION["access_granted"] = true;
        $_SESSION['output'][] = "Successfully logged in!";
        header("Location: https://stormy-cliffs-79964.herokuapp.com/photos.php");
    }  else {
        $_SESSION['output'][] = "Could not log in";
        $_SESSION["email_preset"] = $_POST["email"];
        // $_SESSION["access_granted"] = false;
        header("Location: https://stormy-cliffs-79964.herokuapp.com/login.php");
    }
    exit();