$(document).ready(function() {
    var offset = 0;
    function loadMorePosts() {
        $.ajax({
            type: "POST",
            url: "../Controls/view_not.php", 
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
