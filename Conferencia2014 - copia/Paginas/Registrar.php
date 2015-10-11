<!DOCTYPE html>
<html>
<head>
	<title>Registar</title>
	<link type="text/css" rel="stylesheet" href="../Css/Registro.css"/>
	<script src="../JQuery/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="../JQuery/ValidacionRegistros.js"></script>
	<link rel="stylesheet" type="text/css" href="../Css/estilo.css" />
</head>
<body>
	<div id="contenido">

						<section class="main">
                 
		                <h2 class="cs-text">
		                    <span class="cs-text-cut" id="uno">Formulario De Registro</span>
		                    <span class="cs-text-mid"  id="treis"><label id="texto">Registro</label></span>
		                    <span class="cs-text-cut" id="dos">Formulario De Registro</span>
		                </h2>
		                 
		            	</section>

		            	
	<form id="cuerpo" name="registros" action="Registrando.php" method="post" enctype="multipart/form-data"/>

						

						<label for="nombre1">Primer Nombre:</label>
						<input type="text" id="nombre1" class="date" name="nombre1" placeholder="Primer Nombre" autocomplete="off"><br/><br/>


						<div id="tri1" class="tris1"></div>
						<div id="Error1" class="errores1">
							<img src="../Img/Error1.png" id="IErr" class="Erro">
	  						<label id="Mensaje1" class="Mensa"></label>
						</div>

						<label for="nombre2">Segundo Nombre:</label>
						<input type="text" id="nombre2" class="date" name="nombre2" placeholder="Segundo Nombre" autocomplete="off" /><br/><br/>

						<div id="tri2" class="tris1"></div>
						<div id="Error2" class="errores1">
							<img src="../Img/Error1.png" id="IErr2" class="Erro">
	  						<label id="Mensaje2" class="Mensa"></label>
						</div>

						<label for="apellido1">Primer Apellido:</label>
						<input type="text" id="apellido1" class="date" name="apellido1" placeholder="Primer Apellido" autocomplete="off"/><br/><br/>
						
						<div id="tri3" class="tris1"></div>
						<div id="Error3" class="errores1">
							<img src="../Img/Error1.png" id="IErr3" class="Erro">
	  						<label id="Mensaje3" class="Mensa"></label>
						</div>
						
						
						<label for="apellido2">Segundo Apellido:</label>
						<input type="text" id="apellido2" class="date" name="apellido2" placeholder="Segundo Apellido" autocomplete="off"/><br/><br/>
						
						<div id="tri4" class="tris1"></div>
						<div id="Error4" class="errores1">
							<img src="../Img/Error1.png" id="IErr4" class="Erro">
	  						<label id="Mensaje4" class="Mensa"></label>
						</div>

						<label for="telefono">Telefono:</label>
						<input type="text" id="telefono" class="date" name="telefono" placeholder="Telefono" autocomplete="off"/><br/><br/>
						
						<div id="tri5" class="tris1"></div>
						<div id="Error5" class="errores1">
							<img src="../Img/Error1.png" id="IErr5" class="Erro">
	  						<label id="Mensaje5" class="Mensa"></label>
						</div>

						<label for="correo">Correo: </label>
						<input type="text" id="correo" class="date" name="correo" placeholder="Correo" autocomplete="off" /><br/><br/>
						
						<div id="tri6" class="tris1"></div>
						<div id="Error6" class="errores1">
							<img src="../Img/Error1.png" id="IErr6" class="Erro">
	  						<label id="Mensaje6" class="Mensa"></label>
						</div>

						<label>Plan:</label>
						<SELECT NAME="cboplan" SIZE=1 class="date" id="cboplan"> 
						<option value="">------</option>
						<OPTION VALUE="Diario">Diario</OPTION>
						<OPTION VALUE="Fin De Semana">Fin De Semana</OPTION>
						</SELECT> <br/><br/>

						<div id="tri7" class="tris1"></div>
						<div id="Error7" class="errores1">
							<img src="../Img/Error1.png" id="IErr7" class="Erro">
	  						<label id="Mensaje7" class="Mensa"></label>
						</div>

						<label for="codigo">Codigo Ticket: </label>
						<input type="text" id="codigo" class="date" name="codigo" placeholder="Codigo Ticket" autocomplete="off" /><br/><br/>
						
						<div id="tri8" class="tris1"></div>
						<div id="Error8" class="errores1">
							<img src="../Img/Error1.png" id="IErr8" class="Erro">
	  						<label id="Mensaje8" class="Mensa"></label>
						</div>

						
					
						<input type="button" id="Env" value="Registrar"/>
	</form>
	</div>
</body>
</html>