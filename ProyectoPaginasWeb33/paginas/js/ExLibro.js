function reser(ncan,totdi)
							{//javascript de ExLibro.php	
								$.ajax({
									type: 'POST',
									url: 'Menus/BuscarLibroEx.php',
									data: {
										datos2:ncan,
										datos3:totdi
									}
								}).done(function(respuesta2){

									$("#tablareser").html(respuesta2);
									
								});
								
}

function campag(valorm2,total){

			valorm2=parseInt(valorm2);
			total=parseInt(total);
			
			if(valorm2+10<total){
			valorm2=parseInt(valorm2)+10;
			reser(valorm2,total);
			}

}


function campag2(valorm3,total2){

			valorm3=parseInt(valorm3);
			if(valorm3>0){
			valorm3=parseInt(valorm3)-10;
			reser(valorm3,total2);
			}
}


function Esta(Idlibro,IdTh,Numeros)
{	
	$.ajax({
									type: 'POST',
									url: 'Menus/AgreElimi.php',
									data: {
										datos2:Idlibro,
										datos4:Numeros
									}
								}).done(function(respuesta2){

									$("#"+IdTh).text(respuesta2);
									
								});
}
$(document).ready(function(){

	reser(0,0);
		
});