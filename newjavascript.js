/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function ld()
{
    var today = new Date();
    var visk;
    if((today%4)==0)
    {
        visk="Visokosniy";
    }
    else
    {
        visk="Nevisokosniy";
    }
    var otv= today.getFullYear() + '-' + visk;
    return otv;
}
