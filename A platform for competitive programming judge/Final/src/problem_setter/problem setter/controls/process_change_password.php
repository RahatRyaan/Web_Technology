<?php
require_once '../model/db_operations.php';
    $errorMessage = "";
    $currPassError = $newPassError = $retypePassError = "";
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $newPassword = ""; 
        $isAllDataSet = true;

        if (empty($_REQUEST["current_pass"])) {
            $currPassError = "Current password is required <br>";
            $isAllDataSet = false;
        }
        if (empty($_REQUEST["new_pass"])) {
            $newPassError = "New password is required <br>";
            $isAllDataSet = false;
        }
        if (empty($_REQUEST["retype_pass"])) {
            $retypePassError = "Retype password is required <br>";
            $isAllDataSet = false;
        }
        if($_REQUEST["new_pass"] != $_REQUEST["retype_pass"]) {
            $errorMessage = "New password and retype password must be same <br>";
            $isAllDataSet = false;
        }else {
            $newPassword = $_REQUEST["new_pass"];
        }
        if($isAllDataSet) {
            $dbOperations = new DatabaseOperations();
            $dbOperations->openConnection();

            $tableName = 'problemsetter_data';

            $result = $dbOperations->updatePassword($tableName, $_SESSION["Email"], $_POST["new_pass"]);

            if ($result) {
                $errorMessage = "Password change Successfull";
            } else {
                $errorMessage = "file written failed <br>";
            }

            $dbOperations->closeConnection();
        } else {
            $errorMessage = "Unsuccessfull Password Change";
        }
    }
?>