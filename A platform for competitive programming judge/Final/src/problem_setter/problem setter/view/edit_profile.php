<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Profile</title>
    <link rel="stylesheet" type="text/css" href="../css/general_style.css">
</head>
<body>
    <?php 
        include '../../layouts/logged_in_header.php';
        include '../controls/process_edit_profile.php';
    ?>
    <table border="1" style="border-collapse: collapse;" cellpadding="10">
        <tr>
            <td> <a href="dashboard.php"> Dashboard </a> </td>
            <td rowspan="5"> 
                <fieldset>
                    <legend> Edit Profile </legend>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <table>
                            <tr>
                                <td> <label for="FirstName"> First Name </label> </td>
                                <td> <input type="text" name="FirstName" value="<?php echo $current_user->FirstName; ?>"> </td>
                                <td><?php echo $firstNameError; ?></td> 
                            </tr>
                            <tr>
                                <td> <label for="LastName"> Last Name </label> </td>
                                <td> <input type="text" name="LastName" value="<?php echo $current_user->LastName; ?>"> </td>
                                <td><?php echo $lastNameError; ?></td>
                            </tr>
                            <tr>
                            <td> <label for="Gender"> Gender </label> </td>
                                <td> 
                                    <input type="radio" name="Gender" value="male" <?php if ($current_user->Gender == 'male') echo 'checked'; ?>> 
                                    <label for="Male"> Male </label>
                                    <input type="radio" name="Gender" value="female" <?php if ($current_user->Gender == 'female') echo 'checked'; ?>> 
                                    <label for="Female"> Female </label>
                                    <input type="radio" name="Gender" value="other" <?php if ($current_user->Gender == 'other') echo 'checked'; ?>> 
                                    <label for="Other"> Other </label>
                                </td>
                                <td><?php echo $genderError; ?></td>
                            </tr>
                            <tr>
                                <td> <label for="Email"> Email </label> </td>
                                <td> <input type="text" name="Email" value="<?php echo $current_user->Email; ?>"> </td>
                                <td><?php echo $emailError; ?></td>
                            </tr>
                            <tr>
                                <td> <label for="Phone"> Phone </label> </td>
                                <td> <input type="text" name="Phone" value="<?php echo $current_user->Phone; ?>"> </td>
                                <td><?php echo $phoneError; ?></td>
                            </tr>
                            <tr>
                                <td> <label for="Dob"> Date of Birth </label> </td>
                                <td> <input type="date" name="Dob" value="<?php echo $current_user->Dob; ?>"> </td>
                                <td><?php echo $dobError; ?></td>
                            </tr>
                            <tr>
                                <td> <label for="Organization"> Organization </label> </td>
                                <td> <input type="text" name="Organization" value="<?php echo $current_user->Organization; ?>"> </td>
                                <td><?php echo $organizationError; ?></td> 
                            </tr>
                            <tr>
                                <td> <label for="Country"> Country </label> </td>
                                <td>
                                    <select class="form-select" id="Country" name="Country">
                                        <option value="Afghanistan" <?php if ($current_user->Country === "Afghanistan") echo 'selected="selected"'; ?>>Afghanistan</option>
                                        <option value="Australia" <?php if ($current_user->Country === "Australia") echo 'selected="selected"'; ?>>Australia</option>
                                        <option value="Bangladesh" <?php if ($current_user->Country === "Bangladesh") echo 'selected="selected"'; ?>>Bangladesh</option>
                                    </select>
                                </td>
                                <td><?php echo $countryError; ?></td>
                            </tr>
                            <tr>
                                <td> <label for="Bio"> Bio </label> </td>
                                <td> <input type="text" name="Bio" value="<?php echo $current_user->Bio; ?>"> </td>
                                <td><?php echo $bioError; ?></td>
                            </tr>
                            <tr>
                                <td> <input type="submit" value="Update"> </td>
                                <td> <input type="reset" value="Reset"> </td>
                            </tr>
                            <tr>
                                <td><?php echo $updateMsg; ?></td>
                            </tr>
                        </table>
                    </form>
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
