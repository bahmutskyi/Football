<?php
//        $MENU["HOME"]=array ("name"=>"Главная", "adr"=>"home");
//        $MENU["SQD"]=array ("name"=>"Состав команды", "adr"=>"sqd");
//        $MENU["HSTR"]=array ("name"=>"История команды", "adr"=>"hstr");
//        $MENU["RSLTS"]=array ("name"=>"Результаты", "adr"=>"rslts");
//        $MENU["RSM"]=array ("name"=>"Резюме автора сайта", "adr"=>"rsm");
?>
<div class="col1">  
       <?php
//        show_menu($MENU);

        
        $menu_result = $pdo->query("SELECT * FROM  `menu`");
        
        while ($menu_item = $menu_result->fetch(PDO::FETCH_ASSOC)) {
            ?>
        <li><a href="#" onclick="loadDoc('<?php echo $menu_item["adr"] ?>')" class="menubutton"><?php echo $menu_item["name"] ?></a></li>
            <?php
    }

       ?>
            </div>

        </div>

        
        

        <?php
//        function show_menu($array)
//        {
//            $menu_string='<ul>';
//            foreach ($array as $item)
//            {
//                $menu_string.='<li><a href="#" Onclick="loadDoc(\''.$item['adr'].'\')" class="menubutton">'.$item['name'].'</a></li>';
//            }
//            echo $menu_string.'</ul>';
//        }
?>
        
        <script>
function loadDoc(x) {

  var xhttp;

    xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("cont").innerHTML = xhttp.responseText;
    }
  };
  var txt="structure/"+x+".php";
  xhttp.open("GET", txt, true);
  xhttp.send();

}
    </script>
    </body>
</html>