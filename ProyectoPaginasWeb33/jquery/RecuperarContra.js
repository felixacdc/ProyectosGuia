;
var envio=true;
function cargar()
{
	setTimeout("window.location='../index.php';", 3000); 
}

function Enviar(Emal)
							{	
								$.ajax({
									type: 'POST',
									url: 'EnvioCorreo.php',
									data: {
										datos:Emal
									}
								}).done(function(respuesta){
									    $("#mensanuli").text("Correo Enviado");
								        $("#mensanuli").fadeIn();
								        $("#mensanuli").delay(2000).fadeOut();
								        cargar(); 
								});
}

function BusEmail(Emal)
							{	
								$.ajax({
									type: 'POST',
									url: 'BuscarEmail.php',
									data: {
										datos:Emal
									}
								}).done(function(respuesta){
									if(respuesta==""){
									$('#Mensaje1').text("El Email No Existe");
									$("#Error1").fadeIn(1000);
									$('#tri1').fadeIn(1000);
									document.getElementById('Error1').style.width = '170px';
									envio=false;
									}
									else{
									$("#Error1").fadeOut(1000);
									$('#tri1').fadeOut(1000);
									envio=true;}
								});
}

$(document).ready(function(){

	$("#Menu").fadeIn(2000);

	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

	$("#En").click(function(){
				if($("#datos").val() == ""){
				$('#Mensaje1').text('Campo Requerido');
				$('#Error1').css('width','170px');
				$('#datos').css('background','rgba(117, 118, 118, 0.7)');
				$("#Error1").fadeIn(1000);
				$('#tri1').fadeIn(1000);
				envio=false;
			}else{

				if( !emailReg.test( $("#datos").val() ) ) {
					$('#Mensaje1').text('Ingrese Email Valido');
					$('#Error1').css('width','180px');
					$('#datos').css('color','black');	
					$('#datos').css('background','rgba(117, 118, 118, 0.7)');
					$("#Error1").fadeIn(1000);
					$('#tri1').fadeIn(1000);
					envio=false;
				}else {BusEmail($("#datos").val());}

			}


			if(envio)
			{
			Enviar($("#datos").val());
			}
	});


		$("#datos").focusout(function(){
			if($("#datos").val() == ""){
				$('#Mensaje1').text('Campo Requerido');
				$('#datos').css('background','rgba(117, 118, 118, 0.7)');
				$("#Error1").fadeIn(1000);
				$("#tri1").fadeIn(1000);
			}else{

				if( !emailReg.test( $("#datos").val() ) ) {
					$('#Mensaje1').text('Ingrese Email Valido');
					$('#Error1').css('width','180px');
					$('#datos').css('color','black');	
					$('#datos').css('background','rgba(117, 118, 118, 0.7)');
					$("#Error1").fadeIn(1000);
					$('#tri1').fadeIn(1000);
				}

			}
		});

		$("#datos").focus(function(){
			$("#Error1").fadeOut();
			$("#tri1").fadeOut();
			$('#datos').css('background','white');
		});
});
