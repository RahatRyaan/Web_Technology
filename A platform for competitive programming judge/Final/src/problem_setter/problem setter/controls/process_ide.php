<?php
$executionTime = $executionOutput = $executionError = $code = "";
$selectedLanguages = array(
    'c' => '',
    'cpp' => '',
    'java' => '',
    'python' => ''
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $code = $_POST["code"];
    $languages = $_POST["lang"];
    
    // Generate a timestamp for the filename
    $timestamp = date("Ymd_His");

    foreach ($languages as $language) {
        $selectedLanguages[$language] = 'selected';
        // Create the filename based on the selected language
        $filename = "code_$timestamp.$language";

        // Write the code to the source file
        if (file_put_contents($filename, $code) === false) {
            echo "<pre>Failed to write code to the source file for $language.</pre>";
            continue;
        }
        
        // Measure execution time
        $start_time = microtime(true);

        // Execute code based on the selected language
        switch ($language) {
            case "c":
                exec("gcc $filename -o $filename.out 2>&1", $output, $return_code);
                if ($return_code === 0) {
                    exec("$filename.out 2>&1", $execution_output, $execution_return_code);
                    $end_time = microtime(true);
                    $execution_time = ($end_time - $start_time) * 1000; // in milliseconds
                    $executionTime = "<pre>Execution Time for C: $execution_time ms</pre>";
                    $executionOutput = "<pre>Execution Output for C:\n" . implode("\n", $execution_output) . "</pre>";
                } else {
                    $executionError = "<pre>Compilation Error for C:\n" . implode("\n", $output) . "</pre>";
                }
                break;
                
            case "cpp":
                exec("g++ $filename -o $filename.out 2>&1", $output, $return_code);
                if ($return_code === 0) {
                    exec("$filename.out 2>&1", $execution_output, $execution_return_code);
                    $end_time = microtime(true);
                    $execution_time = ($end_time - $start_time) * 1000; // in milliseconds
                    $executionTime = "<pre>Execution Time for C++: $execution_time ms</pre>";
                    $executionOutput = "<pre>Execution Output for C++:\n" . implode("\n", $execution_output) . "</pre>";
                } else {
                    $executionError = "<pre>Compilation Error for C++:\n" . implode("\n", $output) . "</pre>";
                }
                break;

            case "python":
                exec("python $filename 2>&1", $execution_output, $execution_return_code);
                $end_time = microtime(true);
                $execution_time = ($end_time - $start_time) * 1000; // in milliseconds
                $executionTime = "<pre>Execution Time for Python: $execution_time ms</pre>";
                $executionOutput = "<pre>Execution Output for Python:\n" . implode("\n", $execution_output) . "</pre>";
                break;

            default:
                $executionError = "<pre>Unsupported language: $language</pre>";
                break;
        }

        // Clean up: Delete the source and executable files for this language
        unlink($filename);
        if (file_exists("$filename.out")) {
            unlink("$filename.out");
        }
    }
}
?>
