<?php

	error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
	$usuar=$_POST["Usuario"];
	$passw=$_POST["Contrasea"];
	$nom=$_POST["Nombre"];
	$ape=$_POST["Apellido"];
	$tel=$_POST["telefono"];
	$dire=$_POST["Direccion"];
	$sex=$_POST["sexo"];
	$naci=$_POST["nacimiento"];
	$ema=$_POST["email"];

	include("../Conexion.php");

	session_start();
	$usu=$_SESSION['usuario'];

	if($_FILES["SubIm"]["tmp_name"]!="") 
	{	
		$revi="SELECT * FROM regusuarios WHERE usuario='$usu'";
		$consulta_ejecutada=$conexion->query($revi);

		$registro12=$consulta_ejecutada->fetch_assoc();

		$file = "../../".$registro12["Avatar"];
		$do = unlink($file);


		$extension=".png";
		$destino="ImagenesAvatar/".$usuar.$extension;
		$archivo=$_FILES["SubIm"]["tmp_name"];
		$guardar="../../ImagenesAvatar/".$usuar.$extension;

		$idusu=$registro12["id_usuario"];


		$consulta="UPDATE regusuarios SET usuario='$usuar', password='$passw' , email='$ema', nombre='$nom', apellido='$ape', fechanacimiento='$naci', sexo='$sex', telefono='$tel', direccion='$dire', Avatar='$destino' WHERE id_usuario='$idusu'";
	
		$ejecutar_consulta2=$conexion->query($consulta);

		$consulta1="UPDATE reservaciones SET usuario='$usuar' WHERE usuario='$usu'";
	
		$ejecutar_consulta3=$conexion->query($consulta1);


		if($ejecutar_consulta2)
		{
		move_uploaded_file($archivo,$guardar);
		}

		$_SESSION['usuario']=$usuar;
		$_SESSION["nuevoli"]=true;

		header("Location: ../Perfil.php");

	}
	else 
	{
		$revi="SELECT * FROM regusuarios WHERE usuario='$usu'";
		$consulta_ejecutada=$conexion->query($revi);

		$registro12=$consulta_ejecutada->fetch_assoc();

		$extension=".png";
		$destino="ImagenesAvatar/".$usuar.$extension;
		$guardar="../../ImagenesAvatar/".$usuar.$extension;
		$donde="../../".$registro12["Avatar"];

		$idusu=$registro12["id_usuario"];


		$consulta="UPDATE regusuarios SET usuario='$usuar', password='$passw' , email='$ema', nombre='$nom', apellido='$ape', fechanacimiento='$naci', sexo='$sex', telefono='$tel', direccion='$dire', Avatar='$destino' WHERE id_usuario='$idusu'";
	
		$ejecutar_consulta2=$conexion->query($consulta);

		$consulta1="UPDATE reservaciones SET usuario='$usuar' WHERE usuario='$usu'";
	
		$ejecutar_consulta3=$conexion->query($consulta1);

		
		rename ($donde,$guardar);


		$_SESSION['usuario']=$usuar;
		$_SESSION["nuevoli"]=true;

		header("Location: ../Perfil.php");
	}

	/* , password='$passw' , email='$ema', nombre='$nom', apellido='$ape', fechanacimiento='$naci', sexo='$sex', telefono='$tel', direccion='$dire', Avatar='$destino' rename ("datos.txt","datos.csv")*/

?>

