<?php

$servidor = "localhost: 3307";
$usuario = "emanuel";
$contrasena = "emanuel2002";
$basedatos = "nido_local";

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

$sentenciaSQL = "INSERT INTO usuarios (usuario, contrasena, nombre, email) VALUES ('" . $_REQUEST["username"] . "', '" . $_REQUEST["password"] . "', '" . $_REQUEST["name"] . "', '" . $_REQUEST["email"] . "')";

//Guardar el nombre de usuario, contraseña y nombre en la tabla de usuarios
EjecutarSQL ($servidor, $usuario, $contrasena, $basedatos, $sentenciaSQL);

header("location: anunciate.php");

?>