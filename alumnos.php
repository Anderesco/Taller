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
				    <img src="img/logo.png">
				</div>
			</div>
		</header>

		<div class="navegacion">
			<nav>
				<ul class="clearfix">
					<li><a href="index.php">Inicio</a></li>

					<li><a class="enlace-activo" href="#">Alumnos</a>
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
				<h2>Operaciones para <span>Alumnos</span></h2>
			</div>

			<form class="formulario" action="">
				<label class="titulo-label">Nombre del Alumno:</label>
				<input class="input" type="text" name="nombre" placeholder="Nombres" required autofocus>
				<br>

				<label class="titulo-label">Apellido Paterno:</label>
				<input class="input" type="text" name="apellido-paterno" placeholder="Apellido Paterno" required>
				<br>

				<label class="titulo-label">Apellido Materno:</label>
				<input class="input" type="text" name="apellido-materno" placeholder="Apellido Materno" required>
				<br>
				
				<label class="titulo-label">Fecha de nacimiento:</label>
				<input class="input" type="date" name="fecha-nacimiento" placeholder="DD/MM/AAAA" required>
				<br>

				<label class="titulo-label">Sexo:</label>
				<select class="input" name="sexo">
					<option value="matutino" selected="">Masculino</option>
					<option value="nocturno">Femenino</option>
				</select>
				<br>

				<label class="titulo-label">Estado civil:</label>
				<select class="input" name="estado-civil">
					<option value="soltero" selected="">Soltero</option>
					<option value="casado">Casado</option>
					<option value="viudo">Viudo</option>
					<option value="divorciado">Divorciado</option>
				</select>
				<br>

				<label class="titulo-label">Grado Instrucción:</label>
				<select class="input" name="grado-instruccion">
					<option value="secundaria" selected="">Secundaria Completa</option>
					<option value="tecnico">Técnico</option>
					<option value="superior">Superior</option>
				</select>
				<br>

				<label class="titulo-label">Ocupación:</label>
				<select class="input" name="ocupacion">
					<option value="opcion-1" selected="">Opción 1</option>
					<option value="opcion-2">Opción 2</option>
					<option value="opcion-3">Opción 3</option>
				</select>
				<br>

				<label class="titulo-label">Teléfono móvil:</label>
				<input class="input" type="tel" name="telefono-movil" placeholder="999999999" required>
				<br>

				<label class="titulo-label">Correo electrónico:</label>
				<input class="input" type="email" name="correo-electronico" placeholder="ejemplo@dominio.com" required>
				<br>

				<label class="titulo-label">Dirección:</label>
				<input class="input" type="text" name="direccion" placeholder="Dirección, Calle, Av., Jr." required>
				<br>

				<label class="titulo-label">Distrito:</label>
				<input class="input" type="text" name="distrito" placeholder="Distrito del domicilio" required>
				<br>

				<label class="titulo-label">Provincia:</label>
				<input class="input" type="text" name="provincia" placeholder="Provincia del domicilio" required>
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