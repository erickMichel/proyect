<?php

include("conexion.php");
$conexion = conectar();

if (isset($_POST['id_u']) && !empty($_POST['id_u']) && 
	isset($_POST['nombre_u']) && !empty($_POST['nombre_u']) &&
	isset($_POST['apellidos_u']) && !empty($_POST['apellidos_u']) &&
	isset($_POST['telefono_u']) && !empty($_POST['telefono_u']) &&
	isset($_POST['direccion_u']) && !empty($_POST['direccion_u']) &&
	isset($_POST['correo_u']) && !empty($_POST['correo_u']) &&
	isset($_POST['pass_u']) && !empty($_POST['pass_u']) &&
	isset($_POST['vpass_u']) && !empty($_POST['vpass_u'])) {

			$id_u = $_POST['id_u'];
			$nombre_u = $_POST['nombre_u'];
			$apellidos_u = $_POST['apellidos_u'];
			$correo_u = $_POST['correo_u'];
			$telefono_u = $_POST['telefono_u'];
			$direccion_u = $_POST['direccion_u'];
			$pass_u = $_POST['pass_u'];
			$vpass_u = $_POST['vpass_u'];

			$consulta = "SELECT * FROM usuarios WHERE correo_u = '$correo_u'";
			$ejecutar = mysqli_query($consulta, $conexion);

			$row = mysqli_fetch_array($ejecutar);

			if ($pass_u != $vpass_u) {

			header("Location: index.php?id=pass0");

			}elseif(!is_null($row['correo_u'])){

				header("Location: index.php?id=existeEmail");

			}else{

				$insertar = "INSERT INTO usuarios VALUES('$id_u', '$nombre_u', '$apellidos_u', '$correo_u', '$telefono_u', '$direccion_u', '$pass_u', '$vpass_u')";

				mysqli_query($conexion, $insertar);

				header("Location: index.php?id=valido");
			}


}else{
	header("Location: index.php?id=incorrecto");
}

?>

