<!DOCTYPE html>
<html>
<head>
<!--Ingresa un nuevo libro al servidor-->
	<title></title>
	<script src="../Jquery/jquery-1.9.1.min.js"></script>
	<script src="js/RegistroLibro.js"></script>
	<link rel="stylesheet" type="text/css" href="Css/NuevoLibroA.css">
</head>
<body>
<form id="LibroNuevo" name="LibroNuevo" action="Menus/AgregarLibro.php" method="post" enctype="multipart/form-data">
						<div id="ap1">
						<label for="Nlibro" class="encalbl">*Nombre Libro:</label></br>
						<input type="text" id="Nlibro" class="date" name="Nlibro" placeholder="Libro" onkeyup="BusLibro(this.value, autor.value, Edicion.value)" autocomplete="off"><br/><br/>


						<div id="tri1" class="tris1"></div>
						<div id="Error1" class="errores1">
							<img src="../Imagenes/Error1.png" id="IErr" class="Erro">
	  						<label id="Mensaje1" class="Mensa"></label>
						</div>

						<label for="contraseña" class="encalbl">*Autor:</label></br>
						<input type="text" id="autor" class="date" name="Autor" placeholder="Autor" autocomplete="off" onkeyup="BusLibro(Nlibro.value, this.value, Edicion.value)" /><br/><br/>

						<div id="tri2" class="tris1"></div>
						<div id="Error2" class="errores1">
							<img src="../Imagenes/Error1.png" id="IErr2" class="Erro">
	  						<label id="Mensaje2" class="Mensa"></label>
						</div>

						<label for="Edicion" class="encalbl">*Edicion:</label></br>
						<input type="text" id="Edicion" class="date" name="Edicion" placeholder="Edicion" autocomplete="off" onkeyup="BusLibro(Nlibro.value, autor.value, this.value)"/><br/><br/>
						
						<div id="tri4" class="tris1"></div>
						<div id="Error4" class="errores1">
							<img src="../Imagenes/Error1.png" id="IErr4" class="Erro">
	  						<label id="Mensaje4" class="Mensa"></label>
						</div>

						<label for="Editorial" class="encalbl">*Editorial:</label></br>
						<input type="text" id="Editorial" class="date" name="Editorial" placeholder="Editorial" autocomplete="off"/><br/><br/>
						
						<div id="tri3" class="tris1"></div>
						<div id="Error3" class="errores1">
							<img src="../Imagenes/Error1.png" id="IErr3" class="Erro">
	  						<label id="Mensaje3" class="Mensa"></label>
						</div>
						
						
						<label for="Categoria" class="encalbl">*Categoria:</label></br>
						<input type="text" id="Categoria" class="date" name="Categoria" placeholder="Categoria" autocomplete="off"/><br/><br/>
						
						<div id="tri5" class="tris1"></div>
						<div id="Error5" class="errores1">
							<img src="../Imagenes/Error1.png" id="IErr5" class="Erro">
	  						<label id="Mensaje5" class="Mensa"></label>
						</div>

						</div>

						<div id="ap2">
						<label for="addImage" class="encalbl">*Subir Imagen</label><br/><br/><br/><br/><br/><br/><br/>
						<img src="../Imagenes/Avatarlibro.png" id="avatar"><br/><br/>
						<input type="file" name="SubIm" id="imagen" /><br/><br/>

						<div id="tri11" class="tris"></div>
						<div id="Error11" class="errores">
							<img src="../Imagenes/Error1.png" id="IErr11" class="Erro">
	  						<label id="Mensaje11" class="Mensa"></label>
						</div>
						
						<label for="addImage" class="encalbl">*Subir PDF</label><br/><br/>
						<input type="file" name="Subpdf" id="imgpdf" /><br/><br/>

						<div id="tri12" class="tris"></div>
						<div id="Error12" class="errores">
							<img src="../Imagenes/Error1.png" id="IErr12" class="Erro">
	  						<label id="Mensaje12" class="Mensa"></label>
						</div>

						</div>
						</br></br>

						<input type="button" id="Env" value="Registrar"/>
					
					</form>	
</body>
</html>
