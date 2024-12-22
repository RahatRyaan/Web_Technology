<?php
    $userCode = $_POST['code'];
    $selectedLanguage = $_POST['lang'][0]; 
    $problemNumber = $_POST['id'];

    // Define the path to the problem's test cases
    $problemFolderPath = "../data/problemset/$problemNumber";
    $testCases = json_decode(file_get_contents("$problemFolderPath/problem_data.json"), true);

    // Prepare a temporary directory to store code and output files
    $tempDir = "temp/$problemNumber"; 
    if (!is_dir($tempDir)) {
        mkdir($tempDir, 0755, true);
    }

    // Save the user's code to a file
    $userCodeFileName = "user_code.$selectedLanguage";
    file_put_contents("$tempDir/$userCodeFileName", $userCode);

    $problemFolderPath = "../data/to/problemset";


    // Run the user's code against the test case
    $inputFile = $testCases['test_case_1_input'];
    $outputFile = $testCases['test_case_1_output'];
    $userOutputFile = "$tempDir/user_code.out";
    if (!file_exists($userOutputFile)) {
        $file = fopen($userOutputFile, 'w'); 
        fclose($file); 
    }
    // Compile/interpret and execute the user's code based on the selected language
    if ($selectedLanguage === 'c') {
        exec("gcc -o \"$tempDir/user_code\" \"$tempDir/$userCodeFileName\" && \"$tempDir/user_code\" < \"$inputFile\" > \"$userOutputFile\"");
    } elseif ($selectedLanguage === 'cpp') {
        exec("g++ -o \"$tempDir/user_code\" \"$tempDir/$userCodeFileName\" && \"$tempDir/user_code\" < \"$inputFile\" > \"$userOutputFile\"");
    } elseif ($selectedLanguage === 'python') {
        exec("python \"$tempDir/$userCodeFileName\" < \"$inputFile\" > \"$userOutputFile\"");
    }

    // Compare the user's output with the expected output
    $expectedOutput = file_get_contents($outputFile);
    $userOutput = file_get_contents($userOutputFile);

    if ($userOutput === $expectedOutput) {
        // Output is correct for this test case
        echo "Verdict - Accepted<br>";
    } else {
        // Output is incorrect for this test case
        echo "Verdict - Wrong Answer<br>";
    }

    // Print the user's output
    // echo "<h3>User Output:</h3>";
    // echo "<pre>$userOutput</pre>";
    // echo "<pre>$expectedOutput</pre>";



    // Clean up the temporary directory
    array_map('unlink', glob("$tempDir/*"));
    rmdir($tempDir);
?>
