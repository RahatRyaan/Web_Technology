<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <?php include '../../Layouts/logged_in_header.php'; ?>
    
    <table border="1" style="border-collapse: collapse;" cellpadding="10">
        <tr>
            <td> <a href="dashboard.php"> Dashboard </a> </td>
            <td rowspan="5"> Welcome </td>
        </tr>
        <tr><td> <a href="view_profile.php"> View Profile </a> </td></tr>
        <tr><td> <a href="change_profile_picture.php"> Change Picture </a> </td></tr>
        <tr><td> <a href="notice.php"> Notice </a> </td></tr>

    </table>

    <?php include '../../Layouts/footer.php'; ?>
</body>
</html>