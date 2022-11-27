<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./estilos/comun.css">
  <link rel="stylesheet" href="./estilos/registro.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Signika:wght@500&display=swap" rel="stylesheet">
  <script src="plantilla.js"></script>
  <title>Iniciar sesión</title>
  
  <script>
	
	
	function ocultarPanelEstado(panelEstado) {
		document.getElementById("estado").style.visibility = "hidden";
	}
		
	window.onload = function () {
	
	
	
	}
	
	</script>
</head>
<body>
<div class="grid-container">
  <div class="item1">
    <img src="../Recursos/logo.png" alt="logo" class="logo">
</div>
<div class="item2">
        <div id="musica" onmouseover="changeColor('var(--music_red)')">
            <a href="musica.html" class="banner_text"><strong>M&#218;SICA</strong></a></div>
        <div id="pintura" onmouseover="changeColor('var(--paint_green)')">
            <a href="pintura.html" class="banner_text"><strong>PINTURA</strong></a></div>
        <div id="artesanias" onmouseover="changeColor('var(--crafts_pink)')">
            <a href="artesanias.html" class="banner_text"><strong>ARTESAN&#205;AS</strong></a></div>
        <div id="baile" onmouseover="changeColor('var(--dance_blue)')">
            <a href="baile.html" class="banner_text"><strong>BAILE</strong></a></div>
        <div id="anunciate" onmouseover="changeColor('var(--advertisement_yellow)')">
            <a href="anunciate.php" class="banner_text"><strong>AN&#218;NCIATE</strong></a></div>
        <div id="eventos-proximos" onmouseover="changeColor('var(--events_purple)')">
            <a href="eventos.html" class="banner_text"><strong>EVENTOS</strong></a></div>
</div>
<div class="item3">
    <div id="bar"></div>
</div>
<div class="item4">
    <div class="login">
    
      <div class="form-container">
        <div>
          
        </div>
      
        <h1 class="title">INICIAR SESIÓN</h1>

        <form action="validar.php" method="get" name="forma" class="form">
          <div>
            <label for="name" class="label">Nombre usuario</label>
            <input type="text" placeholder="nombre" name="usuario" size="20" class="input input-name">

            <label for="password" class="label">Contraseña</label>
            <input type="password" placeholder="********" name="contrasena" size="20" class="input input-name">
          </div>

          <!--<a href="registro_arte.html "></a>-->
            <input type="submit"  name="boton" value="Iniciar sesión" class="primary-button login-button">
            
            <a href="registrate.php"><input type="button" name="boton" value="Registrar" class="primary-button login-button"></a>
          
        </form>
      </div>
    </div>
</div>
<div class="item5">
      <p id="footer_sm">REDES SOCIALES PROXIMAMENTE</p>
</div>
</div>
</body>
</html>
