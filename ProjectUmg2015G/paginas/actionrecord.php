<?php
	header('Content-Type: text/html; charset=UTF-8');
	$nombres=utf8_decode($_POST["Nombres"]);
	$apellidos=utf8_decode($_POST["Apellidos"]);
	$telefono=utf8_decode($_POST["Telefono"]);
	$correo=utf8_decode($_POST["Email"]); 
	$clave=utf8_decode($_POST["codigo"]);
	$plan=utf8_decode($_POST["cboplan"]);
	$carrera=utf8_decode($_POST["cbocarrera"]);
	$semestre=utf8_decode($_POST["cbosemestre"]);
	$sexo=utf8_decode($_POST["cbosexo"]);

	$empresa=utf8_decode($_POST["empresa"]);
	$nombre2=utf8_decode($_POST["NombresAco"]);
	$apellido2=utf8_decode($_POST["Apellidos2"]);
	$categoria=utf8_decode($_POST["option"]);


	
	// Incluir conexion
	include("connection.php");

	if(!empty($clave))
	{
		$consulta="INSERT INTO record(namerecord,lastname,phone,email,clave,plan,career,semester,sexo,organisacion,namea,lasta,categoria) 
		VALUES ('$nombres','$apellidos','$telefono','$correo','$clave','$plan','$carrera','$semestre','$sexo','$empresa','$nombre2','$apellido2','$categoria')";
		$ejecutar_consulta=$conexion->query($consulta);

		if($ejecutar_consulta)
		{	
			$sql="UPDATE codes set estado=1 where claves='$clave'";
			$ejecutar_consulta2=$conexion->query($sql);
			if($ejecutar_consulta2)
				header("Location: ../index.php");	
			else
				header("Location: Registro.php");
		}
	}
		// $var = 0;

		// // Se evalúa a true ya que $var está vacia
		// if (empty($var)) {
		//     echo '$var es o bien 0, vacía, o no se encuentra definida en absoluto';
		// }

		// // Se evalúa como true ya que $var está definida
		// if (isset($var)) {
		//     echo '$var está definida a pesar que está vacía';
		// 
	
?>



