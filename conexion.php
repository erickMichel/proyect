<?php

function conectar(){

	$server = "localhost";
	$user = "root";
	$pass = "";
	$db = "proyecto";

	$conexion = mysqli_connect($server, $user, $pass) or die ("Conexion fallida") ;

	mysqli_select_db($conexion ,$db);

	return $conexion;

}

?>