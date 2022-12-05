<?php

session_start();
$varsesion = $_SESSION["usuario"];

    //Si alguien no ha iniciado sesión o se conecta desde el link
if($varsesion == null || $varsesion = ''){
    echo "Usted no ha iniciado sesión";
    header("location: anunciate.php");
}

include("variables.php");
include("funciones.php");

if (empty($_REQUEST["category"])) {
	header("location: usuario.php");
	exit();
}

if (empty($_REQUEST["projectName"])) {
	header("location: registro_arte.php");
	exit();
}

if (empty($_REQUEST["link"])) {
	header("location: registro_arte.php");
	exit();
}

$category = identificarCategoria();

function identificarCategoria(){
    switch ($_REQUEST["category"]) {
        case 1:
          $categoryName = "MUSICA";
          break;
        case 2:
          $categoryName = "PINTURA";
          break;
        case 3:
          $categoryName = "ARTESANIAS";
          break;
        default:
          $categoryName = "DANZA";
      }
      return $categoryName;
}

$idPerfil = verIDPerfil();
function verIDPerfil(){

    include("variables.php");

    $askSQL = "SELECT p.id_perfil FROM usuarios u join perfiles p on p.idUsuario = u.id_usuario where u.usuario = '" . $_SESSION["usuario"] . "'";

    $idPerfil = ConsultarSQL ($servidor, $usuario, $contrasena, $basedatos, $askSQL);

    return $idPerfil[0]["id_perfil"];
}

$sentenciaSQL = "INSERT INTO proyectos (id_proyecto, idPerfil, categoria, nombreProyecto, linkFoto) VALUES (NULL, '" . $idPerfil . "', '" . $category . "', '" . $_REQUEST["projectName"] . "', '" . $_REQUEST["link"] . "')";

//Guardar el nombre de usuario, contraseña y nombre en la tabla de usuarios
EjecutarSQL ($servidor, $usuario, $contrasena, $basedatos, $sentenciaSQL);

header("location: usuario.php");

?>