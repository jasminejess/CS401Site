<?php

session_start()

if(($_POST['email'] == 'admin' && ($_POST['password'] == "xyz123")) {
    $_SESSION['authenticated'] = true;
    header("Location: ")
}