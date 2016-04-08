<html>
    <head>
        <title>ФК Polla Grande</title>

        <link rel="stylesheet" type="text/css" href="../css/ftbl_style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body background="images/back2.jpg">
        <div id="header">
            <div id="auth">
                <?php
                if (isset($_SESSION["name"])) {
                    ?>
                    <h2><?php echo $_SESSION["name"]; ?></h2><br>
                    <form method="post">
                        <?php
                        $q_res_a = $pdo->query("SELECT * FROM admins WHERE name='" . $_SESSION["name"] . "'");
                        if ($q_res_a->rowCount()>0) { // если записи в таблице admins есть (т.е. количество больше 0), то
                            ?>
                        <a href="../index.php">Админка</a><br><br>
                        <?php }
                        ?>
                        <input class="btn" value="Выйти" type="submit" name="exit" />
                    </form>
                <?php } else { ?>
                    <h2>Авторизация</h2>
                    <span class="err"><?php echo $message_err; ?></span>

                    <form method="post">
                        <input name="name" type="text" value="" size="20"/><br>
                        <input name="pass" type="password"  value=""  size="20"/><br>
                        <input class="btn" type="submit" value="Ok"/>
                    </form>
                    <p>У вас нет аккаунта?</p>
        <div class="center"><a href="structure/register.php" id="create">Создать аккаунт</a></div> 
                    <?php
                }
                ?>

            </div>
            <div id="cntr">
                <img src="images/futbol.png" alt="1"> 
            </div>
            <div id="contact">
                <h1>Контакты</h1>
                <p><a href="http://sportinform.com.ua/teams/2062" target="_blank"> Страница команды на sportinform</a></p>
                <p><a href="mailto:fc_futbol_official@ukr.net">Пишите на нашу электронную почту</a></p>
                <p>Контактные телефоны:</p>
                <ul>
                    <li>Kyivstar: +380670000000</li>
                    <li>life:) : +380930000000</li>
                    <li>Vodafone: +380500000000</li>
                </ul>


            </div>
        </div>
        <div class="layout">
            <div class="col3">
                <div id="advert">
                    <a href="#">Футбольная экипировка</a><p>Различные спортивные фирмы: Adidas, Nike, Select...</p>
                </div>
                <div id="c">
                    ФК Polla Grande © 2015
                    <?php
// Проверяем, был ли уже установлен Cookie 'Counter',
// Если да, то читаем его значение,
// И увеличиваем значение счетчика обращений к странице:
                    if (isset($_COOKIE['Counter']))
                        $cnt = $_COOKIE['Counter'] + 1;
                    else
                        $cnt = 0;
// Устанавливаем Cookie 'Counter' зо значением счетчика,
// С временем "жизни" до 18/07/29,
// То есть на очень долгое время:
                    setcookie("Counter", $cnt, 0x6FFFFFFF);
// Выводит число посещений (загрузок) этой страницы:
                    echo "<p>Вы посещали эту страницу <b>" . @$_COOKIE['Counter'] . "</b> раз</p>";
                    ?>
                </div>
            </div>