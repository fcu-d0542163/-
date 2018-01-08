$(document).ready(function () {
    $('#comment-post-btn').click(function () {
        comment_post_btn_click();
    });
});

function comment_post_btn_click() {
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
            .done(
                function (data) {
                    comment_insert(jQuery.parseJSON(data));
                    console.log("ResponseText: " + data);
                }
            )
            .fail(
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
}

function comment_insert(data) {

    var t = '';

    t += '<li class="comment-holder" id="_' + data.comment.comment_id + '">';
    t += '<div class="user-img">';
    t += '<img src="' + data.user.profile_img + '" class="user-img-pic">';
    t += '</div>';
    t += '<div class="comment-body">';
    t += '<h3 class="username-field">' + data.user.userName + '</h3>';
    t += '<div class="comment-text">' + data.comment.comment + '</div>';
    t += '</div>';
    t += '<div class="comment-buttons-holder">';
    t += '<ul>';
    t += '<li id="' + data.comment.comment_id + '" class="delete-btn">&times</li>';
    t += '</ul>';
    t += '</div>';
    t += '</li>';

    $('.comments-holder-ul').prepend(t);
    add_delete_handlers();
}
