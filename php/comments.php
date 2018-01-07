<?php

require_once phpRoot . 'subscribers.php';

class Comments
{

    public static function getComments()
    {

    }

    public static function insert($comment_txt, $userId)
    {

        $comment_txt = addslashes($comment_txt);
        $sql = "insert into comments values('','$comment_txt',$userId)";
        $query = mysql_query($sql);

        if ($query) {
            $insert_id = mysql_insert_id();
            $std = new stdClass();
            $std->comment_id = $insert_id;
            $std->comment = $comment_txt;
            $std->userId = (int)$userId;

            return $std;
        }
        return null;
    }

    public static function update($data)
    {

    }

    public static function delete($commentId)
    {

    }
}