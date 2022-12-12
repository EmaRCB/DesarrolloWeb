<?php

session_start();

include("variables.php");


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

$correctuser = strip_tags($_REQUEST["usuario"]);
$correctpass = strip_tags($_REQUEST["contrasena"]);


//Completar la sentencia SQL
$sql = "SELECT usuario, contrasena FROM usuarios WHERE usuario ='" . $correctuser . "' AND contrasena ='" . $correctpass . "'";

$resultado = mysqli_query($conexion, $sql);
mysqli_close($conexion);

if (mysqli_num_rows($resultado) > 0) {
   //Si hay registro reenviar a la página menu.php
   $_SESSION["usuario"] = $_REQUEST["usuario"];
   header("location: usuario.php");
} else {
   //Sino redirigir a la página index.html 
   header("location: anunciate.php?estado=3");
}

?>