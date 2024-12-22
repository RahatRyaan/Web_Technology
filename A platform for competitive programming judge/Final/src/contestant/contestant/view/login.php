<?php 
    include '..\..\Layouts\header.php';
    include '..\controls\process_login.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
        
    </head>
        <body>
         <p>Contestant Login</p>
            <table> 
                <form action="" method="POST" enctype="multipart/form-data"> 
                 <tr> 
                    <th><label for="email" placeholder="Email">Email:</label></th> 
                    <td><input type="text" id="email" name="email"></td> 
                    <td><?php echo $emailError; ?></td> 
                </tr> 
                <tr> 
                    <th><label for="password" placeholder="Password">Password:</label></th> 
                    <td><input type="password" id="password" name="password"></td> 
                    <td><?php echo $passwordError; ?></td> 
                </tr> 
                <tr> 
                    <td style="align: center;"><input type="submit" name="login" value="Login"></td> 
                    <td><input type="reset" value="Reset"></td>
                    <td><?php echo $loginError; ?></td> 
                </tr> 
                </form> 
            </table> 
    
            <?php include '../../layouts/footer.php'; ?>
        </body>
</html>
