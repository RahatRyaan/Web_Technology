<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php include '../Controls/profile_process.php'; ?>
    <table>
        <tr>
            <td colspan="2"> <h2>Online Programming Judge</h2> </td>
        </tr>
        <tr>
            <td align="center"> <a href="#"> Home </a> </td>
            <td align="center"> <a href="../View/view_profile.php"> <?php echo $current_user->first_name." ".$current_user->last_name ?> </a> </td>
            <td align="center"> <a href="../Controls/logout.php"> Logout </a> </td>
        </tr>
    </table>
    <br><br>
</body>
</html>