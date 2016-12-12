<?php 
session_start();
if(isset($_SESSION["Usuario"])){

	header("location:Menu1.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/Logo-index.css">
	
<!--
	<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
-->
	<script src="js/jquery-3.1.1.js" charset="UTF-8"></script>
	<script src="js/bootstrap.min.js" charset="UTF-8"></script>

	<title>Sistema de SportCenter</title>
	

</head>

<body class="cuerpo1">
	<div class="col-md-6 center-block quitar-float text-center espacio-arriba">
		<img class="imagenlogo" src="imagenes1/loginsportcenter.jpg">
	
		<form class="forma" method="POST">

	       <fieldset>
	        <legend class="leyenda">Validación De Usuario</legend>
				<h1 class="pacifico">Login SportCenter</h1>
				
					<input class="input1" type="text" placeholder="&#128129; Ingresa tu Usuario" name="Usuario" id="Usuario" required=""></input>

				
					<input class="input1" type="password" placeholder="&#128272; Ingresa tu Password" name="Password" id="Password" required=""></input>

				
					<input type="button" name="Iniciar" id="Iniciar" class="btn btn-success btn-lg btn-block" value="Iniciar Sesión"></input>

	        </fieldset>
	        <span id="result"></span>
		</form >
	</div>    
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#Iniciar').click(function(){
			var Usuario = $('#Usuario').val();
			var Password = $('#Password').val();

			var url = "php/ValidarUsuario.php";
			var total = Usuario.length * Password.length;

			if(total>0){
				$.ajax({
					url:url,
					method:"POST",
					data:{Usuario:Usuario, Password:Password},
					cache:false,
					beforeSend:function(){
						$('#Iniciar').val("Comprobando Informacion...");

						$("#result").html("<div class='alert alert-dismissible alert-success'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Comprobando Informacion...</strong>Procesando su Solicitud</div>").show(300).delay(3000).hide(300);

					},
					success:function(data1){
						if(data1){
							 document.location.href = 'http://localhost/SportCenter1/Menu1.php';
						}
						else{
							$("#result").html("<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡ERROR!</strong>LAS CREDENCIALES SON INVALIDAS</div>").show(300).delay(3000).hide(300);
							document.location.href = 'http://localhost/SportCenter1/login.php';
						}
					}
				});
			}else{

				$("#result").html("<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡ERROR!</strong> Los campos estan vasios</div>").show(300).delay(3000).hide(300);
				
				document.location.href = 'http://localhost/SportCenter1/login.php';
			}

		});
	});	
</script>
