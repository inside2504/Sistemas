<?php
session_start();
$conexion=mysqli_connect("localhost", "root", "Inside09", "sistemas");


	if(isset($_POST["Usuario"]) && isset($_POST["Password"])){

	$Usuario = mysqli_real_escape_string($conexion, $_POST["Usuario"]);
	$Password = mysqli_real_escape_string($conexion, $_POST["Password"]);

$sql = "SELECT * FROM entrenador WHERE Usuario = '".$Usuario."' AND Password = '".$Password."'";
	$resultado = mysqli_query($conexion, $sql);
	$numero = mysqli_num_rows($resultado);

		if($numero > 0){
			$data1 = mysqli_fetch_array($resultado);
			$_SESSION["Usuario"] = $data1["Usuario"];
			echo $data["Usuario"];
		}
	}
?>