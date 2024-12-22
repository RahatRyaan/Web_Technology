<?php
    $previousImage = "../uploads/" . $_SESSION["Email"] . ".jpg";
    $message = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $hasError = false;

        if (empty($_FILES["image"]["name"])) {
            $message = "Please select a file.";
            $hasError = true;
        } else {
            $uploadedImageName = $_SESSION["Email"] . ".jpg";
            $destinationPath = "../uploads/" . $uploadedImageName;

            if (move_uploaded_file($_FILES["image"]["tmp_name"], $destinationPath)) {
                $message = "Profile Picture Updated";
            } else {
                $message = "Failed to upload the file.";
            }
        }
    }
?>
