<?php
    $firstNameError = $lastNameError = $emailError = $dobError = $genderError = $organizationError = $countryError = $phoneError = $bioError = $passwordError = $confirmPasswordError = $profilePictureError = $termsError = $registrationStatus = "";
    $hasErrors = false;

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Check each field for errors
        if (empty($_POST["first_name"])) {
            $firstNameError = "First Name is required.";
            $hasErrors = true;
        }
        if (empty($_POST["last_name"])) {
            $lastNameError = "Last Name is required.";
            $hasErrors = true;
        }
        if (!empty($_REQUEST["Email"])) {
            $existingdata = file_get_contents("../data/coach_data.json");
            $phpdata = json_decode($existingdata, true);
            foreach ($phpdata as $entry) {
                if ($entry["Email"] == $_REQUEST["Email"]) {
                    $emailError = "Email address is already registered. Choose a different email.";
                    $isAllDataSet = false;
                    break;
                }
            }
        }
        if (empty($_POST["dob"])) {
            $dobError = "Date of Birth is required.";
            $hasErrors = true;
        }
        if (!empty($_REQUEST["dob"])) {
            $currentDate = date("Y-m-d");
            if ($_REQUEST["dob"] > $currentDate) {
                $joiningDateError = "Date of Birth cannot be in the future";
                $isAllDataSet = false;
            }
        }
        if (empty($_POST["gender"])) {
            $genderError = "Gender is required.";
            $hasErrors = true;
        }
        if (empty($_POST["organization"]) || !ctype_alpha($_POST["organization"])) {
            $organizationError = "Organization is required.";
            $hasErrors = true;
        }
        if ($_POST["country"] === "select country") {
            $countryError = "Please select a country.";
            $hasErrors = true;
        }
        if (empty($_POST["phone"]) || !is_numeric($_POST["phone"])) {
            $phoneError = "Valid Phone Number is required.";
            $hasErrors = true;
        }
        if (empty($_POST["password"])) {
            $passwordError = "Password is too short.";
            $hasErrors = true;
        } else {
            $hasUppercase = false;
            $passwordChars = str_split($_POST["password"]);
            
            foreach ($passwordChars as $char) {
                if (ctype_upper($char)) {
                    $hasUppercase = true;
                    break;
                }
            }
        
            if (!$hasUppercase) {
                $passwordError = "Password must contain at least one capital letter.";
                $hasErrors = true;
            }
        }
        if ($_POST["password"] !== $_POST["confirm_password"]) {
            $confirmPasswordError = "Passwords do not match.";
            $hasErrors = true;
        }
        // if ($_FILES["profile_picture"]["error"] === UPLOAD_ERR_OK) {
        //     $profilePictureError = "Profile picture upload failed. Please try again.";
        //     $hasErrors = true;
        // } else {
        //     $profilePictureError = "Profile picture upload failed. Please try again.";
        //     $hasErrors = true;
        // }
        if (empty($_POST["terms"])) {
            $termsError = "You must agree to the Terms & Conditions.";
            $hasErrors = true;
        }
        if (!$hasErrors) {
            $existingData = file_get_contents("../data/coach_data.json");
            $phpData = json_decode($existingData, true); // Decode as an associative array

            $formdata = array(
                "FirstName" => $_POST["first_name"],
                "LastName" => $_POST["last_name"],
                "Email" => $_POST["email"],
                "Dob" => $_POST["dob"],
                "Gender" => $_POST["gender"],
                "Organization" => $_POST["organization"],
                "Country" => $_POST["country"],
                "Phone" => $_POST["phone"],
                "Password" => $_POST["password"],
            );
            // Move the uploaded profile picture to a destination folder
            $uploadDirectory = "../uploads/";
            $targetFile = $uploadDirectory . $_POST["email"].".jpg";

            if (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $targetFile)) {
                // Profile picture uploaded successfully
                $formdata["ProfilePicture"] = $targetFile;
            } else {
                // echo "Profile picture upload failed. Please try again.";
                $registrationStatus = "Profile picture upload failed. Please try again.";
                exit;
            }

            $phpData[] = $formdata;
            $jsondata = json_encode($phpData, JSON_PRETTY_PRINT);

            if (file_put_contents("../data/coach_data.json", $jsondata)) {
                // echo "Registration Successful";
                $registrationStatus = "Registration Successful";
            } else {
                // echo "File write failed";
                $registrationStatus = "File write failed";
            }
        }
    }
?>
