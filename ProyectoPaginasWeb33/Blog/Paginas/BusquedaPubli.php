<?php
$publicacion=$_POST["datos"];
$n=$_POST["num"];
$dife=$_POST["total"];

$busno=0;

include("../../Paginas/Conexion.php");
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);

session_start();
$usu=$_SESSION["usuario"];

if($publicacion!=null)
{	
	$consultat="SELECT * FROM regusuarios WHERE usuario='$usu'";
	$ejecutar_consultat=$conexion->query($consultat);
	$registrot=$ejecutar_consultat->fetch_assoc();

	$direcava=$registrot["Avatar"];

	$consultaa="INSERT INTO publicar(Mensaje,usuario,Direcimg) VALUES ('$publicacion','$usu','$direcava')";
	$ejecutar_consultaa=$conexion->query(utf8_encode($consultaa));


}

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
		{$id2='abc'.$contn.'';
			$desplie .= '
				<tr id='.$id2.'>
					<td>
					<img src="../'.$registro['Direcimg'].'" class="avatarpr"/>
					<label>'.$registro['usuario'].'</label>
					<label>'.$registro['Mensaje'].'</label>
					</td>
				</tr>
			';
			$contn=$contn+1;
		}

		$desplie.='
		</tbody>
		</table>';
		
		
	}else
		{$desplie='<h1>No Hay Datos</h1>';
		$busno=10;
		}



	if($busno==0){
		if($dife>5){
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
		$nt=$n+5;
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

			$nt=$n+5;

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