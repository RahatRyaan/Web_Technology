<?php
    include '../model/db_operations.php';

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $postID = $_POST["post_id"];

        $dbOperations = new DatabaseOperations();
        $connection = $dbOperations->openConnection();

        $result = $dbOperations->deleteBlogPost($postID);

        if ($result) {
            echo "Post deleted successfully.";
        } else {
            echo "Error deleting post.";
        }

        $dbOperations->closeConnection();
    }
?>
