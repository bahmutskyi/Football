<html>
    <head>
        <title>ФК Polla Grande</title>
        <link rel="stylesheet" type="text/css" href="ftbl_style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body background="images/back2.jpg">
        <div id="header">
            <div id="logo">
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
if (isset($_COOKIE['Counter'])) $cnt=$_COOKIE['Counter']+1;
else $cnt=0;
// Устанавливаем Cookie 'Counter' зо значением счетчика,
// С временем "жизни" до 18/07/29,
// То есть на очень долгое время:
setcookie("Counter",$cnt,0x6FFFFFFF);
// Выводит число посещений (загрузок) этой страницы:
echo "<p>Вы посещали эту страницу <b>".@$_COOKIE['Counter']."</b> раз</p>";
?>
                </div>
            </div>