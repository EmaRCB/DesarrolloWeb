
<?php
    session_start();
?>
<?php
    $varsesion = $_SESSION["usuario"];
    

    //Si alguien no ha iniciado sesión o se conecta desde el link
    if($varsesion == null || $varsesion = ''){
        echo "Usted no ha iniciado sesión";
        header("location: anunciate.php?estado=4");
    }
?>
<script>
    var resultado = "<?php echo nombreSesion() ?>";
    localStorage.setItem('Nombre', resultado);
    <?php

    function nombreSesion() {
        return $_SESSION["usuario"];
    }
    ?>


alert("Bienvenide "+ localStorage.getItem("Nombre")+ " a "+ "Nido Local")
 </script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <link rel="stylesheet" href="./estilos/comun.css">
    <link rel="stylesheet" href="./estilos/users.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@500&display=swap" rel="stylesheet">
    <script src="plantilla.js"></script>
    <script src="search.js"></script>
</head>
<body>
    <div class="grid-container">
        <div class="item1">
            <a href="./index.php"><img src="../Recursos/logo.png" class="logo" alt="logo"></a>
        </div>
        <div class="item2">
            <div id="musica" onmouseover="changeColor('var(--music_red)')" onmouseout="changeColor('var(--advertisement_yellow)')">
                <a href="musica.php" class="banner_text"><strong>M&#218;SICA</strong></a>
            </div>
            <div id="pintura" onmouseover="changeColor('var(--paint_green)')" onmouseout="changeColor('var(--advertisement_yellow)')">
                <a href="pintura.php" class="banner_text"><strong>PINTURA</strong></a>
            </div>
            <div id="artesanias" onmouseover="changeColor('var(--crafts_pink)')" onmouseout="changeColor('var(--advertisement_yellow)')">
                <a href="artesanias.php" class="banner_text"><strong>ARTESAN&#205;AS</strong></a>
            </div>
            <div id="baile" onmouseover="changeColor('var(--dance_blue)')" onmouseout="changeColor('var(--advertisement_yellow)')">
                <a href="baile.php" class="banner_text"><strong>BAILE</strong></a>
            </div>
            <div id="anunciate" onmouseover="changeColor('var(--advertisement_yellow)')" onmouseout="changeColor('var(--advertisement_yellow)')">
                <a href="usuario.php" class="banner_text"><strong>AN&#218;NCIATE</strong></a>
            </div>
            <div id="eventos-proximos" onmouseover="changeColor('var(--events_purple)')" onmouseout="changeColor('var(--advertisement_yellow)')">
                <a href="eventos.php" class="banner_text"><strong>EVENTOS</strong></a>
            </div>
        </div>
        <div class="item3">
            <div id="bar"></div>
        </div>
        <div class="item4"> 
            <div class="search_box">
                <div>Buscar:</div>
                <input type="text" size="30" onkeyup="showResult(this.value)">
                <div id="livesearch"></div>
            </div>
            <div class="user_header">
                <div id="profile_picture">
                    
                </div>
                <?php
                        require "funciones.php";
                    ?>
                    <script>
                        var resultado = <?php echo json_encode(verFotoPerfil()); ?>;
                    <?php

                        function verFotoPerfil() {
                            include("variables.php");
                            
                        

                            $sentenciaSQL = "SELECT p.foto FROM usuarios as u join perfiles as p on p.idUsuario = u.id_usuario join proyectos as pr on pr.idPerfil = p.id_perfil where usuario = '" . $_SESSION["usuario"] . "'";

                            //$cadena = "<table border='3' style='overflow-x:auto;'> <tr> <th> Categoría </th><th> Nombre del proyecto </th><th> Link foto </th> </tr>";

                            $resultado = ConsultarSQL($servidor, $usuario, $contrasena, $basedatos, $sentenciaSQL); 

                            return "url('" . $resultado[0]["foto"] . "')";
                        }


                    ?>
                        document.getElementById("profile_picture").style.backgroundImage = resultado;
                        document.getElementById("profile_picture").style.backgroundSize = "cover";
                    </script>
                    
                <div class="main_title">Bienvenide <?php echo $_SESSION["usuario"]?>!</div>
                </script>
            </div>
            

            <p class="user_subtitle">A continuación, te mostramos todos los proyectos que has publicado en el sitio:</p>
            <div class="user_container">
                <?php 
                    
                    
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
            <div class="logout_box">
                <div class="button">
                    <a href="cerrarsesion.php">CERRAR SESIÓN</a>
                </div>
                <div class="button">
                    <a href="registro_arte.php">AGREGAR UN PROYECTO</a>
                </div>
                <div class="button">
                    <a href="eliminar_arte.php">ELIMINAR UN PROYECTO</a>
                </div>

                <div class="button">
                    <a href="descargar.php">DESCARGAR DATOS</a>
                </div>

            </div>
            
            
        </div>
        <div class="item5">
            <p id="footer_sm">REDES SOCIALES PROXIMAMENTE</p>
        </div>
    </div>
</body