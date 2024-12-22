<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
</head>
<body>
    <?php include '../controls/process_current_user.php'; ?>
    <table>
        <tr colspan="3">
            <td> <img src="../../assets/A_star_icon.png" width="50px" height="50px"> </td>
            <td> <b>A* Online Judge</b> </td>
        </tr>
        <tr>
            <td align="center"> <a href="dashboard.php"> Home </a> </td>
            <td align="center"> <a href="view_profile.php"> <?php echo $current_user_name ?> </a> </td>
            <td align="center"> <a href="../controls/process_logout.php"> Logout </a> </td>
        </tr>
    </table>
    <br><br>
</body>
</html>