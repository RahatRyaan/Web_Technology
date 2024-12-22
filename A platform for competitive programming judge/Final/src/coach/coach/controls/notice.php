<?php
    session_start();
    include '../Model/database.php';

    $offset = isset($_POST['offset']) ? (int)$_POST['offset'] : 0;
    $limit = 2;

    $db = new DatabaseOperations();
    $connection = $db->openConnection();

    $nots = $db->getNot($offset, $limit);

    foreach ($nots as $post) {
        echo "<div class='blog-post' id='post{$post['Post_ID']}'>";
        echo "<div class='blog-content'>{$post['Content']}</div>";
        echo "<div class='author-info'>Author: {$post['Author']}</div>";
        echo "</div>";
    }

    $db->closeConnection();
?>