<?php
include __DIR__ . ("/auth.php");
if(!empty($_COOKIE["login"]) && !empty($_COOKIE["password"])){
    if(checkAuth($_COOKIE["login"], $_COOKIE["password"])){
        setcookie("login", "", time() - 3600);
        setcookie("password", "", time() - 3600);
        header('Location: /index.php');
        exit();
    } else {
        header('Location: /index.php');
        exit();
    }
} else {
    header('Location: /index.php');
    exit();
}

?>
