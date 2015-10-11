<?php
//reservacion del libro seleccionado por el usuario llamado desde busqueda3.js en BusquedaLibro.php
$autor=$_POST['datos'];
$edicion=$_POST['datos2'];
$usuarios=$_POST['datos3'];
$nombreli=$_POST['datos4'];
$categ=$_POST['datos5'];
$editori=$_POST['datos6'];
$est=$_POST['datos7'];
$existen=$_POST['datos8'];
$idlib=$_POST['idlibro'];
$imgli=$_POST["imagenli"];

	error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
	include("../conexion.php");

	$maximo="SELECT * FROM reservaciones WHERE usuario='$usuarios'";
	$consulta_maximo=$conexion->query($maximo);

	$conimaximo=$consulta_maximo->num_rows;
		
	if($conimaximo<10)
	{	

	$revi="SELECT * FROM reservaciones WHERE usuario='$usuarios' and nombrelibro='$nombreli' and autor='$autor' and edicion='$edicion' and editorial='$editori' and categoria='$categ'";

	$consulta_ejecutada=$conexion->query($revi);

	$coninsidencias=$consulta_ejecutada->num_rows;
	$existen=$existen-1;
	
	if($coninsidencias==0)
	{	
		

			$existencialb="SELECT * FROM libros WHERE id_libro='$idlib'";
			$consulta_ejecutadalb=$conexion->query($existencialb);

			$registro=$consulta_ejecutadalb->fetch_assoc();

			if($registro["Existencia"]>0){

			$consulta="INSERT INTO reservaciones(usuario,nombrelibro,autor,edicion,editorial,categoria,estado,direcimgli) VALUES ('$usuarios','$nombreli','$autor','$edicion','$editori','$categ','$est','$imgli')";

			$ejecutar_consulta=$conexion->query(utf8_encode($consulta));


			if($ejecutar_consulta)
			{$mensa="Tu Libro Ha Sido Recervado";

			$consulta1="UPDATE libros SET Existencia='$existen' WHERE id_libro='$idlib'";

			$ejecutar_consulta1=$conexion->query(utf8_encode($consulta1));
			}
			else
			$mensa="Libro No Recerbado";
			}else{
				$mensa="Este Libro No Esta En Exsistencia";
			}
		
	}else{
		$mensa="Ya Has Reservado Este Libro Con Anterioridad";}
	}else
	{$mensa="Has Llegado A Tu Limite De Reservaciones";}
	
	echo $mensa;
	$conexion->close();
?>