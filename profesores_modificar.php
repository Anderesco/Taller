<!DOCTYPE html>
<html>
	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<title>CETPRO Margarita Gonzales de Dankers</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/estilos.css">
	</head>

	<body>

		<header>
			<div class="contenedor">
				<div class="logo">
				    <img src="img/logo.png" width="380">
				</div>
			</div>
		</header>

		<div class="navegacion">
			<nav>
				<ul class="clearfix">
					<li><a href="index.php">Inicio</a></li>

					<li><a href="#">Alumnos</a>
						<ul>
                    		<li><a href="alumnos.php">Registrar</a></li>
                    		<li><a href="#">Eliminar</a></li>
                    		<li><a href="#">Modificar</a></li>
                    		<li><a href="#">Reportes</a></li>
                  		</ul>
					</li>

					<li><a class="enlace-activo" href="#">Profesores</a>
						<ul>
                    		<li><a href="profesores_registrar.php">Registrar</a></li>
                    		<li><a href="#">Eliminar</a></li>
                    		<li><a href="profesores_buscar.php">Modificar</a></li>
                    		<li><a href="#">Reportes</a></li>
                  		</ul>
					</li>

					<li><a href="#">Modulos</a>
						<ul>
                    		<li><a href="modulos.php">Registrar</a></li>
                    		<li><a href="#">Eliminar</a></li>
                    		<li><a href="#">Modificar</a></li>
                    		<li><a href="#">Reportes</a></li>
                  		</ul>
					</li>

					<li><a href="#">Opciones</a>
						<ul>
                    		<li><a href="opciones.php">Registrar</a></li>
                    		<li><a href="#">Eliminar</a></li>
                    		<li><a href="#">Modificar</a></li>
                    		<li><a href="#">Reportes</a></li>
                  		</ul>
					</li>

					<li><a href="#">Familias</a>
						<ul>
                    		<li><a href="#">Registrar</a></li>
                    		<li><a href="#">Eliminar</a></li>
                    		<li><a href="#">Modificar</a></li>
                    		<li><a href="#">Reportes</a></li>
                  		</ul>
					</li>

					<li><a href="#">Matricula</a></li>
				</ul>
			</nav>
		</div>


		<main class="contenido-principal">

			<div class="titulo-formulario">
				<h2>Modificar datos de un <span>Profesor</span></h2>
			</div>

			<?php

					include("conexion.php");
					$id = $_POST['id'];
					$query = "SELECT * from profesores WHERE id = '$id'";
					$resultado = $conexion->query($query) or die($conexion->error);
					$row = $resultado->fetch_assoc();

			?>

			<form class="formulario" action="profesor_modificar_metodo.php?id=<?php echo $row['id']; ?>" method="POST">



				<label class="titulo-label">Nombres del Profesor:</label>
				<input class="input" type="text" name="nombres" value="<?php echo $row['nombres'] ?>" required autofocus>
				<br>

				<label class="titulo-label">Apellido Paterno:</label>
				<input class="input" type="text" name="apellido-paterno" value="<?php echo $row['apellido_paterno'] ?>" required>
				<br>

				<label class="titulo-label">Apellido Materno:</label>
				<input class="input" type="text" name="apellido-materno" value="<?php echo $row['apellido_materno'] ?>" required>
				<br>
				
				<?php

					if($row['sexo'] == "masculino"){
				?>

				<label class="titulo-label">Sexo:</label>
				<select class="input" name="sexo">
					<option value="masculino" selected=" ">Masculino</option>
					<option value="femenino">Femenino</option>
				</select>

				<?php

				}
				else{
				?>

				<label class="titulo-label">Sexo:</label>
				<select class="input" name="sexo">
					<option value="masculino">Masculino</option>
					<option value="femenino" selected="">Femenino</option>
				</select>

				<?php
				}
				?>
				<br>

				<label class="titulo-label">Fecha de nacimiento:</label>
				<input class="input" type="date" name="fecha-nacimiento" value="<?php echo $row['fecha_nacimiento'] ?>" required>
				<br>

				<div class="botones">
					<input class="boton-modificar" type="submit" value="Modificar">
				</div>
			</form>	
		</main>

		<aside>
			
		</aside>

		<footer>
			
		</footer>

	</body>
</html>