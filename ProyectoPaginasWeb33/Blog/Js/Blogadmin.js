function BusPass(texto,ncan,totdi)
							{	//JavaScript de AdBusRes.php
								$.ajax({
									type: 'POST',
									url: '../Blog/Paginas/BusquedaPubliAdmin.php',
									data: {
										datos:texto,
										num:ncan,
										total:totdi
									}
								}).done(function(respuesta2){
									$("#despli").html(respuesta2);
								});
								
}

function campag(usua,valorm2,total){

			valorm2=parseInt(valorm2);
			total=parseInt(total);
			
			if(valorm2+5<total){
			valorm2=parseInt(valorm2)+5;
			BusPass(usua,valorm2,total);
			}

}

function campag2(usua,valorm3,total2){

			valorm3=parseInt(valorm3);
			if(valorm3>0){
			valorm3=parseInt(valorm3)-5;
			BusPass(usua,valorm3,total2);
			}
}

function EliDefi(idlibro,i){
	$.ajax({
			type: 'POST',
			url: '../Blog/Paginas/ProcesoEliminarPubli.php',
			data: {
			LibroEli:idlibro
			}
			}).done(function(respu){
				BusPass($("#bb").val(),0,0);
				$("#libel21").text("Publicacion Eliminada");
		        $("#libel21").fadeIn();
		        $("#libel21").delay(2000).fadeOut();				
	});
	$("#"+i).fadeOut();
}

function Elim(idEli)
{	
	$('#'+idEli).fadeIn();
	
}

function CanceEl(idEli){
	$('#'+idEli).fadeOut();
}

$(document).ready(function(){
			
		$("#imglup").click(function(){
			BusPass($("#bb").val(),0,0);
		});
		
		BusPass("",0,0);
		

});