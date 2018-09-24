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
				    <img src="img/logo.png" width="110">
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

					<li><a href="#">Profesores</a>
						<ul>
                    		<li><a href="profesores_registrar.php">Registrar</a></li>
                    		<li><a href="#">Eliminar</a></li>
                    		<li><a href="profesores_buscar.php">Modificar</a></li>
                    		<li><a href="#">Reportes</a></li>
                  		</ul>
					</li>

					<li><a class="enlace-activo" href="#">Modulos</a>
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
				<h2>Operaciones para <span>Módulos</span></h2>
			</div>

			<form class="formulario" action="">
				<label class="titulo-label">Nombre del módulo:</label>
				<input class="input" type="text" name="nombre" placeholder="Nombre del Módulo" required autofocus>
				<br>
				

				<label class="titulo-label">Opción Ocupcional:</label>
				<select class="input" name="opcion-ocupacional">
					<option value="matutino" selected="">Opción Ocupacional 1</option>
					<option value="nocturno">Opción Ocupacional 2</option>
				</select>
				<br>


				<label class="titulo-label">Fecha de inicio:</label>
				<input class="input" type="date" name="fecha-inicio" placeholder="DD/MM/AAAA" required>
				<br>

				<label class="titulo-label">Fecha de fin:</label>
				<input class="input" type="date" name="fecha-fin" placeholder="DD/MM/AAAA" required>
				<br>

				<label class="titulo-label">Duracion en horas:</label>
				<input class="input" type="number" name="duracion" placeholder="Ej. 300" required>
				<br>

				<div class="botones">
					<input class="boton-registrar" type="submit" value="Registrar">
					<input class="boton-modificar" type="submit" value="Modificar">
					<input class="boton-eliminar" type="submit" value="Eliminar">
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