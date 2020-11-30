<?php

    session_start();
    require_once 'dao.php';
    require_once 'KLogger.php';
    $logger = new KLogger("log.txt", KLogger::DEBUG);
    $_SESSION['output'] = array();

    $dao = new Dao();

    if($dao->userExists($_POST['email'])) {
        $_SESSION['output'][] = "User with this email already exists";
        header("Location: https://stormy-cliffs-79964.herokuapp.com/login.php");
    } 
