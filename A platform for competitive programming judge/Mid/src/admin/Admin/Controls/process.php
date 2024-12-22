<?php
    $nameError = $genderError = $emailError = $phoneError = $dobError = $addressError = $joiningDateError = $passwordError = $confirmPasswordError = $fileError = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $gender = $email = $phone = $dob = $address = $joiningDate = $password = $confirmPassword = ""; 
        $isAllDataSet = true;


        if (empty($_POST["Name"]) || !ctype_alpha($_POST["Name"][0])) {
            $nameError = "Valid Name is required";
            $isAllDataSet = false;
        }

        if (!isset($_POST["Gender"])) {
            $genderError = "Gender is required";
            $isAllDataSet = false;
        }

        if (empty($_POST["Email"]) || !ctype_alpha($_POST["Email"][0])) {
            $emailError = "Valid Email is required";
            $isAllDataSet = false;
        }

        if (empty($_POST["Phone"])) {
            $phoneError = "Phone is required";
            $isAllDataSet = false;
        } elseif (substr($_POST["Phone"], 0, 2) !== "01") {
            $phoneError = "Phone number must start with '01'";
            $isAllDataSet = false;
        }

        if (empty($_POST["Dob"])) {
            $dobError = "Dob is required";
            $isAllDataSet = false;
        }

        if (empty($_POST["Address"]) || !ctype_alpha($_POST["Address"])) {
            $addressError = "Address is required";
            $isAllDataSet = false;
        } 

        if (empty($_POST["JoinDate"])) {
            $joiningDateError = "Joining Date is required";
            $isAllDataSet = false;
        } 

        if (empty($_POST["Password"]) || empty($_POST["ConfirmPassword"])) {
            $passwordError = "Password and Confirm Password are required";
            $isAllDataSet = false;
        } elseif ($_POST["Password"] != $_POST["ConfirmPassword"]) {
            $passwordError = "Password and Confirm Password must be the same";
            $isAllDataSet = false;
        }

        if (empty($_FILES["image"]["name"])) {
            $fileError = "Please upload a file";
            $isAllDataSet = false;
        } elseif ($_FILES["image"]["type"] === "image/png") {
            $fileError = "PNG files are not allowed. Please upload a different image format.";
            $isAllDataSet = false;
        } else {
            if($isAllDataSet) move_uploaded_file($_FILES["image"]["tmp_name"], "../Uploads/".$_POST["Email"].".jpg");
        }

        if ($isAllDataSet) {
            $existingdata = file_get_contents("../data/jsondata.json");
            $phpdata = json_decode($existingdata);
            $formdata = array(
                "Name"=> $_POST["Name"],
                "Gender"=> $_POST["Gender"],
                "Email"=> $_POST["Email"],
                "Phone"=> $_POST["Phone"],
                "Dob"=> $_POST["Dob"],
                "Address"=> $_POST["Address"],
                "JoinDate"=> $_POST["JoinDate"],
                "Password"=> $_POST["Password"],
                "file"=>"../uploads/".$_POST["Email"].".jpg"
            );
            $phpdata[] = $formdata;
            $jsondata = json_encode($phpdata, JSON_PRETTY_PRINT);
            if (file_put_contents("../data/jsondata.json", $jsondata)) {
                echo "Registration Successful <br>";
            } else {
                echo "File write failed";
            }
        } else {
            echo "Registration Unsuccessful..!!!! <br>";
        }
    }
?>
