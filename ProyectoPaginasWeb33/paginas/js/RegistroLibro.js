;
var ejecutar=true;
var inter=true;
//JavaScript de NuevoLibro.php
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
												document.querySelector("#avatar").src=Img.target.result;
											}

										})(imagen);

										lector.readAsDataURL(imagen);
									}
									else if(imagen.type.match("image.*")){
										$("#Error11").fadeIn(1000);
										$('#Error11').css('margin-Left','315px');
										$('#tri11').fadeIn(1000);
										$('#tri11').css('margin-Left','292px');
										$('#Mensaje11').text('Prueva con una imagen menor a 2mb');
										$('#Error11').css('width','285px');
										ejecutar=false;

									}else if(!imagen.type.match("image.*")){
										$("#Error11").fadeIn(1000);
										$('#Error11').css('margin-Left','315px');
										$('#tri11').fadeIn(1000);
										$('#tri11').css('margin-Left','292px');
										$('#Mensaje11').text('El archivo no es una imagen');
										$('#Error11').css('width','229px');
										ejecutar=false;
									}

}

function validarPDF(PDF){
								var pdfs=PDF.target.files;
								var archi =pdfs[0];


								if(archi.type.match("\.pdf") && archi.size < 2000000 )
									{	ejecutar=true;
										$("#Error12").fadeOut();
										$("#tri12").fadeOut();
										var lector=new FileReader();

										lector.readAsDataURL(archi);
									}
									else if(archi.type.match("\.pdf")){
										$("#Error12").fadeIn(1000);
										$('#Error12').css('margin-Left','315px');
										$('#tri12').fadeIn(1000);
										$('#tri12').css('margin-Left','292px');
										$('#Mensaje12').text('Prueva con un PDF menor a 2mb');
										$('#Error12').css('width','285px');
										ejecutar=false;

									}else if(!archi.type.match("\.pdf")){
										$("#Error12").fadeIn(1000);
										$('#Error12').css('margin-Left','315px');
										$('#tri12').fadeIn(1000);
										$('#tri12').css('margin-Left','292px');
										$('#Mensaje12').text('El archivo no es un PDF');
										$('#Error12').css('width','219px');
										ejecutar=false;
									}

}

function BusLibro(nombrelbl, autor, edici){
									$.ajax({
									type: 'POST',
									url: 'Menus/BuscarLibro.php',
									data: {
										datos:nombrelbl,
										datautor:autor,
										datedici:edici
									}
								}).done(function(respuesta){
									if(respuesta!=""){
									$('#Mensaje1').text(respuesta);
									$("#Error1").fadeIn(1000);
									$('#tri1').fadeIn(1000);
									$('#Mensaje2').text(respuesta);
									$("#Error2").fadeIn(1000);
									$('#tri2').fadeIn(1000);
									$('#Mensaje4').text(respuesta);
									$("#Error4").fadeIn(1000);
									$('#tri4').fadeIn(1000);
									document.getElementById('Error1').style.width = '170px';
									document.getElementById('Error1').style.marginLeft = '-185px';
									document.getElementById('Error2').style.width = '170px';
									document.getElementById('Error2').style.marginLeft = '-185px';
									document.getElementById('Error4').style.width = '170px';
									document.getElementById('Error4').style.marginLeft = '-185px';
									ejecutar=false;
									inter=false;
									}
									else{
									$("#Error1").fadeOut(1000);
									$('#tri1').fadeOut(1000);
									$("#Error2").fadeOut(1000);
									$('#tri2').fadeOut(1000);
									$("#Error4").fadeOut(1000);
									$('#tri4').fadeOut(1000);
									ejecutar=true;
									inter=true;}
								});
}

$(document).ready(function(){


	
		$("#Env").click(function(){
						
		

			if($("#Nlibro").val() == ""){
				$('#Mensaje1').text('Campo Requerido');
				$('#Error1').css('width','170px');
				$('#Error1').css('margin-Left','-185px');
				$('#Nlibro').css('color','black');				
				$('#Nlibro').css('background','rgba(75, 123, 174, 0.3)');
				$("#Error1").fadeIn(1000);
				$('#tri1').fadeIn(1000);
				ejecutar=false;
			}
			
						
							
							if($("#autor").val() == ""){
								$('#Mensaje2').text('Campo Requerido');
								$('#Error2').css('width','170px');
								$('#autor').css('color','black');	
								$('#Error2').css('margin-Left','-185px');
								$('#autor').css('background','rgba(75, 123, 174, 0.3)');
								$("#Error2").fadeIn(1000);
								$('#tri2').fadeIn(1000);
								ejecutar=false;
							}
							
									
											if($("#Editorial").val() == ""){
											$('#Mensaje3').text('Campo Requerido');
											$('#Error3').css('width','170px');
											$('#Error3').css('margin-Left','-185px');
											$('#Editorial').css('color','black');	
											$('#Editorial').css('background','rgba(75, 123, 174, 0.3)');
											$("#Error3").fadeIn(1000);
											$('#tri3').fadeIn(1000);
											ejecutar=false;
											}				
																	if($("#Edicion").val() == ""){
																		$('#Mensaje4').text('Campo Requerido');
																		$('#Error4').css('width','170px');
																		$('#Error4').css('margin-Left','-185px');
																		$('#Edicion').css('background','rgba(75, 123, 174, 0.3)');
																		$("#Error4").fadeIn(1000);
																		$('#tri4').fadeIn(1000);
																	ejecutar=false;
																	}else
																		{
																			if(isNaN($("#Edicion").val())) {  
															        		$('#Mensaje4').text('Solo Ingrese Numeros');
															        		$('#Error4').css('width','190px');
															        		$('#Error4').css('margin-Left','-205px');
															        		$('#Edicion').css('color','black');	
																			$('#Edicion').css('background','rgba(75, 123, 174, 0.3)');
																			$("#Error4").fadeIn(1000);
																			$('#tri4').fadeIn(1000);
																			ejecutar=false; 
															    			}
															    		}
																	
																		
																	if($("#Categoria").val() == ""){
																		$('#Mensaje5').text('Campo Requerido');
																		$('#Error5').css('width','170px');
																		$('#Error5').css('margin-Left','-185px');
																		$('#Categoria').css('background','rgba(75, 123, 174, 0.3)');
																		$("#Error5").fadeIn(1000);
																		$('#tri5').fadeIn(1000);
																		ejecutar=false;
																	}	

																	

																	 if(!document.querySelector("#imagen").value){
																	 	$('#Mensaje11').text('Campo Requerido');
																	 		$('#Error11').css('width','180px');
																	 		$('#Error11').css('margin-Left','315px');
																			$("#Error11").fadeIn(1000);
																			$('#tri11').css('margin-Left','292px');
																			$('#tri11').fadeIn(1000);
																		 	ejecutar=false;
																	 }

																	 if(!document.querySelector("#imgpdf").value){
																	 	$('#Mensaje12').text('Campo Requerido');
																	 		$('#Error12').css('width','180px');
																	 		$('#Error12').css('margin-Left','315px');
																			$("#Error12").fadeIn(1000);
																			$('#tri12').css('margin-Left','292px');
																			$('#tri12').fadeIn(1000);
																		 	ejecutar=false;
																	 }

		if(ejecutar)
		{
		document.LibroNuevo.submit();
		}
		
			
		});
	document.querySelector("#imagen").addEventListener("change",validarImg);
	document.querySelector("#imgpdf").addEventListener("change",validarPDF);

	$("#Nlibro").focusout(function(){
			if($("#Nlibro").val() == ""){
				$('#Mensaje1').text('Campo Requerido');
				$('#Error1').css('width','170px');
				$('#Error1').css('margin-Left','-185px');
				$('#Nlibro').css('color','black');				
				$('#Nlibro').css('background','rgba(75, 123, 174, 0.3)');
				$("#Error1").fadeIn(1000);
				$('#tri1').fadeIn(1000);
			}
	});

	$("#autor").focusout(function(){
		if($("#autor").val() == ""){
			$('#Mensaje2').text('Campo Requerido');
			$('#Error2').css('width','170px');
			$('#autor').css('color','black');	
			$('#Error2').css('margin-Left','-185px');
			$('#autor').css('background','rgba(75, 123, 174, 0.3)');
			$("#Error2").fadeIn(1000);
			$('#tri2').fadeIn(1000);
		}
	});

	$("#Editorial").focusout(function(){
		if($("#Editorial").val() == ""){
			$('#Mensaje3').text('Campo Requerido');
			$('#Error3').css('width','170px');
			$('#Error3').css('margin-Left','-185px');
			$('#Editorial').css('color','black');	
			$('#Editorial').css('background','rgba(75, 123, 174, 0.3)');
			$("#Error3").fadeIn(1000);
			$('#tri3').fadeIn(1000);
		}	
	});

	$("#Edicion").focusout(function(){
		if($("#Edicion").val() == ""){
			$('#Mensaje4').text('Campo Requerido');
			$('#Error4').css('width','170px');
			$('#Error4').css('margin-Left','-185px');
			$('#Edicion').css('background','rgba(75, 123, 174, 0.3)');
			$("#Error4").fadeIn(1000);
			$('#tri4').fadeIn(1000);
		}else
		{
			if(isNaN($("#Edicion").val())) {  
			$('#Mensaje4').text('Solo Ingrese Numeros');
			$('#Error4').css('width','190px');
			$('#Error4').css('margin-Left','-205px');
			$('#Edicion').css('color','black');	
			$('#Edicion').css('background','rgba(75, 123, 174, 0.3)');
			$("#Error4").fadeIn(1000);
			$('#tri4').fadeIn(1000);
			ejecutar=false; 
			}
		}
	});

	$("#Categoria").focusout(function(){
		if($("#Categoria").val() == ""){
			$('#Mensaje5').text('Campo Requerido');
			$('#Error5').css('width','170px');
			$('#Error5').css('margin-Left','-185px');
			$('#Categoria').css('background','rgba(75, 123, 174, 0.3)');
			$("#Error5").fadeIn(1000);
			$('#tri5').fadeIn(1000);
		}	
	});

	$("#Categoria").focus(function(){
			if(inter){
			$("#Error5").fadeOut();
			$("#tri5").fadeOut();
			$('#Categoria').css('background','white');}
	});

	$("#Edicion").focus(function(){
			if(inter){
			$("#Error4").fadeOut();
			$("#tri4").fadeOut();
			$('#Edicion').css('background','white');}
	});

	$("#Editorial").focus(function(){
			if(inter){
			$("#Error3").fadeOut();
			$("#tri3").fadeOut();
			$('#Editorial').css('background','white');}
	});

	$("#autor").focus(function(){
			if(inter){
			$("#Error2").fadeOut();
			$("#tri2").fadeOut();
			$('#autor').css('background','white');}
	});

	$("#Nlibro").focus(function(){
			if(inter){
			$("#Error1").fadeOut();
			$("#tri1").fadeOut();
			$('#Nlibro').css('background','white');}
	});
});