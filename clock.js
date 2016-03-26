    var clock_on=false;
    var p;   
    function show_time(){
       
    var elem = document.getElementById('c');
    var d = new Date();
    var current_date = d.getDate();
    var current_month = d.getMonth() + 1;
    var current_year = d.getFullYear();
    now = "Сегодня: " + current_date + "." + current_month + "." + current_year;
    elem.innerHTML=now;
       
    elem.onmouseover = function()  
{  
    var elem = document.getElementById('c');
    p = window.setTimeout(arguments.callee,1000);
    var d = new Date();
    now = d.toLocaleTimeString();
    elem.innerHTML=now;
    clock_on=true;
};

    elem.onmouseout = function(){
    clearTimeout(p);
    clock_on=false;
    var elem = document.getElementById('c');
    var d = new Date();
    var current_date = d.getDate();
    var current_month = d.getMonth() + 1;
    var current_year = d.getFullYear();
    now = "Сегодня: " + current_date + "." + current_month + "." + current_year;
    elem.innerHTML=now; 
    };
}

