<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">

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
                            <td> <?php echo $current_user->firstname; ?> </td>
                        </tr>
                        <tr>  
                            <td> Last Name </td>
                            <td> <?php echo $current_user->lastname; ?> </td>
                        </tr>
                        <tr>  
                            <td> Gender </td>
                            <td> <?php echo $current_user->gender; ?> </td>
                        </tr>
                        <tr>  
                            <td> Email </td>
                            <td> <?php echo $current_user->email; ?> </td>
                        </tr>
                        <tr>  
                            <td> Phone </td>
                            <td> <?php echo $current_user->phone; ?> </td>
                        </tr>
                        <tr>  
                            <td> Date of Birth </td>
                            <td> <?php echo $current_user->dob; ?> </td>
                        </tr>
                        <tr>  
                            <td> Organization </td>
                            <td> <?php echo $current_user->organization; ?> </td>
                        </tr>
                        <tr>  
                            <td> Country </td>
                            <td> <?php echo $current_user->country; ?> </td>
                        </tr>
                        <tr>  
                            <td> Profile Picture </td>
                            <td> <img src="<?php echo $current_user->profilepicture; ?>" alt="Profile Picture" width="50px" height="50px"> </td>
                        </tr>
                    </table>
                </fieldset>
            </td>
        </tr>
        <tr><td> <a href="view_profile.php"> View Profile </a> </td></tr>
        <tr><td> <a href="change_profile_picture.php"> Change Profile Picture </a> </td></tr>
        <tr><td> <a href="change_password.php"> Change Password </a> </td></tr>
    </table>

    <?php include '../../Layouts/footer.php'; ?>
</body>
</html>
