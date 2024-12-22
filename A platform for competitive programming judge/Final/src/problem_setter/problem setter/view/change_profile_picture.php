<!DOCTYPE html>
<html>
<head>
    <title>Change Profile Picture</title>
    <link rel="stylesheet" type="text/css" href="../css/general_style.css">
</head>
<body>
    <?php 
        include '../../layouts/logged_in_header.php'; 
        include '../controls/process_change_profile_picture.php'; 
    ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <table border="1" style="border-collapse: collapse;" cellpadding="10">
            <tr>
                <td> <a href="dashboard.php"> Dashboard </a> </td>
                <td rowspan="5"> 
                    <fieldset>
                        <legend> Change Profile Picture </legend>
                        <table>
                            <tr>  
                                <td>Current Picture</td>
                                <td> <img src="<?php echo $previousImage; ?>" alt="Profile Picture" width="50px" height="50px"> </td>
                            </tr>
                            <tr>  
                                <td>New Picture</td>
                                <td><input type="file" name="image"></td>
                                <td><?php echo $message; ?></td>
                            </tr>
                            <tr>
                                <td> <input type="submit" value="Submit"> </td>
                                <td> <input type="reset" value="Reset"> </td>
                            </tr>
                        </table>
                    </fieldset>
                </td>
            </tr>
            <tr><td> <a href="view_profile.php"> View Profile </a> </td></tr>
            <tr><td> <a href="edit_profile.php"> Edit Profile </a> </td></tr>
            <tr><td> <a href="change_profile_picture.php"> Change Profile Picture </a> </td></tr>
            <tr><td> <a href="change_password.php"> Change Password </a> </td></tr>
        </table>
    </form>
    <?php include '../../Layouts/footer.php'; ?>
</body>
</html>