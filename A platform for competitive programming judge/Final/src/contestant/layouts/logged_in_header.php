<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
</head>
<body>
    <?php include '../controls/process_current_user.php'; ?>
    <table>
        <tr>
            <td> <h2>Online Judge</h2> </td>
        </tr>
        <tr>
            <td align="center"> <a href="dashboard.php"> Home </a> </td>
            <td align="center"> Logged in as <a href="view_profile.php"> <?php echo $current_user_name ?> </a> </td>
            <td align="center"> <a href="../controls/process_logout.php"> Logout </a> </td>
        </tr>
    </table>
    <br><br>
</body>
</html>