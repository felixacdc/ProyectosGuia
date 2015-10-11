<?php
//Busca si el ususario ya exite llamado por ajax en la pagina principal index.php
$Usuario=$_POST['datos'];

include("Conexion.php");
	$consulta="SELECT * FROM regusuarios WHERE usuario='$Usuario'";

	$ejecutar_consulta=$conexion->query($consulta);

	$num_regs=$ejecutar_consulta->num_rows;

	if($num_regs==0)
	{	
		$consulta2="SELECT * FROM admibiblio WHERE usuario_ad='$Usuario'";

		$ejecutar_consulta2=$conexion->query($consulta2);

		$num_regs2=$ejecutar_consulta2->num_rows;

		if($num_regs2==0)
		{
		$resultado="El Usuario No Existe";
		echo $resultado;
		}

	}
	$conexion->close();
?>