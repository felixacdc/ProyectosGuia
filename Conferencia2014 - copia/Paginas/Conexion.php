<?php
	function conectarse()
	{
		$servidor="localhost";
		$usuario="literatu";
		$password="Reu.2014m";
		$bd="literatu_conferencia";
		$conectar= new mysqli($servidor,$usuario,$password,$bd);

		return $conectar;
	}

	$conexion=conectarse();

?>