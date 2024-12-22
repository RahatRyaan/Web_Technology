<?php
    $firstNameError = $lastNameError = $genderError = $emailError = $phoneError = $dobError = $organizationError = $countryError = $bioError = $updateMsg = "";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $hasError = false;
        if (empty($_POST["FirstName"])) {
            $hasError = true;
            $firstNameError = "First Name is required";
        }
        if (empty($_POST["LastName"])) {
            $hasError = true;
            $lastNameError = "Last Name is required";
        }
        if (empty($_POST["Gender"])) {
            $hasError = true;
            $genderError = "Gender is required";
        }
        if (empty($_POST["Email"])) {
            $hasError = true;
            $emailError = "Email is required";
        } elseif (!filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL)) {
            $hasError = true;
            $emailError = "Please enter a valid email address";
        }
        if (empty($_POST["Phone"])) {
            $hasError = true;
            $phoneError = "Phone is required";
        }
        if (empty($_POST["Dob"])) {
            $hasError = true;
            $dobError = "Date of Birth is required";
        }
        if (empty($_POST["Organization"])) {
            $hasError = true;
            $organizationError = "Organization is required";
        }
        if (empty($_POST["Country"])) {
            $hasError = true;
            $countryError = "Country is required";
        }
        if (empty($_POST["Bio"])) {
            $hasError = true;
            $bioError = "Bio is required";
        }
        if(!$hasError) {
            $dbManager = new DatabaseOperations();
            $connection = $dbManager->openConnection();

            $firstName = $_POST["FirstName"];
            $lastName = $_POST["LastName"];
            $gender = $_POST["Gender"];
            $dob = $_POST["Dob"];
            $email = $_POST["Email"];
            $organization = $_POST["Organization"];
            $country = $_POST["Country"];
            $phone = $_POST["Phone"];
            $bio = $_POST["Bio"];

            $updateResult = $dbManager->updateUserData("Problemsetter_Data", $email, $firstName, $lastName, $dob, $gender, $organization, $country, $phone, $bio);

            if ($updateResult) {
                $updateMsg = "User data updated successfully!";
            } else {
                $updateMsg = "Failed to update user data.";
            }

            $dbManager->closeConnection();
        } else {
            $updateMsg = "Profile Update UnSuccessfull..!!!! ";
        }
    }
?>