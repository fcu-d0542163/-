<?php

class Comments
{

    public static function getComments()
    {

    }

    public static function insert($comment_txt, $userId)
    {
        $std = new stdClass();
        $std->comment_id = 1;
        $std->comment = $comment_txt;
        $std->userId = (int)$userId;

        return $std;
    }

    public static function update($data)
    {

    }

    public static function delete($commentId)
    {

    }
}