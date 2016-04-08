<?php

function connect()
{
    $db_drivername = "mysql";
    $hostname = "localhost";
    $dbname = "football";
    $username = "root";
    $password = "";
    //--- Создание PDO для соединения с сервером БД ---
    return new PDO("{$db_drivername}:host={$hostname};dbname={$dbname}", $username, $password);
    //--- 1 параметр PDO: "mysql:host=localhost;dbname=weblabdb"
    //--- 2 параметр PDO: "root"
    //--- 3 параметр PDO: ""
}

?>
