<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>ФК Футбол</title>
        <script type="text/javascript" src="lr4.js"></script>
        <link rel="stylesheet" type="text/css" href="ftbl_style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body background="images/back2.jpg" onload="alert(ld());">
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
                    <li>life:) +380930000000</li>
                </ul>
            </div>
        </div>
        <div class="layout">
            <div class="col3">
                <div id="advert">
                    <a href="#">Футбольная экипировка</a><p>Различные спортивные фирмы: Adidas, Nike, Select...</p>
                </div>
                <div id="c">
                    ФК Футбол © 2015
                </div>
            </div>
            <div class="col2">
                 <FORM METHOD="post" NAME="form" ACTION="JavaScript:form.e.value=kolvonedel();void(0);">
                     <INPUT TYPE="text" NAME="e" SIZE="30" VALUE="">
                     <INPUT TYPE="submit" VALUE="Заполнить">
                     <INPUT TYPE="reset" VALUE="Очистить">
                 </FORM> <br>
                 <script type="text/javascript">
                     function kolvonedel()
                     {
                       var dr = new Date(1995, 6, 24);
                       var today = new Date();
                       var remain = Math.ceil((today-dr)/(1000*3600*24*7)); 
                       return remain;
                     }
                 </script> 
                 <form method="post" name="form2">
                     <input type="text" name="txt" size="20" value="" onfocus="js_event();">
                 </form>
                 <script>
                     function js_event()
                     {
                         var time = new Date();
                         var hours=time.getHours();
                         if(hours   < 10) {hours   = "0"+hours;}
                         var minutes =time.getMinutes();
                         if (minutes < 10) {minutes = "0"+minutes;}
                         var str =hours + ':' + minutes;
                         console.log(str);
                     }
                 </script>
                 <a href="Javascript:alert('Февраль, апрель, июнь, сентябрь, ноябрь');">Гиперссылка</a>
            </div>
            <div class="col1">
                <ul>
                    <li><a href="index.html" class="menubutton">Главная</a></li>
                    <li><a href="squad.html" class="menubutton"><img src="">Состав команды</a></li>
                    <li><a href="history.html" class="menubutton">История команды</a></li>
                    <li><a href="results.html" class="menubutton">Результаты</a></li>
                    <li><a href="resume.html" class="menubutton">Резюме автора сайта</a></li>
                </ul>
            </div>
        </div>
    </body>
</html>