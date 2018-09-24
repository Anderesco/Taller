<?php
  $mysqli = new mysqli('localhost','root', '', 'cetprojg');
?>

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
				<h2>Buscar nombre del <span>Profesor </span> a modificar</h2>
			</div>

			<form class="formulario" action="profesores_modificar.php" method="POST">
				<label class="titulo-label">Nombres del Profesor:</label>
				<select class="input" name="id" required autofocus>
					<?php 
						$query = $mysqli -> query ("SELECT * FROM PROFESORES ORDER BY APELLIDO_PATERNO");
						
						while($valores = mysqli_fetch_array($query)){
							echo '<option value="'.$valores[id].'">'.$valores[apellido_paterno].' '.$valores[apellido_materno].', '.$valores[nombres].'</option>';
						}
					?>
				</select>
				<br>

				<!-- <label class="titulo-label">Apellido Paterno:</label>
				<input class="input" type="text" name="apellido-paterno" value="'.$valores[apellido-paterno].'" required>
				<br>

				<label class="titulo-label">Apellido Materno:</label>
				<input class="input" type="text" name="apellido-materno" placeholder="Apellido Materno" required>
				<br>
				

				<label class="titulo-label">Sexo:</label>
				<select class="input" name="sexo">
					<option value="masculino" selected="">Masculino</option>
					<option value="femenino">Femenino</option>
				</select>
				<br>


				<label class="titulo-label">Fecha de nacimiento:</label>
				<input class="input" type="date" name="fecha-nacimiento" placeholder="DD/MM/AAAA" required>
				<br> -->

				<div class="botones">
					<input class="boton-buscar" type="submit" value="Buscar">
				</div>
			</form>	
		</main>

		<aside>
			
		</aside>

		<footer>
			
		</footer>

	</body>
</html>