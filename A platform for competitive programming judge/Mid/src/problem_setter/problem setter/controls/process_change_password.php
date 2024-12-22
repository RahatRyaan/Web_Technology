<?php
    $newPassword = "";
    $isAllDataSet = true;
    $errorMessage = "";
    $currPassError = $newPassError = $retypePassError = $successMessage = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_REQUEST["current_pass"])) {
            $currPassError = "Current password is required";
            $isAllDataSet = false;
        }
        if (empty($_REQUEST["new_pass"])) {
            $newPassError = "New password is required";
            $isAllDataSet = false;
        }
        if (empty($_REQUEST["retype_pass"])) {
            $retypePassError = "Retype password is required";
            $isAllDataSet = false;
        }
        if ($_REQUEST["new_pass"] != $_REQUEST["retype_pass"]) {
            $errorMessage = "New password and retype password do not match";
            $isAllDataSet = false;
        } else {
            $newPassword = $_REQUEST["new_pass"];
        }
        if ($isAllDataSet) {
            $data = file_get_contents("../data/problem_setter_data.json");
            $json_arr = json_decode($data, true);
            $current_pass = "";

            // Find the user by email and update the password
            foreach ($json_arr as $key => $value) {
                if ($value['Email'] == $_SESSION["Email"]) {
                    $current_pass = $json_arr[$key]['Password'];
                    $json_arr[$key]['Password'] = $newPassword;
                    break;
                }
            }

            // Check if the current password matches
            if ($current_pass == $_REQUEST["current_pass"]) {
                // Encode and save the updated data back to the JSON file
                $jsondata = json_encode($json_arr, JSON_PRETTY_PRINT);
                if (file_put_contents("../Data/problem_setter_data.json", $jsondata)) {
                    $successMessage = "Password successfully changed";
                } else {
                    $errorMessage = "Failed to write to the file";
                }
            } else {
                $errorMessage = "Current password is incorrect";
            }
        } else {
            $errorMessage = "Password change unsuccessful. Please check the provided information.";
        }
    }
?>
