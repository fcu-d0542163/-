<?php

if (isset($_POST['task']) && $_POST['task'] == 'comment_delete') {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/May-the-Force-be-with-you/php/defines.php';
    echo "hit request";
}