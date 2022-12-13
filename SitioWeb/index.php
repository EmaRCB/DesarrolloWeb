<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nido Local</title>
    <link rel="stylesheet" href="./estilos/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@500&display=swap" rel="stylesheet">
    <script src="search.js"></script>
</head>
<body>
    <div class="grid-container">
        <div class="menu">
            <div class="buttons">
                <div class="empty-space"></div>
                <div id="musica">
                    <img src="imagenes/music.png" class="icon" alt="music">
                    <a href="musica.php" class="banner_text"><strong>M&#218;SICA</strong></a></div>
                <div id="pintura">
                    <img src="imagenes/pintura.png" class="icon" alt="music">
                    <a href="pintura.php"  class="banner_text"><strong>PINTURA</strong></a></div>
                <div id="artesanias">
                    <img src="imagenes/art.png" class="icon" alt="music">
                    <a href="artesanias.php"  class="banner_text"><strong>ARTESAN&#205;AS</strong></a></div>
                <div id="baile">
                    <img src="imagenes/dance.png" class="icon" alt="music">
                    <a href="baile.php"  class="banner_text"><strong>BAILE</strong></a></div>
                <div id="anunciate">
                    <img src="imagenes/pencil.png" class="icon" alt="music">
                    <a href="usuario.php"  class="banner_text"><strong>AN&#218;NCIATE</strong></a></div>
                <div id="eventos-proximos">
                    <img src="imagenes/calendar.png" class="icon" alt="music">
                    <a href="eventos.php"  class="banner_text"><strong>EVENTOS</strong></a></div>
                <div class="empty-space"></div>
            </div>
        </div>
        <div class="item2">
            <div class="logo-container">
                <a href="./index.php"><img src="../Recursos/logo.png" class="logo" alt="logo"></a>
                <p class="slogan">El lugar para los nuevos talentos</p>
            </div>
            <div class="search_box">
                <div>Buscar:</div>
                <input type="text" size="30" onkeyup="showResult(this.value)">
                <div id="livesearch"></div>
            </div>
        </div>  
        <div class="item3">
            <div class="artist-container">
                <div class="cont-destacada-container">
                    <iframe class="cont-destacada" src="https://www.youtube.com/embed/B9v8jLBrvug" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  
                </div>
                <div class="leyenda">
                    <p>En reproducción:</p>
                    <p>Florence + The Machine: 'Ship to Wreck'</p>
                </div>
            </div>
            
            
        </div>
    </div>
</body>
</html>