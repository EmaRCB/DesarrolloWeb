function generarTextoCalendario(i){
    var f1 = document.getElementById("fecha"+i);
    var n1 = document.getElementById("nom"+i);
    var u1 = document.getElementById("ub"+i);

    //Estos valores son temporales, luego se agregarán eventos.
    f1.textContent += "fecha " + i;
    n1.textContent += "nombre " + i;
    u1.textContent += "ubicacion " + i;
}
function getImagesArray(){
    var obj = <?php echo json_encode(imagesArray()); ?>;
    <?php
        function imagesArray() {
            require "funciones.php";
            
            $servidor = "localhost: 3307";
            $usuario = "emanuel";
            $contrasena = "emanuel2002";
            $basedatos = "nido_local";
            
            $sentenciaSQL = "SELECT * FROM proyectos WHERE categoria = 'musica'";

            $i = 1;


            $resultado = ConsultarSQL($servidor, $usuario, $contrasena, $basedatos, $sentenciaSQL);
           

            return $resultado;
        }
        
    
    ?>
    return obj;

}

window.onload = function(){

    for (var i = 0; i < 9; i++) {
        generarTextoCalendario(i+1);
    }
}