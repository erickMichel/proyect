<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" href="fontello.css">
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
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
				<li class="sub"><a class="enlace" href="#">Registro <span class="icon-down-dir"></span></a>
					<br>
					<ul class="down">
						<li><a id="linke" class="enlace" href="">Empresa</a></li>
						<li><a id="linku" class="enlace" href="">Usuario</a></li>
					</ul>

				</li>
				<form action="buscar.php" method="POST" class="fbuscar">
					<input type="search" class="buscar" placeholder="Search">
					<span type="button" class="icon-search"></span>
				</form>
			</ul>
		</div>
	</nav>

	<?php
		if (isset($_GET['id']) && !empty($_GET['id'])) {

			if ($_GET["id"] == "valido") {
			
				echo '
					<div id="valido" class="valido">
						<p><b>Su registro se ha realizado satisfactoriamente</b> <a id="cerrar" href="#"> <b class="cerrar"> X </b> </a> </p>
					</div>

					'; 
			}elseif ($_GET["id"] == "incorrecto"){ 

					echo '
						<div id="incorrecto" class="incorrecto">
							<p><b>ERROR: Su registro ha sido incorrecto, verifique que todos los campos esten llenos</b> <a id="cerrar2" href="#"> <b class="cerrar"> X </b> </a>  </p>
						</div>

						';
				}elseif ($_GET["id"] == "pass0") {	
						echo '
							<div id="pass0" class="incorrecto">
								<p><b>ERROR: Las contraseñas ingresadas no coinciden * Por favor intente de nuevo *</b> <a id="cerrar4" href="#"> <b class="cerrar"> X </b> </a>  </p>
							</div>

						';
					}elseif ($_GET["id"] == "existeEmail"){
							echo '
								<div id="existeEmail" class="incorrecto">
									<p><b>ERROR: La dirección email ingresada ya se encuentra registrada</b> <a id="cerrar3" href="#"> <b class="cerrar"> X </b> </a>  </p>
								</div>

		
							';
					}
		}		
	?>

	<div id="modale">
		<form action="forme.php" method="POST" class="forme" >
			<h2>Registro de empresas</h2><br>
			<input type="text" name="nit_e" placeholder="Nit"><br>
			<input type="text" name="nombre_e" placeholder="Nombre"><br>
			<input type="text" name="direccion_e" placeholder="Dirección"><br>
			<input type="text" name="telefono1_e" placeholder="Teléfono 1"><br>
			<input type="text" name="telefono2_e" placeholder="Teléfono 2"><br>
			<input type="text" name="correo_e" placeholder="Correo"><br>
			<input type="password" name="pass_e" placeholder="Contrasena nueva"><br>
			<input type="password" name="vpass_e" placeholder="Confirmar contrasena"><br><br>
			<input  type="submit" value="Enviar" class="boton">
			<input type="button" value="Cancelar" id="close" class="boton">
		</form>
	</div>

	<div id="modalu">
		<form action="formu.php" method="POST" class="formu">
			<h2>Registro de usuarios</h2><br>
			<input type="text" name="id_u" placeholder="Id"><br>
			<input type="text" name="nombre_u" placeholder="Nombre"><br>
			<input type="text" name="apellidos_u" placeholder="Apellidos"><br>
			<input type="text" name="correo_u" placeholder="Correo"><br>
			<input type="text" name="telefono_u" placeholder="Telefono"><br>
			<input type="text" name="direccion_u" placeholder="Dirección"><br>
			<input type="password" name="pass_u" placeholder="Contrasena nueva"><br>
			<input type="password" name="vpass_u" placeholder="Confirmar contrasena"><br><br>
			<input type="submit" value="Enviar" class="boton">
			<input type="button" value="Cancelar" id="closeu" class="boton">
		</form>
	</div>

	<form action="login.php" method="POST" class="login">
		<h2>Ingresar</h2><br>
		<input type="text" name="correo" placeholder="Correo" /><br>
		<input type="password" name="pass" placeholder="Contraseña" /><br>

		<?php
			if (isset($_GET['id']) && !empty($_GET['id'])) {

				if ($_GET["id"] == "!existeEmail") {
				
					echo '
						<br>
						<div id="!existeEmail" class="eemail">
							<p><b>!</b> Correo o contraseña incorrectos
						</div>

						'; 
				}
			}
		?>
		<br>
		<input class="btn-log" type="submit" value="Iniciar sesion" name="submit" />
	</form>

	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	<script src="js/modale.js"></script>
	<script src="js/modalu.js"></script>
	<script src="js/close.js"></script>
</body>
</html>