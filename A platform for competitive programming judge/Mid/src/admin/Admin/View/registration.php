<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Registration</title>
</head>
<body>
    <?php include '../../Layouts/header.php'; 
        include '../Controls/process.php';
    ?>
    <fieldset>
        <legend> Registration </legend>
        <form action="" method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td> <label for="Name"> Name </label> </td>
                    <td> <input type="text" name="Name" placeholder="Enter Name"> </td>
                    <td> <?php echo $nameError; ?> </td>
                </tr>
                <tr>
                    <td> <label for="Gender"> Gender </label> </td>
                    <td> 
                        <input type="radio" name="Gender" value="male"> 
                        <label for="Male"> Male </label>
                        <input type="radio" name="Gender" value="female"> 
                        <label for="Female"> Female </label>
                        <input type="radio" name="Gender" value="other"> 
                        <label for="Other"> Other </label>
                    </td>
                    <td> <?php echo $genderError; ?> </td>
                </tr>
                <tr>
                    <td> <label for="Email"> Email </label> </td>
                    <td> <input type="text" name="Email" placeholder="Enter Email"> </td>
                    <td> <?php echo $emailError; ?> </td>
                </tr>
                <tr>
                    <td> <label for="Phone"> Phone </label> </td>
                    <td> <input type="text" name="Phone" placeholder="Enter Phone"> </td>
                    <td> <?php echo $phoneError; ?> </td>
                </tr>
                <tr>
                    <td> <label for="Dob"> Date of Birth </label> </td>
                    <td> <input type="date" name="Dob" placeholder="Enter Dob"> </td>
                    <td> <?php echo $dobError; ?> </td>
                </tr>
                <tr>
                    <td> <label for="Address"> Address </label> </td>
                    <td> <input type="text" name="Address" placeholder="Enter Address"> </td>
                    <td> <?php echo $addressError; ?> </td>
                </tr>
                <tr>
                    <td> <label for="JoinDate"> Joining Date </label> </td>
                    <td> <input type="date" name="JoinDate" placeholder="Enter Joining Date"> </td>
                    <td> <?php echo $joiningDateError; ?> </td>
                </tr>
                <tr>
                    <td> <label for="Password"> Password </label> </td>
                    <td> <input type="password" name="Password" placeholder="Enter Password"> </td>
                    <td> <?php echo $passwordError; ?> </td>
                </tr>
                <tr>
                    <td> <label for="ConfirmPassword"> Confirm Password </label> </td>
                    <td> <input type="password" name="ConfirmPassword" placeholder="Confirm Password"> </td>
                    <td> <?php echo $confirmPasswordError; ?> </td>
                </tr>
                <tr>
                    <td> <label for="ProfilePic"> Profile Photo </label> </td>
                    <td> <input type="file" name="image"> </td>
                    <td> <?php echo $fileError; ?> </td>
                </tr>
                <tr>
                    <td> <input type="submit" value="Submit"> </td>
                    <td> <input type="reset" value="Reset"> </td>
                </tr>
            </table>
        </form>
    </fieldset>
    <?php include '../../Layouts/footer.php'; ?>
</body>
</html>