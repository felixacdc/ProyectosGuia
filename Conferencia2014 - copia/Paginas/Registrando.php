<?php
	$nombre1=$_POST["nombre1"];
	$nombre2=$_POST["nombre2"];
	$apellido1=$_POST["apellido1"];
	$apellido2=$_POST["apellido2"];
	$telefono=$_POST["telefono"];
	$correo=$_POST["correo"];
	$plan=$_POST["cboplan"];
	$codigo=$_POST["codigo"];

	include("Conexion.php");

	$consulta="INSERT INTO usuarios(primernombre,segundonombre,primerapellido,segundoapellido,telefono,email,plan,codigoverificacion) 
	VALUES ('$nombre1','$nombre2','$apellido1','$apellido2','$telefono','$correo','$plan','$codigo')";
	$ejecutar_consulta=$conexion->query(utf8_encode($consulta));

	if($ejecutar_consulta)
	{	
		$consulta2="Update codigos set estado=1 where codigo='$codigo'";
		$ejecutar_consulta2=$conexion->query(utf8_encode($consulta2));
		if($ejecutar_consulta2)
			header("Location: ../index.php");		
	}
	
?>