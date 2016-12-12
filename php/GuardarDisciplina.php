<?php

$conexion=mysqli_connect("localhost", "root", "alan95", "sportcenterx");


if(isset($_POST["Disciplina"]) && isset($_POST["Costo"]) && isset($_POST["Costo"]) && isset($_POST["Horario"])){

	$Disciplina = mysqli_real_escape_string($conexion, $_POST["Disciplina"]);
	$Cupo =mysqli_real_escape_string($conexion, $_POST["Cupo"]);
	$Costo =mysqli_real_escape_string($conexion, $_POST["Costo"]);
	$Horario =mysqli_real_escape_string($conexion, $_POST["Horario"]);

//proceso solo para verificar para el switch
		
	$sql="INSERT INTO clase (Nombre, Cupo, Horario, Mensualidad) VALUES ('".$Disciplina."', '".$Cupo."', '".$Horario."', '".$Costo."')";

			$resultado = mysqli_query($conexion, $sql);
			$numero = mysqli_num_rows($resultado);


echo '<table class="table table-hover">
						<tr>
							<th width="90">Nombre</th>
							<th width="10">Cupo</th>
							<th width="500">Horario</th>
							<th width="50">Costo</th>
							<th width="500">Nombre</th>
							<th width="10">...</th>
						</tr>';

						$sql2="SELECT * FROM clase ORDER BY Id_Clase ASC";
						$resultado2 = mysqli_query($conexion, $sql2);
							$numero = mysqli_num_rows($resultado2);
								
								if($numero > 0){

								while ($registro2 = mysqli_fetch_array($resultado2)) {
									echo '<tr>
											<td>'.$registro2['Nombre'].'</td>
											<td>'.$registro2['Cupo'].'</td>
											<td>'.$registro2['Horario'].'</td>
											<td>$'.$registro2['Mensualidad'].'</td>
										  </tr>
									';
								}
			echo '</table>';
		}

			if($numero > 0){
				$data = mysqli_fetch_array($resultado);
				$_SESSION["Usuario"] = $data["Usuario"];
				echo $data["Usuario"];
			}
}
?>
