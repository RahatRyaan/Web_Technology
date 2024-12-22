<!DOCTYPE html>
<html lang="en">
<head>
    <title>Change Password</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <?php include '../../Layouts/logged_in_header.php'; 
        include '../Controls/changePassword.php';
    ?>
    
    <table border="1" style="border-collapse: collapse;" cellpadding="10">
        <tr>
            <td> <a href="dashboard.php"> Dashboard </a> </td>
            <td rowspan="5">  
                <fieldset>
                    <legend> Change Password </legend>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <table>
                            <tr>  
                                <td>Current Password</td>
                                <td><input type="text" name="current_pass" placeholder="Enter current password"></td>
                                <td><?php echo $a ?></td>
                            </tr>
                            <tr>  
                                <td>New Password</td>
                                <td><input type="text" name="new_pass" placeholder="Enter new password"></td>
                                <td><?php echo $b ?></td>

                            </tr>
                            <tr>  
                                <td>Retype New Password</td>
                                <td><input type="text" name="retype_pass" placeholder="Retype new password"></td>
                                <td><?php echo $c ?></td>

                            </tr>
                            <tr>
                                <td> <input type="submit" value="Submit"> </td>
                                <td> <input type="reset" value="Reset"> </td>
                            </tr>
                            <tr><td><?php echo $error ?></td></tr>
                        </table>
                    </form>
                </fieldset>
            </td>
        </tr>
        <tr><td> <a href="view_profile.php"> View Profile </a> </td></tr>
        <tr><td> <a href="change_password.php"> Change Password </a> </td></tr>
    </table>

    <?php include '../../Layouts/footer.php'; ?>
</body>
</html>