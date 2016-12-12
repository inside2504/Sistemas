<?php

$conexion=mysqli_connect("localhost", "root", "Inside09", "sistemas");

if(isset($_POST["Nombre"]) && isset($_POST["Edad"]) && isset($_POST["Celular"]) && isset($_POST["Estatura"]) && isset($_POST["Direccion"]) && isset($_POST["Fechaingreso"]) && isset($_POST["Fechamensualidad"]) && isset($_POST["Disciplina"])){

	$Nombre = mysqli_real_escape_string($conexion, $_POST["Nombre"]);
	$Edad =mysqli_real_escape_string($conexion, $_POST["Edad"]);
	$Celular =mysqli_real_escape_string($conexion, $_POST["Celular"]);
	$Estatura =mysqli_real_escape_string($conexion, $_POST["Estatura"]);
	$Direccion =mysqli_real_escape_string($conexion, $_POST["Direccion"]);
	$Fechaingreso =mysqli_real_escape_string($conexion, $_POST["Fechaingreso"]);
	$Fechamensualidad =mysqli_real_escape_string($conexion, $_POST["Fechamensualidad"]);
	$Disciplina =mysqli_real_escape_string($conexion, $_POST["Disciplina"]);


//peticiones a la base de datos.
	$sql="INSERT INTO cliente (Nombre_Completo, Edad, Celular, Estatura, Direccion, Fecha_Ingreso, Fecha_Mensualidad, Disciplina) VALUES ('".$Nombre."', '".$Celular."', '".$Edad."', '".$Estatura."', '".$Direccion."', '".$Fechaingreso."', '".$Fechamensualidad."', '".$Disciplina."')";

			$resultado = mysqli_query($conexion, $sql);
			$numero = mysqli_num_rows($resultado);

			if($numero > 0){
				$data = mysqli_fetch_array($resultado);
				$_SESSION["Usuario"] = $data["Usuario"];
				echo $data["Usuario"];
			}
}


?>
