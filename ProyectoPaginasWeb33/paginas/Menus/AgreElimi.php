<?php
//agrega o quita existencias de los libros de ExLibro.php
	$id_lib=$_POST["datos2"];
	$opci=$_POST["datos4"];

	include("../conexion.php");

		$consulta="SELECT * FROM  libros WHERE 	id_libro='$id_lib'";
		$ejecutar_consulta=$conexion->query($consulta);

		$registro=$ejecutar_consulta->fetch_assoc();

	if($opci=="1"){

		$Respu=$registro['Existencia']+1;
		$consulta="UPDATE libros SET Existencia='$Respu' WHERE id_libro='$id_lib'";
		$ejecutar_consulta=$conexion->query(utf8_encode($consulta));

		
	}else{
		$Respu=$registro['Existencia']-1;
		if($Respu>0){
		$consulta="UPDATE libros SET Existencia='$Respu' WHERE id_libro='$id_lib'";
		$ejecutar_consulta=$conexion->query(utf8_encode($consulta));
		}else {$Respu=0;
		$consulta="UPDATE libros SET Existencia='$Respu' WHERE id_libro='$id_lib'";
		$ejecutar_consulta=$conexion->query(utf8_encode($consulta));
		}
	}
	echo $Respu;
?>