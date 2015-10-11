<?php
//Inicia session de administrador
session_start();

if(!$_SESSION["activacion"]){
	header("Location: salir.php");
}else{

	include('conexion.php');
	$usu=$_SESSION['usuario'];
	$consulta="SELECT * FROM admibiblio WHERE usuario_ad='$usu'";

    $ejecutar_consulta=$conexion->query($consulta);

    $num_regs=$ejecutar_consulta->num_rows;

    if($num_regs==0)
    header("Location: Perfil.php");
	
}
?>