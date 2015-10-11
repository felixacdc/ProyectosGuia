function BusPass(texto,ncan,totdi)
							{	//JavaScript de AdBusRes.php
								$.ajax({
									type: 'POST',
									url: 'Menus/AdminBus.php',
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

function Cambio(id,estad)
							{	
								$.ajax({
									type: 'POST',
									url: 'Menus/Cambest.php',
									data: {
										datos:id,
										datos2:estad
									}
								}).done(function(respu){
									
								});
								
}

function Esta(estado,idbt,idbd)
{	
		if($("#"+idbt).text()=="Reservado")
		{	Cambio(idbd,$("#"+idbt).text());
			$("#"+idbt).css("background","rgba(0, 198, 107, 0.8)");
			$("#"+idbt).text("Entregado");

		}else{
			Cambio(idbd,$("#"+idbt).text());
			$("#"+idbt).css("background","rgba(255, 0, 0, 0.8)");
			$("#"+idbt).text("Reservado");
		}
}

function Elim(idbt2,idbd,idlibro)
{
	$.ajax({
			type: 'POST',
			url: 'Menus/EliminarRes.php',
			data: {
			datos:idbt2,
			datos2:idbd,
			datos3:idlibro
			}
			}).done(function(respu){
									
	});
	$("#"+idbt2).fadeOut();
}

$(document).ready(function(){
			
		$("#but").click(function(){
			BusPass($("#bb").val(),0,0);
		});
		
		

});