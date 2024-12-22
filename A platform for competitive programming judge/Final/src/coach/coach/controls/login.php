<?php
    session_start();
    include '../model/database.php';
    $loginError = "";
    if (isset($_SESSION["Email"])) {
        header("Location: ../view/dashboard.php");
    }

    $emailErr = $passwordErr = $loginErr = "";
    $hasErr = false;
    if (isset($_POST["login"])) {
        $userFound = false;

        if (empty($_POST["email"])) {
            $emailErr = "Please enter your email address";
            $hasErr = true;
        } 
        if (empty($_POST["password"])) {
            $passwordErr = "Please enter your password";
            $hasErr = true;
        } 
        if(!$hasErr) {
            $db = new DatabaseOperations();
            $connection = $db->openConnection();

            $email = $_POST["email"];
            $password = $_POST["password"];

            $log = $db->loginUser("coach_data", $email, $password);

            if ($log) {
                $_SESSION["Email"] = $_POST["email"];
                setcookie("user", $_SESSION["Email"], time() + 3600, "/");
                header("Location: ../view/dashboard.php");
            } else {
                $loginError = "Login failed";
            }

            $db->closeConnection();
        }
    }
?>
