<?php

	include("conexion.php");
	$id = $_REQUEST['id'];
	echo $id;
	$nombres = $_POST['nombres'];
	$apellido_paterno = $_POST['apellido-paterno'];
	$apellido_materno = $_POST['apellido-materno'];
	$sexo = $_POST['sexo'];
	$fecha_nacimiento = $_POST['fecha-nacimiento'];

	$query = "UPDATE profesores set nombres='$nombres', apellido_paterno='$apellido_paterno', apellido_materno='$apellido_materno', sexo='$sexo', fecha_nacimiento='fecha_nacimiento' where id='$id'";

	$conexion->query($query);

?>