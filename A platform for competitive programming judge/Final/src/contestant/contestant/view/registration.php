<!DOCTYPE html> 
<html> 
<head> 
    <title>Problem Setter Registration</title>  
    <script src="../js/validation.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css">

</head> 
<body > 
    <?php include '../../layouts/header.php'; ?>

    <h1><p>Registration</p></h1>
    <table> 
        <form action="../controls/process_registration.php" method="POST" enctype="multipart/form-data" onsubmit="return validation()"> 
            <tr> 
                <th><label for="first_name">First Name:</label></th> 
                <td><input type="text" id="first_name" name="first_name"></td> 
                <td><span id="firstNameError" class="error"></span></td> 
            </tr> 
            <tr> 
                <th><label for="last_name">Last Name:</label></th> 
                <td><input type="text" id="last_name" name="last_name"></td> 
                <td><span id="lastNameError" class="error"></span></td> 
            </tr>  
            <tr> 
                <th><label for="email">Email:</label></th> 
                <td><input type="email" id="email" name="email"></td> 
                <td><span id="emailError" class="error"></span></td> 
            </tr> 
            <tr> 
                <th><label for="dob">Date of Birth</label></th> 
                <td><input type="date" id="dob" name="dob"></td> 
                <td><span id="dobError" class="error"></span></td> 
            </tr>
            <tr> 
                <th><label for="gender">Gender:</label></th> 
                <td>
                   <input type="radio" name="gender" value="male"> Male
                   <input type="radio" name="gender" value="female"> Female
                   <input type="radio" name="gender" value="other"> Other
                </td>
                <td><span id="genderError" class="error"></span></td> 
            </tr>
            <tr> 
                <th><label for="organization">Organization:</label></th> 
                <td><input type="text" id="organization" name="organization"></td> 
                <td><span id="organizationError" class="error"></span></td> 
            </tr> 
            <tr>
               <th><label for="organization">Country:</label></th>
               <td>
                   <select class="form-select" id="country" name="country">
                       <option>select country</option>
                       <option value="Afghanistan">Afghanistan</option>
                       <option value="Australia">Australia</option>   
                       <option value="Bangladesh">Bangladesh</option>
                   </select>
               </td>
               <td><span id="countryError" class="error"></span></td> 
            </tr>
            <tr> 
                <th><label for="phone">Phone Number</label></th> 
                <td><input type="text" id="phone" name="phone"></td> 
                <td><span id="phoneError" class="error"></span></td> 
            </tr>
            <tr> 
                <th><label for="password">Password:</label></th> 
                <td><input type="password" id="password" name="password"></td> 
                <td><span id="passwordError" class="error"></span></td> 
            </tr> 
            <tr> 
                <th><label for="confirm_password">Confirm Password:</label></th> 
                <td><input type="password" id="confirm_password" name="confirm_password"></td> 
                <td><span id="confirmPasswordError" class="error"></span></td> 
            </tr> 
            <tr> 
                <th><label for="profile_picture">Profile Picture:</label></th> 
                <td><input type="file" id="profile_picture" name="profile_picture" accept="image/*"></td> 
                <td><span id="profilePictureError" class="error"></span></td> 
            </tr> 
            <tr> 
                <th><label for="terms">Terms & Condition</label></th> 
                <td><input type="checkbox" id="terms" name="terms">Agree</td> 
                <td><span id="termsError" class="error"></span></td> 
            </tr>
            <tr> 
                <td style="align: center;"><input type="submit" value="Register"></td> 
                <td><input type="reset" value="Reset"></td>
            </tr> 
            <tr>
            </tr>
        </form> 
    </table> 

    <?php include '../../layouts/footer.php'; ?>
</body> 
</html>
