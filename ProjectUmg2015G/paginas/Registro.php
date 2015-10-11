<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro UMG</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/registro.css">
	<link rel="stylesheet" href="../font-awesome-4.3.0/css/font-awesome.css">
	<script src="../js/jquery-1.9.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/scriptRegistro.js"></script>
</head>
<body>
	
	<nav class="navbar navbar-default" role="navigation">
		 <div class="container">
			<div class="navbar-header">
				<a href="../" class="navbar-brand"><img alt="Brand" class="logo" src="../img/logo.png">
				Pagina Registro UMG
				</a>
			</div>

			
		</div>
	</nav>
	
	<div class="site-wrapper">
    <div class="site-wrapper-inner">
	<div class="container">
		
		<!-- CREACION DE TITULO PRINCIPAL -->
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="page-header">
				 	<h1 class="titlepage">Registro</h1>
				</div>
			</div>
			<div class="col-md-3"></div>
		</div>
		
		<div class="row">
			
			<div class="col-md-4"></div>
			
			<!-- CREACION DE FORMULARIO -->
			<div class="col-md-4">

				<form action="actionrecord.php" name="Registro" method="POST" enctype="multipart/form-data" class="form-horizontal">

				<!-- Ingreso de Nombres -->
				  <div class="form-group" id="ErrorNomdiv">
				  	<label class="control-label control-label-input-group" id="ErrorNomlbl" for="inputError1"></label>
				  	<div class="input-group">
				  		<span class="input-group-addon"><i class="fa fa-user"></i></span>
				    	<input type="text" name="Nombres" class="form-control" id="txtnombre" placeholder="Nombres" autocomplete="off">
				    </div>
				  </div>

				  <!-- Ingreso de Apellidos -->
				  <div class="form-group" id="ErrorApdiv">
				    <label class="control-label control-label-input-group" id="ErrorAplbl" for="inputError2"></label>
				    <div class="input-group">
					    <span class="input-group-addon"><i class="fa fa-user"></i></span>
					    <input type="text" name="Apellidos" class="form-control" id="txtapellido" placeholder="Apellidos" autocomplete="off">
				    </div>
				  </div>

				  <!-- Ingreso de Email -->
				  <div class="form-group" id="ErrorEmadiv">
				    <label class="control-label control-label-input-group" id="ErrorEmalbl" for="inputError2"></label>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-at"></i></span>
				    	<input type="text" name="Email" class="form-control" id="txtemail" placeholder="Email" autocomplete="off">
				    </div>
				  </div>
				  <!-- Ingreso de Telefono -->
				  <div class="form-group" id="ErrorTeldiv">
				  	<label class="control-label control-label-input-group" id="ErrorTellbl" for="inputError2"></label>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-phone-square"></i></span>
				   		<input type="text" name="Telefono" class="form-control" id="txttelefono" placeholder="Telefono" autocomplete="off">
				   	</div>
				  </div>
					
					<!-- Ingreso Sexo -->
				  <div class="form-group" id="ErrorSexdiv">
				  	<label class="control-label control-label-input-group" id="ErrorSexlbl" for="inputError2"></label>
				  	<div class="input-group">
				  		<span class="input-group-addon"><i class="fa fa-venus-mars"></i></span>
				  		<SELECT NAME="cbosexo" class="form-control" SIZE=0 id="cbosexo" placeholder="Plan"></SELECT>
					</div>
				  </div>
					
					<!-- categorias -->
					<div class="form-group" id="ErrorCatdiv">
						<label class="control-label control-label-input-group" id="ErrorCatlbl" for="inputError2"></label>
						<div class="input-group">
							<label class="col-sm-4 control-label">Categorias:</label>
							<div class="col-sm-8">
							  	<label class="radio-inline" >
								  <input type="radio" name="option" id="Radio1" value="Estudiante">Estudiante
								</label>
								<label class="radio-inline">
								  <input type="radio" name="option" id="Radio2" value="Libre">Libre
								</label>
							</div>
						</div>
					</div>

					<!-- Ingreso de Emp -->
					  <div class="form-group" id="ErrorEmpdiv">
					  	<label class="control-label control-label-input-group" id="ErrorEmplbl" for="inputError2"></label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-building-o"></i></span>
					   		<input type="text" name="empresa" class="form-control" id="txtempresa" placeholder="Empresa" autocomplete="off">
					   	</div>
					  </div>

					<!-- Ingreso de Nombres -->
				  <div class="form-group" id="ErrorNom2div">
				  	<label class="control-label control-label-input-group" id="ErrorNom2lbl" for="inputError1"></label>
				  	<div class="input-group">
				  		<span class="input-group-addon"><i class="fa fa-user"></i></span>
				    	<input type="text" name="NombresAco" class="form-control" id="txtnombre2" placeholder="Nombres Acompañante" autocomplete="off">
				    </div>
				  </div>

				  <!-- Ingreso de Apellidos -->
				  <div class="form-group" id="ErrorAp2div">
				    <label class="control-label control-label-input-group" id="ErrorAp2lbl" for="inputError2"></label>
				    <div class="input-group">
					    <span class="input-group-addon"><i class="fa fa-user"></i></span>
					    <input type="text" name="Apellidos2" class="form-control" id="txtapellido2" placeholder="Apellidos Acompañante" autocomplete="off">
				    </div>
				  </div>
				  
				  <!-- Ingreso de Plan -->
				  <div class="form-group" id="ErrorPladiv">
				  	<label class="control-label control-label-input-group" id="ErrorPlalbl" for="inputError2"></label>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-language"></i></span>
					  	<SELECT NAME="cboplan" class="form-control" SIZE=0 id="cboplan" placeholder="Plan"></SELECT>
					</div>
				  </div>

				  <!-- Ingreso de Carrera -->
				  <div class="form-group" id="ErrorCardiv">
				  	<label class="control-label control-label-input-group" id="ErrorCarlbl" for="inputError2"></label>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-mortar-board"></i></span>
					  	<SELECT NAME="cbocarrera" class="form-control" SIZE=1 id="cbocarrera" placeholder="Carrera"></SELECT>
					</div>
				  </div>

				  <!-- Ingreso de Semestre -->
				  <div class="form-group" id="ErrorSemdiv">
				  	<label class="control-label control-label-input-group" id="ErrorSemlbl" for="inputError2"></label>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-sort-numeric-asc"></i></span>
					  	<SELECT NAME="cbosemestre" class="form-control" SIZE=1 id="cbosemestre" placeholder="Semestre"></SELECT>
					</div>
				  </div>

				  <!-- Ingreso de Talla -->
				  <div class="form-group" id="ErrorCoddiv">
				  	<label class="control-label control-label-input-group" id="ErrorCodlbl" for="inputError2"></label>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						<input type="text" name="codigo" class="form-control" id="txtcodigo" placeholder="Codigo" autocomplete="off">
					</div>
				  </div>
					
				  <div class="form-group">
				  	<button type="button" class="btn btn-primary" id="btncall">Registrar</button>
				  </div>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
		<div class="row">
			<div class="col-md-12">&nbsp;</div>
		</div>
	</div>
	</div>
	</div>
</body>
</html>