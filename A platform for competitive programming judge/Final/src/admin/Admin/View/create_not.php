<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">

</head>
<body>
    <?php include '../../Layouts/logged_in_header.php'; 
    include '../Controls/create_not.php' ?>
    
    <table border="1" style="border-collapse: collapse;" cellpadding="10">
        <tr>
            <td> <a href="dashboard.php"> Dashboard </a> </td>
            <td rowspan="5"> 
                <table>
                <form action="" method="POST" enctype="multipart/form-data">
                    <tr>
                        <th><label for="notification">Notification:</label></th>
                        <td>
                            <textarea id="notification" name="notification" rows="7" cols="30"></textarea>
                        </td>
                        <td><?php echo $contentError; ?></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center;">
                            <input type="submit" value="Post">
                        </td>
                        <td><?php echo $postStatus; ?></td>
                    </tr>
                </form>
                </table>
            </td>
        </tr>
        <tr><td> <a href="create_not.php"> Create </a> </td></tr>
        <tr><td> <a href="view_not.php"> View </a> </td></tr>

    </table>

    <?php include '../../Layouts/footer.php'; ?>
</body>
</html>