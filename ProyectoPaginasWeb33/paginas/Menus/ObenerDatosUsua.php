<?php
 $UsuarioBS=$_POST["Usuari"];

 	error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
	include('../Conexion.php');


	$consulta="SELECT * FROM regusuarios WHERE usuario='$UsuarioBS'";
	$ejecutar_consulta=$conexion->query($consulta);

	$num01=$ejecutar_consulta->num_rows;

	if($num01!=0){
	$registro=$ejecutar_consulta->fetch_assoc();

	$Usuari = $registro['usuario'];
	$Pass = $registro['password'];
	$Nomb = $registro['nombre'];
	$Apel = $registro['apellido'];
	$Tele = $registro['telefono'];
	$Dire = $registro['direccion'];
	$Sexs = $registro['sexo'];
	$Naci = $registro['fechanacimiento'];
	$Emai = $registro['email'];
	$Avat = $registro['Avatar'];



	$salidaJson = array("Usu" => $Usuari,
						"Pas" => $Pass,
						"Nom" => $Nomb,
						"Ape" => $Apel,
						"Tel" => $Tele,
						"Dir" => $Dire,
						"Sex" => $Sexs,
						"Nac" => $Naci,
						"Ema" => $Emai,
						"Ava" => $Avat);

	echo json_encode($salidaJson);

	}


	
	/*$HtmlBus='
				
						<div id="ap1">
						<label for="usuario" class="itu">*Usuario:</label></br>
						<input type="text" id="usuario" class="date" name="Usuario"  placeholder="Usuario" onkeyup="BusUsuario(this.value)"  onFocus="vaciar()"  onBlur="llena()" autocomplete="off" value='.$registro['usuario'].'><br/><br/>


						<div id="tri1" class="tris1"></div>
						<div id="Error1" class="errores1">
							<img src="../Imagenes/Error1.png" id="IErr" class="Erro">
	  						<label id="Mensaje1" class="Mensa"></label>
						</div>

						<label for="contraseña" class="itu">*Contraseña:</label></br>
						<input type="password" id="contraseña" class="date" name="Contrasea" placeholder="Contraseña" onFocus="vaciar2()"  onBlur="llena2()" autocomplete="off" value='.$registro['password'].'><br/><br/>

						<div id="tri2" class="tris1"></div>
						<div id="Error2" class="errores1">
							<img src="../Imagenes/Error1.png" id="IErr2" class="Erro">
	  						<label id="Mensaje2" class="Mensa"></label>
						</div>

						<label for="contraseña2" class="itu">*Verificar Contraseña:</label></br>
						<input type="password" id="contraseña2" class="date" name="vpassword" placeholder="Contraseña" onFocus="vaciar3()"  onBlur="llena3()" autocomplete="off" value='.$registro['password'].'><br/><br/>
						
						<div id="tri3" class="tris1"></div>
						<div id="Error3" class="errores1">
							<img src="../Imagenes/Error1.png" id="IErr3" class="Erro">
	  						<label id="Mensaje3" class="Mensa"></label>
						</div>
						
						
						<label for="nombre" class="itu">*Nombre:</label></br>
						<input type="text" id="nombre" class="date" name="Nombre" placeholder="Nombre" onFocus="vaciar4()"  onBlur="llena4()" autocomplete="off" value='.$registro['nombre'].'><br/><br/>
						
						<div id="tri4" class="tris1"></div>
						<div id="Error4" class="errores1">
							<img src="../Imagenes/Error1.png" id="IErr4" class="Erro">
	  						<label id="Mensaje4" class="Mensa"></label>
						</div>

						<label for="apellido" class="itu">*Apellido:</label></br>
						<input type="text" id="apellido" class="date" name="Apellido" placeholder="Apellido" onFocus="vaciar5()"  onBlur="llena5()" autocomplete="off" value='.$registro['apellido'].'><br/><br/>
						
						<div id="tri5" class="tris1"></div>
						<div id="Error5" class="errores1">
							<img src="../Imagenes/Error1.png" id="IErr5" class="Erro">
	  						<label id="Mensaje5" class="Mensa"></label>
						</div>

						<label for="telefono" class="itu">*Telefono: </label><br/>
						<input type="text" id="telefono" class="date" name="telefono" placeholder="Telefono" onFocus="vaciar6()"  onBlur="llena6()" autocomplete="off" value='.$registro['telefono'].'><br/><br/>
						
						<div id="tri6" class="tris1"></div>
						<div id="Error6" class="errores1">
							<img src="../Imagenes/Error1.png" id="IErr6" class="Erro">
	  						<label id="Mensaje6" class="Mensa"></label>
						</div>

						<label for="Direccion" class="itu">*Direccion</label><br/>
						<input type="text" id="Direccion" class="date" name="Direccion" placeholder="Direccion" onFocus="vaciar7()"  onBlur="llena7()" autocomplete="off" value='.$registro['direccion'].'><br/><br/>

						<div id="tri10" class="tris1"></div>
						<div id="Error10" class="errores1">
							<img src="../Imagenes/Error1.png" id="IErr10" class="Erro">
	  						<label id="Mensaje10" class="Mensa"></label>
						</div>
						</div>';*/
			/*if($registro['sexo']=='Masculino'){
				$HtmlBus.='
						<div id="ap2">
						<label class="itu">*Sexo:</label><br/>
						<input type="radio" id="sex" name="sexo" value="Masculino" checked/>&nbsp;
						<label for="sex" class="itu">Masculino</label>
						&nbsp;&nbsp;&nbsp;
						<input type="radio" id="sex2" name="sexo" value="Femenino" />&nbsp;
						<label for="sex2"  class="itu">Femenino</label><br/><br/>

						<div id="tri7" class="tris"></div>
						<div id="Error7" class="errores">
							<img src="../Imagenes/Error1.png" id="IErr7" class="Erro">
	  						<label id="Mensaje7" class="Mensa"></label>
						</div>';
			}else
			{$HtmlBus.='
						<div id="ap2">
						<label class="itu">*Sexo:</label><br/>
						<input type="radio" id="sex" name="sexo" value="Masculino" />&nbsp;
						<label for="sex" class="itu">Masculino</label>
						&nbsp;&nbsp;&nbsp;
						<input type="radio" id="sex2" name="sexo" value="Femenino" checked/>&nbsp;
						<label for="sex2"  class="itu">Femenino</label><br/><br/>

						<div id="tri7" class="tris"></div>
						<div id="Error7" class="errores">
							<img src="../Imagenes/Error1.png" id="IErr7" class="Erro">
	  						<label id="Mensaje7" class="Mensa"></label>
						</div>';}*/

		/*$HtmlBus.='

						<label for="nacimiento" class="itu">*Fecha de nacimiento</label><br/>
						<input type="date" id="nacimiento" name="nacimiento" onFocus="vaciar8()"  onBlur="llena8()" class="date" value='.$registro['fechanacimiento'].' ><br/><br/>

						<div id="tri8" class="tris"></div>
						<div id="Error8" class="errores">
							<img src="../Imagenes/Error1.png" id="IErr8" class="Erro">
	  						<label id="Mensaje8" class="Mensa"></label>
						</div>

						<label for="email" class="itu">*Email:</label><br/>
						<input type="email" id="email" name="email" class="date" placeholder="Email" onFocus="vaciar9()"  onBlur="llena9()" autocomplete="off" value='.$registro['email'].' ><br/><br/>

						<div id="tri9" class="tris"></div>
						<div id="Error9" class="errores">
							<img src="../Imagenes/Error1.png" id="IErr9" class="Erro">
	  						<label id="Mensaje9" class="Mensa"></label>
						</div>


						<label for="addImage" class="itu">*Subir Imagen</label><br/><br/>
						<img src="../'.$registro['Avatar'].'" id="avatarmo"><br/><br/>
						<input type="file" name="SubIm" id="imagen" style="color:white" /><br/><br/>

						<div id="tri11" class="tris"></div>
						<div id="Error11" class="errores">
							<img src="../Imagenes/Error1.png" id="IErr11" class="Erro">
	  						<label id="Mensaje11" class="Mensa"></label>
						</div>
						
						</div>
						</br></br>

						<button id="Env" onclick="Valid()">Modificar</button>
					
					
				';*/
?>

