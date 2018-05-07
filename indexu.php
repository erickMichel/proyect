<?php
include("conexion.php");
$conect = conectar();

session_start();


if($_SESSION['correo']) { ?>

	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" href="main.css">
	</head>
	<body>
		
		<nav>
			<div class="container">
				<ul class="nav">
					<li class="activo"><a class="enlace"  href="">Inicio</a></li>
					<li><a class="enlace" href="">Quienes somos</a></li>
					<li><a class="enlace" href="productos.html">Productos</a></li>
					<li><a class="enlace" href="">Empresas</a></li>
					<li><a class="enlace" href="">¿Deseas contactarnos?</a></li>
					<form action="buscar.php" method="POST" class="fbuscar">
						<input type="search" class="buscar" placeholder="Search">
						<span type="button" class="icon-search"></span>
					</form>
					<li class="open"><a class="enlace" href="cerrar.php">Cerrar sesion</a></li>
				</ul>
			</div>
		</nav>

	</body>
	</html>
<?php
	echo "<b>Bienvenido</b> ".$_SESSION['user']." ".$_SESSION['last']."<br>";
	echo $_SESSION['correo'];

}else{
	header("Location: index.php");
}

?>
