<?php
//Registrar Usuario Nuevo los datos se mandan de Registro.php
	$usuar=$_POST["Usuario"];
	$passw=$_POST["Contraseña"];
	$nom=$_POST["Nombre"];
	$ape=$_POST["Apellido"];
	$tel=$_POST["telefono"];
	$dire=$_POST["Direccion"];
	$sex=$_POST["sexo"];
	$naci=$_POST["nacimiento"];
	$ema=$_POST["email"];

	

	include("conexion.php");
	$extension=".png";
	$destino="ImagenesAvatar/".$usuar.$extension;
	$archivo=$_FILES["SubIm"]["tmp_name"];
	$guardar="../ImagenesAvatar/".$usuar.$extension;

	$consulta="INSERT INTO regusuarios(usuario,password,email,nombre,apellido,fechanacimiento,sexo,telefono,direccion,Avatar) VALUES ('$usuar','$passw','$ema','$nom','$ape','$naci','$sex','$tel','$dire','$destino')";
	$ejecutar_consulta=$conexion->query(utf8_encode($consulta));

	if($ejecutar_consulta)
		{

		
		

		move_uploaded_file($archivo,$guardar);

		session_start();
		$_SESSION["activacion"]=true;
		$_SESSION["usuario"]=$usuar;
		$_SESSION["nuevoli"]=false;

		header("Location: Perfil.php");}
	else
		header("Location: ../Index.php");



$conexion->close();
?>