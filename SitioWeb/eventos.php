<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./estilos/comun.css">
    <link rel="stylesheet" href="./estilos/eventos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@500&display=swap" rel="stylesheet">
    <script src="plantilla.js"></script>
    <script>
        function generarTextoCalendario(i){
            var array = <?php echo json_encode(eventosArray()); ?>;

            var f1 = document.getElementById("fecha"+i);
            var n1 = document.getElementById("nom"+i);
            var u1 = document.getElementById("ub"+i);

            //Estos valores son temporales, luego se agregarán eventos.
            f1.textContent += array[i]["fecha"];
            n1.textContent += array[i]["ubicacion"];
            u1.textContent += array[i]["nombreEvento"];
        }
        <?php
                function eventosArray() {
                    require "funciones.php";
                    
                    $servidor = "localhost: 3307";
                    $usuario = "emanuel";
                    $contrasena = "emanuel2002";
                    $basedatos = "nido_local";
                    
                    $sentenciaSQL = "SELECT * FROM eventos ORDER BY fecha";

                    $i = 1;


                    $resultado = ConsultarSQL($servidor, $usuario, $contrasena, $basedatos, $sentenciaSQL);
                

                    return $resultado;
                }
                
            
            ?>

            window.onload = function(){

            for (var i = 0; i < 9; i++) {
                generarTextoCalendario(i);
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
            <div id="musica" onmouseover="changeColor('var(--music_red)')" onmouseout="changeColor('var(--dance_blue)')">
                <a href="musica.php" class="banner_text"><strong>M&#218;SICA</strong></a>
            </div>
            <div id="pintura" onmouseover="changeColor('var(--paint_green)')" onmouseout="changeColor('var(--dance_blue)')">
                <a href="pintura.php" class="banner_text"><strong>PINTURA</strong></a>
            </div>
            <div id="artesanias" onmouseover="changeColor('var(--crafts_pink)')" onmouseout="changeColor('var(--dance_blue)')">
                <a href="artesanias.php" class="banner_text"><strong>ARTESAN&#205;AS</strong></a>
            </div>
            <div id="baile" onmouseover="changeColor('var(--dance_blue)')" onmouseout="changeColor('var(--dance_blue)')">
                <a href="baile.php" class="banner_text"><strong>BAILE</strong></a>
            </div>
            <div id="anunciate" onmouseover="changeColor('var(--advertisement_yellow)')" onmouseout="changeColor('var(--dance_blue)')">
                <a href="anunciate.php" class="banner_text"><strong>AN&#218;NCIATE</strong></a>
            </div>
            <div id="eventos-proximos" onmouseover="changeColor('var(--events_purple)')" onmouseout="changeColor('var(--dance_blue)')">
                <a href="eventos.php" class="banner_text"><strong>EVENTOS</strong></a>
            </div>
        </div>
        <div class="item3">
            <div id="bar"></div>
        </div>
        <div class="item4"> 
            <div class="gmaps_box">
                <div id="map" ></div>
                <!--<iframe id="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6738.820327385671!2d-89.6159389359657!3d20.967330267817278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5671616868fa75%3A0xfe685b8e8345c314!2sPalacio%20de%20la%20M%C3%BAsica!5e0!3m2!1ses-419!2smx!4v1667685397881!5m2!1ses-419!2smx"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
            </div>
            <script>
                function initMap(){
                    var location = {X99H+F8 Mérida, Yucatán};
                    var map = new google.maps.Map(document.getElementById("map"), {
                        zoom: 4,
                        center: location
                    });
                    var marker = new google.maps.Marker({
                        position: location, 
                        map: map
                    });
                    //AIzaSyAn8Un3pGXQQ3RTOb3-vzUa-EWGeD5Iyog
                }
            </script>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAn8Un3pGXQQ3RTOb3-vzUa-EWGeD5Iyog&callback=initMap">

            </script>
            <p id="eventos_title">Eventos cerca de Mérida</p>
            <div class="calendar_box">
                <div class="calendar_grid">
                    <div class="calendar_id"><p id="fecha0"></p><p id="nom0"></p><p id="ub0"></p></div>
                    <div class="calendar_id"><p id="fecha1"></p><p id="nom1"></p><p id="ub1"></p></div>
                    <div class="calendar_id"><p id="fecha2"></p><p id="nom2"></p><p id="ub2"></p></div>
                    <div class="calendar_id"><p id="fecha3"></p><p id="nom3"></p><p id="ub3"></p></div>
                    <div class="calendar_id"><p id="fecha4"></p><p id="nom4"></p><p id="ub4"></p></div>
                    <div class="calendar_id"><p id="fecha5"></p><p id="nom5"></p><p id="ub5"></p></div>
                    <div class="calendar_id"><p id="fecha6"></p><p id="nom6"></p><p id="ub6"></p></div>
                    <div class="calendar_id"><p id="fecha7"></p><p id="nom7"></p><p id="ub7"></p></div>
                    <div class="calendar_id"><p id="fecha8"></p><p id="nom8"></p><p id="ub8"></p></div>
                </div>
            </div>
        </div>
        <div class="item5">
            <p id="footer_sm">REDES SOCIALES PROXIMAMENTE</p>
        </div>
    </div>
</body>
</html>