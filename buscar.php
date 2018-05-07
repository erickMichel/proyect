<?php 
	include("conexion.php");
	$conexion = conectar();

	$buscar = $_POST['buscar'];

	$search = "SELECT * FROM empresas, usuarios WHERE id_e = '$buscar' "
?>