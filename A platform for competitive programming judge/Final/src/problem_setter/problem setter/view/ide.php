
<!DOCTYPE html>
<html>
<head>
    <title>IDE</title>
    <link rel="stylesheet" type="text/css" href="../css/general_style.css">
</head>
<body>
    <?php 
        include '..\..\layouts\logged_in_header.php';
        include '..\controls\process_ide.php';
    ?>
    <table border="1" style="border-collapse: collapse;" cellpadding="10">
        <tr>
            <td> <a href="dashboard.php"> Dashboard </a> </td>
            <td rowspan="5"> 
                <table border="1" style="border-collapse: collapse;" cellpadding="10">
                    <tr><td>
                    <form action="" method="post">
                        <textarea name="code" rows="10" cols="50" required><?php echo trim($code); ?></textarea><br>
                        <label for="lang">Select Language(s):</label>
                        <select name="lang[]" id="lang" required>
                            <option value="c" <?php echo $selectedLanguages["c"]; ?>>C</option>
                            <option value="cpp" <?php echo $selectedLanguages["cpp"]; ?>>C++</option>
                            <option value="python" <?php echo $selectedLanguages["python"]; ?>>Python</option>
                        </select><br><br>
                        <input type="submit" value="Run Code">
                    </form>
                    </td></tr>
                    <tr><td><?php echo $executionTime; ?></td></tr>
                    <tr><td><?php echo $executionOutput; ?></td></tr>
                    <tr><td><?php echo $executionError; ?></td></tr>
                </table>
            </td>
        </tr>
        <tr><td> <a href="settings.php"> Settings </a> </td></tr>
        <tr><td> <a href="author_dashboard.php"> Author Dashboard </a> </td></tr>
        <tr><td> <a href="ide.php"> IDE </a> </td></tr>
    </table>

    <?php include '../../layouts/footer.php'; ?>
</body>
</html>
