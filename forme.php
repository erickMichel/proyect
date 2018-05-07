<?php

include("conexion.php");
$conexion = conectar();


if (isset($_POST['nit_e']) && !empty($_POST['nit_e']) && 
	isset($_POST['nombre_e']) && !empty($_POST['nombre_e']) &&
	isset($_POST['direccion_e']) && !empty($_POST['direccion_e']) &&
	isset($_POST['telefono1_e']) && !empty($_POST['telefono1_e']) &&
	isset($_POST['telefono2_e']) && !empty($_POST['telefono2_e']) &&
	isset($_POST['correo_e']) && !empty($_POST['correo_e']) &&
	isset($_POST['pass_e']) && !empty($_POST['pass_e']) &&
	isset($_POST['vpass_e']) && !empty($_POST['vpass_e'])) {

		$nit_e = ($_POST['nit_e']);
		$nombre_e = ($_POST['nombre_e']);
		$direccion_e = ($_POST['direccion_e']);
		$telefono1_e = ($_POST['telefono1_e']);
		$telefono2_e = ($_POST['telefono2_e']);
		$correo_e = ($_POST['correo_e']);
		$pass_e = ($_POST['pass_e']);
		$vpass_e = ($_POST['vpass_e']);

			$select = "SELECT * FROM empresas WHERE correo_e = '$correo_e'";
			$consulta = mysqli_query($conexion, $select);

			$filas = mysqli_fetch_array($consulta);


			if ($pass_e != $vpass_e) {

			header("Location: index.php?id=pass0");

			}elseif(!is_null($filas['correo_e'])){

				header("Location: index.php?id=existeEmail");

			}else{

				$insert = "INSERT INTO empresas VALUES(
												'$nit_e',
												'$nombre_e',
												'$direccion_e',
												'$telefono1_e',
												'$telefono2_e',
												'$correo_e',
												'$pass_e',
												'$vpass_e' )";

				mysqli_query($conexion, $insert);

				header("Location: index.php?id=valido");
			}

}else{
	header("Location: index.php?id=incorrecto");
}

?>