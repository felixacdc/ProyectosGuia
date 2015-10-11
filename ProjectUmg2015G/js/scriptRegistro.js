/*--------------------------------------
		DECLARACION DE VARIABLES
-----------------------------------------*/
var ejecutar=true;
var nombres;
var apellidos;
var telefono;
var email;
var codigo;
var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{1,4})?$/;
var NA = /^([a-z ñáéíóú]{2,60})$/i;



/*--------------------------------------
			LIMPIADO DE TEXT
-----------------------------------------*/
function limpiarInput(){
	nombres=$("#txtnombre").val().trim();
	nombres2=$("#txtnombre2").val().trim();
	telefono=$("#txttelefono").val().trim();
	email=$("#txtemail").val().trim();
	apellidos=$("#txtapellido").val().trim();
	apellidos2=$("#txtapellido2").val().trim();
	codigo=$("#txtcodigo").val().trim();
	empresa=$("#txtempresa").val().trim();
}

/*--------------------------------------
			LLANADO DE COMBOS
-----------------------------------------*/
function cargarcombos(){
	$.getJSON("../Json/Combos.json",function(datos){
		$.each(datos["semestres"],function(id,semestres){
			if (id==0)
				$("#cbosemestre").append("<option value='0' disabled selected>"+semestres+"</option>");
			else
				$("#cbosemestre").append("<option value='"+semestres+"'>"+semestres+"</option>");		
		});
	});

	$.getJSON("../Json/Combos.json",function(datos){
		$.each(datos["carrera"],function(id,carrera){
			if (id==0)
				$("#cbocarrera").append("<option value='0' disabled selected>"+carrera+"</option>");
			else
				$("#cbocarrera").append("<option value='"+carrera+"'>"+carrera+"</option>");		
		});
	});

	$.getJSON("../Json/Combos.json",function(datos){
		$.each(datos["plan"],function(id,plan){
			if (id==0)
				$("#cboplan").append("<option value='0' disabled selected>"+plan+"</option>");
			else
				$("#cboplan").append("<option value='"+plan+"'>"+plan+"</option>");		
		});
	});

	$.getJSON("../Json/Combos.json",function(datos){
		$.each(datos["sexo"],function(id,sexo){
			if (id==0)
				$("#cbosexo").append("<option value='0' disabled selected>"+sexo+"</option>");
			else
				$("#cbosexo").append("<option value='"+sexo+"'>"+sexo+"</option>");		
		});
	});
}

$(document).ready(function(){

	// -------- LLAMADA A FUNCION CARGAR COMBOS ---------------
	cargarcombos();

	// ---------- BOTON REGISTRO DE REGISTRO ------------
	$("#btncall").click(function(){
		ejecutar=true;
		limpiarInput();

		if(nombres==""){
			$("#ErrorNomdiv" ).addClass("has-error has-feedback");				
			$('#ErrorNomlbl').text('El Nombre Es Requerido');
			$("#ErrorNomlbl").fadeIn();
			$('#txtnombre').val(nombres);			
			ejecutar=false;
		}else
		{
			if (!NA.test(nombres))
			{
				$("#ErrorNomdiv" ).addClass("has-error has-feedback");				
				$('#ErrorNomlbl').text('El Nombre Es Incorrecto');
				$("#ErrorNomlbl").fadeIn();
				$('#txtnombre').val(nombres);			
				ejecutar=false;
			}

		}

		if(apellidos==""){
			$("#ErrorApdiv").addClass("has-error has-feedback");				
			$('#ErrorAplbl').text('El Apellido Es Requerido');
			$("#ErrorAplbl").fadeIn();
			$('#txtapellido').val(apellidos);			
			ejecutar=false;
		}else
		{
			if (!NA.test(apellidos))
			{
				$("#ErrorApdiv").addClass("has-error has-feedback");				
				$('#ErrorAplbl').text('El Apellido Es Incorrecto');
				$("#ErrorAplbl").fadeIn();
				$('#txtapellido').val(apellidos);			
				ejecutar=false;
			}
		}

		if(email==""){
			$("#ErrorEmadiv").addClass("has-error has-feedback");				
			$('#ErrorEmalbl').text('El Email Es Requerido');
			$("#ErrorEmalbl").fadeIn();
			$('#txtemail').val(email);			
			ejecutar=false;
		}else if(!emailReg.test(email))
				{
					$( "#ErrorEmadiv" ).addClass( "has-error has-feedback" );
					$('#ErrorEmalbl').text('El Email Es Invalido');
					$("#ErrorEmalbl").fadeIn();				
					ejecutar=false;
				}

		if(telefono==""){
			$("#ErrorTeldiv").addClass("has-error has-feedback");				
			$('#ErrorTellbl').text('El Telefono Es Requerido');
			$("#ErrorTellbl").fadeIn();
			$('#txttelefono').val(telefono);			
			ejecutar=false;
		}else if(isNaN(telefono))
				{
					$( "#ErrorTeldiv" ).addClass( "has-error has-feedback" );
					$('#ErrorTellbl').text('Solo Se Admiten Numeros En Este Campo');
					$("#ErrorTellbl").fadeIn();
					ejecutar=false;
				}else if (telefono.length!=8)
					{
						$( "#ErrorTeldiv" ).addClass( "has-error has-feedback" );
						$('#ErrorTellbl').text('Tienes Que Ingresar 8 Digitos');
						$("#ErrorTellbl").fadeIn();
						ejecutar=false;
					}

		if(document.Registro.option[0].checked){


			if($('#cboplan').val()==null){
			$("#ErrorPladiv").addClass("has-error has-feedback");				
			$('#ErrorPlalbl').text('El Plan Es Requerido');
			$("#ErrorPlalbl").fadeIn();		
			ejecutar=false;
			}

			if($('#cbocarrera').val()==null){
				$("#ErrorCardiv").addClass("has-error has-feedback");				
				$('#ErrorCarlbl').text('La Carrera Es Requerida');
				$("#ErrorCarlbl").fadeIn();		
				ejecutar=false;
			}

			if($('#cbosemestre').val()==null){
				$("#ErrorSemdiv").addClass("has-error has-feedback");				
				$('#ErrorSemlbl').text('El Semestre Es Requerido');
				$("#ErrorSemlbl").fadeIn();		
				ejecutar=false;
			}

		}else if(document.Registro.option[1].checked){

				if(empresa=="")
				{
					$("#ErrorEmpdiv" ).addClass("has-error has-feedback");				
					$('#ErrorEmplbl').text('La Empresa Es Requerida');
					$("#ErrorEmplbl").fadeIn();
					$('#txtempresa').val(empresa);			
					ejecutar=false;	
				}

				if(nombres2=="")
				{
					$("#ErrorNom2div" ).addClass("has-error has-feedback");				
					$('#ErrorNom2lbl').text('El Nombre Es Requerido');
					$("#ErrorNom2lbl").fadeIn();
					$('#txtnombre2').val(nombres2);			
					ejecutar=false;
				}else
				{
					if (!NA.test(nombres2))
					{
						$("#ErrorNom2div" ).addClass("has-error has-feedback");				
						$('#ErrorNom2lbl').text('El Nombre Es Incorrecto');
						$("#ErrorNom2lbl").fadeIn();
						$('#txtnombre2').val(nombres2);			
						ejecutar=false;
					}

				}

				if(apellidos2=="")
				{
					$("#ErrorAp2div").addClass("has-error has-feedback");				
					$('#ErrorAp2lbl').text('El Apellido Es Requerido');
					$("#ErrorAp2lbl").fadeIn();
					$('#txtapellido2').val(apellidos2);			
					ejecutar=false;
				}else
				{
					if (!NA.test(apellidos2))
					{
						$("#ErrorAp2div").addClass("has-error has-feedback");				
						$('#ErrorAp2lbl').text('El Apellido Es Incorrecto');
						$("#ErrorAp2lbl").fadeIn();
						$('#txtapellido2').val(apellidos2);			
						ejecutar=false;
					}
		}

			}else{
				$("#ErrorCatdiv").addClass("has-error has-feedback");				
				$('#ErrorCatlbl').text('La Categoria Es Requerida');
				$("#ErrorCatlbl").fadeIn();		
				ejecutar=false;
			}
		

		

		if($('#cbosexo').val()==null){
			$("#ErrorSexdiv").addClass("has-error has-feedback");				
			$('#ErrorSexlbl').text('El Sexo Es Requerido');
			$("#ErrorSexlbl").fadeIn();		
			ejecutar=false;
		}

		if(codigo==""){
			$("#ErrorCoddiv").addClass("has-error has-feedback");				
			$('#ErrorCodlbl').text('El Codigo Es Requerido');
			$("#ErrorCodlbl").fadeIn();	
			$("#txtcodigo").val(codigo);	
			ejecutar=false;
		}else
		{
			BuscarCodigo(codigo);
		}

	});
	
	nombrevalidate();
	apellidovalidate();
	emailvalidate();
	telefonovalidate();
	planvalidate();
	carreravalidate();
	semestrevalidate();
	codigovalidate();
	sexovalidate();
	empresavalidate();
	nombre2validate();
	apellido2validate();

	$("#Radio1").click(function(){

		$("#ErrorEmpdiv").fadeOut();
		$("#ErrorNom2div").fadeOut();
		$("#ErrorAp2div").fadeOut();
		$("#ErrorPladiv").fadeIn(2000);
		$("#ErrorCardiv").fadeIn(2000);
		$("#ErrorSemdiv").fadeIn(2000);
		setTimeout(function(){
			$("#ErrorCatdiv" ).removeClass("has-error has-feedback");
		},600);	
		$("#ErrorCatlbl").fadeOut();
	});

	$("#Radio2").click(function(){
		$("#ErrorPladiv").fadeOut();
		$("#ErrorCardiv").fadeOut();
		$("#ErrorSemdiv").fadeOut();
		$("#ErrorEmpdiv").fadeIn(2000);
		$("#ErrorNom2div").fadeIn(2000);
		$("#ErrorAp2div").fadeIn(2000);
		setTimeout(function(){
			$("#ErrorCatdiv" ).removeClass("has-error has-feedback");
		},600);	
		$("#ErrorCatlbl").fadeOut();
	});

});


function nombrevalidate(){

	$("#txtnombre").focusout(function(){
		limpiarInput();	
		if(nombres==""){
			$("#ErrorNomdiv" ).addClass("has-error has-feedback");				
			$('#ErrorNomlbl').text('El Nombre Es Requerido');
			$("#ErrorNomlbl").fadeIn();
			$('#txtnombre').val(nombres);		
		}else
		{
			if (!NA.test(nombres))
			{
				$("#ErrorNomdiv" ).addClass("has-error has-feedback");				
				$('#ErrorNomlbl').text('El Nombre Es Incorrecto');
				$("#ErrorNomlbl").fadeIn();
				$('#txtnombre').val(nombres);
			}

		}
	});

	$("#txtnombre").focus(function(){
		setTimeout(function(){
			$("#ErrorNomdiv" ).removeClass("has-error has-feedback");
		},600);	
		$("#ErrorNomlbl").fadeOut();
	});
}

function apellidovalidate(){
	$("#txtapellido").focusout(function(){
		limpiarInput();	
		if(apellidos==""){
			$("#ErrorApdiv" ).addClass("has-error has-feedback");				
			$('#ErrorAplbl').text('El Apellido Es Requerido');
			$("#ErrorAplbl").fadeIn();
			$('#txtapellido').val(apellidos);		
		}else
		{
			if (!NA.test(apellidos))
			{
				$("#ErrorApdiv").addClass("has-error has-feedback");				
				$('#ErrorAplbl').text('El Apellido Es Incorrecto');
				$("#ErrorAplbl").fadeIn();
				$('#txtapellido').val(apellidos);			
				ejecutar=false;
			}
		}
	});

	$("#txtapellido").focus(function(){
		setTimeout(function(){
			$("#ErrorApdiv" ).removeClass("has-error has-feedback");
		},600);	
		$("#ErrorAplbl").fadeOut();
	});
}

function emailvalidate(){
	$("#txtemail").focusout(function(){
		limpiarInput();	
		if(email==""){
			limpiarInput();	
			$("#ErrorEmadiv").addClass("has-error has-feedback");				
			$('#ErrorEmalbl').text('El Email Es Requerido');
			$("#ErrorEmalbl").fadeIn();
			$('#txtemail').val(email);	
		}else if(!emailReg.test(email))
				{
					$( "#ErrorEmadiv" ).addClass( "has-error has-feedback" );
					$('#ErrorEmalbl').text('El Email Es Invalido');
					$("#ErrorEmalbl").fadeIn();	
				}
	});

	$("#txtemail").focus(function(){
		setTimeout(function(){
			$("#ErrorEmadiv" ).removeClass("has-error has-feedback");
		},600);	
		$("#ErrorEmalbl").fadeOut();
	});
}

function telefonovalidate(){
	$("#txttelefono").focusout(function(){
		limpiarInput();	
		if(telefono==""){
			$("#ErrorTeldiv").addClass("has-error has-feedback");				
			$('#ErrorTellbl').text('El Telefono Es Requerido');
			$("#ErrorTellbl").fadeIn();
			$('#txttelefono').val(telefono);	
		}else if(isNaN(telefono))
				{
					$( "#ErrorTeldiv" ).addClass( "has-error has-feedback" );
					$('#ErrorTellbl').text('Solo Se Admiten Numeros En Este Campo');
					$("#ErrorTellbl").fadeIn();
				}else if (telefono.length!=8)
					{
						$( "#ErrorTeldiv" ).addClass( "has-error has-feedback" );
						$('#ErrorTellbl').text('Tienes Que Ingresar 8 Digitos');
						$("#ErrorTellbl").fadeIn();
					}
	});

	$("#txttelefono").focus(function(){
		setTimeout(function(){
			$("#ErrorTeldiv" ).removeClass("has-error has-feedback");
		},600);	
		$("#ErrorTellbl").fadeOut();
	});
}

function planvalidate(){
	$("#cboplan").focusout(function(){
		if($('#cboplan').val()==null){
			$("#ErrorPladiv").addClass("has-error has-feedback");				
			$('#ErrorPlalbl').text('El Plan Es Requerido');
			$("#ErrorPlalbl").fadeIn();		
		}
	});

	$("#cboplan").change(function(){
		setTimeout(function(){
			$("#ErrorPladiv" ).removeClass("has-error has-feedback");
		},600);	
		$("#ErrorPlalbl").fadeOut();
	});	
}

function carreravalidate(){
	$("#cbocarrera").focusout(function(){
		if($('#cbocarrera').val()==null){
			$("#ErrorCardiv").addClass("has-error has-feedback");				
			$('#ErrorCarlbl').text('La Carrera Es Requerida');
			$("#ErrorCarlbl").fadeIn();		
		}
	});

	$("#cbocarrera").change(function(){
		setTimeout(function(){
			$("#ErrorCardiv" ).removeClass("has-error has-feedback");
		},600);	
		$("#ErrorCarlbl").fadeOut();
	});
}

function semestrevalidate(){
	$("#cbosemestre").focusout(function(){
		if($('#cbosemestre').val()==null){
			$("#ErrorSemdiv").addClass("has-error has-feedback");				
			$('#ErrorSemlbl').text('El Semestre Es Requerido');
			$("#ErrorSemlbl").fadeIn();	
		}
	});

	$("#cbosemestre").change(function(){
		setTimeout(function(){
			$("#ErrorSemdiv" ).removeClass("has-error has-feedback");
		},600);	
		$("#ErrorSemlbl").fadeOut();
	});
}

function codigovalidate(){
	$("#txtcodigo").focusout(function(){
		limpiarInput();	
		if(codigo==""){
			$("#ErrorCoddiv").addClass("has-error has-feedback");				
			$('#ErrorCodlbl').text('El Codigo Es Requerido');
			$("#ErrorCodlbl").fadeIn();
		}
	});

	$("#txtcodigo").focus(function(){
		setTimeout(function(){
			$("#ErrorCoddiv" ).removeClass("has-error has-feedback");
		},600);	
		$("#ErrorCodlbl").fadeOut();
	});
}

function sexovalidate(){
	$("#cbosexo").focusout(function(){
		if($('#cbosexo').val()==null){
			$("#ErrorSexdiv").addClass("has-error has-feedback");				
			$('#ErrorSexlbl').text('El Sexo Es Requerida');
			$("#ErrorSexlbl").fadeIn();		
		}
	});

	$("#cbosexo").change(function(){
		setTimeout(function(){
			$("#ErrorSexdiv" ).removeClass("has-error has-feedback");
		},600);	
		$("#ErrorSexlbl").fadeOut();
	});
}

function BuscarCodigo(Codigo)
{	
	$.ajax({
		type: 'POST',
		url: '../paginas/BuscarCodigo.php',
		data: {
			codigo:Codigo
		}
	}).done(function(respuesta){
									
		if(respuesta.length>2){
			$("#ErrorCoddiv").addClass("has-error has-feedback");				
			$('#ErrorCodlbl').text(respuesta);
			$("#ErrorCodlbl").fadeIn();
			ejecutar=false;
		}
		else{
			$("#ErrorCoddiv").removeClass("has-error has-feedback");	
			$("#ErrorCodlbl").fadeOut();

			if(ejecutar)
			{
				document.Registro.submit();
			}
		}
	});
}

function empresavalidate(){
	$("#txtempresa").focusout(function(){
		limpiarInput();	
		if(empresa==""){
			$("#ErrorEmpdiv" ).addClass("has-error has-feedback");				
			$('#ErrorEmplbl').text('La Empresa Es Requerida');
			$("#ErrorEmplbl").fadeIn();
			$('#txtempresa').val(empresa);	
		}
	});

	$("#txtempresa").focus(function(){
		setTimeout(function(){
			$("#ErrorEmpdiv" ).removeClass("has-error has-feedback");
		},600);	
		$("#ErrorEmplbl").fadeOut();
	});
}

function nombre2validate(){
	$("#txtnombre2").focusout(function(){
		limpiarInput();
		if(nombres2=="")
		{
			$("#ErrorNom2div" ).addClass("has-error has-feedback");				
			$('#ErrorNom2lbl').text('El Nombre Es Requerido');
			$("#ErrorNom2lbl").fadeIn();
			$('#txtnombre2').val(nombres2);	
		}else
		{
			if (!NA.test(nombres2))
			{
				$("#ErrorNom2div" ).addClass("has-error has-feedback");				
				$('#ErrorNom2lbl').text('El Nombre Es Incorrecto');
				$("#ErrorNom2lbl").fadeIn();
				$('#txtnombre2').val(nombres2);		
			}

		}
	});

	$("#txtnombre2").focus(function(){
		setTimeout(function(){
			$("#ErrorNom2div" ).removeClass("has-error has-feedback");
		},600);
		$("#ErrorNom2lbl").fadeOut();
	});
}

function apellido2validate(){
	$("#txtapellido2").focusout(function(){
		limpiarInput();
		if(apellidos2=="")
		{
			$("#ErrorAp2div").addClass("has-error has-feedback");				
			$('#ErrorAp2lbl').text('El Apellido Es Requerido');
			$("#ErrorAp2lbl").fadeIn();
			$('#txtapellido2').val(apellidos2);	
		}else
		{
			if (!NA.test(apellidos2))
			{
				$("#ErrorAp2div").addClass("has-error has-feedback");				
				$('#ErrorAp2lbl').text('El Apellido Es Incorrecto');
				$("#ErrorAp2lbl").fadeIn();
				$('#txtapellido2').val(apellidos2);			
			}
		}
	});

	$("#txtapellido2").focus(function(){
		setTimeout(function(){
			$("#ErrorAp2div" ).removeClass("has-error has-feedback");
		},600);
		$("#ErrorAp2lbl").fadeOut();
	});
}