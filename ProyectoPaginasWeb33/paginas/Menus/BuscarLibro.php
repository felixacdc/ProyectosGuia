<?php
//busca si el libro que se esta ingresando existe o no en NuevoLibro.php
$lblNo=$_POST['datos'];
$lblAu=$_POST['datautor'];
$lblEd=$_POST['datedici'];

include("../conexion.php");
	$consulta="SELECT * FROM libros WHERE nombrelibro='$lblNo' AND autor='$lblAu' AND edicion='$lblEd'";

	$ejecutar_consulta=$conexion->query($consulta);

	$num_regs=$ejecutar_consulta->num_rows;

	if($num_regs!=0)
	{	$resul="Libro Ya Existe";
		echo $resul;
	}




	$conexion->close();
?>