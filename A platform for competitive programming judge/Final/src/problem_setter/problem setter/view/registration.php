<!DOCTYPE html> 
<html> 
<head> 
    <title>Problem Setter Registration</title>  
    <script src="..\js\registration_validation.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/general_style.css">
</head> 
<body> 
    <?php include '../../layouts/header.php'; ?>

    <h1>Problemsetter Registration</h1>
    <table> 
        <form action="../controls/process_registration.php" method="POST" enctype="multipart/form-data" onsubmit="return validation()"> 
            <tr> 
                <th><label for="first_name">First Name:</label></th> 
                <td><input type="text" id="first_name" name="first_name"></td> 
                <td id="firstNameError"></td>  
            </tr> 
            <tr> 
                <th><label for="last_name">Last Name:</label></th> 
                <td><input type="text" id="last_name" name="last_name"></td> 
                <td id="lastNameError"></td> 
            </tr>  
            <tr> 
                <th><label for="email">Email:</label></th> 
                <td><input type="email" id="email" name="email"></td> 
                <td id="emailError"></td>  
            </tr> 
            <tr> 
                <th><label for="dob">Date of Birth</label></th> 
                <td><input type="date" id="dob" name="dob"></td> 
                <td id="dobError"></td> 
            </tr>
            <tr> 
                <th><label for="gender">Gender:</label></th> 
                <td>
                   <input type="radio" name="gender" value="male"> Male
                   <input type="radio" name="gender" value="female"> Female
                   <input type="radio" name="gender" value="other"> Other
                </td>
                <td id="genderError"></td> 
            </tr>
            <tr> 
                <th><label for="organization">Organization:</label></th> 
                <td><input type="text" id="organization" name="organization"></td> 
                <td id="organizationError"></td> 
            </tr> 
            <tr>
               <th><label for="organization">Country:</label></th>
               <td>
                    <select class="form-select" id="country" name="country">
                        <option>select country</option>
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Australia">Australia</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Canada">Canada</option>
                        <option value="Germany">Germany</option>
                        <option value="India">India</option>
                        <option value="Japan">Japan</option>
                        <option value="Mexico">Mexico</option>
                        <option value="South Africa">South Africa</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="United States">United States</option>
                    </select>
                </td>
                <td id="countryError"></td> 
            </tr>
            <tr> 
                <th><label for="phone">Phone Number</label></th> 
                <td><input type="text" id="phone" name="phone"></td> 
                <td id="phoneError"></td> 
            </tr>
            <tr> 
                <th><label for="bio">Bio:</label></th> 
                <td><textarea id="bio" name="bio" rows="4" cols="21"></textarea></td> 
                <td id="bioError"></td> 
            </tr> 
            <tr> 
                <th><label for="password">Password:</label></th> 
                <td><input type="password" id="password" name="password"></td> 
                <td id="passwordError"></td> 
            </tr> 
            <tr> 
                <th><label for="confirm_password">Confirm Password:</label></th> 
                <td><input type="password" id="confirm_password" name="confirm_password"></td> 
                <td id="confirmPasswordError"></td> 
            </tr> 
            <tr> 
                <th><label for="profile_picture">Profile Picture:</label></th> 
                <td><input type="file" id="profile_picture" name="profile_picture" accept="image/*"></td> 
                <td id="profilePictureError"></td> 
            </tr> 
            <tr> 
                <th><label for="terms">Terms & Condition</label></th> 
                <td><input type="checkbox" id="terms" name="terms">Agree</td> 
                <td id="termsError"></td> 
            </tr>
            <tr> 
                <td style="align: center;"><input type="submit" value="Register"></td> 
                <td><input type="reset" value="Reset"></td>
            </tr> 
            <tr>
                <td id="registrationStatus"><?php $registrationStatus ?></td>
            </tr>
        </form> 
    </table> 

    <?php include '../../layouts/footer.php'; ?>
</body> 
</html>
