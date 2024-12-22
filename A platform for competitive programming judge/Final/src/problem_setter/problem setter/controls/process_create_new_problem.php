<?php
// Initialize individual error variables
$titleError = $statementError = $sampleInputError = $sampleOutputError = $testCase1InputError = $testCase1OutputError = $solutionError = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Initialize a flag to check for errors
    $hasErrors = false;

    // Validate fields
    if (empty($_POST['problem_title'])) {
        $titleError = "Problem Title is required.";
        $hasErrors = true;
    }
    if (empty($_POST['problem_statement'])) {
        $statementError = "Problem Statement is required.";
        $hasErrors = true;
    }

    // Check file extensions and naming rules for uploaded files
    if (isset($_FILES['sample_input'])) {
        if (pathinfo($_FILES['sample_input']['name'], PATHINFO_EXTENSION) !== "in" || $_FILES['sample_input']['name'] !== "sample.in") {
            $sampleInputError = "Sample input file must be named 'sample.in' and have a .in extension.";
            $hasErrors = true;
        }
    }

    if (isset($_FILES['sample_output'])) {
        if (pathinfo($_FILES['sample_output']['name'], PATHINFO_EXTENSION) !== "out" || $_FILES['sample_output']['name'] !== "sample.out") {
            $sampleOutputError = "Sample output file must be named 'sample.out' and have a .out extension.";
            $hasErrors = true;
        }
    }

    if (isset($_FILES['test_case_1_input'])) {
        if (pathinfo($_FILES['test_case_1_input']['name'], PATHINFO_EXTENSION) !== "in" || $_FILES['test_case_1_input']['name'] !== "1.in") {
            $testCase1InputError = "Test case #1 input file must be named '1.in' and have a .in extension.";
            $hasErrors = true;
        }
    }

    if (isset($_FILES['test_case_1_output'])) {
        if (pathinfo($_FILES['test_case_1_output']['name'], PATHINFO_EXTENSION) !== "out" || $_FILES['test_case_1_output']['name'] !== "1.out") {
            $testCase1OutputError = "Test case #1 output file must be named '1.out' and have a .out extension.";
            $hasErrors = true;
        }
    }

    if (isset($_FILES['solution'])) {
        if (pathinfo($_FILES['solution']['name'], PATHINFO_EXTENSION) !== "txt" || $_FILES['solution']['name'] !== "solution.txt") {
            $solutionError = "Solution file must be named 'solution.txt' and have a .txt extension.";
            $hasErrors = true;
        }
    }

    // If there are no errors, move and save the files
    if (!$hasErrors) {
        // Define the 'problemset' folder path
        $problemsetFolder = '../data/problemset/';
        // Create the 'problemset' folder if it doesn't exist
        if (!is_dir($problemsetFolder)) {
            mkdir($problemsetFolder, 0777, true);
        }

        // Find the smallest available subfolder number
        $nextSubfolderName = findSmallestAvailableSubfolder($problemsetFolder);

        // Create the subfolder for the current problem
        $problemSubfolder = $problemsetFolder . $nextSubfolderName . '/';
        mkdir($problemSubfolder, 0777, true);
        // Define the file names and problem data within the subfolder
        $problemData = array(
            "problem_title" => $_POST['problem_title'],
            "problem_statement" => $_POST['problem_statement'],
            "sample_input" => $problemSubfolder . "sample.in",
            "sample_output" => $problemSubfolder . "sample.out",
            "test_case_1_input" => $problemSubfolder . "1.in",
            "test_case_1_output" => $problemSubfolder . "1.out",
            "solution" => $problemSubfolder . "solution.txt",
        );

        // Move the uploaded files to the subfolder
        move_uploaded_file($_FILES['sample_input']['tmp_name'], $problemData["sample_input"]);
        move_uploaded_file($_FILES['sample_output']['tmp_name'], $problemData["sample_output"]);
        move_uploaded_file($_FILES['test_case_1_input']['tmp_name'], $problemData["test_case_1_input"]);
        move_uploaded_file($_FILES['test_case_1_output']['tmp_name'], $problemData["test_case_1_output"]);
        move_uploaded_file($_FILES['solution']['tmp_name'], $problemData["solution"]);

        // Convert the problem data to JSON
        $jsonData = json_encode($problemData, JSON_PRETTY_PRINT);

        // Define the file name for the JSON file within the subfolder
        $jsonFileName = $problemSubfolder . "problem_data.json";

        // Save the JSON data to a file within the subfolder
        file_put_contents($jsonFileName, $jsonData);

        echo "Problem data and files saved to subfolder $nextSubfolderName.";
    } else {
        // Display validation errors
        echo "Validation Errors:<br>";
        echo "$titleError<br>";
        echo "$statementError<br>";
        echo "$sampleInputError<br>";
        echo "$sampleOutputError<br>";
        echo "$testCase1InputError<br>";
        echo "$testCase1OutputError<br>";
        echo "$solutionError<br>";
    }
}

function findSmallestAvailableSubfolder($problemsetFolder) {
    $subfolders = glob($problemsetFolder . '*', GLOB_ONLYDIR);
    $existingSubfolderNames = [];

    foreach ($subfolders as $subfolder) {
        $subfolderName = basename($subfolder);
        if (is_numeric($subfolderName)) {
            $existingSubfolderNames[] = (int)$subfolderName;
        }
    }

    if (empty($existingSubfolderNames)) {
        return 1; // No existing subfolders, start with 1
    }

    $nextSubfolderName = 1;
    while (in_array($nextSubfolderName, $existingSubfolderNames)) {
        $nextSubfolderName++;
    }

    return $nextSubfolderName;
}
?>
