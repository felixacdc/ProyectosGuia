<?php
//conexion a la base de datos
	function conectarse()
	{
		$servidor="localhost";
		$usuario="root";
		$password="";
		$bd="proyectoweb";
		$conectar= new mysqli($servidor,$usuario,$password,$bd);

		return $conectar;
	}

	$conexion=conectarse();

?>