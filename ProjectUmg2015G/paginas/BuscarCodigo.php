<?php

	$codigo=$_POST["codigo"];

	include("connection.php");

	$sql="SELECT * FROM codes WHERE claves='$codigo';";	
	
	$ejecutar_consulta=$conexion->query($sql);
	$num_registros=$ejecutar_consulta->num_rows;
	$registro=$ejecutar_consulta->fetch_assoc();

	if($num_registros==0)
	{
		$resul="Clave Ingresada No Es Valida";
		echo $resul;
	}else
	{
		if($registro['Estado']==1)
		{
			$resul="Clave Ya Fue Utilizada";
			echo $resul;
		}
	}
	

?>