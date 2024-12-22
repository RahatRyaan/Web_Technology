<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $newPassword = ""; 
        $isAllDataSet = true;

        if (empty($_REQUEST["current_pass"])) {
            echo "Current password is required <br>";
            $isAllDataSet = false;
        }
        if (empty($_REQUEST["new_pass"])) {
            echo "New password is required <br>";
            $isAllDataSet = false;
        }
        if (empty($_REQUEST["retype_pass"])) {
            echo "Retype password is required <br>";
            $isAllDataSet = false;
        }
        if($_REQUEST["new_pass"] != $_REQUEST["retype_pass"]) {
            echo "New password and retype password must be same <br>";
            $isAllDataSet = false;
        }else {
            $newPassword = $_REQUEST["new_pass"];
        }
        if($isAllDataSet) {
            $data = file_get_contents("../Data/jsondata.json");
            $json_arr = json_decode($data, true);
            session_start();
            $current_pass = "";
            foreach ($json_arr as $key => $value) {
                if ($value['Email'] == $_SESSION["Email"]) {
                    $current_pass = $json_arr[$key]['Password'];
                    $json_arr[$key]['Password'] = $newPassword;
                    break;
                }
            }
            if($current_pass == $_REQUEST["current_pass"]) {
                $jsondata = json_encode($json_arr, JSON_PRETTY_PRINT);
                if(file_put_contents("../Data/jsondata.json", $jsondata)) {
                    echo "Password change Successfull <br>";
                }else {
                    echo "file written failed <br>";
                }
            }else {
                echo "Current password is wrong <br>";
            }
        } else {
            echo "Password change UnSuccessfull..!!!! <br>";
        }
    }
?>