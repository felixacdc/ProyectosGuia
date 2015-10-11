function BusPass(texto,ncan,totdi)
							{	//JavaScript de AdBusRes.php
								$.ajax({
									type: 'POST',
									url: '../Blog/Paginas/BusquedaPubli.php',
									data: {
										datos:texto,
										num:ncan,
										total:totdi
									}
								}).done(function(respuesta2){
									$("#despli").html(respuesta2);
								});
								
}

function campag(valorm2,total){

			valorm2=parseInt(valorm2);
			total=parseInt(total);
			
			if(valorm2+5<total){
			valorm2=parseInt(valorm2)+5;
			BusPass(null,valorm2,total);
			}

}

function campag2(valorm3,total2){

			valorm3=parseInt(valorm3);
			if(valorm3>0){
			valorm3=parseInt(valorm3)-5;
			BusPass(null,valorm3,total2);
			}
}


$(document).ready(function(){
			
		$("#but").click(function(){
			BusPass($("#bb").val(),0,0);
			$("#bb").val(null);
		});
		
		BusPass(null,0,0);
		

});