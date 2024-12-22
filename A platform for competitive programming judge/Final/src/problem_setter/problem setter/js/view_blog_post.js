$(document).ready(function() {
    var offset = 0;
    function loadMorePosts() {
        $.ajax({
            type: "POST",
            url: "../controls/process_view_blog_post.php", 
            data: { offset: offset },
            success: function(response) {
                if (response.trim() !== "") {
                    $("#blog-container").append(response);
                    offset += 2; 
                } else {
                    $("#load-more").hide(); 
                }
            },
            error: function(xhr, status, error) {
                console.error("AJAX Error:", status, error);
            }
        });
    }

    $("#load-more").on("click", function() {
        loadMorePosts();
    });
    loadMorePosts();
});

function deletePost(postID) {
    if (confirm("Are you sure you want to delete this post?")) {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                alert("Post deleted successfully!");
            }
        };
        xhr.open("POST", "../controls/process_delete_post.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("post_id=" + postID);
    }
}
