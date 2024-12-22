<?php
    include '../model/db_operations.php';

    $firstNameError = $lastNameError = $emailError = $dobError = $genderError = $organizationError = $countryError = $phoneError = $bioError = $passwordError = $confirmPasswordError = $profilePictureError = $termsError = $registrationStatus = "";
    $hasErrors = false;

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Check each field for errors
        if (empty($_POST["first_name"])) {
            $firstNameError = "First Name is required.";
            $hasErrors = true;
        } elseif (!ctype_alpha($_POST["first_name"])) {
            $firstNameError = "Invalid characters in First Name. Only alphabetic characters are allowed.";
            $hasErrors = true;
        }
        if (empty($_POST["last_name"])) {
            $lastNameError = "Last Name is required.";
            $hasErrors = true;
        } elseif (!ctype_alpha($_POST["last_name"])) {
            $lastNameError = "Invalid characters in Last Name. Only alphabetic characters are allowed.";
            $hasErrors = true;
        }
        if (empty($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $emailError = "Valid Email is required.";
            $hasErrors = true;
        }
        if (empty($_POST["dob"])) {
            $dobError = "Date of Birth is required.";
            $hasErrors = true;
        }
        if (empty($_POST["gender"])) {
            $genderError = "Gender is required.";
            $hasErrors = true;
        }
        if (empty($_POST["organization"])) {
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
        if (empty($_POST["bio"])) {
            $bioError = "Bio is required.";
            $hasErrors = true;
        }
        if (strlen($_POST["password"]) < 8 || empty($_POST["password"])) {
            $passwordError = "Password is too short.";
            $hasErrors = true;
        }
        if ($_POST["password"] !== $_POST["confirm_password"]) {
            $confirmPasswordError = "Passwords do not match.";
            $hasErrors = true;
        }
        if ($_FILES["profile_picture"]["error"] === UPLOAD_ERR_OK) {
            $allowedFormats = ["image/jpeg", "image/jpg", "image/png"];
            $fileType = $_FILES["profile_picture"]["type"];
            if (!in_array($fileType, $allowedFormats)) {
                $profilePictureError = "Profile picture must be in JPG, JPEG, or PNG format.";
                $hasErrors = true;
            }
        } else {
            $profilePictureError = "Profile picture upload failed. Please try again.";
            $hasErrors = true;
        }
        if (empty($_POST["terms"])) {
            $termsError = "You must agree to the Terms & Conditions.";
            $hasErrors = true;
        }
        if (!$hasErrors) {
            // Move the uploaded profile picture to a destination folder
            $uploadDirectory = "../uploads/";
            $targetFile = $uploadDirectory . $_POST["email"].".jpg";

            if (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $targetFile)) {
                $formdata["ProfilePicture"] = $targetFile;
            } else {
                $registrationStatus = "Profile picture upload failed. Please try again.";
                exit;
            }

            $dbOperations = new DatabaseOperations();
            $connection = $dbOperations->openConnection();

            $firstName = $_POST["first_name"];
            $lastName = $_POST["last_name"];
            $email = $_POST["email"];
            $dob = $_POST["dob"];
            $gender = $_POST["gender"];
            $organization = $_POST["organization"];
            $country = $_POST["country"];
            $phone = $_POST["phone"];
            $bio = $_POST["bio"];
            $password = $_POST["password"];
            $profilePicture = $targetFile;

            $result = $dbOperations->insertUserData("Problemsetter_Data", $firstName, $lastName, $email, $dob, $gender, $organization, $country, $phone, $bio, $password, $profilePicture);

            if (!$result) {
                $registrationStatus =  "Error: " . $this->connection->error;
            } else {
                $registrationStatus = "Registration Successfull";
            }

            $dbOperations->closeConnection();
        }
    }
?>
