<?php
	
	include("../../Paginas/Conexion.php");
	$LibroAEli=$_POST["LibroEli"];


	$consulta0="DELETE FROM publicar WHERE Id_Publi='$LibroAEli'";
	$ejecutar_consulta0=$conexion->query($consulta0);
	



?>