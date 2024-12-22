<!DOCTYPE html>
<html>
<head>
    <title>Create New Problem</title>
    <style>
        .error {
            color: red;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="../css/general_style.css">
</head>
<body>
    <?php 
        include '../../Layouts/logged_in_header.php'; 
        include '../controls/process_create_new_problem.php';
    ?>
    
    <table border="1" style="border-collapse: collapse;" cellpadding="10">
        <tr>
            <td> <a href="dashboard.php"> Dashboard </a> </td>
            <td rowspan="5">  
                <table>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <tr>
                            <th><label for="problem_title">Problem Title:</label></th>
                            <td>
                                <input type="text" id="problem_title" name="problem_title">
                                <span class="error"><?php echo $titleError; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <th><label for="problem_statement">Problem Statement:</label></th>
                            <td>
                                <textarea id="problem_statement" name="problem_statement" rows="10" cols="50"></textarea>
                                <span class="error"><?php echo $statementError; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <th><label for="sample_input">Sample Input:</label></th>
                            <td>
                                <input type="file" id="sample_input" name="sample_input" accept=".in">
                                <span class="error"><?php echo $sampleInputError; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <th><label for="sample_output">Sample Output:</label></th>
                            <td>
                                <input type="file" id="sample_output" name="sample_output" accept=".out">
                                <span class="error"><?php echo $sampleOutputError; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <th><label for="test_case_1_input">Test Case #1 Input:</label></th>
                            <td>
                                <input type="file" id="test_case_1_input" name="test_case_1_input" accept=".in">
                                <span class="error"><?php echo $testCase1InputError; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <th><label for="test_case_1_output">Test Case #1 Output:</label></th>
                            <td>
                                <input type="file" id="test_case_1_output" name="test_case_1_output" accept=".out">
                                <span class="error"><?php echo $testCase1OutputError; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <th><label for="solution">Solution:</label></th>
                            <td>
                                <input type="file" id="solution" name="solution" accept=".txt">
                                <span class="error"><?php echo $solutionError; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: center;">
                                <input type="submit" value="Submit Problem">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <ul>
                                    <li>
                                        <strong>File Naming Rules:</strong>
                                        <ul>
                                            <li>Sample test case input and output files must be named <code>sample.in</code> and <code>sample.out</code>, respectively.</li>
                                            <li>Additional test cases should be named sequentially as <code>1.in</code>, <code>1.out</code></li>
                                            <li>All test case input and output files should be in plain text format with the file extensions <code>.in</code> and <code>.out</code>.</li>
                                        </ul>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </form>
                </table>
            </td>
        </tr>
        <tr><td> <a href="create_new_problem.php"> Create new problem </a> </td></tr>
        <tr><td> <a href="problemset.php"> View Problemset </a> </td></tr>
        <tr><td> <a href="ide.php"> IDE </a> </td></tr>
    </table>

    <?php include '../../Layouts/footer.php'; ?>
</body>
</html>
