<?php 
    include '..\Controls\loginControl.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <?php include '../../Layouts/header.php'; ?>

    <h2 class="gg">Login (Coach)</h2>
    <table> 
        <form action="" method="POST" enctype="multipart/form-data"> 
            <tr> 
                <th><label for="email" placeholder="Email">Email:</label></th> 
                <td><input type="text" id="email" name="email"></td> 
                <td><?php echo $emailErr; ?></td> 
            </tr> 
            <tr> 
                <th><label for="password" placeholder="Password">Password:</label></th> 
                <td><input type="password" id="password" name="password"></td> 
                <td><?php echo $passwordErr; ?></td> 
            </tr> 
            <tr> 
                <td style="align: center;"><input type="submit" name="login" value="Login"></td> 
                <td><input type="reset" value="Reset"></td>
                <td><?php echo $loginError; ?></td> 
            </tr> 
        </form> 
    </table> 
    <?php include '../../Layouts/footer.php'; ?>
</body>
</html>
