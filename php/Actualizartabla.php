<?php
								
$conexion=mysqli_connect("localhost", "root", "Inside09", "sistemas");

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