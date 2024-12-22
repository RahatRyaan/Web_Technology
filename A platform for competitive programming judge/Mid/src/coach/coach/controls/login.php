<?php
    session_start();
    if (isset($_SESSION["Email"])) {
        header("Location: ../view/dashboard.php");
    }

    $emailErr = $passwordErr = $loginErr = "";
    $hasErr = false;
    if (isset($_POST["login"])) {
        $userFound = false;

        if (empty($_POST["email"])) {
            $emailErr = "Please enter your email address";
            $hasErr = true;
        } 
        if (empty($_POST["password"])) {
            $passwordErr = "Please enter your password";
            $hasErr = true;
        } 
        if(!$hasErr) {
            $userData = file_get_contents("../data/coach_data.json");
            $users = json_decode($userData);

            foreach ($users as $user) {
                if ($user->Email == $_POST["email"] && $user->Password == $_POST["password"]) {
                    echo $user->Email;
                    $_SESSION["Email"] = $user->Email;
                    setcookie("user", $_SESSION["Email"], time() + 3600, "/");
                    header("Location: ../view/dashboard.php");
                    $userFound = true;
                    break;
                }
            }

            if (!$userFound) {
                $loginErr = "Login failed";
            }
        }
    }
?>
