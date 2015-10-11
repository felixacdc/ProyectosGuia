<?php
//cambia el estado de la reservacion
	$id_res=$_POST["datos"];
	$esta=$_POST["datos2"];
	include('../conexion.php');

	if($esta=="Reservado")
	$consulta="UPDATE reservaciones SET Estado='Entregado' WHERE id_reser='$id_res'";
	else
	$consulta="UPDATE reservaciones SET Estado='Reservado' WHERE id_reser='$id_res'";
	
	$ejecutar_consulta=$conexion->query($consulta);

	echo "jj";

?>