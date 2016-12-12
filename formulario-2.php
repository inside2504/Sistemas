<?php 
include("Menu1.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">



	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/formulario-2.css">

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

	<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina|Ramabhadra" rel="stylesheet">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<script>
		$(function(){
			$("#fecha4").datepicker({
				dateFormat: "dd-mm-yy",
				monthNamesShort: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septimbre", "Octubre", "Noviembre", "Deciembre" ],
				dayNamesMin: [ 'D', 'L', 'M', 'M', 'J', 'V', 'S'],
				changeMonth:true,
				changeYear:true,
				showButtonPanel:true,
				 buttonText: "Mensualidad",
				 currentText: "Hoy",
				 closeText: "Cerrar",

			});
		});
		
	</script>

	<title>Formulario de Datos Corporales</title>


	<body>
		
		<!-- PARTE INICIAL DEL SEGUNDO CONTENEDOR -->
	<form action="" class="form2" >
	<div class="col-md-5 ">
		
			<fieldset>
			<legend class="leyenda">Datos-Corporales En Determinadas Fechas:</legend>	
				<div class="row">

						<div class="col-md-5">
						    <div class="form-group has-success has-feedback">
    							<label class="col-sm-4 control-label " id="labelclave">Clave:</label>
	    						<div class="col-sm-6">
	     							<input type="text" class="form-control input-sm" id="clave" placeholder="Clave" 
	     							disabled="">
	    						</div>
						    </div>
						</div>
						<div class="col-md-6">
						    <div class="form-group">
    							<label class="col-sm-6 control-label " id="labelclave">Clave Cliente:</label> 
	    						<div class="col-sm-4">
	     							<input type="text" class="form-control input-sm" id="clave" placeholder="Clave" 
	     							disabled="">	     							
	    						</div>

		    					<div class="col-md-1">
							    	<button class="btn btn-primary">...</button>
							    </div>
						    </div>
						</div>


						<div class="col-md-12 form-group-sm">
						    <div class="form-group">
    							<label class="col-sm-2 control-label" id="labelclave">Fecha:</label>
	    						<div class="col-sm-4">
	     							<input type="text" class="form-control" id="fecha4" placeholder="Fecha Proxima de medición" required="">
	    						</div>
						    </div>
						</div>


				<div class="col-md-8 form-group-sm">
					<div class="form-group">
						<label class="col-sm-3 control-label id=" id="labelclave">Peso:</label>			
						<div class="col-sm-6">
							<input type="text" class="form-control" id="cupo1" placeholder="Peso Nuevo" required=""></input>
						</div>	
					</div>
				</div>	

				<div class="col-md-6 form-group-sm">
					<div class="form-group">
						<label class="col-sm-4 control-label id=" id="labelclave">Medida:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="cupo1" placeholder="Medida-Pierna" required=""></input>
						</div>	
					</div>
				</div>

				<div class="col-md-6 form-group-sm">
					<div class="form-group">
						<label class="col-sm-4 control-label id=" id="labelclave">Medida:</label>			
						<div class="col-sm-8">
							<input type="text" class="form-control" id="cupo1" placeholder="Medida-Cintura" required=""></input>
						</div>	
					</div>
				</div>

				<div class="col-md-12 form-group-sm">
					<div class="form-group">
						<label class="col-sm-3 control-label id=" id="labelclave">Observaciones:</label>			
						<div class="col-sm-8">
							<textarea class="form-control" rows="3" name="observaciones" id="area" placeholder="Escriba las Observaciones del cliente" required=""></textarea>
						</div>	
					</div>
				</div>
				</div>
			</fieldset>


			<!-- parte inicial del grupo de los botones -->			
				<legend></legend>
				<div class="container col-md-12">

					<button type="submit" class="btn btn-primary">Guardar</button>		
						
					<button type="submit" class="btn btn-success">Actualizar</button>
							
			

				</div>	
<!-- parte final del grupo de los botones-->
		
	</div>
<!-- PARTE FINAL DEL SEGUNO CONTENEDORS -->
<legend></legend>
	<div class="col-md-12">


		<div class="col-xs-5">
				<input type="text" class="form-control input-sm" id="" placeholder="Buscar...">
		</div>
<!-- PARTE FINAL DEL LABEL BUSCAR-->

<!-- PARTE DE LA TABLA -->	
<section class="container col-md-12">
	
	<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary">
			
			<div class="panel-heading">
				<h3 class="panel-title h3cab">Tabla de Todos los Clientes</h3>
			</div>

			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-hover">
						<tr>
							<th>Clave-Medida</th>
							<th>Fecha-Proxima</th>
							<th>Peso</th>
							<th>Medida-Pierna</th>
							<th>Medida-Cintura</th>
							<th>Observaciones</th>
							<th>Clave-Cliente</th>
						</tr>
					</table>
			</div>
			</div>

		</div>

	</div>
	</div>

</section>
<!-- PARTE FINAL DE LA TABLA -->

	</div>
</form>
</body>
</html>