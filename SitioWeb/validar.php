<?php

session_start();

$servidor = "localhost: 3307";
$usuario = "emanuel";
$contrasena = "emanuel2002";
$basedatos = "nido_local";

if ($_REQUEST["usuario"] == "") {
	header("location: anunciate.php?estado=1");
	exit();
	}
if (empty($_REQUEST["contrasena"])) {
   header("location: anunciate.php?estado=2&usuario=" . $_REQUEST["usuario"] );
   exit();
}

$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basedatos);
if (!$conexion) {
   die("Fallo: " . mysqli_connect_error());
}

//Completar la sentencia SQL
$sql = "SELECT usuario, contrasena FROM usuarios WHERE usuario ='" . $_REQUEST["usuario"] . "' AND contrasena ='" . $_REQUEST["contrasena"] . "'";

$resultado = mysqli_query($conexion, $sql);
mysqli_close($conexion);

if (mysqli_num_rows($resultado) > 0) {
   //Si hay registro reenviar a la página menu.php
   $_SESSION["usuario"] = $_REQUEST["usuario"];
   header("location: usuario.php");
} else {
   //Sino redirigir a la página index.html 
   header("location: anunciate.php");
}

?>