<!DOCTYPE html>
<html>
<head>
	<title>Recuperacion De Contraseña</title>
	<link rel="stylesheet" type="text/css" href="Css/RecuperarContra.css">
	<script src="../Jquery/jquery-1.9.1.min.js"></script>
	<script src="../Jquery/RecuperarContra.js"></script>

		<style type="text/css">
		    #mensanuli{
     		  display: none;
		      width: 300px;
		      height: 40px;
		      background-color: rgba(117, 118, 118, 0.8);
		      position: fixed;
		      margin-top: -150px; 
		      margin-left: 524px;
		      color: white;
		      font-size: 30px;
		      font-family: Adobe Fangsong Std R;
		      border-radius: 5px;
		      text-align: center;
		      padding-top: 5px;

		    }
	</style>

</head>
<body>
				<div id='mensanuli'></div>
		        <div id="Menu">
                <h2 id="logi">Recuperacion De Datos</h2>
                <div id="divici"></div>
              
                  <input type="text" name="Correo" id="datos" placeholder="Escriba Su Correo" class="texto" autocomplete="off"/>

                  <div id="tri1" class="tris"></div>
                  <div id="Error1" class="errores">
                  <img src="../Imagenes/Error1.png" id="IErr" class="Erro">
                  <label id="Mensaje1" class="Mensa"></label>
                  </div>

                  <input type="button" name="Envio" id="En" value="Enviar Correo" /><br/><br/>
                </div>
</body>
</html>