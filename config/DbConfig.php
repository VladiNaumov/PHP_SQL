<?php

namespace config;


class DbConfig
{
    public static function replace()
    {
        $db = require '../config/config_db.php';

        $options = array(
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        );

        $conn = new \PDO($db['dsn'], $db['user'], $db['pass'], $options);


        $sql = DBquery::findAll('posts');

        return  $conn->query($sql);

    }
}