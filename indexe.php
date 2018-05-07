<?php
include("conexion.php");
$conect = conectar();

session_start();


if($_SESSION['correo']) {

	echo "<b>Bienvenido</b> ".$_SESSION['user']."<br>";
	echo $_SESSION['correo'];

}else{
	header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<br>
	<a href="cerrar.php">Cerrar sesion</a>
</body>
</html>