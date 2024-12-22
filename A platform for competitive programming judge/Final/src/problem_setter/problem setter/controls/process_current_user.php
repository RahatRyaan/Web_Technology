<?php
    include '../model/db_operations.php';
    session_start();

    if (empty($_SESSION["Email"])) {
        header("Location: ../view/login.php");
    }

    $current_user = null;
    $current_user_name = "";

    $dbOperations = new DatabaseOperations();
    $connection = $dbOperations->openConnection();

    $email = $_SESSION["Email"];
    $current_user = $dbOperations->getUserInfo("Problemsetter_Data", $email);

    if ($current_user) {
        $current_user_name = $current_user->FirstName . ' ' . $current_user->LastName;
    } 

    $dbOperations->closeConnection();
?>
