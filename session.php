<?php

function setUserSession($matric, $name, $role, $login)
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }    $_SESSION['matric'] = $matric;
    $_SESSION['name'] = $name;
    $_SESSION['role'] = $role;
    $_SESSION['login'] = $login;
}

function isLogin()
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }    if (empty($_SESSION['login']) || $_SESSION['login'] !== true) {
        header("Location: register.php");
        exit;
    }
}


?>