<?php
    
    $proyecto = (isset($_REQUEST["proyecto"]) && is_numeric($_REQUEST["proyecto"])) ? $_REQUEST["proyecto"] : 0;

    $cookie_name = "proyectoId";
    setcookie($cookie_name, $proyecto, time() + (86400 * 30), "/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto artesanal</title>
    <link rel="stylesheet" href="./estilos/comun.css">
    <link rel="stylesheet" href="./estilos/proyectos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@500&display=swap" rel="stylesheet">
    <script src="plantilla.js"></script>
    <script>
        <?php echo "var proyecto = '" . $proyecto . "';"; ?>

        window.onload = function () {

            var array = <?php echo json_encode(getObject()); ?>;
                <?php
                    function getObject() {
                        
                        require "funciones.php";
                        include("variables.php");
                        
                        //$sentenciaSQL = "SELECT * FROM proyectos WHERE id_proyecto = " . $_COOKIE['proyectoId'] . ";";

                        $sentenciaSQL = "SELECT pr.id_proyecto, pr.categoria, pr.nombreProyecto, pr.linkFoto, iu.nombre FROM proyectos as pr JOIN informacionusuarios as iu on pr.idPerfil = iu.id_perfil WHERE pr.id_proyecto = " . $_COOKIE['proyectoId'] . ";";
                        
            
        
                        $resultado = ConsultarSQL($servidor, $usuario, $contrasena, $basedatos, $sentenciaSQL);
                    
        
                        return $resultado;
                    }
                    
                
                ?>          

            if (proyecto != "") {
                panelEstado = document.getElementById("categoria");
                panelEstado.innerHTML = "Categoría: " + array[0]["categoria"];

                panelEstado = document.getElementById("nombre");
                panelEstado.innerHTML = "Nombre del proyecto: " + array[0]["nombreProyecto"];
                document.title = array[0]["nombreProyecto"];

                panelEstado = document.getElementById("artista");
                panelEstado.innerHTML = "Artista: " + array[0]["nombre"];

                panelEstado = document.getElementById("foto");
                panelEstado.style.backgroundImage = "url('"+array[0]["linkFoto"]+"')";
                panelEstado.style.backgroundSize = "cover";
            }

        }
    </script>
</head>
<body>
    <div class="grid-container">
        <div class="item1">
            <a href="./index.php"><img src="../Recursos/logo.png" class="logo" alt="logo"></a>
        </div>
        <div class="item2">
            <div id="musica" onmouseover="changeColor('var(--music_red)')" >
                <a href="musica.php" class="banner_text"><strong>M&#218;SICA</strong></a>
            </div>
            <div id="pintura" onmouseover="changeColor('var(--paint_green)')" >
                <a href="pintura.php" class="banner_text"><strong>PINTURA</strong></a>
            </div>
            <div id="artesanias" onmouseover="changeColor('var(--crafts_pink)')">
                <a href="artesanias.php" class="banner_text"><strong>ARTESAN&#205;AS</strong></a>
            </div>
            <div id="baile" onmouseover="changeColor('var(--dance_blue)')" >
                <a href="baile.php" class="banner_text"><strong>BAILE</strong></a>
            </div>
            <div id="anunciate" onmouseover="changeColor('var(--advertisement_yellow)')" >
                <a href="usuario.php" class="banner_text"><strong>AN&#218;NCIATE</strong></a>
            </div>
            <div id="eventos-proximos" onmouseover="changeColor('var(--events_purple)')" >
                <a href="eventos.php" class="banner_text"><strong>EVENTOS</strong></a>
            </div>
        </div>
        <div class="item3">
            <div id="bar"></div>
        </div>
        <div class="item4"> 
            <div class="content_container">
                <div id="categoria">Categoria</div>
                <div id="nombre">Nombre</div>
                <div id="artista">Usuario</div>
                <div id="foto"></div>
            </div>   
        </div>
        <div class="item5">
            <p id="footer_sm">REDES SOCIALES PROXIMAMENTE</p>
        </div>
    </div>
</body>
</html>