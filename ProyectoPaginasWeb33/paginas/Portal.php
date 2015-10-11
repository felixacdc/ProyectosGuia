<?php
	//Evalua que tipo de ususario se esta loguiando llamado por el accion del formulario login en Index.php
	include('Conexion.php');

	$usua=$_POST["Usuario"];
	$pass=$_POST["Contraseña"];

		$consulta="SELECT * FROM regusuarios WHERE usuario='$usua'";

		$ejecutar_consulta=$conexion->query($consulta);

		$num_regs=$ejecutar_consulta->num_rows;

		if($num_regs==0)
		{	
			$consulta2="SELECT * FROM admibiblio WHERE usuario_ad='$usua'";

			$ejecutar_consulta2=$conexion->query($consulta2);

			$num_regs2=$ejecutar_consulta2->num_rows;

			if($num_regs2!=0)
			{	$registro12=$ejecutar_consulta2->fetch_assoc();
				session_start();
				$_SESSION["activacion"]=true;
				$_SESSION["usuario"]=$registro12["usuario_ad"];

				header("Location: Administer.php");
			}
		}else{
			$registro13=$ejecutar_consulta->fetch_assoc();
			session_start();
			$_SESSION["activacion"]=true;
			$_SESSION["usuario"]=$registro13["usuario"];

			header("Location: Perfil.php");
		}

		





?>