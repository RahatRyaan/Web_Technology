<?php
    include '../model/database.php';
    session_start();

    if (empty($_SESSION["Email"])) {
        header("Location: ../view/login.php");
    }

    $current_user = null;
    $current_user_name = "";

    $db = new DatabaseOperations();
    $connection = $db->openConnection();

    $email = $_SESSION["Email"];
    $current_user = $db->getUserInfo("Contestant_Data", $email);

    if ($current_user) {
        $current_user_name = $current_user->firstname . ' ' . $current_user->lastname;
    } 

    $db->closeConnection();
?>
