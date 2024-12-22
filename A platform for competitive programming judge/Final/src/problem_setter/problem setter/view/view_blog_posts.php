<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="../js/view_blog_post.js"></script>
    <style>
    .blog-post {
        border: 1px solid #ddd;
        padding: 10px;
        margin-bottom: 20px;
        background-color: #f9f9f9;
    }

    .blog-title {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .blog-content {
        margin-bottom: 10px;
    }

    .author-info {
        font-style: italic;
    }

    #load-more {
        display: block;
        margin-top: 20px;
        padding: 10px;
        cursor: pointer;
    }
</style>
<link rel="stylesheet" type="text/css" href="../css/general_style.css">
    <title>View Blog Post</title>
</head>
<body>
    <?php 
        include '../../Layouts/logged_in_header.php'; 
        include '../controls/process_create_blog_posts.php';
    ?>
    
    <table border="1" style="border-collapse: collapse;" cellpadding="10">
        <tr>
            <td> <a href="dashboard.php"> Dashboard </a> </td>
            <td rowspan="5"> 
                <p>Blog Posts</p>
                <div id="blog-container"></div>
                <button id="load-more">Load More</button>
            </td>
        </tr>
        <tr><td> <a href="create_blog_posts.php"> Create Posts </a> </td></tr>
        <tr><td> <a href="view_blog_posts.php"> View Posts </a> </td></tr>
    </table>

    <?php include '../../Layouts/footer.php'; ?>
</body>
</html>
