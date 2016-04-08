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
global $pdo;
$pdo = new PDO("{$db_drivername}:host={$hostname};dbname={$dbname}", $username, $password);
//--- 1 параметр PDO: "mysql:host=localhost;dbname=weblabdb"
//--- 2 параметр PDO: "root"
//--- 3 параметр PDO: ""
$pdo->query("SET CHARACTER SET utf8"); // установка кодировки символов для текущего соединения с MySQL Server
require_once 'structure/auth.php';
require_once 'classes/playerClass.php'; // включаем класс пользователей
require_once 'structure/auth.php'; // единоразовое включение обязательного файла авторизации
?>
<?php include "structure/Header.php" ?>
            <div class="col2" id="cont">
          <?php
          if (isset($_GET['obj'])) {
            $file_name_manag = 'structure/' . $_GET['obj'] . '_manag.php';
            if (file_exists($file_name_manag)) {
              include_once $file_name_manag;
            }else{
              echo 'Не найден файл управления ' . $file_name_manag;
              echo '<br /> Его необходимо реализовать';
            }
          }
          ?>
            </div>

<?php include "structure/Menu.php" ?>