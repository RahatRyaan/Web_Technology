<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/general_style.css">
    <title>Create Blog Post</title>
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
                <table>
                <form action="" method="POST" enctype="multipart/form-data">
                    <tr>
                        <th><label for="blog_title">Blog Title:</label></th>
                        <td>
                            <input type="text" id="blog_title" name="blog_title">
                        </td>
                        <td><?php echo $titleError; ?></td>
                    </tr>
                    <tr>
                        <th><label for="blog_content">Blog Content:</label></th>
                        <td>
                            <textarea id="blog_content" name="blog_content" rows="7" cols="30"></textarea>
                        </td>
                        <td><?php echo $contentError; ?></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center;">
                            <input type="submit" value="Post">
                        </td>
                        <td><?php echo $postStatus; ?></td>
                    </tr>
                </form>
                </table>
            </td>
        </tr>
        <tr><td> <a href="create_blog_posts.php"> Create Posts </a> </td></tr>
        <tr><td> <a href="view_blog_posts.php"> View Posts </a> </td></tr>
    </table>

    <?php include '../../Layouts/footer.php'; ?>
</body>
</html>
