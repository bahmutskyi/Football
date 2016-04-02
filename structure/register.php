
<?php
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
    
    if (isset($_POST['submit'])){
        $name = $_POST['name'];
        $password = $_POST['pass'];
        $password = md5($password);
        
        $pdo->query("INSERT INTO users VALUES ('', '$name','$password')");
        
//        $query = mysqli_query($connect,"INSERT INTO users VALUES ('','$login','$password')") or die(mysqli_error($connect));
        echo "<div class=\"success\">Вы успешно зарегистрированы.<br>Нажмите \"Войти\" для авторизации.</div>";
    }
?>


<!DOCTYPE html>
<html>
<head>
    <title>Регистрация</title>
    <link rel="stylesheet" type="text/css" href="../ftbl_style.css">
    <meta charset="UTF-8">
    <style>
  body { background: url(../images/bck.jpg); }
</style>    

</head>

<body>
            <div id="register_center">
    <form method="post" action="register.php" id="form">

            <h1>Создать аккаунт</h1><br>        
            <input type="text" name="name" placeholder="Логин или E-mail" required><br>        
            <input type="password" name="pass" placeholder="Пароль" required><br>
            <input type="submit" name="submit" value="Создать аккаунт" id="button"><br>

        <p>Уже есть аккаунт?</p>
        <div class="center"><a href="../index.php" id="create">Войти</a></div>   
    </form>
                        </div>
</body>
</html>