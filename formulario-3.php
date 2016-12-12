<?php 
include("Menu1.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">



	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/formulario-2.css">


	<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
	

	<title>Formulario de Disciplinas</title>

<body>
		
<!-- PARTE INICIAL DEL SEGUNDO CONTENEDOR -->
<form id="formulario" action="" class="form2" method="POST" >
<div class="col-md-6">
		
	<fieldset>
			<legend class="leyenda">Datos- Disciplinas:</legend>	
		<div class="row" id="lista1">




						<div class="col-md-12 form-group-sm">
						    <div class="form-group">
    							<label class="col-sm-2 control-label" id="labelclave">Nombre:</label>
	    						<div class="col-sm-8">
									
	     							<select class="form-control" id="Disciplina" name="Disciplina"  required="">
									  <option>Seleccione el Nombre de la Disciplina</option>
									  <option>Spinning</option>
									  <option>Abdominales</option>
									  <option>Circuit</option>
									  <option>Zumba</option>
									</select>

	    						</div>
						    </div>
						</div>


				<div class="col-md-12 form-group-sm">
					<div class="form-group">
						<label class="col-sm-2 control-label id=" id="labelclave">Cupo:</label>			
						<div class="col-sm-8">
							<input id="Cupo" name="Cupo" type="text" class="form-control" placeholder="Total del Cupo de la Disciplina" required="">
						</div>	
					</div>
				</div>	

				<div class="col-md-12 form-group-sm">
					<div class="form-group">
						<label class="col-sm-2 control-label id=" id="labelclave">Costo:</label>
						<div class="col-sm-8">
							<input id="Costo" name="Costo" type="text" class="form-control"  placeholder="Ingrese el Costo de la Disciplina" required="">
						</div>	
					</div>
				</div>

				<div class="col-md-12 form-group-sm">
					<div class="form-group">
						<label class="col-sm-2 control-label id=" id="labelclave">Horario:</label>	
						<div class="col-sm-8">
									
	     							<select class="form-control" id="Horario" name="Horario"  required="">
									  <option>Seleccione Uno de los Horarios</option>
									  <option>Horario: 8:15-9:15 am</option>
									  <option>Horario: 5:00-6:00 pm</option>
									  <option>Horario: 6:00-7:00 pm</option>
									  <option>Horario: 7:00-8:00 pm</option>
									  <option>Horario: 8:00-9:00 pm</option>
									  <option>Horario: 9:00-10:00 pm</option>
									</select>
	    				</div>		
					</div>
				</div>

		</div>
	</fieldset>


<!-- parte inicial del grupo de los botones -->			
	<legend></legend>
				<div >

					<input id="btn-guardar" type="button" class="btn btn-primary" value="Guardar">	
							
					<input id="btn-actualizar" type="button" class="btn btn-success" value="Actualizar">

				 <span id="result"></span>

</div>
</form>		

<!-- PARTE FINAL DEL SEGUNO CONTENEDORS -->

<!-- PARTE DE LA TABLA -->	
<section class="container col-md-12">
<legend></legend>	
<div class="row">
	<div class="col-md-8">
		<div class="panel panel-primary">
			
			<div class="panel-heading">
				<h3 class="panel-title h3cab">Tabla de Todos los Clientes</h3>
			</div>

			<div class="panel-body" id="tabladisciplinas">
				<div class="table-responsive">
					<table class="table table-hover">
						<tr>
							<th width="90">Nombre</th>
							<th width="10">Cupo</th>
							<th width="200">Horario</th>
							<th width="50">Costo</th>
							<th width="10">Opciones</th>
						</tr>
							<?php
								
								$conexion=mysqli_connect("localhost", "root", "alan95", "sportcenterx");

								$sql="SELECT * FROM clase ORDER BY Id_Clase ASC";
								$resultado = mysqli_query($conexion, $sql);
								
								while ($registro2 = mysqli_fetch_array($resultado)) {
									echo '
										<tr>
											<td>'.$registro2['Nombre'].'</td>
											<td>'.$registro2['Cupo'].'</td>
											<td>'.$registro2['Horario'].'</td>
											<td>$'.$registro2['Mensualidad'].'</td>
											<td>
												<button><a href="javascript:eliminarclase('.$registro2['Id_Clase'].');" class="glyphicon glyphicon-remove-circle"></a></button>
												<button id="btneditar"><a href="javascript:editarclase('.$registro2['Id_Clase'].');" class="glyphicon glyphicon-edit"></a></button>
											</td>

										</tr>
									';
								}
							?>
					</table>
			    </div>
			</div>
		</div>
	</div>

</div>
</section>
<!-- PARTE FINAL DE LA TABLA -->
<section id="miTabla">
	
</section>
	

</body>

<script type="text/javascript">
	$(document).ready(function(){
		$('#btn-guardar').click(function(){

			var Disciplina = $('#Disciplina').val();
			var Cupo = $('#Cupo').val();
			var Costo = $('#Costo').val();
			var Horario = $('#Horario').val();
			var url = "php/GuardarDisciplina.php";
			var total = Disciplina.length * Cupo.length * Costo.length * Horario.length;

			alert(total);

			if (total>0) {
				$.ajax({
					url:url,
					method:"POST",
					data:{Disciplina:Disciplina, Cupo:Cupo, Costo:Costo, Horario:Horario},
					cache:false,
					beforeSend:function(){
						console.log("enviando los datos a la base de datos ");

						

					},
					success:function(data){
						console.log("data");	
						
						$("#result").html("<div class='alert alert-dismissible alert-success'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong></strong>LOS DATOS SE ESTAN GUARDANDO ES ESPERE</div>").show(300).delay(4000).hide(300);	
						document.location.href = 'http://localhost/SportCenter1/formulario-3.php';
					},


				});
			}else{
				$("#result").html("<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡ERROR!</strong> Los campos estan vasios</div>").show(300).delay(3000).hide(300);
			}
		});
	});

function eliminarclase(id){
	var url = 'php/EliminarDisciplina.php';
	var pregunta = confirm("¿DESEA ELIMINAR ESTA CLASE?");

	if (pregunta==true) {
	$.ajax({
			url:url,
			method:"POST",
			data:{id:id},
			cache:false,
			beforeSend:function(){
				console.log("enviando los datos a la base de datos ");
			},

			success:function(data2){
				console.log("data2");
				$("#result").html("<div class='alert alert-dismissible alert-success'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong></strong>LOS DATOS SE HAN ELIMINADO CORRECTAMENTE</div>").show(600).delay(3000).hide(300);
				document.location.href = 'http://localhost/SportCenter1/formulario-3.php';	
			},
	});
	return false;
	}else{
		return false;
	}
}


function editarclase(id){
$("body").on("click", "#btneditar ", function(event){
	var pregunta = confirm("¿DESE ACTULIZAR LOS DATOS ?");
	if (pregunta==true) {
	
			idsess = $(this).attr("href");
			Disciplina = $(this).parent().parent().children("td:eq(0)").text();
			Cupo = $(this).parent().parent().children("td:eq(1)").text();
			Horario = $(this).parent().parent().children("td:eq(2)").text();
			Costo = $(this).parent().parent().children("td:eq(3)").text();

			alert(Disciplina);
			alert(Cupo);
			alert(Horario);
			alert(Costo);

			$('#Disciplina').val(Disciplina);
			$('#Cupo').val(Cupo);
			$('#Costo').val(Costo);
			$('#Horario').val(Horario);
}else{
		return false;
	}
});
$('#btn-actualizar').click(function(){	
	var url = 'php/ActualizarDisciplina.php';

	var Disciplina = $('#Disciplina').val();
	var Cupo = $('#Cupo').val();
	var Costo = $('#Costo').val();
	var Horario = $('#Horario').val();
	alert(Disciplina);
	alert(Cupo);
	alert(Costo);
	alert(Horario);
	$.ajax({

		url:url,
		method:"POST",
		data:{id:id, Disciplina:Disciplina, Cupo:Cupo, Costo:Costo, Horario:Horario}, 
		cache:false,
			beforeSend:function(){
				console.log("enviando los datos a la base de datos ");
			},
			success:function(data){
				console.log("data");
				
					$("#result").html("<div class='alert alert-dismissible alert-success'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong></strong>LOS DATOS SE ESTAN ACTUALIZANDO</div>").show(300).delay(4000).hide(300);
					document.location.href = 'http://localhost/SportCenter1/formulario-3.php';
			},

	});
	
});
}
</script>
</html>