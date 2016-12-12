<?php
session_start();
if(!isset($_SESSION["Usuario"])){
	header("location:http://localhost/SportCenter1/login.php");
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<title>Menu Principal SporteCenter</title>

</head>

<body class="cuerpobody">

	<header class="cabeza">
	
	<nav class="nav1">
		<ul class="menu">

			<li>
				<a href="http://localhost/SportCenter1/Menu1.php" class=""><img class="imagenes" src="imagenes1/menu.png">Inicio</a>
			</li>

		
			<li><a href="#"><img class="imagenes" src="imagenes1/usuarios.png">Clientes <span class="caret icon-arrow-down6"></span></a>
				<ul>
					<li><a href="http://localhost/SportCenter1/formulario-1.php">Datos-Clientes <span class="icon-dot"></span></a></li>
					
				</ul>

			</li>
		

			<li><a href="#"><img class="imagenes" src="imagenes1/disciplinas.png">Disciplinas <span class="caret icon-arrow-down6"></span></a>
				<ul>
					<li><a href="http://localhost/SportCenter1/formulario-3.php">Datos-Disciplina</a></li>
				</ul>

			</li>

			<li><a href="#"><img class="imagenes" src="imagenes1/pagos.png">Pagos <span class="caret icon-arrow-down6"></span></a>
				<ul>
					<li><a href="http://localhost/SportCenter1/formulario-4.php">Datos-Pagos</a></li>
				</ul>

			</li>

			<li><a href="#"><img class="imagenes" src="imagenes1/medidas-corporales.png">Medidas Corporales <span class="caret icon-arrow-down6"></span></a>
				<ul>
					<li><a href="http://localhost/SportCenter1/formulario-2.php">Datos-Corporales</a></li>
					<li><a href="#">Reportes-Clientes</a></li>
				</ul>
			</li>

			<li>
				<?php echo '<a href="php/logout.php" class=""><img class="imagenes" src="imagenes1/cerrar.png">Cerrar Sesión</a>'; ?>
			</li>

			<?php echo '<h4 style="color: #fff;" align="center">'.$_SESSION["Usuario"].'</h4>';?>

		</ul>
	</nav>
	<style type="text/css"> 

	</style>

	</header>


</body>
</html>

