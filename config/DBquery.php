<?php

namespace config;


class DBquery
{


    // этот метод выбирает все данные из таблицы
    public static function findAll($table)
    {
        return "SELECT * FROM {$table}";

    }


    public static function finLike( $field, $table){

        return  "SELECT * FROM $table WHERE $field LIKE ? ";
    }


}