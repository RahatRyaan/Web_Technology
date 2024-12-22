

<!DOCTYPE html> 
<html> 
<head> 
    <title>Problem Setter Registration</title>  
</head> 
<body> 

    <h1>Coach Registration</h1>
    <table> 
        <form action="" method="POST" enctype="multipart/form-data"> 
            <tr> 
                <th><label for="first_name">First Name:</label></th> 
                <td><input type="text" id="first_name" name="first_name"></td> 
                <td><?php echo $firstNameError; ?></td> 
            </tr> 
            <tr> 
                <th><label for="last_name">Last Name:</label></th> 
                <td><input type="text" id="last_name" name="last_name"></td> 
                <td><?php echo $lastNameError; ?></td> 
            </tr>  
            <tr> 
                <th><label for="email">Email:</label></th> 
                <td><input type="email" id="email" name="email"></td> 
                <td><?php echo $emailError; ?></td> 
            </tr> 
            <tr> 
                <th><label for="dob">Date of Birth</label></th> 
                <td><input type="date" id="dob" name="dob"></td> 
                <td><?php echo $dobError; ?></td> 
            </tr>
            <tr> 
                <th><label for="gender">Gender:</label></th> 
                <td>
                   <input type="radio" name="gender" value="male"> Male
                   <input type="radio" name="gender" value="female"> Female
                   <input type="radio" name="gender" value="other"> Other
                </td>
                <td><?php echo $genderError; ?></td> 
            </tr>
            <tr> 
                <th><label for="organization">Organization:</label></th> 
                <td><input type="text" id="organization" name="organization"></td> 
                <td><?php echo $organizationError; ?></td> 
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
               <td><?php echo $countryError; ?></td> 
            </tr>
            <tr> 
                <th><label for="phone">Phone Number</label></th> 
                <td><input type="text" id="phone" name="phone"></td> 
                <td><?php echo $phoneError; ?></td> 
            </tr>
            <tr> 
                <th><label for="password">Password:</label></th> 
                <td><input type="password" id="password" name="password"></td> 
                <td><?php echo $passwordError; ?></td> 
            </tr> 
            <tr> 
                <th><label for="confirm_password">Confirm Password:</label></th> 
                <td><input type="password" id="confirm_password" name="confirm_password"></td> 
                <td><?php echo $confirmPasswordError; ?></td> 
            </tr> 
            <tr> 
                <th><label for="profile_picture">Profile Picture:</label></th> 
                <td><input type="file" id="profile_picture" name="profile_picture" accept="image/*"></td> 
                <td><?php echo $profilePictureError; ?></td> 
            </tr> 
            <tr> 
                <th><label for="terms">Terms & Condition</label></th> 
                <td><input type="checkbox" id="terms" name="terms">Agree</td> 
                <td><?php echo $termsError; ?></td> 
            </tr>
            <tr> 
                <td style="align: center;"><input type="submit" value="Register"></td> 
                <td><input type="reset" value="Reset"></td>
            </tr> 
            <tr>
                <td><?php echo $registrationStatus; ?></td>
            </tr>
        </form> 
    </table> 

</body> 
</html>
