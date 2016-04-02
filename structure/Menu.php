<?php
        $MENU["HOME"]=array ("name"=>"Главная", "adr"=>"home.php");
        $MENU["SQD"]=array ("name"=>"Состав команды", "adr"=>"sqd.php");
        $MENU["HSTR"]=array ("name"=>"История команды", "adr"=>"hstr.php");
        $MENU["RSLTS"]=array ("name"=>"Результаты", "adr"=>"rslts.php");
        $MENU["RSM"]=array ("name"=>"Резюме автора сайта", "adr"=>"rsm.php");
?>
<div class="col1">  
       <?php
        show_menu($MENU);
       ?>
            </div>

        </div>

        
        
        <?php

        
        function show_menu($array)
        {
            $menu_string='<ul>';
            foreach ($array as $item)
            {
                $menu_string.='<li><a href="#" Onclick="loadDoc(\''.$item['adr'].'\')" class="menubutton">'.$item['name'].'</a></li>';
            }
            echo $menu_string.'</ul>';
        }
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
  var txt="structure/"+x;
  xhttp.open("GET", txt, true);
  xhttp.send();

}
    </script>
    </body>
</html>