<?php
    include '../Model/database.php';

    $registrationStatus = "";

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
    $password = $_POST["password"];
    $profilePicture = $targetFile;
    $result = $dbOperations->insertUserData("Contestant_Data", $firstName, $lastName, $email, $dob, $gender, $organization, $country, $phone, $password, $profilePicture);
    if (!$result) {
        $registrationStatus =  "Error: " . $this->connection->error;
    } else {
        $registrationStatus = "Registration Successfull";
        header('Location: ../view/login.php');
    }
    $dbOperations->closeConnection();
?>
