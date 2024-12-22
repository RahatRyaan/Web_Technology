<!DOCTYPE html>
<html>
<head>
    <title>Problem Viewer</title>
    <link rel="stylesheet" type="text/css" href="../css/general_style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        a {
            text-decoration: none;
            color: #0074d9;
        }

        pre {
            background-color: #f4f4f4;
            padding: 10px;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <?php 
        include '../../layouts/logged_in_header.php';
        // include '../controls/process_test_case_run.php'; 
    ?>
    <table border="1" style="border-collapse: collapse;" cellpadding="10">
        <tr>
            <td> <a href="dashboard.php"> Dashboard </a> </td>
            <td rowspan="5"> 
                <?php
                    if (isset($_GET['id'])) {
                        $problemNumber = $_GET['id'];
                        $problemFolder = "../data/problemset/$problemNumber/";
                        $problemDataFile = "$problemFolder/problem_data.json";

                        if (file_exists($problemDataFile)) {
                            $problemData = json_decode(file_get_contents($problemDataFile), true);
                            // Use nl2br to add line breaks and html_entity_decode to decode HTML entities
                            $problemTitle = nl2br(html_entity_decode($problemData['problem_title']));
                            echo "<h2>$problemTitle</h2>";

                            echo "<h4>Problem Statement</h4>";
                            // Use nl2br to add line breaks and html_entity_decode to decode HTML entities
                            $problemStatement = nl2br(html_entity_decode($problemData['problem_statement']));
                            echo "<div>$problemStatement</div>";

                            echo "<h4>Sample Input</h4>";
                            $sampleInputFile = "{$problemData['sample_input']}";
                            // Use <pre> to preserve formatting
                            echo "<pre>" . htmlentities(file_get_contents($sampleInputFile)) . "</pre>";

                            echo "<h2>Sample Output</h2>";
                            $sampleOutputFile = "{$problemData['sample_output']}";
                            // Use <pre> to preserve formatting
                            echo "<pre>" . htmlentities(file_get_contents($sampleOutputFile)) . "</pre>";
                        } else {
                            echo "<p>Problem not found</p>";
                        }
                    } else {
                        echo "<p>Problem ID not specified</p>";
                    }
                ?>
                <!-- Code Editor -->
                <h2>Code Editor</h2>
                <form action="../controls/process_test_case_run.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                    <textarea name="code" rows="10" cols="50" required></textarea><br>
                    <label for="lang">Select Language(s):</label>
                    <select name="lang[]" id="lang" required>
                        <option value="c">C</option>
                        <option value="cpp">C++</option>
                        <option value="java">Java</option>
                        <option value="python">Python</option>
                    </select><br><br>
                    <input type="submit" value="Submit Code">
                </form>
            </td>
        </tr>
        <tr><td> <a href="create_new_problem.php"> Create new problem </a> </td></tr>
        <tr><td> <a href="problemset.php"> View Problemset </a> </td></tr>
        <tr><td> <a href="ide.php"> IDE </a> </td></tr>
    </table>

    <?php include '../../layouts/footer.php'; ?>
</body>
</html>
