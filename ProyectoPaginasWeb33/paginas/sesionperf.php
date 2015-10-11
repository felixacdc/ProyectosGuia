<?php
//Inicia Sesion del Usuario del perfil.php
session_start();

if(!$_SESSION["activacion"]){
	header("Location: salir.php");
}else{

	include('conexion.php');
	$usu=$_SESSION['usuario'];
	$consulta="SELECT * FROM regusuarios WHERE usuario='$usu'";

    $ejecutar_consulta=$conexion->query($consulta);

    $num_regs=$ejecutar_consulta->num_rows;

    if($num_regs==0)
    header("Location: Administer.php");
	
}
?>
