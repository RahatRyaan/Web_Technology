<?php
    include ('../Controls/loginControl.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <?php include '../../Layouts/header.php'; ?>
    <fieldset>
        <legend> User Login </legend>
        <form action="../Controls/loginControl.php" method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td> <label for="Email"> Email </label> </td>
                    <td> <input type="text" name="Email" placeholder="Enter Email"> </td>
                </tr>
                <tr>
                    <td> <label for="Password"> Password </label> </td>
                    <td> <input type="password" name="Password" placeholder="Enter Password"> </td>
                </tr>
                <tr>
                    <td> <input type="submit" name="login" value="Log In"> </td>
                </tr>
            </table>
        </form>
    </fieldset>
    <?php include '../../Layouts/footer.php'; ?>
</body>
</html>