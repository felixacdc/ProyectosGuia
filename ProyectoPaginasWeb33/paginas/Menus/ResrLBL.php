<?php
	//Busca las reservaciones del cliente invocado desde ReserH.js de ReservacionesCli.php
	$usu=$_POST["datos"];

	error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
	include('../conexion.php');

	$direcc='Menus/Img/';

	$consulta="SELECT * FROM  reservaciones WHERE usuario='$usu'";
	$ejecutar_consulta=$conexion->query($consulta);

	$num=$ejecutar_consulta->num_rows;

	$desplie='<table id="lol">
					<thead> 
						<tr>
							<th></th>
						 	<th>Libro</th> 
						 	<th>Autor</th>
						 	<th>Edicion</th>
						 	<th>Editorial</th>
						 	<th>Categoria</th>
						</tr>
					</thead>
					<tbody>
		';

	if($num!=0){

	
		while($registro=$ejecutar_consulta->fetch_assoc())
		{
			$desplie .= '
				<tr>
					<td><img src='.$direcc.$registro['direcimgli'].'.png'.' class="avatarpr"/></td>
					<td>'.$registro['nombrelibro'].'</td>
					<td>'.$registro['autor'].'</td>
					<td>'.$registro['edicion'].'</td>
					<td>'.$registro['editorial'].'</td>
					<td>'.$registro['categoria'].'</td>
				<tr>
			';
		}

		$desplie.='
		</tbody>
		</table>';

	}else{
		$desplie.='<tr>
		<td colspan="6">No Hay Reservaciones</td>
		</tr>
		</tbody>
		</table>';
	}

	echo $desplie;
	

	
?>