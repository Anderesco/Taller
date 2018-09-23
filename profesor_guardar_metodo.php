<?php  

	include("conexion.php");
	$nombres = $_POST['nombres'];
	$apellido_paterno = $_POST['apellido-paterno'];
	$apellido_materno = $_POST['apellido-materno'];
	$sexo = $_POST['sexo'];
	$fecha_nacimiento = $_POST['fecha-nacimiento'];

	$query = "INSERT INTO profesores (nombres,apellido_paterno,apellido_materno,sexo,fecha_nacimiento) values ('$nombres','$apellido_paterno','$apellido_materno','$sexo','$fecha_nacimiento')";

	$conexion->query($query);

?>