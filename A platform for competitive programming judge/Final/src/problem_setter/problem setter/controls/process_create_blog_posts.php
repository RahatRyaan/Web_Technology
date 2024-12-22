<?php
$titleError = $contentError = $postStatus = '';
$hasError = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['blog_title'])) {
        $titleError = 'Blog Title is required.';
        $hasError = true;
    }
    if (empty($_POST['blog_content'])) {
        $contentError = 'Blog Content is required.';
        $hasError = true;
    }
    if(!$hasError) {
        $dbOperations = new DatabaseOperations();
        $connection = $dbOperations->openConnection();

        $title = $_POST['blog_title'];
        $content = $_POST['blog_content'];
        $author = $current_user->FirstName . " " . $current_user->LastName;

        $result = $dbOperations->insertBlogPost($title, $content, $author, $_SESSION["Email"]);
        if (!$result) {
            $postStatus =  "Error: " . $this->connection->error;
        } else {
            $postStatus = "Blog Posted";
        }
    }
}   
?>
