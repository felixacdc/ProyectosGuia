var ejecutar=true

function BuscarCodigo(Codigo)
{	
								$.ajax({
									type: 'POST',
									url: '../Paginas/BuscarCodigo.php',
									data: {
										datos:Codigo
									}
								}).done(function(respuesta){
									
									if(respuesta.length>2){
									$('#Mensaje8').text(respuesta);
									$("#Error8").fadeIn(1000);
									$('#tri8').fadeIn(1000);
									if(respuesta.length>25)
									document.getElementById('Error8').style.width = '245px';
									else
									document.getElementById('Error8').style.width = '200px';

									$('#codigo').css('background','rgba(0, 143, 129, 0.7)');
									ejecutar=false;
									}
									else{
									$("#Error8").fadeOut(1000);
									$('#tri8').fadeOut(1000);
									ejecutar=true;
									if(ejecutar)
									{
									document.registros.submit();
									}	



								}
								});
}

$(document).ready(function(){
$("#Env").click(function(){

		
						
			var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{1,4})?$/;

			

			if($("#nombre1").val() == ""){
				$('#Mensaje1').text('Campo Requerido');
				$('#Error1').css('width','170px');
				$('#nombre1').css('color','black');				
				$('#nombre1').css('background','rgba(0, 143, 129, 0.7)');
				$("#Error1").fadeIn(1000);
				$('#tri1').fadeIn(1000);
				ejecutar=false;
			}
			else{		if($("#nombre1").val().length >= 21){
								$('#Mensaje1').text('Ingrese Menos De 21 Caracteres');
								$('#nombre1').css('background','rgba(0, 143, 129, 0.7)');
								$('#Error1').css('width','235px');
								$('#nombre1').css('color','black');	
								$("#Error1").fadeIn(1000);
								$('#tri1').fadeIn(1000);
								ejecutar=false;
						}
							
				}
						
							
							if($("#nombre2").val() == ""){
								$('#Mensaje2').text('Campo Requerido');
								$('#Error2').css('width','170px');
								$('#nombre2').css('color','black');	
								$('#nombre2').css('background','rgba(0, 143, 129, 0.7)');
								$("#Error2").fadeIn(1000);
								$('#tri2').fadeIn(1000);
								ejecutar=false;
							}
							else{	if($("#nombre2").val().length >=21){
										$('#Mensaje2').text('Ingrese Menos De 21 Caracteres');
										$('#Error2').css('width','235px');
										$('#nombre2').css('color','black');	
										$('#nombre2').css('background','rgba(0, 143, 129, 0.7)');
										$("#Error2").fadeIn(1000);
										$('#tri2').fadeIn(1000);
										ejecutar=false;
									}
								}
									
											if($("#apellido1").val() == ""){
											$('#Mensaje3').text('Campo Requerido');
											$('#Error3').css('width','170px');
											$('#apellido1').css('color','black');	
											$('#apellido1').css('background','rgba(0, 143, 129, 0.7)');
											$("#Error3").fadeIn(1000);
											$('#tri3').fadeIn(1000);
											ejecutar=false;
											}else
											{
													if($("#apellido1").val().length >=21){
														$('#Mensaje3').text('Ingrese Menos De 21 Caracteres');
														$('#Error3').css('width','235px');
														$('#apellido1').css('color','black');
														$('#apellido1').css('background','rgba(0, 143, 129, 0.7)');
														$("#Error3").fadeIn(1000);
														$('#tri3').fadeIn(1000);
														ejecutar=false;
													}
											}				
																	if($("#apellido2").val() == ""){
																		$('#Mensaje4').text('Campo Requerido');
																		$('#Error4').css('width','170px');
																		$('#apellido2').css('color','black');
																		$('#apellido2').css('background','rgba(0, 143, 129, 1)');
																		$("#Error4").fadeIn(1000);
																		$('#tri4').fadeIn(1000);
																	ejecutar=false;
																	}else
																	{
																			if($("#apellido2").val().length >=21){
																				$('#Mensaje4').text('Ingrese Menos De 21 Caracteres');
																				$('#Error4').css('width','235px');
																				$('#apellido2').css('color','black');
																				$('#apellido2').css('background','rgba(0, 143, 129, 0.7)');
																				$("#Error4").fadeIn(1000);
																				$('#tri4').fadeIn(1000);
																				ejecutar=false;
																			}
																	}
																	
																		
																	if($("#telefono").val() == "")
																	{
																		$('#Mensaje5').text('Campo Requerido');
																		$('#Error5').css('width','170px');
																		$('#telefono').css('color','black');
																		$('#telefono').css('background','rgba(0, 143, 129, 0.7)');
																		$("#Error5").fadeIn(1000);
																		$('#telefono').css('color','black');	
																		$('#tri5').fadeIn(1000);
																		ejecutar=false;
																	}else
																		{
																			if(isNaN($("#telefono").val())) {  
															        		$('#Mensaje5').text('Solo Ingrese Numeros');
															        		$('#Error5').css('width','190px');
															        		$('#telefono').css('color','black');	
																			$('#telefono').css('background','rgba(0, 143, 129, 0.7)');
																			$("#Error5").fadeIn(1000);
																			$('#tri5').fadeIn(1000);
																			ejecutar=false; 
															    			}else
															    			{
															    				if ($("#telefono").val().length<8){
															    					$('#Mensaje5').text('Ingrese Mas De 8 Numeros');
															        				$('#Error5').css('width','225px');
															        				$('#telefono').css('color','black');	
																					$('#telefono').css('background','rgba(0, 143, 129, 0.7)');
																					$("#Error5").fadeIn(1000);
																					$('#tri5').fadeIn(1000);
																					ejecutar=false; 
															    				}
															    			}
															    		}

																	 if ($("#correo").val()=="") 
																	{	$('#Mensaje6').text('Campo Requerido');														 $('#Mensaje9').text('Campo Requerido');
																		$('#Error6').css('width','170px');
																		$('#correo').css('color','black');
																		$('#correo').css('background','rgba(0, 143, 129, 0.7)');
																		$("#Error6").fadeIn(1000);
																		$('#correo').css('color','black');	
																		$('#tri6').fadeIn(1000);
																	 ejecutar=false;}
																	 else
																	 {
																	 	if( !emailReg.test( $("#correo").val() ) ) {
																	 		$('#Mensaje6').text('Ingrese Email Valido');
																	 		$('#Error6').css('width','180px');
																	 		$('#correo').css('color','black');	
																	 		$('#correo').css('background','rgba(0, 143, 129, 0.7)');
																			$("#Error6").fadeIn(1000);
																			$('#tri6').fadeIn(1000);
																		 	ejecutar=false;
																	 	}
																	 }

																	if ($("#cboplan").val()=="") 
																	{	$('#Mensaje7').text('Campo Requerido');
																		$('#Error7').css('width','170px');
																		$('#cboplan').css('background','rgba(0, 143, 129, 0.7)');
																		$("#Error7").fadeIn(1000);
																		$('#tri7').fadeIn(1000);
																	 ejecutar=false;}

																	 if ($("#codigo").val()=="") 
																	{	$('#Mensaje8').text('Campo Requerido');
																		$('#Error8').css('width','170px');
																		$('#codigo').css('color','black');															 $('#Mensaje8').text('Campo Requerido');
																		$('#codigo').css('background','rgba(0, 143, 129, 0.7)');
																		$("#Error8").fadeIn(1000);
																		$('#tri8').fadeIn(1000);
																	 ejecutar=false;}
																	 else{	
																	 		var codigo=$("#codigo").val();
																	 		BuscarCodigo(codigo);
																	 }
		
		
		});

		
		$("#nombre1").focusout(function(){
			if($("#nombre1").val() == ""){
				$('#Mensaje1').text('Campo Requerido');
				$('#Error1').css('width','170px');
				$('#nombre1').css('color','black');				
				$('#nombre1').css('background','rgba(0, 143, 129, 0.7)');
				$("#Error1").fadeIn(1000);
				$('#tri1').fadeIn(1000);
			}
			else{		if($("#nombre1").val().length >= 21){
								$('#Mensaje1').text('Ingrese Menos De 21 Caracteres');
								$('#nombre1').css('background','rgba(0, 143, 129, 0.7)');
								$('#Error1').css('width','235px');
								$('#nombre1').css('color','black');	
								$("#Error1").fadeIn(1000);
								$('#tri1').fadeIn(1000);
						}
							
				}

		});

		$("#nombre2").focusout(function(){
							if($("#nombre2").val() == ""){
								$('#Mensaje2').text('Campo Requerido');
								$('#Error2').css('width','170px');
								$('#nombre2').css('color','black');	
								$('#nombre2').css('background','rgba(0, 143, 129, 0.7)');
								$("#Error2").fadeIn(1000);
								$('#tri2').fadeIn(1000);
							}
							else{	if($("#nombre2").val().length >=21){
										$('#Mensaje2').text('Ingrese Menos De 21 Caracteres');
										$('#Error2').css('width','235px');
										$('#nombre2').css('color','black');	
										$('#nombre2').css('background','rgba(0, 143, 129, 0.7)');
										$("#Error2").fadeIn(1000);
										$('#tri2').fadeIn(1000);
									}
								}

		});

		$("#apellido1").focusout(function(){
											if($("#apellido1").val() == ""){
											$('#Mensaje3').text('Campo Requerido');
											$('#Error3').css('width','170px');
											$('#apellido1').css('color','black');	
											$('#apellido1').css('background','rgba(0, 143, 129, 0.7)');
											$("#Error3").fadeIn(1000);
											$('#tri3').fadeIn(1000);
											}else
											{
													if($("#apellido1").val().length >=21){
														$('#Mensaje3').text('Ingrese Menos De 21 Caracteres');
														$('#Error3').css('width','235px');
														$('#apellido1').css('color','black');
														$('#apellido1').css('background','rgba(0, 143, 129, 0.7)');
														$("#Error3").fadeIn(1000);
														$('#tri3').fadeIn(1000);
													}
											}	

		});

		$("#apellido2").focusout(function(){
																	if($("#apellido2").val() == ""){
																		$('#Mensaje4').text('Campo Requerido');
																		$('#Error4').css('width','170px');
																		$('#apellido2').css('color','black');
																		$('#apellido2').css('background','rgba(0, 143, 129, 1)');
																		$("#Error4").fadeIn(1000);
																		$('#tri4').fadeIn(1000);
																	}else
																	{
																			if($("#apellido2").val().length >=21){
																				$('#Mensaje4').text('Ingrese Menos De 21 Caracteres');
																				$('#Error4').css('width','235px');
																				$('#apellido2').css('color','black');
																				$('#apellido2').css('background','rgba(0, 143, 129, 0.7)');
																				$("#Error4").fadeIn(1000);
																				$('#tri4').fadeIn(1000);
																			}
																	}

		});

		$("#telefono").focusout(function(){
																			
																	if($("#telefono").val() == "")
																	{
																		$('#Mensaje5').text('Campo Requerido');
																		$('#Error5').css('width','170px');
																		$('#telefono').css('color','black');
																		$('#telefono').css('background','rgba(0, 143, 129, 0.7)');
																		$("#Error5").fadeIn(1000);
																		$('#telefono').css('color','black');	
																		$('#tri5').fadeIn(1000);
																	}else
																		{
																			if(isNaN($("#telefono").val())) {  
															        		$('#Mensaje5').text('Solo Ingrese Numeros');
															        		$('#Error5').css('width','190px');
															        		$('#telefono').css('color','black');	
																			$('#telefono').css('background','rgba(0, 143, 129, 0.7)');
																			$("#Error5").fadeIn(1000);
																			$('#tri5').fadeIn(1000);
															    			}else
															    			{
															    				if ($("#telefono").val().length<8){
															    					$('#Mensaje5').text('Ingrese Mas De 8 Numeros');
															        				$('#Error5').css('width','225px');
															        				$('#telefono').css('color','black');	
																					$('#telefono').css('background','rgba(0, 143, 129, 0.7)');
																					$("#Error5").fadeIn(1000);
																					$('#tri5').fadeIn(1000);
															    				}
															    			}
															    		}

		});
		
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		$("#correo").focusout(function(){
if ($("#correo").val()=="") 
																	{	$('#Mensaje6').text('Campo Requerido');														 $('#Mensaje9').text('Campo Requerido');
																		$('#Error6').css('width','170px');
																		$('#correo').css('color','black');
																		$('#correo').css('background','rgba(0, 143, 129, 0.7)');
																		$("#Error6").fadeIn(1000);
																		$('#correo').css('color','black');	
																		$('#tri6').fadeIn(1000);}
																	 else
																	 {
																	 	if( !emailReg.test( $("#correo").val() ) ) {
																	 		$('#Mensaje6').text('Ingrese Email Valido');
																	 		$('#Error6').css('width','180px');
																	 		$('#correo').css('color','black');	
																	 		$('#correo').css('background','rgba(0, 143, 129, 0.7)');
																			$("#Error6").fadeIn(1000);
																			$('#tri6').fadeIn(1000);
																	 	}
																	 }

		});

		$("#cboplan").focusout(function(){
																	if ($("#cboplan").val()=="") 
																	{	$('#Mensaje7').text('Campo Requerido');
																		$('#Error7').css('width','170px');
																		$('#cboplan').css('background','rgba(0, 143, 129, 0.7)');
																		$("#Error7").fadeIn(1000);
																		$('#tri7').fadeIn(1000);}

																	
		});

		$("#codigo").focusout(function(){
																	 if ($("#codigo").val()=="") 
																	{	$('#Mensaje8').text('Campo Requerido');
																		$('#Error8').css('width','170px');
																		$('#codigo').css('color','black');															 $('#Mensaje8').text('Campo Requerido');
																		$('#codigo').css('background','rgba(0, 143, 129, 0.7)');
																		$("#Error8").fadeIn(1000);
																		$('#tri8').fadeIn(1000);}
																		
																	 
		});


		$("#nombre1").focus(function(){

			$("#Error1").fadeOut();
			$("#tri1").fadeOut();
			$('#nombre1').css('background','white');
		});

		$("#nombre2").focus(function(){

			$("#Error2").fadeOut();
			$("#tri2").fadeOut();
			$('#nombre2').css('background','white');
		});

		$("#apellido1").focus(function(){

			$("#Error3").fadeOut();
			$("#tri3").fadeOut();
			$('#apellido1').css('background','white');
		});

		$("#apellido2").focus(function(){

			$("#Error4").fadeOut();
			$("#tri4").fadeOut();
			$('#apellido2').css('background','white');
		});

		$("#telefono").focus(function(){

			$("#Error5").fadeOut();
			$("#tri5").fadeOut();
			$('#telefono').css('background','white');
		});

		$("#correo").focus(function(){

			$("#Error6").fadeOut();
			$("#tri6").fadeOut();
			$('#correo').css('background','white');
		});

		$("#cboplan").focus(function(){

			$("#Error7").fadeOut();
			$("#tri7").fadeOut();
			$('#cboplan').css('background','white');
		});

		$("#codigo").focus(function(){

			$("#Error8").fadeOut();
			$("#tri8").fadeOut();
			$('#codigo').css('background','white');
		});
});