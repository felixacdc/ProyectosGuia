<?php
	header('Content-Type: text/html; charset=UTF-8'); 
	
	// Incluir conexion
	include("connection.php");

	// query para optener los registros
	$consulta ="SELECT namerecord,lastname,career,plan FROM record;";
	


	// ejecucion de la consulata
	$ejecutar_consulta = $conexion->query($consulta);

	//Contamos el numero de coincidencias o de hallazgos respecto a la consulta
	$num_regs = $ejecutar_consulta->num_rows;
	// verificacion de filas optenidas
	if($num_regs!=0)
	{	
		// creacion de arreglo
		$arr=array();

		
			//Todas las publicaciones las insertamos en un vector llamado registro
			while($registro=$ejecutar_consulta->fetch_assoc())
			{
				// llenado de datos al arreglo
				$arr[]=array('nombre'=>$registro["namerecord"],
							'apellido'=>$registro["lastname"],
							'carrera'=>$registro["career"],
							'plan'=>$registro["plan"]
							);
			}

		header('Content-type: application/json');
		echo json_encode($arr, JSON_FORCE_OBJECT);
		
	}
?>