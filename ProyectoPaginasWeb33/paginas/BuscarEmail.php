<?php
//Busca si el Email existe en registro Registro.php
$Email=$_POST['datos'];

include("Conexion.php");
	$consulta="SELECT * FROM regusuarios WHERE email='$Email'";

	$ejecutar_consulta=$conexion->query($consulta);

	$num_regs=$ejecutar_consulta->num_rows;

	if($num_regs!=0)
	{	$resul="El Email Ya Existe";
		echo $resul;
	}


	$conexion->close();
?>