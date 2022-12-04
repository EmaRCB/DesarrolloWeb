<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos/comun.css">
    <link rel="stylesheet" href="estilos/maquetado2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@500&display=swap" rel="stylesheet">
    <script>
        function changeColor(color) {
            document.getElementById("bar").style.backgroundColor = color;
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
                    
                    $sentenciaSQL = "SELECT * FROM proyectos WHERE categoria = 'artesanias'";
    
                    $i = 1;
    
    
                    $resultado = ConsultarSQL($servidor, $usuario, $contrasena, $basedatos, $sentenciaSQL);
                   
    
                    return $resultado;
                }
                
            
            ?>
            return obj;

        }
    </script>
</head>

<body>
    <div class="grid-container">
        <div class="item1">
            <a href="./index.php"><img src="../Recursos/logo.png" class="logo" alt="logo"></a>
        </div>
        <div class="item2">
            <div id="musica" onmouseover="changeColor('var(--music_red)')" onmouseout="changeColor('var(--crafts_pink)')">
                <a href="musica.php" class="banner_text"><strong>M&#218;SICA</strong></a>
            </div>
            <div id="pintura" onmouseover="changeColor('var(--paint_green)')" onmouseout="changeColor('var(--crafts_pink)')">
                <a href="pintura.php" class="banner_text"><strong>PINTURA</strong></a>
            </div>
            <div id="artesanias" onmouseover="changeColor('var(--crafts_pink)')" onmouseout="changeColor('var(--crafts_pink)')">
                <a href="artesanias.php" class="banner_text"><strong>ARTESAN&#205;AS</strong></a>
            </div>
            <div id="baile" onmouseover="changeColor('var(--dance_blue)')" onmouseout="changeColor('var(--crafts_pink)')">
                <a href="baile.php" class="banner_text"><strong>BAILE</strong></a>
            </div>
            <div id="anunciate" onmouseover="changeColor('var(--advertisement_yellow)')" onmouseout="changeColor('var(--crafts_pink)')">
                <a href="usuario.php" class="banner_text"><strong>AN&#218;NCIATE</strong></a>
            </div>
            <div id="eventos-proximos" onmouseover="changeColor('var(--events_purple)')" onmouseout="changeColor('var(--crafts_pink)')">
                <a href="eventos.php" class="banner_text"><strong>EVENTOS</strong></a>
            </div>
        </div>
        <div class="item3">
            <div id="bar"></div>
        </div>
        <div class="item4">
            <div class="slider2">
                <div class="slide2-track">
                    <div class="slide2">
                        ARTESANOS DESTACADOS&nbsp
                    </div>
                    <div class="slide2">
                        ARTESANOS DESTACADOS&nbsp
                    </div>
                    <div class="slide2">
                        ARTESANOS DESTACADOS&nbsp
                    </div>
                    <div class="slide2">
                        ARTESANOS DESTACADOS&nbsp
                    </div>
                    <div class="slide2">
                        ARTESANOS DESTACADOS&nbsp
                    </div>
                    <div class="slide2">
                        ARTESANOS DESTACADOS&nbsp
                    </div>
                    <div class="slide2">
                        ARTESANOS DESTACADOS&nbsp
                    </div>
                    <div class="slide2">
                        ARTESANOS DESTACADOS&nbsp
                    </div>
                    <div class="slide2">
                        ARTESANOS DESTACADOS&nbsp
                    </div>
                    <div class="slide2">
                        ARTESANOS DESTACADOS&nbsp
                    </div>
                    <div class="slide2">
                        ARTESANOS DESTACADOS&nbsp
                    </div>
                    <div class="slide2">
                        ARTESANOS DESTACADOS&nbsp
                    </div>
                </div>
            </div>
            <div class="slider">
                <div class="slide-track">
                    
                    <div class="slide">
                        <img src="imagenes/arte1.jpeg" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">

                    </div>
                    <div class="slide">
                        <img src="imagenes/arte2.jpeg" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">

                    </div>
                    <div class="slide">
                        <img src="imagenes/arte3.jpeg" height="100" width="250" alt="" />
                    </div>
                    <div class="imagenes/slide">

                    </div>
                    <div class="slide">
                        <img src="imagenes/arte1.jpeg" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">

                    </div>
                    <div class="slide">
                        <img src="imagenes/arte2.jpeg" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">

                    </div>
                    <div class="slide">
                        <img src="imagenes/arte3.jpeg" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">

                    </div>
                    <div class="slide">
                        <img src="imagenes/arte1.jpeg" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">

                    </div>
                    <div class="slide">
                        <img src="imagenes/arte2.jpeg" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">

                    </div>
                    <div class="slide">
                        <img src="imagenes/arte3.jpeg" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">

                    </div>

                </div>

            </div>
            <div class="slider3">
                <div class="slide3-track">
                    <div class="slide3">
                        ARTESANOS DESTACADOS&nbsp
                    </div>
                    <div class="slide3">
                        ARTESANOS DESTACADOS&nbsp
                    </div>
                    <div class="slide3">
                        ARTESANOS DESTACADOS&nbsp
                    </div>
                    <div class="slide3">
                        ARTESANOS DESTACADOS&nbsp
                    </div>
                    <div class="slide3">
                        ARTESANOS DESTACADOS&nbsp
                    </div>
                    <div class="slide3">
                        ARTESANOS DESTACADOS&nbsp
                    </div>
                    <div class="slide3">
                        ARTESANOS DESTACADOS&nbsp
                    </div>
                    <div class="slide3">
                        ARTESANOS DESTACADOS&nbsp
                    </div>
                    <div class="slide3">
                        ARTESANOS DESTACADOS&nbsp
                    </div>
                    <div class="slide3">
                        ARTESANOS DESTACADOS&nbsp
                    </div>
                    <div class="slide3">
                        ARTESANOS DESTACADOS&nbsp
                    </div>
                    <div class="slide3">
                        ARTESANOS DESTACADOS&nbsp
                    </div>
                </div>
            </div>


            <div class="imagenesFijas">
                <script>
                    window.onload = function(){
                        const array = getImagesArray();
                        var arrayLength = array.length ;
                        for (var i = 0; i < arrayLength; i++) {
                            addDiv(i);
                        }
                    }
                    function addDiv(i){
                        var array = <?php echo json_encode(getImagess()); ?>;
                <?php
                    function getImagess() {
                        
                        $servidor = "localhost: 3307";
                        $usuario = "emanuel";
                        $contrasena = "emanuel2002";
                        $basedatos = "nido_local";
                        
                        $sentenciaSQL = "SELECT * FROM proyectos WHERE categoria = 'artesanias'";
        
                        $i = 1;
        
        
                        $resultado = ConsultarSQL($servidor, $usuario, $contrasena, $basedatos, $sentenciaSQL);
                    
        
                        return $resultado;
                    }
                    
                
                ?>

                    const g = document.createElement('div');
                    var name = "imgs-" + i;
                    g.setAttribute("id", name);
                    const text = document.createTextNode("");
                    g.appendChild(text);
                    
                    document.getElementsByClassName('imagenesFijas')[0].appendChild(g);
                    
                    document.getElementById(name).style.height = "200px";
                    document.getElementById(name).style.width = "300px";
                    document.getElementById(name).style.backgroundColor = "white";
                    document.getElementById(name).style.margin = "15px";
                    document.getElementById(name).style.backgroundImage = "url('"+array[i]["linkFoto"]+"')";
                    document.getElementById(name).style.backgroundSize = "cover";
                    
                }
                
                </script>
            
            </div>


        </div>
        <div class="item5">
            <p id="footer_sm">REDES SOCIALES PROXIMAMENTE
        </div>
</body>

</html>