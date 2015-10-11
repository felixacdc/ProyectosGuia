<?php
$usua=$_POST["datos"];
$n=$_POST["num"];
$dife=$_POST["total"];

$busno=0;

include("../../Paginas/Conexion.php");
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);


if($usua==""){

$consulta="SELECT * FROM publicar LIMIT $n,5;";
	$ejecutar_consulta=$conexion->query($consulta);

	$nume=$ejecutar_consulta->num_rows;


	if($nume!=0)
	{	
	$desplie='<table id="lol">
					<tbody>
		';

		if($n==0)
		{$totalto="SELECT * FROM publicar";
		$ejecutar_totalto=$conexion->query($totalto);

		$numtotalto=$ejecutar_totalto->num_rows;
		$dife=$numtotalto;
		}



		$contn=0;
		while($registro=$ejecutar_consulta->fetch_assoc())
		{$idMenEli='prebuntaborr'.$contn.'';
			$desplie .= '
				<tr id='.$id2.'>
					<td>
					<img src="../'.$registro['Direcimg'].'" class="avatarpr"/>
					<label>'.$registro['usuario'].'</label>
					<label>'.$registro['Mensaje'].'</label>
					<button class="elim"  onclick="Elim(\''.$idMenEli.'\')">Eliminar</button>
					</td>
				</tr>
			';
			$contn=$contn+1;
		}

		$desplie.='
		</tbody>
		</table>';
		
		$consulta12="SELECT * FROM  publicar LIMIT $n,5";
		$ejecutar_consulta12=$conexion->query($consulta12);
		$aaa=$ejecutar_consulta12->num_rows;
		$sub=0;
		while($registro1=$ejecutar_consulta12->fetch_assoc())
		{
		$idMenEli2="prebuntaborr".$sub;
			$desplie .= '
				<div id='.$idMenEli2.' class="prebuntaborr">
				<table id="funcEli">
					<tbody>
					<tr id="TituloMensaEli">
						<td><h2>Confirmacion De Eliminado</h2></td>
					</tr>
					<tr id="MensajeEli">
						<td><h4>Esta Seguro de eliminar esta publicacion del Blog:</h4>
						<button id="SiEL" onclick="EliDefi(\''.$registro1['Id_Publi'].'\',\''.$idMenEli2.'\')">Eliminar</button>
						<button id="NoEL" onclick="CanceEl(\''.$idMenEli2.'\')">Cancelar</button></td>
					</tr>
					</tbody>
				</table>
				</div>
			';

			$sub=$sub+1;}
		
	}else
		{$desplie='<h1>No Hay Datos</h1>';
		$busno=10;
		}

}else
{
	$consulta="SELECT * FROM publicar WHERE usuario LIKE '%$usua%' LIMIT $n,5;";
	$ejecutar_consulta=$conexion->query($consulta);

	$nume=$ejecutar_consulta->num_rows;


	if($nume!=0)
	{	
	$desplie='<table id="lol">
					<tbody>
		';

		if($n==0)
		{$totalto="SELECT * FROM publicar WHERE usuario LIKE '%$usua%'";
		$ejecutar_totalto=$conexion->query($totalto);

		$numtotalto=$ejecutar_totalto->num_rows;
		$dife=$numtotalto;
		}



		$contn=0;
		while($registro=$ejecutar_consulta->fetch_assoc())
		{$idMenEli='prebuntaborr'.$contn.'';
			$desplie .= '
				<tr id='.$id2.'>
					<td>
					<img src="../'.$registro['Direcimg'].'" class="avatarpr"/>
					<label>'.$registro['usuario'].'</label>
					<label>'.$registro['Mensaje'].'</label>
					<button class="elim"  onclick="Elim(\''.$idMenEli.'\')">Eliminar</button>
					</td>
				</tr>
			';
			$contn=$contn+1;
		}

		$desplie.='
		</tbody>
		</table>';

		$consulta12="SELECT * FROM  publicar WHERE usuario LIKE '%$usua%' LIMIT $n,5";
		$ejecutar_consulta12=$conexion->query($consulta12);
		$aaa=$ejecutar_consulta12->num_rows;
		$sub=0;
		while($registro1=$ejecutar_consulta12->fetch_assoc())
		{
		$idMenEli2="prebuntaborr".$sub;
			$desplie .= '
				<div id='.$idMenEli2.' class="prebuntaborr">
				<table id="funcEli">
					<tbody>
					<tr id="TituloMensaEli">
						<td><h2>Confirmacion De Eliminado</h2></td>
					</tr>
					<tr id="MensajeEli">
						<td><h4>Esta Seguro de eliminar esta publicacion del Blog:</h4>
						<button id="SiEL" onclick="EliDefi(\''.$registro1['Id_Publi'].'\',\''.$idMenEli2.'\')">Eliminar</button>
						<button id="NoEL" onclick="CanceEl(\''.$idMenEli2.'\')">Cancelar</button></td>
					</tr>
					</tbody>
				</table>
				</div>
			';

			$sub=$sub+1;}
		
		
		
	}else
		{$desplie='<h1>Usuario No Encontrado</h1>';
		$busno=10;
		}
}

	if($busno==0){
		if($dife>5){
	if($n>0){
		$desplie .='
		<br/>
		<button class="brnpant" onclick="campag2(\''.$usua.'\' , \''.$n.'\' , \''.$dife.'\')">
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
		$nt=$n+5;
		if($nt<$dife){
					$desplie .='
					<button class="brnpant" onclick="campag(\''.$usua.'\' , \''.$n.'\' , \''.$dife.'\')">
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
					<button class="brnpant" onclick="campag(\''.$usua.'\' , \''.$n.'\' , \''.$dife.'\')">
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
			<button class="brnpant" onclick="campag2(\''.$usua.'\' , \''.$n.'\' , \''.$dife.'\')">
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

			$nt=$n+5;

			if($nt<$dife){
					$desplie .='
					<button class="brnpant" onclick="campag(\''.$usua.'\' , \''.$n.'\' , \''.$dife.'\')">
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
					<button class="brnpant" onclick="campag(\''.$usua.'\' , \''.$n.'\' , \''.$dife.'\')">
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