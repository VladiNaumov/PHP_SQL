<?php

namespace config;


class DBquery
{

    // этот метод выбирает все данные из таблицы
    public static function findAll($table): string
    {
        return "SELECT * FROM {$table}";

    }


    public static function finLike( $field, $table): string
    {

        return  "SELECT * FROM $table WHERE $field LIKE ? ";
    }


}