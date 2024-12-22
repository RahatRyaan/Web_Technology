<!DOCTYPE html>
<html lang="en">
<head>
    <title>Problem Set</title>
    <link rel="stylesheet" type="text/css" href="../css/general_style.css">
</head>
<body>
    <?php include '../../Layouts/logged_in_header.php'; ?>
    
    <table border="1" style="border-collapse: collapse;" cellpadding="10">
        <tr>
            <td> <a href="dashboard.php"> Dashboard </a> </td>
            <td rowspan="5"> 
                <h2>Problemset</h2>
                <ul>
                    <?php
                        $problemFolders = glob('../data/problemset/*', GLOB_ONLYDIR);
                        foreach ($problemFolders as $folder) {
                            $problemNumber = basename($folder);
                            echo "<li><a href='problem_viewer.php?id=$problemNumber'>Problem $problemNumber</a></li>";
                        }
                    ?>
                </ul>
            </td>
        </tr>
        <tr><td> <a href="create_new_problem.php"> Create new problem </a> </td></tr>
        <tr><td> <a href="problemset.php"> View Problemset </a> </td></tr>
        <tr><td> <a href="ide.php"> IDE </a> </td></tr>
    </table>

    <?php include '../../Layouts/footer.php'; ?>
</body>
</html>