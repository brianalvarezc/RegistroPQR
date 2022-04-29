<?php

	// Se realiza la conexion con la Base de datos tomando mysqli como una clase
	$host = 'localhost';

	// Local
	$user = 'root';
	$pass = '';

	$basedatos = 'registro_pqr';

	$conexion = new mysqli($host, $user, $pass, $basedatos);
	if($conexion -> connect_errno){
		die("Fallo la conexion: (" . $conexion -> connect_errno . ")" . $conexion -> mysqli_connect_error);
	}
?>