<?php
//Registro de clientes
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
session_start();

if($_SESSION["activacion"]){
  $usu=$_SESSION['usuario'];

  include('Conexion.php');

  $consulta="SELECT * FROM regusuarios WHERE usuario='$usu'";

    $ejecutar_consulta=$conexion->query($consulta);

    $num_regs=$ejecutar_consulta->num_rows;

    if($num_regs==0)
    { 
      $consulta2="SELECT * FROM admibiblio WHERE usuario_ad='$usu'";

      $ejecutar_consulta2=$conexion->query($consulta2);

      $num_regs2=$ejecutar_consulta2->num_rows;

      if($num_regs2!=0)
      {

        header("Location: Administer.php");
      }
    }else{


      header("Location: Perfil.php");
    }

}?>
<!DOCTYPE html>
<html>
	<head>
		<title>Registro</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="author" content="Manuel Baronetti" />

        <link rel="stylesheet" type="text/css" href="../Css/Logo/style.css" />
		<link type="text/css" rel="stylesheet" href="../css/Registro.css"/>
		<script src="../Jquery/jquery-1.9.1.min.js"></script>
		<script src="../Jquery/Registro.js"></script>


        	
	        
	</head>

	<body>

	   		<section id="Fondo">
	   		<table>
		     <tr id="bod">
		     

	        <div class="container">
            <section class="main">
                 
                <h2 class="cs-text">
                    <span class="cs-text-cut" id="uno">LiteraturaMania</span>
                    <span class="cs-text-mid"><label id="texto">Crea Tu Cuenta</label></span>
                    <span class="cs-text-cut" id="dos">LiteraturaMania</span>
                </h2>
                 
            </section>
             
        	</div>


		    </tr>
		    </table>
     			
					<form id="cuerpo" name="registros" action="Registrando.php" method="post" enctype="multipart/form-data"/>
						<div id="ap1">
						<label for="usuario">*Usuario:</label></br>
						<input type="text" id="usuario" class="date" name="Usuario" placeholder="Usuario" onkeyup="BusUsuario(this.value)" autocomplete="off"><br/><br/>


						<div id="tri1" class="tris1"></div>
						<div id="Error1" class="errores1">
							<img src="../Imagenes/Error1.png" id="IErr" class="Erro">
	  						<label id="Mensaje1" class="Mensa"></label>
						</div>

						<label for="contraseña">*Contraseña:</label></br>
						<input type="password" id="contraseña" class="date" name="Contraseña" placeholder="Contraseña" autocomplete="off" /><br/><br/>

						<div id="tri2" class="tris1"></div>
						<div id="Error2" class="errores1">
							<img src="../Imagenes/Error1.png" id="IErr2" class="Erro">
	  						<label id="Mensaje2" class="Mensa"></label>
						</div>

						<label for="contraseña2">*Verificar Contraseña:</label></br>
						<input type="password" id="contraseña2" class="date" name="vpassword" placeholder="Contraseña" autocomplete="off"/><br/><br/>
						
						<div id="tri3" class="tris1"></div>
						<div id="Error3" class="errores1">
							<img src="../Imagenes/Error1.png" id="IErr3" class="Erro">
	  						<label id="Mensaje3" class="Mensa"></label>
						</div>
						
						
						<label for="nombre">*Nombre:</label></br>
						<input type="text" id="nombre" class="date" name="Nombre" placeholder="Nombre" autocomplete="off"/><br/><br/>
						
						<div id="tri4" class="tris1"></div>
						<div id="Error4" class="errores1">
							<img src="../Imagenes/Error1.png" id="IErr4" class="Erro">
	  						<label id="Mensaje4" class="Mensa"></label>
						</div>

						<label for="apellido">*Apellido:</label></br>
						<input type="text" id="apellido" class="date" name="Apellido" placeholder="Apellido" autocomplete="off"/><br/><br/>
						
						<div id="tri5" class="tris1"></div>
						<div id="Error5" class="errores1">
							<img src="../Imagenes/Error1.png" id="IErr5" class="Erro">
	  						<label id="Mensaje5" class="Mensa"></label>
						</div>

						<label for="telefono">*Telefono: </label><br/>
						<input type="text" id="telefono" class="date" name="telefono" placeholder="Telefono" autocomplete="off" /><br/><br/>
						
						<div id="tri6" class="tris1"></div>
						<div id="Error6" class="errores1">
							<img src="../Imagenes/Error1.png" id="IErr6" class="Erro">
	  						<label id="Mensaje6" class="Mensa"></label>
						</div>

						<label>*Direccion</label><br/>
						<input type="text" id="Direccion" class="date" name="Direccion" placeholder="Direccion" autocomplete="off" /><br/><br/>

						<div id="tri10" class="tris1"></div>
						<div id="Error10" class="errores1">
							<img src="../Imagenes/Error1.png" id="IErr10" class="Erro">
	  						<label id="Mensaje10" class="Mensa"></label>
						</div>
						</div>

						<div id="ap2">
						<label>*Sexo:</label><br/>
						<input type="radio" id="sex" name="sexo" value="Masculino" />&nbsp;
						<label for="sex">Masculino</label>
						&nbsp;&nbsp;&nbsp;
						<input type="radio" id="sex2" name="sexo" value="Femenino" />&nbsp;
						<label for="sex2">Femenino</label><br/><br/>

						<div id="tri7" class="tris"></div>
						<div id="Error7" class="errores">
							<img src="../Imagenes/Error1.png" id="IErr7" class="Erro">
	  						<label id="Mensaje7" class="Mensa"></label>
						</div>

						<label for="nacimiento">*Fecha de nacimiento</label><br/>
						<input type="date" id="nacimiento" name="nacimiento" class="date" /><br/><br/>

						<div id="tri8" class="tris"></div>
						<div id="Error8" class="errores">
							<img src="../Imagenes/Error1.png" id="IErr8" class="Erro">
	  						<label id="Mensaje8" class="Mensa"></label>
						</div>

						<label for="email">*Email:</label><br/>
						<input type="email" id="email" name="email" class="date" placeholder="Email" onkeyup="BusEmail(this.value)" autocomplete="off"/><br/><br/>

						<div id="tri9" class="tris"></div>
						<div id="Error9" class="errores">
							<img src="../Imagenes/Error1.png" id="IErr9" class="Erro">
	  						<label id="Mensaje9" class="Mensa"></label>
						</div>


						<label for="addImage">*Subir Imagen</label><br/><br/>
						<img src="../Imagenes/Avatar.png" id="avatar"><br/><br/>
						<input type="file" name="SubIm" id="imagen" /><br/><br/>

						<div id="tri11" class="tris"></div>
						<div id="Error11" class="errores">
							<img src="../Imagenes/Error1.png" id="IErr11" class="Erro">
	  						<label id="Mensaje11" class="Mensa"></label>
						</div>
						
						</div>
						</br></br>

						<input type="button" id="Env" value="Registrar"/>
					
					</form>	

			</section>

	</body>

</html>