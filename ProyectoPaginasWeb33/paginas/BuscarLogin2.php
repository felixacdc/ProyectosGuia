<?php
//Busca si la contraseña es correcta en ajax de la pagina principal index.php
$Usuar=$_POST['datos'];
$Contra=$_POST['datos2'];


include("Conexion.php");
	$consulta="SELECT * FROM regusuarios WHERE usuario='$Usuar' AND password='$Contra'";

	$ejecutar_consulta=$conexion->query($consulta);

	$num_regs=$ejecutar_consulta->num_rows;

	if($num_regs==0)
	{	

		$consulta2="SELECT * FROM admibiblio WHERE usuario_ad='$Usuar' AND pasword_ad='$Contra'";

		$ejecutar_consulta2=$conexion->query($consulta2);

		$num_regs2=$ejecutar_consulta2->num_rows;

		if($num_regs2==0)
		{	

		$resul="La Contraseña Es Incorrecta";
		echo $resul;
		}

	}
	$conexion->close();
?>