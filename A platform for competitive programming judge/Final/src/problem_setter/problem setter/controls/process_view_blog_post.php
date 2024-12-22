<?php
    session_start();
    include '../model/db_operations.php';

    $offset = isset($_POST['offset']) ? (int)$_POST['offset'] : 0;
    $limit = 2;

    $dbOperations = new DatabaseOperations();
    $connection = $dbOperations->openConnection();

    $blogPosts = $dbOperations->getBlogPosts($offset, $limit);

    foreach ($blogPosts as $post) {
        echo "<div class='blog-post' id='post{$post['Post_ID']}'>";
        echo "<div class='blog-title'>{$post['Title']}</div>";
        echo "<div class='blog-content'>{$post['Content']}</div>";
        echo "<div class='author-info'>Author: {$post['Author']}</div>";
        echo "<div class='post-date'>Posted At: {$post['PostedAt']}</div>";
        if ($_SESSION['Email'] == $post['Author_Email']) {
            echo "<button class='delete-button' onclick='deletePost({$post['Post_ID']})'>Delete</button>";
        }

        echo "</div>";
    }

    $dbOperations->closeConnection();
?>