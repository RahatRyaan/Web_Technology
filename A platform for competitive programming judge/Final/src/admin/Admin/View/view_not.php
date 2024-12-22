<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="../js/view_not.js"></script>

    <style>
        .blog-post {
        border: 1px solid #ddd;
        padding: 10px;
        margin-bottom: 20px;
        background-color: #f9f9f9;
    }
    </style>

</head>
<body>
    <?php include '../../Layouts/logged_in_header.php'; 
        include '../Controls/create_not.php'
    ?>
    
    <table border="1" style="border-collapse: collapse;" cellpadding="10">
        <tr>
            <td> <a href="dashboard.php"> Dashboard </a> </td>
            <td rowspan="5"> 
                <div id="blog-container"></div>
                <button id="load-more">Load More</button>
            </td>
        </tr>
        <tr><td> <a href="create_not.php"> Create </a> </td></tr>
        <tr><td> <a href="view_not.php"> View </a> </td></tr>

    </table>

    <?php include '../../Layouts/footer.php'; ?>
</body>
</html>