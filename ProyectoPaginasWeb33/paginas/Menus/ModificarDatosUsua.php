<?php include ("../sesionperf.php");?>
<!DOCTYPE html>
<html>
<head>
<!--Muestra las reservaciones que tiene el usuario-->
	<title></title>
	<script src="../Jquery/jquery-1.9.1.min.js"></script>
	<script src="js/ModificarDatosUsua.js"></script>
	<link rel="stylesheet" type="text/css" href="Css/ModificarDatosUsua.css" />




</head>
<body>
<label id="sesi" style="display:none"><?php echo $_SESSION["usuario"];?></label>

	<h1 id="restitulo">Datos Del Usuario: </h1>

	<div id="ModiDatos">

	<form id="cuerpo2" name="mofificar" action="Menus/ProcesoModificadoDatos.php" method="post" enctype="multipart/form-data">

						<div id="ap1">
						<label for="usuario" class="itu">*Usuario:</label></br>
						<input type="text" id="usuario" class="date" name="Usuario"  placeholder="Usuario" onkeyup="BusUsuario(this.value)"  onFocus="vaciar()"  onBlur="llena()" autocomplete="off" ><br/><br/>


						<div id="tri1" class="tris1"></div>
						<div id="Error1" class="errores1">
							<img src="../Imagenes/Error1.png" id="IErr" class="Erro">
	  						<label id="Mensaje1" class="Mensa"></label>
						</div>

						<label for="contraseña" class="itu">*Contraseña:</label></br>
						<input type="password" id="contraseña" class="date" name="Contrasea" placeholder="Contraseña" onFocus="vaciar2()"  onBlur="llena2()" autocomplete="off" ><br/><br/>

						<div id="tri2" class="tris1"></div>
						<div id="Error2" class="errores1">
							<img src="../Imagenes/Error1.png" id="IErr2" class="Erro">
	  						<label id="Mensaje2" class="Mensa"></label>
						</div>

						<label for="contraseña2" class="itu">*Verificar Contraseña:</label></br>
						<input type="password" id="contraseña2" class="date" name="vpassword" placeholder="Contraseña" onFocus="vaciar3()"  onBlur="llena3()" autocomplete="off" ><br/><br/>
						
						<div id="tri3" class="tris1"></div>
						<div id="Error3" class="errores1">
							<img src="../Imagenes/Error1.png" id="IErr3" class="Erro">
	  						<label id="Mensaje3" class="Mensa"></label>
						</div>
						
						
						<label for="nombre" class="itu">*Nombre:</label></br>
						<input type="text" id="nombre" class="date" name="Nombre" placeholder="Nombre" onFocus="vaciar4()"  onBlur="llena4()" autocomplete="off" ><br/><br/>
						
						<div id="tri4" class="tris1"></div>
						<div id="Error4" class="errores1">
							<img src="../Imagenes/Error1.png" id="IErr4" class="Erro">
	  						<label id="Mensaje4" class="Mensa"></label>
						</div>

						<label for="apellido" class="itu">*Apellido:</label></br>
						<input type="text" id="apellido" class="date" name="Apellido" placeholder="Apellido" onFocus="vaciar5()"  onBlur="llena5()" autocomplete="off" ><br/><br/>
						
						<div id="tri5" class="tris1"></div>
						<div id="Error5" class="errores1">
							<img src="../Imagenes/Error1.png" id="IErr5" class="Erro">
	  						<label id="Mensaje5" class="Mensa"></label>
						</div>

						<label for="telefono" class="itu">*Telefono: </label><br/>
						<input type="text" id="telefono" class="date" name="telefono" placeholder="Telefono" onFocus="vaciar6()"  onBlur="llena6()" autocomplete="off"><br/><br/>
						
						<div id="tri6" class="tris1"></div>
						<div id="Error6" class="errores1">
							<img src="../Imagenes/Error1.png" id="IErr6" class="Erro">
	  						<label id="Mensaje6" class="Mensa"></label>
						</div>

						<label for="Direccion" class="itu">*Direccion</label><br/>
						<input type="text" id="Direccion" class="date" name="Direccion" placeholder="Direccion" onFocus="vaciar7()"  onBlur="llena7()" autocomplete="off" ><br/><br/>

						<div id="tri10" class="tris1"></div>
						<div id="Error10" class="errores1">
							<img src="../Imagenes/Error1.png" id="IErr10" class="Erro">
	  						<label id="Mensaje10" class="Mensa"></label>
						</div>
						</div>

						<div id="ap2">
						<label class="itu">*Sexo:</label><br/>
						<input type="radio" id="sex" name="sexo" value="Masculino"/>&nbsp;
						<label for="sex" class="itu">Masculino</label>
						&nbsp;&nbsp;&nbsp;
						<input type="radio" id="sex2" name="sexo" value="Femenino" />&nbsp;
						<label for="sex2"  class="itu">Femenino</label><br/><br/>

						<div id="tri7" class="tris"></div>
						<div id="Error7" class="errores">
							<img src="../Imagenes/Error1.png" id="IErr7" class="Erro">
	  						<label id="Mensaje7" class="Mensa"></label>
						</div>'
						

						<label for="nacimiento" class="itu">*Fecha de nacimiento</label><br/>
						<input type="date" id="nacimiento" name="nacimiento" onFocus="vaciar8()"  onBlur="llena8()" class="date" ><br/><br/>

						<div id="tri8" class="tris"></div>
						<div id="Error8" class="errores">
							<img src="../Imagenes/Error1.png" id="IErr8" class="Erro">
	  						<label id="Mensaje8" class="Mensa"></label>
						</div>

						<label for="email" class="itu">*Email:</label><br/>
						<input type="email" id="email" name="email" class="date" placeholder="Email" onFocus="vaciar9()"  onBlur="llena9()" autocomplete="off" ><br/><br/>

						<div id="tri9" class="tris"></div>
						<div id="Error9" class="errores">
							<img src="../Imagenes/Error1.png" id="IErr9" class="Erro">
	  						<label id="Mensaje9" class="Mensa"></label>
						</div>


						<label for="addImage" class="itu">*Subir Imagen</label><br/><br/>
						<img src="" id="avatarmo"><br/><br/>
						<input type="file" name="SubIm" id="imagen" style="color:white" /><br/><br/>

						<div id="tri11" class="tris"></div>
						<div id="Error11" class="errores">
							<img src="../Imagenes/Error1.png" id="IErr11" class="Erro">
	  						<label id="Mensaje11" class="Mensa"></label>
						</div>
						
						</div>
						</br></br>

						<button id="Env" onclick="Valid()">Modificar</button>
			</form>
			</div>

</body>
</html>