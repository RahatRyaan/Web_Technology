<!DOCTYPE html>
<html lang="en">
<head>
    <title>Author Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../css/general_style.css">
</head>
<body>
    <?php include '../../Layouts/logged_in_header.php'; ?>
    
    <table border="1" style="border-collapse: collapse;" cellpadding="10">
        <tr>
            <td> <a href="dashboard.php"> Dashboard </a> </td>
            <td rowspan="5"> Welcome </td>
        </tr>
        <tr><td> <a href="create_new_problem.php"> Create new problem </a> </td></tr>
        <tr><td> <a href="problemset.php"> View Problemset </a> </td></tr>
        <tr><td> <a href="ide.php"> IDE </a> </td></tr>
    </table>

    <?php include '../../Layouts/footer.php'; ?>
</body>
</html>