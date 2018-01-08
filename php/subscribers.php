<?php

require_once 'db_connect.php';

class Subscribers
{


    public static function getSubscriber($userId)
    {
        $sql = "select * from subscribers where userId=$userId";

        $query = mysqli_query(callHost(), $sql);

        if ($query) {
            if (mysqli_num_rows($query) == 1) {
                return mysqli_fetch_object($query);
            }
        }

        return null;
    }
}