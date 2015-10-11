<?php
//Busca si el usuario existe en registro Registro.php
$Usuario=$_POST['datos'];

include("Conexion.php");
	$consulta="SELECT * FROM regusuarios WHERE usuario='$Usuario'";

	$ejecutar_consulta=$conexion->query($consulta);

	$num_regs=$ejecutar_consulta->num_rows;

	session_start();

	if($num_regs!=0)
	{	if($_SESSION['usuario']!=$Usuario){
		$resul="El Usuario Ya Existe";
		echo $resul;}
	}else{
		$consulta2="SELECT * FROM admibiblio WHERE usuario_ad='$Usuario'";

		$ejecutar_consulta2=$conexion->query($consulta2);

		$num_regs2=$ejecutar_consulta2->num_rows;

		if($num_regs2!=0)
		{
		$resul="El Usuario Ya Existe";
		echo $resul;
		}
	}


	$conexion->close();
?>