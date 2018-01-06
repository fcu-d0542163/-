<?php

if (isset($_POST['task']) && $_POST['task'] == 'comment_insert') {
    $userId = (int)$_POST['userId'];
    $comment = addslashes(str_replace("\n", "<br>", $_POST['comment']));

    $std = new stdClass();
    $std->comment_id = 24;
    $std->userId = $userId;
    $std->comment = $comment;
    $std->userName = "JayonV";
    $std->profile_img = "/May-the-Force-be-with-you/pic/icon.png";

    require_once phpRoot . 'comments.php';

    if (class_exists('Comments')) {
        Comments::insert($comment_txt, $userId);
    }


    echo json_encode($std);

} else {
    header('location: /');
}