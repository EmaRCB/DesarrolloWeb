<?php

include("variables.php");

include("funciones.php");

if (empty($_REQUEST["name"])) {
	header("location: registrate.php");
	exit();
}

if (empty($_REQUEST["username"])) {
	header("location: registrate.php");
	exit();
}

if (empty($_REQUEST["email"])) {
	header("location: registrate.php");
	exit();
}

if (empty($_REQUEST["password"])) {
	header("location: registrate.php");
	exit();
}

if (empty($_REQUEST["password2"])) {
	header("location: registrate.php");
	exit();
}


$correctuser = strip_tags($_REQUEST["username"]);
$correctpass = strip_tags($_REQUEST["password"]);
$correctname = strip_tags($_REQUEST["name"]);
$correctemail = strip_tags($_REQUEST["email"]);

$sentenciaSQL = "INSERT INTO usuarios (usuario, contrasena, nombre, email) VALUES ('" . $correctuser . "', '" . $correctpass . "', '" . $correctname . "', '" . $correctemail . "')";


global $nombreArchivo;

if(isset($_POST['boton'])){
 
    // Count total files
    $countfiles = count($_FILES['file']['name']);

    // Looping all files
    for($i=0;$i<$countfiles;$i++){
        $filename = $_FILES['file']['name'][$i];
		$nombreArchivo = $filename;
 
        // Upload file
        move_uploaded_file($_FILES['file']['tmp_name'][$i],'C:\xampp\htdocs\DesarrolloWeb-1\SitioWeb\imagenesSubidas\ '.$filename);
 
    }
} 

$file='C:/xampp/htdocs/DesarrolloWeb-1/SitioWeb/imagenesSubidas/ ' . $nombreArchivo;


$sentenciaSQL = "INSERT INTO usuarios (usuario, contrasena, nombre, email, foto) VALUES ('" . $_REQUEST["username"] . "', '" . $_REQUEST["password"] . "', '" . $_REQUEST["name"] . "', '" . $_REQUEST["email"] ."', '". $file . "')";
// $sentenciaSQL2 = "SELECT p.foto FROM usuarios as u join perfiles as p on p.idUsuario = u.id_usuario join proyectos as pr on pr.idPerfil = p.id_perfil where usuario = '" . $_SESSION["usuario"] . "'";
// $resultado=ConsultarSQL($servidor, $usuario, $contrasena, $basedatos, $sentenciaSQL2); 
// $idUser=$resultado[$_REQUEST["username"]]["id_usuario"];
// $sentenciaSQL3=""
// $sentenciaSQL2 = "INSERT INTO perfiles (`foto`, `idUsuario`) VALUES ('" . $file. "' ,'".  $idUser  . "')";
//Guardar el nombre de usuario, contraseña y nombre en la tabla de usuarios
EjecutarSQL ($servidor, $usuario, $contrasena, $basedatos, $sentenciaSQL);
//EjecutarSQL ($servidor, $usuario, $contrasena, $basedatos, $sentenciaSQL2);

header("location: anunciate.php");

?>