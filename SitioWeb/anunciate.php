<?php
  // Validación clásica
$estado = (isset($_REQUEST["estado"]) && is_numeric($_REQUEST["estado"])) ? $_REQUEST["estado"] : 0;
$usuario = (isset($_REQUEST["usuario"]) && is_string($_REQUEST["usuario"])) ? $_REQUEST["usuario"] : "";

// Validación con filtro
$estado = filter_input(INPUT_GET, "estado", FILTER_SANITIZE_URL);
$usuario = filter_input(INPUT_GET, "usuario", FILTER_SANITIZE_STRING);

switch ($estado) {
    case 1:
        $cadena = "Debe proporcionar tu nombre de usuario.";
        break;
    case 2:
        $cadena = "Debe proporcionar su contrase&ntilde;a.";
        break;
    case 3:
        $cadena = "El nombre de usuario o la contrase&ntilde;a son incorrectos.";
        break;
    case 4:
        $cadena = "Debes iniciar sesi&oacute;n para utilizar el sistema.";
        break;
    case 5:
        $cadena = "Sesión cerrada.";
        break;
    default:
    	$cadena = "";
}
?>
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
  <style>
    :root{
      --advertisement_yellow: #FFA30C;
    }
    #estado {
			background-color: var(--advertisement_yellow);
			color: white;
      visibility: hidden;
 			margin-bottom: 4px;
 			padding: 4px;
    	width: 100%;
 		}
  </style>
  
  <script>
	
	
	  <?php echo "var estado = '" . $cadena . "';"; ?>
	
    function ocultarPanelEstado(panelEstado) {
      document.getElementById("estado").style.visibility = "hidden";
    }
      
    window.onload = function () {

      document.forma.onsubmit = function () {
          
        // Validación individual
        if (document.forma.usuario.value == "") {
          alert("Debe proporcionar el nombre de usuario.");
          document.forma.usuario.focus();
          return false;
        }
      }
    
      document.forma.usuario.value = "<?php echo $usuario; ?>";
    
      if (estado != "") {
        panelEstado = document.getElementById("estado");
        panelEstado.innerHTML = estado;
        panelEstado.style.visibility = "visible";
        setTimeout(ocultarPanelEstado, 3000);
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
    <div class="login">
    
      <div class="form-container">
        <div>
          
        </div>
      
        <h1 class="title">INICIAR SESIÓN</h1>
        <div id="estado">Mensaje</div>

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
