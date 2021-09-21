<?php

namespace config;


class DbConfig
{

    private static $connect;

    public static function connection()
    {
        $dns = 'mysql:host=localhost;dbname=u1322686_demo;charset=utf8';
        $username = 'u1322686_admin';
        $password = 'sI3eJ2jV3bhA7j';

        $options = array(
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
         );

        self:: $connect = new \PDO($dns, $username, $password,$options);


    }


    public static function myQuery($sql){

        return DbConfig::$connect->query($sql);

    }



}