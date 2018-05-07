<?php

$correo = $_POST['correo'];
$pass = $_POST['pass'];

    include("conexion.php");
	$connect = conectar();

if (isset($_POST['submit'])) {

	$consulta = "SELECT * FROM empresas WHERE correo_e = '$correo' AND pass_e = '$pass' ";
	$ejecutar = mysqli_query($connect, $consulta);

	$row = mysqli_fetch_array($ejecutar);

	$consulta2 = "SELECT * FROM usuarios WHERE correo_u = '$correo' AND pass_u = '$pass' ";
	$ejecutar2 = mysqli_query($connect, $consulta2);

	$row2 = mysqli_fetch_array($ejecutar2);

	if ($row['correo_e'] == $correo && $row['pass_e'] == $pass) {

		session_start();

		$_SESSION['correo'] = $row['correo_e'];
		$_SESSION['pass'] = $row['pass_e'];
		$_SESSION['user'] = $row['nombre_e'];

		header("Location: indexe.php");

	}elseif($row2['correo_u'] == $correo && $row2['pass_u'] == $pass){

		session_start();

		$_SESSION['correo'] = $row2['correo_u'];
		$_SESSION['pass'] = $row2['pass_u'];
		$_SESSION['user'] = $row2['nombre_u'];
		$_SESSION['last'] = $row2['apellidos_u'];

		header("Location: indexu.php");

	}else{
		header("Location: index.php?id=!existeEmail");
	}
}

?>