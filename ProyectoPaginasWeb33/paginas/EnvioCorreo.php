<?php
$destino=$_POST["datos"];

	include("Conexion.php");
	$consulta="SELECT * FROM regusuarios WHERE email='$destino'";
	$ejecutar_consulta=$conexion->query($consulta);

	$registro=$ejecutar_consulta->fetch_assoc();

	$usuario=$registro["usuario"];
	$contra=$registro["password"];

	$titulo = 'Recuperacion De Datos';
	$mensaje = 'Tus Datos Son: 
				Tu nombre de usuario es: '.$usuario.'
				Tu Password es: '.$contra.'';


	;


	$cabeceras = 'From: literatu@literaturamania.reu.gt' . "\r\n" .
	    'Reply-To: literatu@literaturamania.reu.gt' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	mail($destino, $titulo, $mensaje, $cabeceras);

	?>





