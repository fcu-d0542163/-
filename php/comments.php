<?php

require_once 'subscribers.php';


class Comments
{

    public static function getComments()
    {

    }

    public static function insert($comment_txt, $userId)
    {
        $connect = mysqli_connect('localhost', 'id3932265_jayonv', 'aa930626', 'id3932265_db01');
        $comment_txt = addslashes($comment_txt);
        $sql = "insert into comments values('','$comment_txt',$userId)";
        $query = mysqli_query($connect, $sql);

        if ($query) {
            $insert_id = mysqli_insert_id($connect);
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