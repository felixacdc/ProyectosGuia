<?php
//busca los libros en existencia de Exlibro.php
	$n=$_POST["datos2"];
	$dife=$_POST["datos3"];
	$busno=0;

	error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
	include('../conexion.php');

	$direcc='Menus/Img/';

	$consulta="SELECT * FROM  libros LIMIT $n,10";
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
						 	<th>Existencia</th>
						 	<th>Agregar</th>
						 	<th>Eliminar</th>
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

	if($num!=0){

		$contador=1;
		while($registro=$ejecutar_consulta->fetch_assoc())
		{$idex="num".$contador;
			$desplie .= '
				<tr>
					<td><img src='.$direcc.$registro['direccionimg'].'.png'.' class="avatarpr"/></td>
					<td>'.$registro['nombrelibro'].'</td>
					<td>'.$registro['autor'].'</td>
					<td>'.$registro['edicion'].'</td>
					<td>'.$registro['editorial'].'</td>
					<td>'.$registro['categoria'].'</td>
					<td id='.$idex.'>'.$registro['Existencia'].'</td>
					<td><button class="btnest" onclick="Esta(\''.$registro['id_libro'].'\' , \''.$idex.'\' , \'1\')" style="background:rgba(0, 198, 107, 0.8)">Agregar</button></td>
					<td><button class="btnest" onclick="Esta(\''.$registro['id_libro'].'\' , \''.$idex.'\' , \'2\')" style="background:rgba(255, 0, 0, 0.8)">Eliminar</button></td>
				<tr>
			';
			$contador=$contador+1;
		}

		$desplie.='
		</tbody>
		</table>';

	}else{
		$desplie.='<tr>
		<td colspan="10">No Hay Libros En Existencia</td>
		</tr>
		</tbody>
		</table>';
		$busno=1;
	}

	if($busno==0){
		if($dife>10){
	if($n>0){
		$desplie .='
		<br/>
		<button class="brnpant" onclick="campag2(\''.$n.'\' , \''.$dife.'\')">
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
					<button class="brnpant" onclick="campag(\''.$n.'\' , \''.$dife.'\')">
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
					<button class="brnpant" onclick="campag(\''.$n.'\' , \''.$dife.'\')">
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
			<button class="brnpant" onclick="campag2(\''.$n.'\' , \''.$dife.'\')">
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
					<button class="brnpant" onclick="campag(\''.$n.'\' , \''.$dife.'\')">
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
					<button class="brnpant" onclick="campag(\''.$n.'\' , \''.$dife.'\')">
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