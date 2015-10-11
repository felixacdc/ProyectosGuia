<?php
	//Agrega un nuevo libro
	$Libro=$_POST["Nlibro"];
	$Autor1=$_POST["Autor"];
	$Edicion1=$_POST["Edicion"];
	$Editorial1=$_POST["Editorial"];
	$Categoria1=$_POST["Categoria"];
	$Imagen=$_FILES["SubIm"]["tmp_name"];
	$Pdf=$_FILES["Subpdf"]["tmp_name"];

	

	include("../conexion.php");
	session_start();
	$extension=".png";
	$extension2=".pdf";
	$destinoimg=$Libro.$Autor1.$Edicion1;
	$destinopdf=$Libro.$Autor1.$Edicion1;
	$destinoimg = str_replace(' ','', $destinoimg);
	$destinopdf = str_replace(' ','', $destinopdf);
	$guardarImg="Img/".$destinoimg.$extension;
	$guardarPDF="Img/".$destinopdf.$extension2;

	echo $Libro."  ".$Autor1."  ".$Edicion1."  ".$Editorial1."  ".$Categoria1;

	$consulta="INSERT INTO libros(nombrelibro,autor,editorial,edicion,direccionimg,direccionpdf,categoria,Existencia) VALUES ('$Libro','$Autor1','$Editorial1','$Edicion1','$destinoimg','$destinopdf','$Categoria1','1')";
	$ejecutar_consulta=$conexion->query(utf8_encode($consulta));

	if($ejecutar_consulta)
	{

		
		

		move_uploaded_file($Imagen,$guardarImg);
		move_uploaded_file($Pdf,$guardarPDF);
		$_SESSION["nuevoli"]=true;

		header("Location: ../Administer.php");
	}
	



$conexion->close();
?>