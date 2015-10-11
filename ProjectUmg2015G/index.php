<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UMG</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/index.css">
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>

</head>
<body>
	
	
	<nav class="navbar navbar-default" role="navigation">
		 <div class="container">
			<div class="navbar-header">
			<button type="button" data-target="#navbar" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
				<a href="#" class="navbar-brand"><img alt="Brand" class="logo" src="img/logo.png">
				Pagina Registro UMG
				</a>
			</div>

			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a data-toggle="modal" data-target=".bs-example-modal-lg" id="btnregistrados">Registrados</a></li>
					<li><a id="btnregistrar">Registrarse</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<!-- Modal -->
	<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
		   <div class="modal-content">
		     <div class="modal-header">
		       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		       <h3 class="modal-title" id="myModalLabel">Registrados</h3>
		    </div>
		    <div  >
			    <div class="modal-body" id="contdiv">
			        <!-- contenido modal -->
			        <table class="table table-striped" id="regtb">
					  	<thead>
					  		<tr>
					  			<th>Nombres</th>
					  			<th>Apellidos</th>
					  			<th>Categoria</th>
					  		</tr>
					  	</thead>

					  	<tbody>
					  		
					  	</tbody>
					</table>
			    </div>
			    <div class="modal-footer">
			    	<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
			    </div>
		   </div>
		   </div>
		 </div>
	</div>
	
	<div class="fondo">
		
	</div>

	<footer>
		
	</footer>


</body>
</html>