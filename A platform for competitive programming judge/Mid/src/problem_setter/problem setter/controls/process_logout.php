<?php
    session_start();
    if(session_destroy()) {
        setcookie("user", "", time() - 3600, "/");
        header("Location: ../view/login.php");
    }
?>