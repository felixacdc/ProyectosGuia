<?php
	
	include("../Conexion.php");
	$LibroAEli=$_POST["LibroEli"];

	$revi="SELECT * FROM libros WHERE id_libro='$LibroAEli'";
	$consulta_ejecutadab=$conexion->query($revi);

	$registro12=$consulta_ejecutadab->fetch_assoc();

	$fileimg= "Img/".$registro12["direccionimg"]."."."png";
	$doimg= unlink($fileimg);

	$filepdf= "Img/".$registro12["direccionpdf"]."."."pdf";
	$dopdf= unlink($filepdf);

	$Blibro=$registro12["nombrelibro"];
	$Bautor=$registro12["autor"];
	$Bedicion=$registro12["edicion"];

	$BB1="SELECT * FROM reservaciones WHERE nombrelibro='$Blibro' AND autor='$Bautor' AND edicion='$Bedicion'";
	$CC1=$conexion->query($BB1);

	$DD1=$CC1->fetch_assoc();

	$IDrese=$DD1["id_reser"];

	$consulta0="DELETE FROM reservaciones WHERE id_reser='$IDrese'";
	$ejecutar_consulta0=$conexion->query($consulta0);
	
	$consulta="DELETE FROM libros WHERE id_libro='$LibroAEli'";
	$ejecutar_consulta=$conexion->query($consulta);


?>