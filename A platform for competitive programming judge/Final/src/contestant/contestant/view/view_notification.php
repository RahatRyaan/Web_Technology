<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="../js/view_notification.js"></script>
    <title>Profile</title>
</head>
<body>
    <?php include '../../Layouts/logged_in_header.php'; ?>
    
    <table border="1" style="border-collapse: collapse;" cellpadding="10">
        <tr>
        <td> <a href="dashboard.php"> Dashboard </a> </td>
            <td rowspan="5"> 
                <div id="blog-container"></div>
                <button id="load-more">Load More</button>
            </td>
        </tr>
        <tr><td> <a href="settings.php"> Settings </a> </td></tr>
        <tr><td> <a href="view_notification.php"> Settings </a> </td></tr>

    </table>

    <?php include '../../Layouts/footer.php'; ?>
</body>
</html>