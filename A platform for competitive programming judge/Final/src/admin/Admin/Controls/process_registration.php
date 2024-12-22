<?php
require_once '../Model/db.php'; // Include the file with DatabaseOperations class

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming your form fields are named as follows, adjust as needed
    $name = $_POST['Name'];
    $gender = isset($_POST['Gender']) ? $_POST['Gender'] : '';
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];
    $dob = $_POST['Dob'];
    $address = $_POST['Address'];
    $joiningDate = $_POST['JoinDate'];
    $password = $_POST['Password'];
    $confirmPassword = $_POST['ConfirmPassword'];

    $uploadDirectory = "../uploads/";
    $file = $uploadDirectory . $_POST["Email"] . ".jpg";
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $file)) {
        $formdata["ProfilePicture"] = $file;
    } else {
        $registrationStatus = "Profile picture upload failed. Please try again.";
        exit;
    }

    $dbOperations = new DatabaseOperations();
    $dbOperations->openConnection();

    $tableName = 'admin_data';

    // Insert user data into the database
    $result = $dbOperations->insertUserData($tableName, $name, $gender, $email, $phone, $dob, $address, $joiningDate, $password, $file);

    if ($result) {
        header('Location: ../view/login.php');
    } else {
        echo "Error inserting data!";
    }

    $dbOperations->closeConnection();
} 
?>
