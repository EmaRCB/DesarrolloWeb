function generarTextoCalendario(i){
    var f1 = document.getElementById("fecha"+i);
    var n1 = document.getElementById("nom"+i);
    var u1 = document.getElementById("ub"+i);

    //Estos valores son temporales, luego se agregarán eventos.
    f1.textContent += "fecha " + i;
    n1.textContent += "nombre " + i;
    u1.textContent += "ubicacion " + i;
}
window.onload = function(){

    for (var i = 0; i < 9; i++) {
        generarTextoCalendario(i+1);
    }
}