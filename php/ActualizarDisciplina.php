<?php

$conexion=mysqli_connect("localhost", "root", "Inside09", "sistemas");


if(isset($_POST["id"]) && isset($_POST["Disciplina"]) && isset($_POST["Cupo"]) && isset($_POST["Costo"]) && isset($_POST["Horario"])){

	$id = mysqli_real_escape_string($conexion, $_POST["id"]);

	$Disciplina = mysqli_real_escape_string($conexion, $_POST["Disciplina"]);
	$Cupo =mysqli_real_escape_string($conexion, $_POST["Cupo"]);
	$Costo =mysqli_real_escape_string($conexion, $_POST["Costo"]);
	$Horario =mysqli_real_escape_string($conexion, $_POST["Horario"]);

	$sql="UPDATE clase SET Nombre= '$Disciplina', Cupo='$Cupo', Horario='$Horario', 
	      Mensualidad='$Costo' WHERE Id_Clase ='".$id."' ";

			$resultado = mysqli_query($conexion, $sql);
			
			$numero = mysqli_num_rows($resultado);

			if($numero > 0){
				$data = mysqli_fetch_array($resultado);
				$_SESSION["Usuario"] = $data["Usuario"];
				echo $data["Usuario"];

}

}
?>