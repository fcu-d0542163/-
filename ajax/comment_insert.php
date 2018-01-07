<?php

if (isset($_POST['task']) && $_POST['task'] == 'comment_insert') {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/May-the-Force-be-with-you/php/defines.php';
    $userId = (int)$_POST['userId'];
    $comment = addslashes(str_replace("\n", "<br>", $_POST['comment']));
    $std = new stdClass();
    $std->user = null;
    $std->comment = null;
    $std->error = false;

    /*
    $std = new stdClass();
    $std->comment_id = 24;
    $std->userId = $userId;
    $std->comment = $comment;
    $std->userName = "JayonV";
    $std->profile_img = "/May-the-Force-be-with-you/pic/icon.png";
    */

    require_once phpRoot . 'comments.php';

    if (class_exists('Comments') && class_exists('Subscribers')) {

        $userInfo = Subscribers::getSubscriber($userId);

        if ($userId == null) {
            $std->error = true;
        }

        $commentInfo = Comments::insert($comment, $userId);
        if ($commentInfo == null) {
            $std->error = true;
        }


        $std->user = $userInfo;
        $std->comment = $commentInfo;

    }

    echo json_encode($std);

} else {
    header('location: /');
}