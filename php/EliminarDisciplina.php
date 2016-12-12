<?php
$conexion=mysqli_connect("localhost", "root", "alan95", "sportcenterx");


if(isset($_POST["id"])){

	$id = mysqli_real_escape_string($conexion, $_POST["id"]);
//proceso solo para verificar para el switch
		
	$sql="DELETE FROM clase WHERE Id_Clase = '".$id."'";

			$resultado = mysqli_query($conexion, $sql);
			$numero = mysqli_num_rows($resultado);

			if($numero > 0){
				$data2 = mysqli_fetch_array($resultado);
				$_SESSION["Usuario"] = $data2["Usuario"];
				echo $data2["Usuario"];

			}
}				

?>