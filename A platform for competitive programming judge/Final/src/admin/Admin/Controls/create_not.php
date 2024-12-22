<?php
$contentError = $postStatus = '';
$hasError = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['notification'])) {
        $contentError = 'Blog Content is required.';
        $hasError = true;
    }
    if(!$hasError) {
        $db = new DatabaseOperations();
        $connection = $db->openConnection();

        $content = $_POST['notification'];
        $author = $current_user->Name;

        $result = $db->postNot($content, $author);
        if (!$result) {
            $postStatus =  "Error: " . $this->connection->error;
        } else {
            $postStatus = "Blog Posted";
        }
    }
}   
?>
