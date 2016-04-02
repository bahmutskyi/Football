<?php
session_start(); // начало сессии: если сессии еще нет 
// (не пришел Cookie "PHPSESSID" или нет файла сессии, 
//  соответствующего значению cookie "PHPSESSID"), то:
//  1) генерируется уникальный идентификатор сессии;
//  2) устанавливается Cookie "PHPSESSID" со значением этого идентификатора
//  3) создается файл сессии с соответствующим идентификатору именем
//  4) инициализируется суперглобальный массив $_SESSION, который проецируется на файл сессии
//--- конфигурационные параметры ---
$db_drivername = "mysql";
$hostname = "localhost";
$dbname = "football";
$username = "root";
$password = "";
//--- Создание PDO для соединения с сервером БД ---
$pdo = new PDO("{$db_drivername}:host={$hostname};dbname={$dbname}", $username, $password);
//--- 1 параметр PDO: "mysql:host=localhost;dbname=weblabdb"
//--- 2 параметр PDO: "root"
//--- 3 параметр PDO: ""
$pdo->query("SET CHARACTER SET utf8"); // установка кодировки символов для текущего соединения с MySQL Server
require_once 'structure/auth.php';
?>
<?php include "structure/Header.php" ?>
            <div class="col2" id="cont">
<?php include "structure/home.php"; ?>
            </div>

<?php include "structure/Menu.php" ?>