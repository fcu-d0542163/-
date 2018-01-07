<?php

class Subscribers
{


    public static function getSubscriber($userId)
    {
        $connect = mysqli_connect('localhost', 'id3932265_jayonv', 'aa930626', 'id3932265_db01');
        $sql = "select * from subscribers where userId=$userId";

        $query = mysqli_query($connect, $sql);

        if ($query) {
            if (mysqli_num_rows($query) == 1) {
                return mysqli_fetch_object($query);
            }
        }

        return null;
    }
}