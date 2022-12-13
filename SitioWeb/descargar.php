
<?php
    session_start();
    $varsesion = $_SESSION["usuario"];

    //Si alguien no ha iniciado sesión o se conecta desde el link
    if($varsesion == null || $varsesion = ''){
        echo "Usted no ha iniciado sesión";
        header("location: anunciate.php?estado=4");
    }
?>

<?php 
header("Pragma: public");
header("Expires: 0");
$filename = "datosTabla.xls";
header("Content-type: application/x-msdownload");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

?>

<!DOCTYPE html>
<html>
<body>

<div class="user_container">
                <?php 
                require "funciones.php";
                    
                    
                    echo verProyectos();

                    function verProyectos() {
                        include("variables.php");
                        
                        $sentenciaSQL = "SELECT * FROM usuarios as u join perfiles as p on p.idUsuario = u.id_usuario join proyectos as pr on pr.idPerfil = p.id_perfil where usuario = '" . $_SESSION["usuario"] . "'";
                    
                        $cadena = "<table border='3' style='overflow-x:auto;'> <tr> <th> Categoría </th><th> Nombre del proyecto </th><th> Link foto </th> </tr>";
                    
                        $resultado = ConsultarSQL($servidor, $usuario, $contrasena, $basedatos, $sentenciaSQL);
                    
                        foreach($resultado as $usuario) {
                            $cadena .= "<tr>";
                            
                            $cadena .= "<td> ". $usuario["categoria"] ." </td>";
                            $cadena .= "<td> ". $usuario["nombreProyecto"] ." </td>";
                            $cadena .= "<td> ". $usuario["linkFoto"] ." </td>";
                            $cadena .= "</tr>";
                        }
                    
                        
                    
                        return $cadena . "</table>";
                    }
                    
                ?>

            </div>

</body>
</html>
