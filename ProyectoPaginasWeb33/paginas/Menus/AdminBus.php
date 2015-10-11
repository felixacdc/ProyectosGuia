<?php
//Busca Las Reservaciones de los clientes en Administer.php llamado por AdBusRes.js
	$usu=$_POST["datos"];
	$n=$_POST["datos2"];
	$dife=$_POST["datos3"];
	include('../conexion.php');

	$busno=0;

	if($usu==""){
		$consulta1="SELECT * FROM  reservaciones LIMIT $n,10";
		$ejecutar_consulta1=$conexion->query($consulta1);
		$num1=$ejecutar_consulta1->num_rows;

		$desplie='<table id="lol">
					<thead> 
						<tr>
							<th></th>
							<th>Usuario</th>
						 	<th>Libro</th> 
						 	<th>Autor</th>
						 	<th>Edicion</th>
						 	<th>Editorial</th>
						 	<th>Categoria</th>
						 	<th>Estado</th>
						 	<th>Eliminar Reservacion</th>
						</tr>
					</thead>
					<tbody>
		';

		if($n==0)
		{$totalto="SELECT * FROM reservaciones";
		$ejecutar_totalto=$conexion->query($totalto);

		$numtotalto=$ejecutar_totalto->num_rows;
		$dife=$numtotalto;
		}

		if($num1!=0){

		$contn=0;
		while($registro=$ejecutar_consulta1->fetch_assoc())
		{ $id="a"+$contn;
		$id2='abc'.$contn.'';
			$desplie .= '
				<tr id='.$id2.'>
					<td><img src="../ImagenesAvatar/'.$registro['usuario'].'.png" class="avatarpr"/></td>
					<td>'.$registro['usuario'].'</td>
					<td>'.$registro['nombrelibro'].'</td>
					<td>'.$registro['autor'].'</td>
					<td>'.$registro['edicion'].'</td>
					<td>'.$registro['editorial'].'</td>
					<td>'.$registro['categoria'].'</td>
			';
			if($registro['Estado']=="Reservado"){
				$desplie .= '
					<td><button class="btnest" id='.$id.' onclick="Esta(\''.$registro['Estado'].'\' , \''.$id.'\', \''.$registro['id_reser'].'\')" style="background:rgba(255, 0, 0, 0.8)">'.$registro['Estado'].'</button></td>

				';
			}else{
				$desplie .= '
					<td><button class="btnest" id='.$id.' onclick="Esta(\''.$registro['Estado'].'\' , \''.$id.'\', \''.$registro['id_reser'].'\')" style="background:rgba(0, 198, 107, 0.8)">'.$registro['Estado'].'</button></td>

				';
			}

			$usuarios=''.$registro['usuario'].'';
			$nombreli=''.$registro['nombrelibro'].'';
			$autor=''.$registro['autor'].'';
			$edicion=''.$registro['edicion'].'';
			$editori=''.$registro['editorial'].'';
			$categ=''.$registro['categoria'].'';

			$revi="SELECT * FROM libros WHERE nombrelibro='$nombreli' and autor='$autor' and edicion='$edicion' and editorial='$editori' and categoria='$categ'";
			$consulta_ejecutada=$conexion->query($revi);

			$registro12=$consulta_ejecutada->fetch_assoc();

			$desplie .= '
			<td ><button class="elim"  onclick="Elim(\''.$id2.'\', \''.$registro['id_reser'].'\', \''.$registro12['id_libro'].'\')">Eliminar</button></td>
			</tr>';
			$contn=$contn+1;
		}

		$desplie.='
		</tbody>
		</table>';

		}else{
			$desplie.='<tr>
			<td colspan="9" style="font-size:18px">No Hay Reservaciones De Ningun Usuario</td>
			</tr>
			</tbody>
			</table>';
			$busno=1;

		}
	}else{

	$consulta="SELECT * FROM  reservaciones WHERE usuario LIKE'%$usu%' LIMIT $n,10";
	$ejecutar_consulta=$conexion->query($consulta);

	$num=$ejecutar_consulta->num_rows;

	$desplie='<table id="lol">
					<thead> 
						<tr>
							<th></th>
							<th>Usuario</th>
						 	<th>Libro</th> 
						 	<th>Autor</th>
						 	<th>Edicion</th>
						 	<th>Editorial</th>
						 	<th>Categoria</th>
						 	<th>Estado</th>
						 	<th>Eliminar Reservacion</th>
						</tr>
					</thead>
					<tbody>
	';

		if($n==0)
		{$totalto="SELECT * FROM reservaciones WHERE usuario LIKE '%$usu%'";
		$ejecutar_totalto=$conexion->query($totalto);

		$numtotalto=$ejecutar_totalto->num_rows;
		$dife=$numtotalto;
		}

	if($num!=0){

		$contn=0;
		while($registro=$ejecutar_consulta->fetch_assoc())
		{	
			$id="a"+$contn;
			$id2='abc'.$contn.'';
			$desplie .= '
				<tr id='.$id2.'>
					<td><img src="../ImagenesAvatar/'.$registro['usuario'].'.png" class="avatarpr"/></td>
					<td>'.$registro['usuario'].'</td>
					<td>'.$registro['nombrelibro'].'</td>
					<td>'.$registro['autor'].'</td>
					<td>'.$registro['edicion'].'</td>
					<td>'.$registro['editorial'].'</td>
					<td>'.$registro['categoria'].'</td>';
			if($registro['Estado']=="Reservado"){
				$desplie .= '
					<td><button class="btnest" id='.$id.' onclick="Esta(\''.$registro['Estado'].'\' , \''.$id.'\', \''.$registro['id_reser'].'\')" style="background:rgba(255, 0, 0, 0.8)">'.$registro['Estado'].'</button></td>
				
				';
			}else{
				$desplie .= '
					<td><button class="btnest" id='.$id.' onclick="Esta(\''.$registro['Estado'].'\' , \''.$id.'\', \''.$registro['id_reser'].'\')" style="background:rgba(0, 198, 107, 0.8)">'.$registro['Estado'].'</button></td>

				';
			}

			$desplie .= '
			<td><button class="elim"  onclick="Elim(\''.$id2.'\' , \''.$registro['id_reser'].'\')">Eliminar</button></td>
			</tr>';
			$contn=$contn+1;
		}

		$desplie.='
		</tbody>
		</table>';

	}else{
		$desplie.='<tr>
		<td colspan="9" style="font-size:18px">No Hay Reservaciones De Este Usuario</td>
		</tr>
		</tbody>
		</table>';
		$busno=1;
	}
	}


	if($busno==0){
		if($dife>10){
	if($n>0){
		$desplie .='
		<br/>
		<button class="brnpant" onclick="campag2(\''.$usu.'\' , \''.$n.'\' , \''.$dife.'\')">
		<a href="#ex2">
		<table class="btntb">
		<td>
		<img class="imgpant" src="Menus/Img/d.ico">
		</td>
		<td>
		<label class="antsig">Anterior</label>
		</td>
		</table>
		</a>
		</button>
		';
		$nt=$n+10;
		if($nt<$dife){
					$desplie .='
					<button class="brnpant" onclick="campag(\''.$usu.'\' , \''.$n.'\' , \''.$dife.'\')">
					<a  href="#ex2">
					<table class="btntb">
					<td>
					<label class="antsig">Siguiente</label>
					</td>
					<td>
					<img class="imgpant" src="Menus/Img/c.ico">
					</td>
					</table>
					</a>
					</button>
					';
			}else{
					$desplie .='
					<button class="brnpant" onclick="campag(\''.$usu.'\' , \''.$n.'\' , \''.$dife.'\')">
					<a>
					<table class="btntb">
					<td>
					<label class="antsig">Siguiente</label>
					</td>
					<td>
					<img class="imgpant" src="Menus/Img/c.ico">
					</td>
					</table>
					</a>
					</button>
					';
			}
		
		}else
		{
			$desplie .='
			<br/>
			<button class="brnpant" onclick="campag2(\''.$usu.'\' , \''.$n.'\' , \''.$dife.'\')">
			<a>
			<table class="btntb">
			<td>
			<img class="imgpant" src="Menus/Img/d.ico">
			</td>
			<td>
			<label class="antsig">Anterior</label>
			</td>
			</table>
			</a>
			</button>
			';

			$nt=$n+10;

			if($nt<$dife){
					$desplie .='
					<button class="brnpant" onclick="campag(\''.$usu.'\' , \''.$n.'\' , \''.$dife.'\')">
					<a href="#ex2">
					<table class="btntb">
					<td>
					<label class="antsig">Siguiente</label>
					</td>
					<td>
					<img class="imgpant" src="Menus/Img/c.ico">
					</td>
					</table>
					</a>
					</button>
					';
			}else{
					$desplie .='
					<button class="brnpant" onclick="campag(\''.$usu.'\' , \''.$n.'\' , \''.$dife.'\')">
					<a>
					<table class="btntb">
					<td>
					<label class="antsig">Siguiente</label>
					</td>
					<td>
					<img class="imgpant" src="Menus/Img/c.ico">
					</td>
					</table>
					</a>
					</button>
					';
			}
		

		}

		}
	}
	echo $desplie;

?>