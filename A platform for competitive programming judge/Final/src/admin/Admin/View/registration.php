<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Registration</title>
    <style>
        .error {
            color: red;
        }
    </style>
    <script src="../JS/validation.js" defer></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css">

</head>
<body>
    <?php 
        include '../../Layouts/header.php'; 
        include_once '../Controls/process_registration.php';
    ?>
    <fieldset>
        <legend> Registration </legend>
        <form action="" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
            <table>
                <tr>
                    <td> <label for="Name"> Name </label> </td>
                    <td> <input type="text" name="Name" id="Name" placeholder="Enter Name"> </td>
                    <td class="error" id="nameError"></td>
                </tr>
                <tr>
                    <td> <label for="Gender"> Gender </label> </td>
                    <td> 
                        <input type="radio" name="Gender" value="male" id="Male"> 
                        <label for="Male"> Male </label>
                        <input type="radio" name="Gender" value="female" id="Female"> 
                        <label for="Female"> Female </label>
                        <input type="radio" name="Gender" value="other" id="Other"> 
                        <label for="Other"> Other </label>
                    </td>
                    <td class="error" id="genderError"></td>
                </tr>
                <tr>
                    <td> <label for="Email"> Email </label> </td>
                    <td> <input type="text" name="Email" id="Email" placeholder="Enter Email"> </td>
                    <td class="error" id="emailError"></td>
                </tr>
                <tr>
                    <td> <label for="Phone"> Phone </label> </td>
                    <td> <input type="text" name="Phone" id="Phone" placeholder="Enter Phone"> </td>
                    <td class="error" id="phoneError"></td>
                </tr>
                <tr>
                    <td> <label for="Dob"> Date of Birth </label> </td>
                    <td> <input type="date" name="Dob" id="Dob" placeholder="Enter Dob"> </td>
                    <td class="error" id="dobError"></td>
                </tr>
                <tr>
                    <td> <label for="Address"> Address </label> </td>
                    <td> <input type="text" name="Address" id="Address" placeholder="Enter Address"> </td>
                    <td class="error" id="addressError"></td>
                </tr>
                <tr>
                    <td> <label for="JoinDate"> Joining Date </label> </td>
                    <td> <input type="date" name="JoinDate" id="JoinDate" placeholder="Enter Joining Date"> </td>
                    <td class="error" id="joiningDateError"></td>
                </tr>
                <tr>
                    <td> <label for="Password"> Password </label> </td>
                    <td> <input type="password" name="Password" id="Password" placeholder="Enter Password"> </td>
                    <td class="error" id="passwordError"></td>
                </tr>
                <tr>
                    <td> <label for="ConfirmPassword"> Confirm Password </label> </td>
                    <td> <input type="password" name="ConfirmPassword" id="ConfirmPassword" placeholder="Confirm Password"> </td>
                    <td class="error" id="confirmPasswordError"></td>
                </tr>
                <tr>
                    <td> <label for="ProfilePic"> Profile Photo </label> </td>
                    <td> <input type="file" name="image"> </td>
                    <td class="error" id="fileError"></td>
                </tr>
                <tr>
                    <td colspan="3"> <input type="submit" value="Submit"> </td>
                </tr>
            </table>
        </form>
    </fieldset>

    <?php include '../../Layouts/footer.php'; ?>
</body>
</html>
