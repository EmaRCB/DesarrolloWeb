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

//Guardar el nombre de usuario, contraseña y nombre en la tabla de usuarios
EjecutarSQL ($servidor, $usuario, $contrasena, $basedatos, $sentenciaSQL);

header("location: anunciate.php");

?>