<?php
//Busca los libros del ususario llamado desde Busqueda3.js funcion BusPass de BusquedaLibro.php
	$lbl=$_POST["datos"];
	$n=$_POST["most"];
	$dife=$_POST["tot"];

	$busno=0;

	session_start();

	$usbl=$_SESSION["usuario"];
	
	error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
	include('../conexion.php');


	$consulta="SELECT * FROM libros WHERE nombrelibro LIKE '%$lbl%' LIMIT $n,4;";
	$ejecutar_consulta=$conexion->query($consulta);

	$num=$ejecutar_consulta->num_rows;


	if($num!=0)
	{	
		if($n==0)
		{$consulta01="SELECT * FROM libros WHERE nombrelibro LIKE '%$lbl%'";
		$ejecutar_consulta01=$conexion->query($consulta01);

		$num01=$ejecutar_consulta01->num_rows;
		$dife=$num01;
		}

		$direcc='Menus/Img/';
		$idim=0;
	
		while($registro=$ejecutar_consulta->fetch_assoc())
		{	
			$idim=$idim+1;
			$iddiv='pdfimg'.$idim.'';
			$iddiv2='pdfli'.$idim.'';
			$iddesa='desa'.$idim.'';
			$erro='erro'.$idim.'';
			$tri='tri'.$idim.'';
			$dirpdf='Menus/img/'.$registro['direccionpdf'].'.pdf';
			
			$salida .= '
				<div class="cuerpos" id='.$iddesa.' >
				<table>
				<td>
				<img onclick="apari(\''.$iddiv.'\' , \''.$iddiv2.'\', \''.$idim.'\')" src='.$direcc.$registro['direccionimg'].'.png'.'  class="imglibr" ><br/>
				</td>
				<td>
				<label class="liti">'.$registro['nombrelibro'].'</label><br/>
				<label class="objetos">Autor: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$registro['autor'].'</label><br/>
				<label class="objetos">Categoria: &nbsp;&nbsp;'.$registro['categoria'].'</label><br/>
				<label class="objetos">Editorial: &nbsp;&nbsp;&nbsp;&nbsp;'.$registro['editorial'].'</label><br/>
				<label class="objetos">Edicion: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$registro['edicion'].'</label><br/>
				<button class="bulib" onclick="fnReservar(\'' .$registro['autor']. '\' , \''.$registro['edicion'].'\' , \''.$registro['nombrelibro'].'\' , \''.$usbl.'\' , \''.$registro['categoria'].'\' , \''.$registro['editorial'].'\' , \''.$erro.'\' , \''.$tri.'\'  , \''.$registro['Existencia'].'\' , \''.$registro['id_libro'].'\' , \''.$registro['direccionimg'].'\')">Reservar</button>
				</td>
				</table>
				<div class="vericre" id='.$erro.'></div>
				<div id='.$tri.' class="tris"></div>

				<div class="portapdf" id='.$iddiv.'> 

				 <section class="Titupdf">
				 <h2 class="ttpdf">'.$registro['nombrelibro'].'</h2>
				 </section>
				 <img onclick="clospd(\'' .$iddiv. '\')"class="cerpdf" src="Menus/Img/clospdf.ico">
				 <object class="pdflib" id='.$iddiv2.' data='.$dirpdf.' type="application/pdf" ></object> 
				 </div>

				</div>			
			';
			
		}

	}else{
			$consulta2="SELECT * FROM libros WHERE autor LIKE '%$lbl%' LIMIT $n,4;";
			$ejecutar_consulta2=$conexion->query($consulta2);

			$num2=$ejecutar_consulta2->num_rows;

			if($num2!=0)
			{

				if($n==0)
				{$consulta01="SELECT * FROM libros WHERE autor LIKE '%$lbl%'";
				$ejecutar_consulta01=$conexion->query($consulta01);

				$num01=$ejecutar_consulta01->num_rows;
				$dife=$num01;
				}

				$direcc='Menus/Img/';
				$idim=0;

				while($registro=$ejecutar_consulta2->fetch_assoc())
				{	
					$idim=$idim+1;
					$iddiv='pdfimg'.$idim.'';
					$iddiv2='pdfli'.$idim.'';
					$iddesa='desa'.$idim.'';
					$erro='erro'.$idim.'';
					$tri='tri'.$idim.'';
					$dirpdf='Menus/img/'.$registro['direccionpdf'].'.pdf';
			
					$salida .= '
						<div class="cuerpos" id='.$iddesa.'>
						<table>
						<td>
						<img onclick="apari(\''.$iddiv.'\' , \''.$iddiv2.'\' , \''.$idim.'\')" src='.$direcc.$registro['direccionimg'].'.png'.'  class="imglibr" ><br/>
						</td>
						<td>
						<label class="liti">'.$registro['nombrelibro'].'</label><br/>
						<label class="objetos">Autor: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$registro['autor'].'</label><br/>
						<label class="objetos">Categoria: &nbsp;&nbsp;'.$registro['categoria'].'</label><br/>
						<label class="objetos">Editorial: &nbsp;&nbsp;&nbsp;&nbsp;'.$registro['editorial'].'</label><br/>
						<label class="objetos">Edicion: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$registro['edicion'].'</label><br/>
						<button class="bulib" onclick="fnReservar(\'' .$registro['autor']. '\' , \''.$registro['edicion'].'\' , \''.$registro['nombrelibro'].'\' , \''.$usbl.'\' , \''.$registro['categoria'].'\' , \''.$registro['editorial'].'\' , \''.$erro.'\' , \''.$tri.'\'  , \''.$registro['Existencia'].'\' , \''.$registro['id_libro'].'\', \''.$registro['direccionimg'].'\')">Reservar</button>
						</td>
						</table>
						<div class="vericre" id='.$erro.'></div>
						<div id='.$tri.' class="tris"></div>


				<div class="portapdf" id='.$iddiv.'> 

				 <section class="Titupdf">
				 <h2 class="ttpdf">'.$registro['nombrelibro'].'</h2>
				 </section>
				 <img onclick="clospd(\'' .$iddiv. '\')"class="cerpdf" src="Menus/Img/clospdf.ico">
				 <object class="pdflib" id='.$iddiv2.' data='.$dirpdf.' type="application/pdf"></object> 
				 </div>
						</div>			
					';
			
				}
			}else{
					$consulta3="SELECT * FROM libros WHERE categoria LIKE '%$lbl%' LIMIT $n,4;";
					$ejecutar_consulta3=$conexion->query($consulta3);

					$num3=$ejecutar_consulta3->num_rows;


					if($num3!=0)
					{
						
						if($n==0)
						{$consulta01="SELECT * FROM libros WHERE categoria LIKE '%$lbl%'";
						$ejecutar_consulta01=$conexion->query($consulta01);

						$num01=$ejecutar_consulta01->num_rows;
						$dife=$num01;
						}

						$direcc='Menus/Img/';
						$idim=0;

						while($registro=$ejecutar_consulta3->fetch_assoc())
						{	

							$idim=$idim+1;
							$iddiv='pdfimg'.$idim.'';
							$iddiv2='pdfli'.$idim.'';
							$iddesa='desa'.$idim.'';
							$erro='erro'.$idim.'';
							$tri='tri'.$idim.'';
							$dirpdf='Menus/img/'.$registro['direccionpdf'].'.pdf';
					
							$salida .= '
								<div class="cuerpos" id='.$iddesa.'>
								<table>
								<td>
								<img onclick="apari(\''.$iddiv.'\' , \''.$iddiv2.'\' , \''.$idim.'\')" src='.$direcc.$registro['direccionimg'].'.png'.'  class="imglibr" ><br/>
								</td>
								<td>
								<label class="liti">'.$registro['nombrelibro'].'</label><br/>
								<label class="objetos">Autor: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$registro['autor'].'</label><br/>
								<label class="objetos">Categoria: &nbsp;&nbsp;'.$registro['categoria'].'</label><br/>
								<label class="objetos">Editorial: &nbsp;&nbsp;&nbsp;&nbsp;'.$registro['editorial'].'</label><br/>
								<label class="objetos">Edicion: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$registro['edicion'].'</label><br/>
								<button class="bulib" onclick="fnReservar(\'' .$registro['autor']. '\' , \''.$registro['edicion'].'\' , \''.$registro['nombrelibro'].'\' , \''.$usbl.'\' , \''.$registro['categoria'].'\' , \''.$registro['editorial'].'\' , \''.$erro.'\' , \''.$tri.'\'  , \''.$registro['Existencia'].'\' , \''.$registro['id_libro'].'\', \''.$registro['direccionimg'].'\')">Reservar</button>
								</td>
								</table>
								<div class="vericre" id='.$erro.'></div>
								<div id='.$tri.' class="tris"></div>

				<div class="portapdf" id='.$iddiv.'> 

				 <section class="Titupdf">
				 <h2 class="ttpdf">'.$registro['nombrelibro'].'</h2>
				 </section>
				 <img onclick="clospd(\'' .$iddiv. '\')"class="cerpdf" src="Menus/Img/clospdf.ico">
				 <object class="pdflib" id='.$iddiv2.' data='.$dirpdf.' type="application/pdf"></object> 
				 </div>
								</div>			
							';
					
						}
					}else
					{
							$consulta4="SELECT * FROM libros WHERE editorial LIKE '%$lbl%' LIMIT $n,4;";
							$ejecutar_consulta4=$conexion->query($consulta4);

							$num4=$ejecutar_consulta4->num_rows;

							if($num4!=0)
							{
								
								if($n==0)
								{$consulta01="SELECT * FROM libros WHERE editorial LIKE '%$lbl%'";
								$ejecutar_consulta01=$conexion->query($consulta01);

								$num01=$ejecutar_consulta01->num_rows;
								$dife=$num01;
								}

								$direcc='Menus/Img/';
								$idim=0;

								while($registro=$ejecutar_consulta4->fetch_assoc())
								{	
									
									$idim=$idim+1;
									$iddiv='pdfimg'.$idim.'';
									$iddiv2='pdfli'.$idim.'';
									$iddesa='desa'.$idim.'';
									$erro='erro'.$idim.'';
									$tri='tri'.$idim.'';
									$dirpdf='Menus/img/'.$registro['direccionpdf'].'.pdf';									

									$salida .= '
										<div class="cuerpos" id='.$iddesa.'>
										<table>
										<td>
										<img onclick="apari(\''.$iddiv.'\' , \''.$iddiv2.'\' , \''.$idim.'\')" src='.$direcc.$registro['direccionimg'].'.png'.'  class="imglibr" ><br/>
										</td>
										<td>
										<label class="liti">'.$registro['nombrelibro'].'</label><br/>
										<label class="objetos">Autor: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$registro['autor'].'</label><br/>
										<label class="objetos">Categoria: &nbsp;&nbsp;'.$registro['categoria'].'</label><br/>
										<label class="objetos">Editorial: &nbsp;&nbsp;&nbsp;&nbsp;'.$registro['editorial'].'</label><br/>
										<label class="objetos">Edicion: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$registro['edicion'].'</label><br/>
										<button class="bulib" onclick="fnReservar(\'' .$registro['autor']. '\' , \''.$registro['edicion'].'\' , \''.$registro['nombrelibro'].'\' , \''.$usbl.'\' , \''.$registro['categoria'].'\' , \''.$registro['editorial'].'\' , \''.$erro.'\' , \''.$tri.'\'  , \''.$registro['Existencia'].'\' , \''.$registro['id_libro'].'\', \''.$registro['direccionimg'].'\')">Reservar</button>
										</td>
										</table>
										<div class="vericre" id='.$erro.'></div>
										<div id='.$tri.' class="tris"></div>

										<div class="portapdf" id='.$iddiv.'> 

				 <section class="Titupdf">
				 <h2 class="ttpdf">'.$registro['nombrelibro'].'</h2>
				 </section>
				 <img onclick="clospd(\'' .$iddiv. '\')"class="cerpdf" src="Menus/Img/clospdf.ico">
				 <object class="pdflib" id='.$iddiv2.' data='.$dirpdf.' type="application/pdf"></object> 
				 </div>		 </div>	
									';
							
								}
							}else{

								if($lbl==""){
										$consultat="SELECT * FROM libros LIMIT $n,4;";
										$ejecutar_consultat=$conexion->query($consultat);

										$numt=$ejecutar_consultat->num_rows;

										if($numt!=0)
										{
											if($n==0)
											{$consultato="SELECT * FROM libros";
											$ejecutar_consultato=$conexion->query($consultato);

											$numto=$ejecutar_consultato->num_rows;
											$dife=$numto;
											}
											$direcc='Menus/Img/';
											$idim=0;

											while($registro=$ejecutar_consultat->fetch_assoc())
											{	$idim=$idim+1;
												$iddiv='pdfimg'.$idim.'';
												$iddiv2='pdfli'.$idim.'';
												$iddesa='desa'.$idim.'';
												$erro='erro'.$idim.'';
												$tri='tri'.$idim.'';
												$dirpdf='Menus/img/'.$registro['direccionpdf'].'.pdf';
										
												$salida .= '
													<div class="cuerpos" id='.$iddesa.'>
													<table>
													<td>
													<img onclick="apari(\''.$iddiv.'\' , \''.$iddiv2.'\' , \''.$idim.'\')" src='.$direcc.$registro['direccionimg'].'.png'.'  class="imglibr" ><br/>
													</td>
													<td>
													<label class="liti">'.$registro['nombrelibro'].'</label><br/>
													<label class="objetos">Autor: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$registro['autor'].'</label><br/>
													<label class="objetos">Categoria: &nbsp;&nbsp;'.$registro['categoria'].'</label><br/>
													<label class="objetos">Editorial: &nbsp;&nbsp;&nbsp;&nbsp;'.$registro['editorial'].'</label><br/>
													<label class="objetos">Edicion: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$registro['edicion'].'</label><br/>
													<button class="bulib" onclick="fnReservar(\'' .$registro['autor']. '\' , \''.$registro['edicion'].'\' , \''.$registro['nombrelibro'].'\' , \''.$usbl.'\' , \''.$registro['categoria'].'\' , \''.$registro['editorial'].'\' , \''.$erro.'\' , \''.$tri.'\'  , \''.$registro['Existencia'].'\' , \''.$registro['id_libro'].'\', \''.$registro['direccionimg'].'\')">Reservar</button>
													</td>
													</table>

													<div class="vericre" id='.$erro.'></div>
													<div id='.$tri.' class="tris"></div>


				 <div class="portapdf" id='.$iddiv.'> 

				 <section class="Titupdf">
				 <h2 class="ttpdf">'.$registro['nombrelibro'].'</h2>
				 </section>
				 <img onclick="clospd(\'' .$iddiv. '\')"class="cerpdf" src="Menus/Img/clospdf.ico">

				

				 <object class="pdflib" id='.$iddiv2.' data='.$dirpdf.' type="application/pdf"></object> 
				 </div>
													</div>			
												';
										
											}
										}else{$salida .='<h1 class="errorbs" >No Hay Libros En Existencia<h1>';$busno=1;}
								}else{
											$salida .='

											<h1 class="errorbs" style="font-size:35px">Búsqueda del libro "'.$lbl.'"</h1>
											<h3 class="errorbs" >No se encontraron resultados con su búsqueda.<h3>

											';

											$busno=1;
									}
							}
					}
				}
	}

	//$busno sirve para comparar si se hiso alguna busqueda correcta o no 
	if($busno==0){
	//$dife sirve para ver si la busqueda fue mayor a 4 y si fue desplegar los botones
	if($dife>4){
	if($n>0){
		$salida .='
		<br/>
		<button class="brnpant" onclick="campag2(\''.$lbl.'\' , \''.$n.'\' , \''.$dife.'\')">
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
		$nt=$n+4;
		if($nt<$dife){
					$salida .='
					<button class="brnpant" onclick="campag(\''.$lbl.'\' , \''.$n.'\' , \''.$dife.'\')">
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
					$salida .='
					<button class="brnpant" onclick="campag(\''.$lbl.'\' , \''.$n.'\' , \''.$dife.'\')">
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
			$salida .='
			<br/>
			<button class="brnpant" onclick="campag2(\''.$lbl.'\' , \''.$n.'\' , \''.$dife.'\')">
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

			$nt=$n+4;

			if($nt<$dife){
					$salida .='
					<button class="brnpant" onclick="campag(\''.$lbl.'\' , \''.$n.'\' , \''.$dife.'\')">
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
					$salida .='
					<button class="brnpant" onclick="campag(\''.$lbl.'\' , \''.$n.'\' , \''.$dife.'\')">
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
		echo $salida;

?>