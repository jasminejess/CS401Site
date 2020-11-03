<?php
    session_start();
    require_once 'dao.php';
    $_SESSION['output'] = array();

    if (strlen($_POST['name']) == 0 || strlen($_POST['email']) == 0 || strlen($_POST['password']) == 0) {
        $_SESSION['output'] = "Invalid form inputs";
    }

    if (strlen($_POST('password')) < 8 || strlen($_POST) > 64) {
        $_SESSION['output'] = "Password must be at least 8 characters";
    }

    $dao = new Dao();

    if($dao->userExists($_POST['email'])) {
        $_SESSION['output'] = "User with this email already exists";
        header("Location: http://localhost:8888/cs401/login.php");
    } else {
        $dao->addUser($_POST['name'], $_POST['email'], $_POST['password']);
        $_SESSION['output'] = "User successfully created";
    }
    exit();


