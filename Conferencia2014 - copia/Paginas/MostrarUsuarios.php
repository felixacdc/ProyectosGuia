<?php
	
	include("Conexion.php");
	

	$consulta ="SELECT idUsuarios,PrimerApellido,PrimerNombre, SegundoApellido, SegundoNombre, Plan FROM usuarios ";
	
	
	$ejecutar_consulta = $conexion->query($consulta);
	
	//Contamos el numero de coincidencias o de hallazgos respecto a la consulta
	$num_regs = $ejecutar_consulta->num_rows;

	//Generamos el encabezado de la tabla que contendra cada publicaciones
	$desplie='<table class="table table-striped ">

				<tr>
					<td>No</td>
					<td>Nombre</td>
					<td>Apellido</td>
					<td>Plan</td>
				</tr>
		';
	//Si hay mas de una publicacion en la tabla continuamos generando la tabla	
	if($num_regs!=0)
	{
		//Todas las publicaciones las insertamos en un vector llamado registro
		while($registro=$ejecutar_consulta->fetch_assoc())
		{
			
			//Continuamos creando el cuerpo de las publicaciones
			$desplie .= '								
					
					<tr>
					   <td >'.$registro["idUsuarios"].'</td>
					   <td >'.$registro["PrimerNombre"] . ' ' . $registro["SegundoNombre"].'</td>
					   <td >'.$registro["PrimerApellido"] . ' ' . $registro["PrimerApellido"].'</td>
					   <td >'.$registro["Plan"].'</td>
					   
					</tr>
									
					
				';
		}

		$desplie.='
				</table>';
		echo $desplie;			
	}
	else{ 

	}
?>

