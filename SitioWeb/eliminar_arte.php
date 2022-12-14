<?php
    session_start();
    $varsesion = $_SESSION["usuario"];

    

    //Si alguien no ha iniciado sesión o se conecta desde el link
    if($varsesion == null || $varsesion = ''){
        echo "Usted no ha iniciado sesión";
        header("location: anunciate.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registo de arte</title>
    <link rel="stylesheet" type="text/css" href="estilos/estilo_eliminar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Belleza&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Marker+Hatch&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Bubbles&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">


</head>
<body>
  <div class="item1">
  <a href="./index.php"><img src="../Recursos/logo.png" class="logo" alt="logo"></a>
  </div>
  <header id = "header" class ="item2">
    <div >
      <a href="index.html" class="banner_text"><strong>INICIO</strong></a>
    </div>
    <div >
      <a href="usuario.php" class="banner_text"><strong>REGRESAR A MI CUENTA</strong></a>
    </div>
    
  </header>
  <section class="content-wrapper">
      
      <div class="form-container">
          <div id = "left-section">
              <h1 class = "texto" id = "comparte">
                Elimina
              </h1>
              <h1 class = "texto">
                tu arte
              </h1>
              <h1 class = "texto">
                :(
              </h1>
              
          </div>
          <form action="eliminar.php" class="form" id = "right-section">
            <div class = "form-top">
              <div class >
                <h1>
                  Categoría Artística:
                </h1>
                
              </div>
              <div class="select">
                <select id = "categories" name="category"  >
                  <option selected="true" name="category" disabled="disabled">Selecciona una categoría</option>
                  <option value="1">MUSICA</option>
                  <option value="2">PINTURA</option>
                  <option value="3">ARTESANIAS</option>
                  <option value="4">DANZA</option>
                </select>
              </div>
            </div>
            <div class = "form-bottom">
              <div class = "second-appearance-1">
                <div class = "toGrid">
                  <label class="label">Tipo de proyecto musical</label>
                  <div class="select">
                    <select  id = "musicProyect" >
                      <option selected="true" disabled="disabled">Selecciona un tipo</option>
                      <option value="1">Solista</option>
                      <option value="2">Grupo</option>
                    </select>
                  </div>
                </div>
                <div class = "toGrid">
                  <label class="label">Género musical</label>
                  <div>
                    <input type="text" placeholder="Escribe el género musical" class="input-genero"> 
                  </div>
                </div>
              </div>
              <div class = "second-appearance-4">
                <div class = "toGrid">
                  <label class="label">Tipo de Danza</label>
                  <div class="select">
                    <select  id = "danceProyect" >
                      <option selected="true" disabled="disabled">Selecciona un tipo</option>
                      <option value="1">Dueto o Grupo</option>
                      <option value="2">Solo</option>
                    </select>
                  </div>
                </div>
                
              </div>
              
              <div class = "second-appearance-2-3">
                <label class="label">Nombre del proyecto</label>
                <input type="text" name="projectName" placeholder="Nombra tu proyecto" class="input"> 
                
              </div>
              
              <div>
                <input  id = "submitButton" type="submit" value="Eliminar Contenido" class="primary-button login-button" >
              </div>
              
              

              

            </div>
          </form>   
      </div>
      
  </section>
  <div>

  </div>
  
  
</body>

<script src="js_eliminar.js">
    
</script>
</html>

