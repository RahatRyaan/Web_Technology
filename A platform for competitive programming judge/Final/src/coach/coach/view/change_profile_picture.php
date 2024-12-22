<?php 
    include '../../layouts/logged_in_header.php'; 
    include '../controls/change_profile_picture.php'; 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
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
            <tr><td> <a href="change_profile_picture.php"> Change Picture </a> </td></tr>
        </table>
    </form>
    <?php include '../../Layouts/footer.php'; ?>
</body>
</html>