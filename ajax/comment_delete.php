<?php

if (isset($_POST['task']) && $_POST['task'] == 'comment_delete') {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/May-the-Force-be-with-you/php/defines.php';
    require_once phpRoot . 'comments.php';

    if (class_exists('Comments')) {
        if (Comments::delete($_POST['comment_id'])) {
            echo "true";
        }
    }

    echo "false";
}