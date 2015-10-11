
<?php
$Codigo=$_POST['datos'];

    include("Conexion.php");
	$consulta="SELECT * FROM codigos WHERE codigo='$Codigo'";

	$ejecutar_consulta=$conexion->query($consulta);
	$num_regs=$ejecutar_consulta->num_rows;
	$registro=$ejecutar_consulta->fetch_assoc();

	
	if($num_regs==0)
	{	
		$resul="Clave Ingresada No Es Valida";
		echo $resul;
	}
	else{

		
		if($registro['Estado']==1)
		{
			$resul="Clave Ya Fue Utilizada";
			echo $resul;
		}
	
		
	}

	

	$conexion->close();
?>