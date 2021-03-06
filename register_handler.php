<?php
    session_start();
    require_once 'dao.php';
    require_once 'KLogger.php';
    $logger = new KLogger("log.txt", KLogger::DEBUG);
    $_SESSION['output'] = array();

    if (strlen($_POST['name']) == 0 || strlen($_POST['email']) == 0 || strlen($_POST['password']) == 0) {
        $logger->LogDebug("User entered invalid form input");
        $_SESSION['output'][] = "Invalid form inputs";
        header("Location: https://stormy-cliffs-79964.herokuapp.com/register.php");
        exit();

    }

    if (strlen($_POST['password']) < 8) {
        $logger->LogDebug("User entered invalid password format");
        $_SESSION['output'][] = "Password must be at least 8 characters";
        header("Location: https://stormy-cliffs-79964.herokuapp.com/register.php");
        exit();
    }
    

    $logger->LogDebug("Attempting to add user");
    $dao = new Dao();

    if($dao->userExists($_POST['email'])) {
        $_SESSION['output'][] = "User with this email already exists";
        $_SESSION["email_preset"] = $_POST["email"];
    } else if($dao->addUser($_POST['name'], $_POST['email'], $_POST['password'])){
        $_SESSION['output'][] = "User successfully created";
        $_SESSION["email_preset"] = $_POST["email"];
    }

    header("Location: https://stormy-cliffs-79964.herokuapp.com/login.php");
    exit();


