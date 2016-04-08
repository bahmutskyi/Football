                    <h1>Состав команды</h1>
        <table border="1">
            <tr>
                <th>Номер</th>
                <th>Позиция</th>
                <th>ФИО</th>
            </tr>
            
            
                                <?php
                                include '../config.php';
                                $pdo=  connect();
                                $pdo->query("SET CHARACTER SET utf8"); // установка кодировки символов для текущего соединения с MySQL Server
                    $menu_sqd = $pdo->query("SELECT * FROM  `players`");
                    while ($menu_item = $menu_sqd->fetch(PDO::FETCH_ASSOC)) {
                        ?>
            <tr>
                <td><?php echo $menu_item["number"] ?></td>
                <td><?php echo $menu_item["position"] ?></td>
                <td><?php echo $menu_item["fio"] ?></td>
            </tr>
            <?php
    }

       ?>
            
 <!--           <tr>
                <td>2</td>
                <td>ЗЩ</td>
                <td>Лёвшин Дмитрий Александрович</td>
            </tr>
            <tr>
            <tr>
                <td>3</td>
                <td>ЗЩ</td>
                <td>Петренко Павел Сергеевич</td>
            </tr>
                <td>4</td>
                <td>ЗЩ</td>
                <td>Игнатов Константин Павлович</td>
            </tr>
            <tr>
                <td>5</td>
                <td>НАП</td>
                <td>Самойленко Денис Игоревич</td>
            </tr>
            <tr>
                <td>6</td>
                <td>НАП</td>
                <td>Ковач Виктор Антонович</td>
            </tr>
            <tr>
                <td>7</td>
                <td>ВР</td>
                <td>Шаповалов Андрей Григорьевич</td>
            </tr>
            <tr>
                <td>8</td>
                <td>НАП</td>
                <td>Багмуцкий Евгений Александрович</td>
            </tr>
            <tr>
                <td>9</td>
                <td>НАП</td>
                <td>Хруняк Илья Олегович</td>
            </tr>
            <tr>
                <td>10</td>
                <td>НАП</td>
                <td>Чудиновских Илья Эдуардович</td>
            </tr>
            <tr>
                <td>11</td>
                <td>ВР</td>
                <td>Тверитников Олег Алексеевич</td>
            </tr>
            <tr>
                <td>16</td>
                <td>ЗЩ</td>
                <td>Шаров Олег Артурович</td>
            </tr>
            <tr>
                <td>15</td>
                <td>ЗАЩ</td>
                <td>Куликов Арсен Сергеевичч</td>
            </tr>
            <tr>
                <td>23</td>
                <td>ЗЩ</td>
                <td>Василенко Павел Романович</td>
            </tr>
 -->
        </table>  
        <p>Тренер: Багмуцкий Евгений Александрович</p>