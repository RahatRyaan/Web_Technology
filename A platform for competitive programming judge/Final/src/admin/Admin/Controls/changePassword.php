<?php
require_once '../Model/db.php';
    $error = "";
    $a = $b = $c = "";
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $newPassword = ""; 
        $isAllDataSet = true;

        if (empty($_REQUEST["current_pass"])) {
            $a = "Current password is required <br>";
            $isAllDataSet = false;
        }
        if (empty($_REQUEST["new_pass"])) {
            $b = "New password is required <br>";
            $isAllDataSet = false;
        }
        if (empty($_REQUEST["retype_pass"])) {
            $c = "Retype password is required <br>";
            $isAllDataSet = false;
        }
        if($_REQUEST["new_pass"] != $_REQUEST["retype_pass"]) {
            $error = "New password and retype password must be same <br>";
            $isAllDataSet = false;
        }else {
            $newPassword = $_REQUEST["new_pass"];
        }
        if($isAllDataSet) {
            $dbOperations = new DatabaseOperations();
            $dbOperations->openConnection();

            $tableName = 'admin_data';

            $result = $dbOperations->updatePassword($tableName, $_SESSION["Email"], $_POST["new_pass"]);

            if ($result) {
                $error = "Password change Successfull <br>";
            } else {
                $error = "file written failed <br>";
            }

            $dbOperations->closeConnection();
        } else {
            $error = "Password change UnSuccessfull..!!!! <br>";
        }
    }
?>