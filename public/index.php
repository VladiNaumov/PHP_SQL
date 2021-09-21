<?php

use config\DbConfig;
use config\DBquery;

error_reporting(-1);


//считывания данных с URL браузера
 //$query = rtrim($_SERVER['QUERY_STRING'], '/');

    require '../config/DBquery.php';
    require '../config/DbConfig.php';


    //
    $sql = DBquery::findAll('posts');

    //
    DbConfig::connection();

    $result = DbConfig::myQuery($sql);



echo "<table><tr><th>category_id</th><th>title</th><th>excerpt</th><th>text</th><th>keywords</th><th>discription</th></tr>";

    while ($row = $result->fetch())
    {

    echo "<tr>";
    echo "<td>" . $row["category_id"] . "</td>";
    echo "<td>" . $row["title"] . "</td>";
    echo "<td>" . $row["excerpt"] . "</td>";
    echo "<td>" . $row["text"] . "</td>";
    echo "<td>" . $row["keywords"] . "</td>";
    echo "<td>" . $row["discription"] . "</td>";
    echo "</tr>";
    }
    echo "</table>";





/*
 * Дваеточие - это обращение к статическому методу
 * Ruoter::dispatch($query);
 *
 * $DEMO = new DemoDemo();
 * $DEMO->myDemo();
 * $DEMO->myDemo();
 * $DEMO::myStaticDemo();
 */
