

function reser(texto)
							{//JavaScript de ReservacionesCli.php	
								$.ajax({
									type: 'POST',
									url: 'Menus/ResrLBL.php',
									data: {
										datos:texto
									}
								}).done(function(respuesta2){

									$("#tablareser").html(respuesta2);
									
								});
								
}




$(document).ready(function(){

	reser($("#sesi").text());

	
						


		
		

});