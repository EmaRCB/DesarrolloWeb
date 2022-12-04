<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./estilos/comun.css">
  <link rel="stylesheet" href="./estilos/registro.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Signika:wght@500&display=swap" rel="stylesheet">
  <script src="plantilla.js"></script>
  <style>
	
		#error {
			border: solid 1px #CCC;
			background-color: #EEE;
			color: blue;
			visibility: hidden;
 			margin-bottom: 4px;
 			padding: 4px;
    		width: 500px;
 		}

	
	</style>
  <title>Registrar usuario</title>
  <script>
	window.onload = function () {
	
		document.forma.cancelar.onclick = function() {
			history.back();
		}
		
		document.forma.onsubmit = function () {
				
			// Validación individual
			if (document.forma.username.value == "") {
				alert("Debe proporcionar el nombre de usuario.");
				document.forma.username.focus();
				return false;
			}

			// Validación grupal
			var mensaje = "";
			if (document.forma.password.value == "") {
				mensaje += "Debe proporcionar la clave de acceso. <a href=\"javascript:document.forma.contrasena.focus();\"><img src=\"imagenes/info-16.gif\"></a><br>";
			}
			if (document.forma.password.value != document.forma.password2.value) {
				mensaje += "las claves de acceso no coinciden.<br>";
				document.forma.password.value = "";
				document.forma.passwordb.value = "";
			}
			if (document.forma.name.value == "") {
				mensaje += "Debe proporcionar el nombre completo del usuario.";
			}

      if (document.forma.email.value == "") {
				mensaje += "Debe proporcionar el correo electronico completo del usuario.";
			}
			
			if(mensaje != "") {
				document.getElementById("error").innerHTML = mensaje;
				document.getElementById("error").style.visibility = "visible";
				return false;
			} else
				return true;
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
      
     <div id="error"></div>
        <div class="form-container">
          
        
          <h1 class="title">REGISTRATE</h1>

          <form name="forma" action="guardar.php" method="post">
            <div>
              <label for="username" class="label">Nombre de usuario</label></br>
              <input type="text" name="username" id="username" placeholder="alexandro929" class="input input-name"></br>

              <label for="name" class="label">Nombre artístico</label></br>
              <input type="text" name="name" id="name" placeholder="Alexandro" class="input input-name"></br>

              <label for="email" class="label">Correo electrónico</label> </br>
              <input type="text" name="email" id="email" placeholder="artista@ejemplo.com" class="input input-email"></br>

              <label for="password" class="label">Contraseña</label></br>
              <input type="password" name="password" id="password" placeholder="*********" class="input input-password"></br>

              <label for="password2" class="label">Confirmar contraseña:</label></br>
              <input type="password" name="password2" id="password2" placeholder="*********" class="input input-password"></br>
            </div>

            <input type="submit" name="boton" value="Registrar" class="primary-button login-button">>
            
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
