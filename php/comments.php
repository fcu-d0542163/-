<?php
require_once 'db_connect.php';
require_once 'subscribers.php';

$getHost = callHost();

class Comments
{

    public static function getComments()
    {
        $output = array();

        $sql = "SELECT * FROM comments ORDER BY comment_id DESC";

        $query = mysqli_query(callHost(), $sql);

        if ($query) {
            if (mysqli_num_rows($query) > 0) {
                while ($row = mysqli_fetch_object($query)) {
                    $output[] = $row;
                }
            }
        }
        return $output;
    }

    public static function insert($comment_txt, $userId)
    {

        $comment_txt = addslashes($comment_txt);
        $sql = "insert into comments values('','$comment_txt',$userId)";
        $query = mysqli_query(callHost(), $sql);

        if ($query) {
            $insert_id = mysqli_insert_id(callHost());
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
        $sql = "delete from comments where comment_id = $commentId";

        $query = mysqli_query(callHost(), $sql);

        if ($query) {
            return true;
        }
        return null;
    }
}