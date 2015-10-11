function BusPass(texto,ncan,totdi)
							{	//JavaScript de AdBusRes.php
								$.ajax({
									type: 'POST',
									url: 'Menus/BuscarLibrosAdEli.php',
									data: {
										datos:texto,
										datos2:ncan,
										datos3:totdi
									}
								}).done(function(respuesta2){
									$("#despli").html(respuesta2);
								});
								
}

function campag(texto2,valorm2,total){

			valorm2=parseInt(valorm2);
			total=parseInt(total);
			
			if(valorm2+10<total){
			valorm2=parseInt(valorm2)+10;
			BusPass(texto2,valorm2,total);
			}

}

function campag2(texto3,valorm3,total2){

			valorm3=parseInt(valorm3);
			if(valorm3>0){
			valorm3=parseInt(valorm3)-10;
			BusPass(texto3,valorm3,total2);
			}
}




function Elim(idEli)
{	
	$('#'+idEli).fadeIn();
	
}

function EliDefi(idbt2,idlibro,i){
	$('#'+idbt2).fadeOut();
	$.ajax({
			type: 'POST',
			url: 'Menus/ProcesoEliminarLibro.php',
			data: {
			LibroEli:idlibro
			}
			}).done(function(respu){
				$("#libel21").text("Libro Eliminado");
		        $("#libel21").fadeIn();
		        $("#libel21").delay(2000).fadeOut();				
	});
	$("#"+i).fadeOut();
}

function CanceEl(idEli){
	$('#'+idEli).fadeOut();
}

$(document).ready(function(){
			
		$("#but").click(function(){
			BusPass($("#bb").val(),0,0);
		});
		
		

});