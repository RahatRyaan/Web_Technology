<?php
require_once '../model/database.php'; // Include the file with DatabaseOperations class

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming your form fields are named as follows, adjust as needed
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $organization = $_POST['organization'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $uploadDirectory = "../uploads/";
    $file = $uploadDirectory . $_POST["email"].".jpg";
    if (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $file)) {
        $formdata["ProfilePicture"] = $file;
    } else {
        $registrationStatus = "Profile picture upload failed. Please try again.";
        exit;
    }

    $dbOperations = new DatabaseOperations();
    $dbOperations->openConnection();

    // Assuming your table name is 'users', adjust as needed
    $tableName = 'coach_data';

    // Insert user data into the database
    $result = $dbOperations->insertUserData($tableName, $firstName, $lastName, $email, $dob, $gender, $organization, $country, $phone, $password, $file);

    if ($result) {
        header('Location: ../view/login.php');
    } else {
        echo "Error inserting data!";
    }

    $dbOperations->closeConnection();
} 
?>
