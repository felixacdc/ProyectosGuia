<!DOCTYPE html>
<html>
<head>
	<title>Conferencia UMG</title>
	<link type="text/css" rel="stylesheet" href="Css/Index.css"/>
	<script src="JQuery/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="JQuery/modal.js"></script>



	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
	<script type="text/javascript" src ="bootstrap/js/bootstrap.min.js"></script>
	
</head>
<body>

	<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">

			<div class="modal-content">
				
				<div class="modal-header">
					<h3 id="myModalLabel">Alumnos Registrados</h3>
				</div>


				<div class="modal-body" id = "Contenido">
					
				</div>


				<div class="modal-footer">
				</div>
			</div>
	</div>
	</div>

<div id="divbotones">
<input type="button" name="Consultar"  value="Consultar Registro" id="btnconsulta"  class="btn btn-primary btn-lg active"/> 
<a href="Paginas/Registrar.php" id="hipregistro"><input type="button" name="Registrar"  value="Registrarse" id="btnregistro"  class="btn btn-default btn-lg active" /></a>
</div>
</body>
</html>