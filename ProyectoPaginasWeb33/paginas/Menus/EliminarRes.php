<?php
//elimina la reservacion de un usuario 
	$id_res=$_POST["datos"];
	$esta=$_POST["datos2"];
	$idlibro=$_POST["datos3"];
	include('../conexion.php');

	$revi="SELECT * FROM libros WHERE id_libro='$idlibro'";
	$consulta_ejecutada=$conexion->query($revi);

	$registro12=$consulta_ejecutada->fetch_assoc();

	$existen=$registro12["Existencia"];

	$existen=$existen+1;

	$consulta1="UPDATE libros SET Existencia='$existen' WHERE id_libro='$idlibro'";

	$ejecutar_consulta1=$conexion->query(utf8_encode($consulta1));

	$consulta="DELETE FROM reservaciones WHERE id_reser='$esta'";


	
	$ejecutar_consulta=$conexion->query($consulta);

	echo "jj";

?>
