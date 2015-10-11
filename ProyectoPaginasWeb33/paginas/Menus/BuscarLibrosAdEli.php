<?php
//Busca Las Reservaciones de los clientes en Administer.php llamado por AdBusRes.js
	$usu=$_POST["datos"];
	$n=$_POST["datos2"];
	$dife=$_POST["datos3"];
	include('../Conexion.php');

	$busno=0;

	if($usu==""){
		$consulta1="SELECT * FROM  libros LIMIT $n,10";
		$ejecutar_consulta1=$conexion->query($consulta1);
		$num1=$ejecutar_consulta1->num_rows;

		$desplie='<table id="lol">
					<thead> 
						<tr>
							<th></th>
							<th>Libro</th> 
						 	<th>Autor</th>
						 	<th>Edicion</th>
						 	<th>Editorial</th>
						 	<th>Categoria</th>
						 	<th>Existencia</th>
						 	<th>Accion</th>
						</tr>
					</thead>
					<tbody>
		';

		if($n==0)
		{$totalto="SELECT * FROM libros";
		$ejecutar_totalto=$conexion->query($totalto);

		$numtotalto=$ejecutar_totalto->num_rows;
		$dife=$numtotalto;
		}

		if($num1!=0){

		$contn=0;
		while($registro=$ejecutar_consulta1->fetch_assoc())
		{ $id="a"+$contn;
		$idMenEli="prebuntaborr".$contn;
		$id2='abc'.$contn.'';
			$desplie .= '
				<tr id='.$id2.'>
					<td><img src="Menus/Img/'.$registro['direccionimg'].'.png" class="avatarpr"/></td>
					<td>'.$registro['nombrelibro'].'</td>
					<td>'.$registro['autor'].'</td>
					<td>'.$registro['edicion'].'</td>
					<td>'.$registro['editorial'].'</td>
					<td>'.$registro['categoria'].'</td>
					<td>'.$registro['Existencia'].'</td>
			';


			$desplie .= '
			<td ><button class="elim"  onclick="Elim(\''.$idMenEli.'\')">Eliminar</button>

			</td>
			</tr>';
			$contn=$contn+1;
		}
				

		$desplie.='
		</tbody>
		</table>

		';

		$consulta12="SELECT * FROM  libros LIMIT $n,10";
		$ejecutar_consulta12=$conexion->query($consulta12);
		$aaa=$ejecutar_consulta12->num_rows;
		$sub=0;
		while($registro1=$ejecutar_consulta12->fetch_assoc())
		{
		$id22='abc'.$sub.'';
		$idMenEli2="prebuntaborr".$sub;
			$desplie .= '
				<div id='.$idMenEli2.' class="prebuntaborr">
				<table id="funcEli">
					<tbody>
					<tr id="TituloMensaEli">
						<td><h2>Confirmacion De Eliminado</h2></td>
					</tr>
					<tr id="MensajeEli">
						<td><h4>Esta Seguro de eliminar esta libro de la biblioteca:</h4>
						<button id="SiEL" onclick="EliDefi(\''.$id22.'\', \''.$registro1['id_libro'].'\',\''.$idMenEli2.'\')">Eliminar</button>
						<button id="NoEL" onclick="CanceEl(\''.$idMenEli2.'\')">Cancelar</button></td>
					</tr>
					</tbody>
				</table>
				</div>
			';

			$sub=$sub+1;
		}


		}else{
			$desplie.='<tr>
			<td colspan="9" style="font-size:18px">No Hay Reservaciones De Ningun Usuario</td>
			</tr>
			</tbody>
			</table>
			';
			$busno=1;

		}
	}else{

	$consulta="SELECT * FROM  libros WHERE nombrelibro LIKE'%$usu%' LIMIT $n,10";
	$ejecutar_consulta=$conexion->query($consulta);

	$num=$ejecutar_consulta->num_rows;


	if($num!=0){

			$desplie='<table id="lol">
					<thead> 
						<tr>
							<th></th>
							<th>Libro</th> 
						 	<th>Autor</th>
						 	<th>Edicion</th>
						 	<th>Editorial</th>
						 	<th>Categoria</th>
						 	<th>Existencia</th>
						 	<th>Accion</th>
						</tr>
					</thead>
					<tbody>
			';

		if($n==0)
		{$totalto="SELECT * FROM libros WHERE nombrelibro LIKE '%$usu%'";
		$ejecutar_totalto=$conexion->query($totalto);

		$numtotalto=$ejecutar_totalto->num_rows;
		$dife=$numtotalto;
		}

		$contn=0;
		while($registro=$ejecutar_consulta->fetch_assoc())
		{	$idMenEli="prebuntaborr".$contn;
			$id="a"+$contn;
		$id2='abc'.$contn.'';
			$desplie .= '
				<tr id='.$id2.'>
					<td><img src="Menus/Img/'.$registro['direccionimg'].'.png" class="avatarpr"/></td>
					<td>'.$registro['nombrelibro'].'</td>
					<td>'.$registro['autor'].'</td>
					<td>'.$registro['edicion'].'</td>
					<td>'.$registro['editorial'].'</td>
					<td>'.$registro['categoria'].'</td>
					<td>'.$registro['Existencia'].'</td>
			';


			$desplie .= '
			<td ><button class="elim"  onclick="Elim(\''.$idMenEli.'\')">Eliminar</button></td>
			</tr>';
			$contn=$contn+1;
		}

		$desplie.='
		</tbody>
		</table>
		';

		$consulta12="SELECT * FROM  libros WHERE nombrelibro LIKE'%$usu%' LIMIT $n,10";
		$ejecutar_consulta12=$conexion->query($consulta12);
		$aaa=$ejecutar_consulta12->num_rows;
		$sub=0;
		while($registro1=$ejecutar_consulta12->fetch_assoc())
		{
		$id22='abc'.$sub.'';
		$idMenEli2="prebuntaborr".$sub;
			$desplie .= '
				<div id='.$idMenEli2.' class="prebuntaborr">
				<table id="funcEli">
					<tbody>
					<tr id="TituloMensaEli">
						<td><h2>Confirmacion De Eliminado</h2></td>
					</tr>
					<tr id="MensajeEli">
						<td><h4>Esta Seguro de eliminar esta libro de la biblioteca:</h4>
						<button id="SiEL" onclick="EliDefi(\''.$id22.'\', \''.$registro1['id_libro'].'\',\''.$idMenEli2.'\')">Eliminar</button>
						<button id="NoEL" onclick="CanceEl(\''.$idMenEli2.'\')">Cancelar</button></td>
					</tr>
					</tbody>
				</table>
				</div>
			';

			$sub=$sub+1;
		}

	}else{

	$consulta="SELECT * FROM  libros WHERE autor LIKE'%$usu%' LIMIT $n,10";
	$ejecutar_consulta=$conexion->query($consulta);

	$num=$ejecutar_consulta->num_rows;


	if($num!=0){

			$desplie='<table id="lol">
					<thead> 
						<tr>
							<th></th>
							<th>Libro</th> 
						 	<th>Autor</th>
						 	<th>Edicion</th>
						 	<th>Editorial</th>
						 	<th>Categoria</th>
						 	<th>Existencia</th>
						 	<th>Accion</th>
						</tr>
					</thead>
					<tbody>
			';

		if($n==0)
		{$totalto="SELECT * FROM libros WHERE autor LIKE '%$usu%'";
		$ejecutar_totalto=$conexion->query($totalto);

		$numtotalto=$ejecutar_totalto->num_rows;
		$dife=$numtotalto;
		}

		$contn=0;
		while($registro=$ejecutar_consulta->fetch_assoc())
		{	$idMenEli="prebuntaborr".$contn;
			$id="a"+$contn;
		$id2='abc'.$contn.'';
			$desplie .= '
				<tr id='.$id2.'>
					<td><img src="Menus/Img/'.$registro['direccionimg'].'.png" class="avatarpr"/></td>
					<td>'.$registro['nombrelibro'].'</td>
					<td>'.$registro['autor'].'</td>
					<td>'.$registro['edicion'].'</td>
					<td>'.$registro['editorial'].'</td>
					<td>'.$registro['categoria'].'</td>
					<td>'.$registro['Existencia'].'</td>
			';


			$desplie .= '
			<td ><button class="elim"  onclick="Elim(\''.$idMenEli.'\')">Eliminar</button></td>
			</tr>';
			$contn=$contn+1;
		}

		$desplie.='
		</tbody>
		</table>
		';

		$consulta12="SELECT * FROM  libros WHERE autor LIKE'%$usu%' LIMIT $n,10";
		$ejecutar_consulta12=$conexion->query($consulta12);
		$aaa=$ejecutar_consulta12->num_rows;
		$sub=0;
		while($registro1=$ejecutar_consulta12->fetch_assoc())
		{
		$id22='abc'.$sub.'';
		$idMenEli2="prebuntaborr".$sub;
			$desplie .= '
				<div id='.$idMenEli2.' class="prebuntaborr">
				<table id="funcEli">
					<tbody>
					<tr id="TituloMensaEli">
						<td><h2>Confirmacion De Eliminado</h2></td>
					</tr>
					<tr id="MensajeEli">
						<td><h4>Esta Seguro de eliminar esta libro de la biblioteca:</h4>
						<button id="SiEL" onclick="EliDefi(\''.$id22.'\', \''.$registro1['id_libro'].'\',\''.$idMenEli2.'\')">Eliminar</button>
						<button id="NoEL" onclick="CanceEl(\''.$idMenEli2.'\')">Cancelar</button></td>
					</tr>
					</tbody>
				</table>
				</div>
			';

			$sub=$sub+1;
		}

	}else{
		$desplie.='<tr>
		<td colspan="9" style="font-size:18px">Este Libro No Existe</td>
		</tr>
		</tbody>
		</table>
		';
		$busno=1;}
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