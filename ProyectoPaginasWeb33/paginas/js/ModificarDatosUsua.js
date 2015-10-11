;
var ejecutar=true;
var inter=true;


function BusUsuario(nombre)
							{	
								$.ajax({
									type: 'POST',
									url: 'BuscarUsuariom.php',
									data: {
										datos:nombre
									}
								}).done(function(respuesta){
									if(respuesta!=""){
									$('#Mensaje1').text(respuesta);
									$("#Error1").fadeIn(1000);
									$('#tri1').fadeIn(1000);
									document.getElementById('Error1').style.width = '170px';
									document.getElementById('Error1').style.marginLeft = '-185px';
									ejecutar=false;
									inter=false;
									}
									else{
									$("#Error1").fadeOut(1000);
									$('#tri1').fadeOut(1000);
									ejecutar=true;
									inter=true;}
								});
}

function Valid()
{

		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

			

			if($("#usuario").val() == ""){
				$('#Mensaje1').text('Campo Requerido');
				$('#Error1').css('width','170px');
				$('#Error1').css('margin-Left','-185px');
				$('#usuario').css('color','black');				
				$('#usuario').css('background','rgba(75, 123, 174, 0.3)');
				$("#Error1").fadeIn(1000);
				$('#tri1').fadeIn(1000);
				ejecutar=false;
			}
			else{		if($("#usuario").val().length <= 4){
								$('#Mensaje1').text('Ingrese Mas De 4 Caracteres');
								$('#usuario').css('background','rgba(75, 123, 174, 0.3)');
								$('#Error1').css('width','235px');
								$('#usuario').css('color','black');	
								$('#Error1').css('margin-Left','-250px');
								$("#Error1").fadeIn(1000);
								$('#tri1').fadeIn(1000);
								ejecutar=false;
						}
							
				}
						
							
							if($("#contraseña").val() == ""){
								$('#Mensaje2').text('Campo Requerido');
								$('#Error2').css('width','170px');
								$('#contraseña').css('color','black');	
								$('#Error2').css('margin-Left','-185px');
								$('#contraseña').css('background','rgba(75, 123, 174, 0.3)');
								$("#Error2").fadeIn(1000);
								$('#tri2').fadeIn(1000);
								ejecutar=false;
							}
							else{	if($("#contraseña").val().length <=6){
										$('#Mensaje2').text('Ingrese Mas De 6 Caracteres');
										$('#Error2').css('width','235px');
										$('#contraseña').css('color','black');	
										$('#Error2').css('margin-Left','-250px');
										$('#contraseña').css('background','rgba(75, 123, 174, 0.3)');
										$("#Error2").fadeIn(1000);
										$('#tri2').fadeIn(1000);
										ejecutar=false;
									}
								}
									
											if($("#contraseña2").val() == ""){
											$('#Mensaje3').text('Campo Requerido');
											$('#Error3').css('width','170px');
											$('#Error3').css('margin-Left','-185px');
											$('#contraseña2').css('color','black');	
											$('#contraseña2').css('background','rgba(75, 123, 174, 0.3)');
											$("#Error3").fadeIn(1000);
											$('#tri3').fadeIn(1000);
											ejecutar=false;
											}else
											{
													if($("#contraseña2").val().length <=6){
														$('#Mensaje3').text('Ingrese Mas De 6 Caracteres');
														$('#Error3').css('width','235px');
														$('#contraseña2').css('color','black');	
														$('#Error3').css('margin-Left','-250px');
														$('#contraseña2').css('background','rgba(75, 123, 174, 0.3)');
														$("#Error3").fadeIn(1000);
														$('#tri3').fadeIn(1000);
														ejecutar=false;
													}else{
															if($("#contraseña2").val()!=$("#contraseña").val()){
																$('#Mensaje3').text('Contraseñas no coinciden');
																$('#Error3').css('width','226px');
																$('#contraseña2').css('color','black');	
																$('#Error3').css('margin-Left','-242px');
																$('#contraseña2').css('background','rgba(75, 123, 174, 0.3)');
																$("#Error3").fadeIn(1000);
																$('#tri3').fadeIn(1000);
															ejecutar=false;
															}
														}
											}				
																	if($("#nombre").val() == ""){
																		$('#Mensaje4').text('Campo Requerido');
																		$('#nombre').css('background','rgba(75, 123, 174, 0.3)');
																		$("#Error4").fadeIn(1000);
																		$('#tri4').fadeIn(1000);
																	ejecutar=false;
																	}
																	
																		
																	if($("#apellido").val() == ""){
																		$('#Mensaje5').text('Campo Requerido');
																		$('#apellido').css('background','rgba(75, 123, 174, 0.3)');
																		$("#Error5").fadeIn(1000);
																		$('#tri5').fadeIn(1000);
																	ejecutar=false;
																	}	

																	if($("#telefono").val() == "")
																	{
																		$('#Mensaje6').text('Campo Requerido');
																		$('#telefono').css('background','rgba(75, 123, 174, 0.3)');
																		$("#Error6").fadeIn(1000);
																		$('#telefono').css('color','black');	
																		$('#tri6').fadeIn(1000);
																		ejecutar=false;
																	}else
																		{
																			if(isNaN($("#telefono").val())) {  
															        		$('#Mensaje6').text('Solo Ingrese Numeros');
															        		$('#Error6').css('width','190px');
															        		$('#Error6').css('margin-Left','-205px');
															        		$('#telefono').css('color','black');	
																			$('#telefono').css('background','rgba(75, 123, 174, 0.3)');
																			$("#Error6").fadeIn(1000);
																			$('#tri6').fadeIn(1000);
																			ejecutar=false; 
															    			}else
															    			{
															    				if ($("#telefono").val().length<8){
															    					$('#Mensaje6').text('Ingrese Mas De 8 Numeros');
															        				$('#Error6').css('width','225px');
															        				$('#Error6').css('margin-Left','-240px');
															        				$('#telefono').css('color','black');	
																					$('#telefono').css('background','rgba(75, 123, 174, 0.3)');
																					$("#Error6").fadeIn(1000);
																					$('#tri6').fadeIn(1000);
																					ejecutar=false; 
															    				}
															    			}
																		}	

																	if ($("#Direccion").val()=="") 
																	{	$('#Mensaje10').text('Campo Requerido');
																		$('#Direccion').css('background','rgba(75, 123, 174, 0.3)');
																		$("#Error10").fadeIn(1000);
																		$('#tri10').fadeIn(1000);
																	 ejecutar=false;}

																	 var sexobr=$("input[type='radio']:checked");

																	 if (sexobr.length==0)  
																	{	$('#Mensaje7').text('Campo Requerido');														 $('#Mensaje7').text('Campo Requerido');
																		$('#sexo').css('background','rgba(75, 123, 174, 0.3)');
																		$("#Error7").fadeIn(1000);
																		$('#tri7').fadeIn(1000);
																	 ejecutar=false;}

																	 if ($("#nacimiento").val()=="") 
																	{	$('#Mensaje8').text('Campo Requerido');
																		$('#nacimiento').css('color','black');															 $('#Mensaje8').text('Campo Requerido');
																		$('#nacimiento').css('background','rgba(75, 123, 174, 0.3)');
																		$("#Error8").fadeIn(1000);
																		$('#tri8').fadeIn(1000);
																	 ejecutar=false;}

																	 if ($("#email").val()=="") 
																	{	$('#Mensaje9').text('Campo Requerido');														 $('#Mensaje9').text('Campo Requerido');
																		$('#email').css('background','rgba(75, 123, 174, 0.3)');
																		$("#Error9").fadeIn(1000);
																		$('#email').css('color','black');	
																		$('#tri9').fadeIn(1000);
																	 ejecutar=false;}
																	 else
																	 {
																	 	if( !emailReg.test( $("#email").val() ) ) {
																	 		$('#Mensaje9').text('Ingrese Email Valido');
																	 		$('#Error9').css('width','180px');
																	 		$('#email').css('color','black');	
																	 		$('#email').css('background','rgba(75, 123, 174, 0.3)');
																			$("#Error9").fadeIn(1000);
																			$('#tri9').fadeIn(1000);
																		 	ejecutar=false;
																	 	}
																	 }

	if(ejecutar)
	{
	document.mofificar.submit();
	}													 
		

}

		function vaciar(){
		

			$("#Error1").fadeOut();
			$("#tri1").fadeOut();
			$('#usuario').css('background','white');
		}

		function llena(){
			if($("#usuario").val() == ""){
				$('#Mensaje1').text('Campo Requerido');
				$('#Error1').css('width','170px');
				$('#usuario').css('color','black');	
				$('#Error1').css('margin-Left','-185px');				
				$('#usuario').css('background','rgba(75, 123, 174, 0.3)');
				$("#Error1").fadeIn(1000);
				$('#tri1').fadeIn(1000);
				
			}
			else{		if($("#usuario").val().length <= 4){
								$('#Mensaje1').text('Ingrese Mas De 4 Caracteres');
								$('#usuario').css('background','rgba(75, 123, 174, 0.3)');
								$('#Error1').css('width','235px');
								$('#usuario').css('color','black');	
								$('#Error1').css('margin-Left','-250px');
								$("#Error1").fadeIn(1000);
								$('#tri1').fadeIn(1000);
								
						}
				}
		}

		function llena2(){
			if($("#contraseña").val() == ""){
								$('#Mensaje2').text('Campo Requerido');
								$('#Error2').css('width','170px');
								$('#Error2').css('margin-Left','-185px');
								$('#contraseña').css('color','black');	
								$('#contraseña').css('background','rgba(75, 123, 174, 0.3)');
								$("#Error2").fadeIn(1000);
								$('#tri2').fadeIn(1000);
								
							}
							else{	if($("#contraseña").val().length <=6){
										$('#Mensaje2').text('Ingrese Mas De 6 Caracteres');
										$('#Error2').css('width','235px');
										$('#Error2').css('margin-Left','-250px');
										$('#contraseña').css('color','black');	
										$('#contraseña').css('background','rgba(75, 123, 174, 0.3)');
										$("#Error2").fadeIn(1000);
										$('#tri2').fadeIn(1000);
										
									}
								}
		}

		function vaciar2(){

			$("#Error2").fadeOut();
			$("#tri2").fadeOut();
			$('#contraseña').css('background','white');
		}

		function llena3(){
				if($("#contraseña2").val() == ""){
											$('#Mensaje3').text('Campo Requerido');
											$('#Error3').css('width','170px');
											$('#contraseña2').css('color','black');	
											$('#Error3').css('margin-Left','-185px');
											$('#contraseña2').css('background','rgba(75, 123, 174, 0.3)');
											$("#Error3").fadeIn(1000);
											$('#tri3').fadeIn(1000);
											
											}else
											{
													if($("#contraseña2").val().length <=6){
														$('#Mensaje3').text('Ingrese Mas De 6 Caracteres');
														$('#Error3').css('width','235px');
														$('#contraseña2').css('color','black');	
														$('#Error3').css('margin-Left','-250px');
														$('#contraseña2').css('background','rgba(75, 123, 174, 0.3)');
														$("#Error3").fadeIn(1000);
														$('#tri3').fadeIn(1000);
														
													}else{
															if($("#contraseña2").val()!=$("#contraseña").val()){
																$('#Mensaje3').text('Contraseñas no coinciden');
																$('#Error3').css('width','226px');
																$('#contraseña2').css('color','black');	
																$('#Error3').css('margin-Left','-242px');
																$('#contraseña2').css('background','rgba(75, 123, 174, 0.3)');
																$("#Error3").fadeIn(1000);
																$('#tri3').fadeIn(1000);
															
															}
														}
											}		
		}

		function vaciar3(){
			$("#Error3").fadeOut();
			$("#tri3").fadeOut();
			$('#contraseña2').css('background','white');
		}

		function llena4(){
						if($("#nombre").val()==""){$('#Mensaje4').text('Campo Requerido');
				$('#nombre').css('background','rgba(75, 123, 174, 0.3)');
				$("#Error4").fadeIn(1000);
				$('#tri4').fadeIn(1000);
			}
		}

		function vaciar4(){
			$("#Error4").fadeOut();
			$("#tri4").fadeOut();
			$('#nombre').css('background','white');
		}

		function llena5(){
						if($("#apellido").val()==""){$('#Mensaje5').text('Campo Requerido');
				$('#apellido').css('background','rgba(75, 123, 174, 0.3)');
				$("#Error5").fadeIn(1000);
				$('#tri5').fadeIn(1000);
			}
		}

		function vaciar5(){
			$("#Error5").fadeOut();
			$("#tri5").fadeOut();
			$('#apellido').css('background','white');
		}

		function llena6(){
			if($("#telefono").val() == "")
			{
				$('#Mensaje6').text('Campo Requerido');
				$('#telefono').css('color','black');	
				$('#telefono').css('background','rgba(75, 123, 174, 0.3)');
				$("#Error6").fadeIn(1000);
				$('#tri6').fadeIn(1000);
			}else
			{
				if(isNaN($("#telefono").val())) {  
        		$('#Mensaje6').text('Solo Ingrese Numeros');
        		$('#Error6').css('width','190px');
        		$('#Error6').css('margin-Left','-205px');
        		$('#telefono').css('color','black');	
				$('#telefono').css('background','rgba(75, 123, 174, 0.3)');
				$("#Error6").fadeIn(1000);
				$('#tri6').fadeIn(1000); 
    			}else
					{
					if ($("#telefono").val().length<8){
					$('#Mensaje6').text('Ingrese Mas De 8 Numeros');
					$('#Error6').css('width','225px');
					$('#Error6').css('margin-Left','-240px');
					$('#telefono').css('color','black');	
					$('#telefono').css('background','rgba(75, 123, 174, 0.3)');
					$("#Error6").fadeIn(1000);
					$('#tri6').fadeIn(1000);
					ejecutar=false; 
					}
					}  	
			}			
		}

		function vaciar6(){
		$("#Error6").fadeOut();
			$("#tri6").fadeOut();
			$('#telefono').css('background','white');
		}

		function llena7(){
						if ($("#Direccion").val()=="") 
			{	$('#Mensaje10').text('Campo Requerido');
				$('#Direccion').css('background','rgba(75, 123, 174, 0.3)');
				$("#Error10").fadeIn(1000);
				$('#tri10').fadeIn(1000);
			}

		}

		function vaciar7(){
			$("#Error10").fadeOut();
			$("#tri10").fadeOut();
			$('#Direccion').css('background','white');
		}

		function llena8(){
			if ($("#nacimiento").val()=="") 
			{
				$('#Mensaje8').text('Campo Requerido');
				$('#nacimiento').css('background','rgba(75, 123, 174, 0.3)');
				$('#nacimiento').css('color','black');	
				$("#Error8").fadeIn(1000);
				$('#tri8').fadeIn(1000);
			}
		}

		function vaciar8(){
			$("#Error8").fadeOut();
			$("#tri8").fadeOut();
			$('#nacimiento').css('background','white')
		}

		function llena9(){
			var emailReg2= /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

						 if ($("#email").val()=="") 
			{
				$('#Mensaje9').text('Campo Requerido');
				$('#email').css('color','black');	
				$('#email').css('background','rgba(75, 123, 174, 0.3)');
				$("#Error9").fadeIn(1000);
				$('#tri9').fadeIn(1000);
			}else
			 {
				if( !emailReg2.test( $("#email").val() ) ) {
					$('#Mensaje9').text('Ingrese Email Valido');
					$('#Error9').css('width','180px');
					$('#email').css('color','black');	
					$('#email').css('background','rgba(75, 123, 174, 0.3)');
					$("#Error9").fadeIn(1000);
					$('#tri9').fadeIn(1000);
				}
			}
		}

		function vaciar9(){
			$("#Error9").fadeOut();
			$("#tri9").fadeOut();
			$('#email').css('background','white');
		}

		function validarImg(Img){
								var Imgs=Img.target.files;
								var imagen =Imgs[0];
								var errorHandler=document.querySelector("#Error11")

								if(imagen.type.match("image.*") && imagen.size < 2000000 )
									{	ejecutar=true;
										$("#Error11").fadeOut();
										$("#tri11").fadeOut();
										var lector=new FileReader();

										lector.onload=(function(archivo){
											return function(Img){
												document.querySelector("#avatarmo").src=Img.target.result;
											}

										})(imagen);

										lector.readAsDataURL(imagen);
									}
									else if(imagen.type.match("image.*")){
										$("#Error11").fadeIn(1000);
										$('#Error11').css('margin-Left','315px');
										$('#tri11').fadeIn(1000);
										$('#tri11').css('margin-Left','292px');
										$('#Mensaje11').text('Prueva con una imagena mas pequeña que 2mb');
										ejecutar=false;

									}else if(!imagen.type.match("image.*")){
										$("#Error11").fadeIn(1000);
										$('#Error11').css('margin-Left','315px');
										$('#tri11').fadeIn(1000);
										$('#tri11').css('margin-Left','292px');
										$('#Mensaje11').text('El archivo no es una imagen');
										$('#Error11').css('width','249px');
										ejecutar=false;
									}

	}

	function ObtenerDatos(usuario)
	{
		$.ajax({
			type: 'POST',
			url: "Menus/ObenerDatosUsua.php",
			data: {Usuari: usuario} 
		    }).done(function(respuesta3){

		    	respuesta = $.parseJSON(respuesta3);
		    		    	
		    	$('#usuario').val(respuesta.Usu);
		    	$('#contraseña').val(respuesta.Pas);	    	
		    	$('#contraseña2').val(respuesta.Pas);
				$('#nombre').val(respuesta.Nom);
		    	$('#apellido').val(respuesta.Ape);
		    	$('#telefono').val(respuesta.Tel);	    	
		    	$('#Direccion').val(respuesta.Dir);


		    	if(respuesta.Sex=="Masculino")
					 document.getElementById("sex").checked = true
				else
					document.getElementById("sex2").checked = true

		    	$('#nacimiento').val(respuesta.Nac);
		    	$('#email').val(respuesta.Ema);	    	

		    	document.getElementById('avatarmo').src = "../"+respuesta.Ava;
		    });	
	}

$(document).ready(function(){

	ObtenerDatos($("#sesi").text());



	document.querySelector("#imagen").addEventListener("change",validarImg);
		
});