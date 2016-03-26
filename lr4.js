/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function ld()
{
    var dr = new Date(2015, 0, 1);
    var today = new Date();
    var remain = Math.ceil((today - dr) / (1000 * 3600 * 24));
    return remain;
}


