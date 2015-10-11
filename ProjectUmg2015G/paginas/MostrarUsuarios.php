<?php
	
	header('Content-Type: text/html; charset=UTF-8'); 
	
	// Incluir conexion
	include("connection.php");

	// query para optener los registros
	$consulta ="SELECT namerecord,lastname,categoria FROM record ORDER BY idrecord desc;";
	


	// ejecucion de la consulata
	$ejecutar_consulta = $conexion->query($consulta);
	$desplie="";
	//Contamos el numero de coincidencias o de hallazgos respecto a la consulta
	$num_regs = $ejecutar_consulta->num_rows;
	// verificacion de filas optenidas
	if($num_regs!=0)
	{
		while($registro=$ejecutar_consulta->fetch_assoc())
		{
			$desplie .= '								
					
					<tr>
					   <td >'.utf8_encode($registro["namerecord"]).'</td>
					   <td >'.utf8_encode($registro["lastname"]).'</td>
					   <td >'.utf8_encode($registro["categoria"]).'</td>
					</tr>
				';
		}

		echo $desplie;		
	}

?>