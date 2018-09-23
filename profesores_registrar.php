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
                    		<li><a href="#">Modificar</a></li>
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
				<h2>Operaciones para <span>Profesores</span></h2>
			</div>

			<form class="formulario" action="profesor_guardar.php" method="POST">
				<label class="titulo-label">Nombres del Profesor:</label>
				<input class="input" type="text" name="nombres" placeholder="Nombres" required autofocus>
				<br>

				<label class="titulo-label">Apellido Paterno:</label>
				<input class="input" type="text" name="apellido-paterno" placeholder="Apellido Paterno" required>
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
				<br>

				<div class="botones">
					<input class="boton-registrar" type="submit" value="Registrar">
					<input class="boton-limpiar" type="reset" value="Limpiar">
				</div>
			</form>	
		</main>

		<aside>
			
		</aside>

		<footer>
			
		</footer>

	</body>
</html>