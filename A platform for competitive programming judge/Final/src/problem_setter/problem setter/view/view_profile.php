<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Profile</title>
    <link rel="stylesheet" type="text/css" href="../css/general_style.css">
</head>
<body>
    <?php include '../../Layouts/logged_in_header.php'; ?>
    
    <table border="1" style="border-collapse: collapse;" cellpadding="10">
        <tr>
            <td> <a href="dashboard.php"> Dashboard </a> </td>
            <td rowspan="5"> 
                <fieldset>
                    <legend> View Profile </legend>
                    <table border="1" style="border-collapse: collapse;" cellpadding="5">
                        <tr>  
                            <td> First Name </td>
                            <td> <?php echo $current_user->FirstName; ?> </td>
                        </tr>
                        <tr>  
                            <td> Last Name </td>
                            <td> <?php echo $current_user->LastName; ?> </td>
                        </tr>
                        <tr>  
                            <td> Gender </td>
                            <td> <?php echo $current_user->Gender; ?> </td>
                        </tr>
                        <tr>  
                            <td> Email </td>
                            <td> <?php echo $current_user->Email; ?> </td>
                        </tr>
                        <tr>  
                            <td> Phone </td>
                            <td> <?php echo $current_user->Phone; ?> </td>
                        </tr>
                        <tr>  
                            <td> Date of Birth </td>
                            <td> <?php echo $current_user->Dob; ?> </td>
                        </tr>
                        <tr>  
                            <td> Organization </td>
                            <td> <?php echo $current_user->Organization; ?> </td>
                        </tr>
                        <tr>  
                            <td> Country </td>
                            <td> <?php echo $current_user->Country; ?> </td>
                        </tr>
                        <tr>  
                            <td> Bio </td>
                            <td> <?php echo $current_user->Bio; ?> </td>
                        </tr>
                        <tr>  
                            <td> Profile Picture </td>
                            <td> <img src="<?php echo $current_user->ProfilePicture; ?>" alt="Profile Picture" width="50px" height="50px"> </td>
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

    <?php include '../../Layouts/footer.php'; ?>
</body>
</html>
