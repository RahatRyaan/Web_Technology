<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">

</head>
<body>
    <?php include '../../Layouts/logged_in_header.php'; ?>
    
    <table border="1" style="border-collapse: collapse;" cellpadding="10">
        <tr>
            <td> <a href="dashboard.php"> Dashboard </a> </td>
            <td rowspan="5"> Notifications </td>
        </tr>
        <tr><td> <a href="create_not.php"> Create </a> </td></tr>
        <tr><td> <a href="view_not.php"> View </a> </td></tr>

    </table>

    <?php include '../../Layouts/footer.php'; ?>
</body>
</html>