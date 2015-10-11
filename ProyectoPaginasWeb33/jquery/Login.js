;
var envio=true;
//JavaScript del index.php

function BusUsuario(nombre)
							{	
								$.ajax({
									type: 'POST',
									url: 'Paginas/BuscarLogin.php',
									data: {
										datos:nombre
									}
								}).done(function(respuesta){
									if(respuesta!=""){
									$('#Mensaje1').text(respuesta);
									$("#Error1").fadeIn(1000);
									$('#tri1').fadeIn(1000);
									document.getElementById('Error1').style.width = '175px';
									document.getElementById('Error1').style.marginLeft = '280px';
									envio=false;$("#RecuperarCon").fadeIn(1000);
									}
									else{
									$("#Error1").fadeOut(1000);
									$('#tri1').fadeOut(1000);
									}
								});
}

function BusPass(nombre2,passwordus)
							{	if(nombre2.length>0){
								$.ajax({
									type: 'POST',
									url: 'Paginas/BuscarLogin2.php',
									data: {
										datos:nombre2,
										datos2:passwordus
									}
								}).done(function(respuesta2){
									if(respuesta2!=""){
									$('#Mensaje2').text(respuesta2);
									$("#Error2").fadeIn(1000);
									$('#tri2').fadeIn(1000);
									document.getElementById('Error2').style.width = '230px';
									document.getElementById('Error2').style.marginLeft = '280px';
									envio=false;$("#RecuperarCon").fadeIn(1000);
									}
									else{
									$("#Error2").fadeOut(1000);
									$('#tri2').fadeOut(1000);
									envio=true;}
								});}
								else {$("#Error2").fadeOut(1000);
									$('#tri2').fadeOut(1000);
								envio=false;}
}

$(document).ready(function(){
			
		$("#Ing").click(function(){		



			if($("#datos").val() == ""){
				$('#Mensaje1').text('Campo Requerido');
				$('#Error1').css('width','170px');
				$('#datos').css('background','rgba(3, 59, 208, 0.7)');
				$("#Error1").fadeIn(1000);
				$('#tri1').fadeIn(1000);
				envio=false;
			}else{BusUsuario($("#datos").val());}
					
			if($("#datos2").val() == ""){
			$('#Mensaje2').text('Campo Requerido');
			$('#Error2').css('width','170px');
			$('#datos2').css('background','rgba(3, 59, 208, 0.7)');
			$("#Error2").fadeIn(1000);
			$("#tri2").fadeIn(1000);
			envio=false;
			}else{BusPass($("#datos").val(),$("#datos2").val());}
					
			if(envio)
			{
			document.Datos.submit();
			}else
			{
				$("#RecuperarCon").fadeIn(1000);
			}

		});

		$("#datos").focusout(function(){
			if($("#datos").val() == ""){
				$('#Mensaje1').text('Campo Requerido');
				$('#datos').css('background','rgba(3, 59, 208, 0.7)');
				$("#Error1").fadeIn(1000);
				$("#tri1").fadeIn(1000);
			}else{BusUsuario($("#datos").val());}
		});

		$("#datos2").focusout(function(){
			if($("#datos2").val() == ""){
				$('#Mensaje2').text('Campo Requerido');
				$('#datos2').css('background','rgba(3, 59, 208, 0.7)');
				$("#Error2").fadeIn(1000);
				$("#tri2").fadeIn(1000);
			}else{BusPass($("#datos").val(),$("#datos2").val());}
		});

		$("#datos").focus(function(){
			$("#Error1").fadeOut();
			$("#tri1").fadeOut();
			$('#datos').css('background','white');
		});

		$("#datos2").focus(function(){
			$("#Error2").fadeOut();
			$("#tri2").fadeOut();
			$('#datos2').css('background','white');
		});


		



		
	});