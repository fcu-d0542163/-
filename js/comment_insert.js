$(document).ready(function () {
    $('#comment-post-btn').click(function () {

        var _comment = $('#comment-post-text').val();
        var _userId = $('#userId').val();
        var _userName = $('#userName').val();

        if (_comment.length > 0 && _userId != null) {
            $('#comment-post-text').css('border', '1px solid #e1e1e1');

            $.post("/May-the-Force-be-with-you/ajax/comment_insert.php",
                {
                    task: "comment_insert",
                    userId: _userId,
                    comment: _comment
                }
            )
                .success(
                    function (data) {
                        console.log("ResponseText: " + data);
                    }
                )
                .error(
                    function () {
                        console.log("Error");
                    }
                );

            console.log(_comment + " UserName: " + _userName + " User Id: " + _userId);
            console.log(_comment);


        } else {
            $('#comment-post-text').css('border', '1px solid #ff0000');
            console.log("empty here!");
        }

        $('#comment-post-text').val("");
    })
});