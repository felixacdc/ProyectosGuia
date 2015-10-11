function BusPass(texto,valorm,canto)
							{	//JavaScript de BusquedaLibro.php
								$.ajax({
									type: 'POST',
									url: 'Menus/librosbd2.php',
									data: {
										datos:texto,
										most:valorm,
										tot:canto
									}
								}).done(function(respuesta2){
									$("#despli").html(respuesta2);
								});
								
}
		function fnReservar (autor, edicion, nombrel, usbl, cate, edito,erro,tri,exis,idli,imgdi) {
			$.ajax({
									type: 'POST',
									url: 'Menus/ReserCli.php',
									data: {
										datos:autor,
										datos2:edicion,
										datos3:usbl,
										datos4:nombrel,
										datos5:cate,
										datos6:edito,
										datos8:exis,
										datos7:"Reservado",
										idlibro:idli,
										imagenli:imgdi

									}
								}).done(function(respuesta){

									/*if(respuesta!="Libro Recerbado"){
										$("#"+erro).css({ width: "200px", height: "60px" , marginTop: "-90px"});
										$("#"+tri).css({borderwidth: "18px"});
									}
									else{
										$("#"+erro).css({ width: "200px", height: "30px",marginTop: "-60px" });
									}*/
									
									$("#"+erro).text(respuesta);//);
									$("#"+erro).fadeIn(400);
									$("#"+tri).fadeIn(400);
									$("#"+erro).delay(3000).fadeOut(400);
									$("#"+tri).delay(3000).fadeOut(400);
								});
		}

function campag(texto2,valorm2,total){

			valorm2=parseInt(valorm2);
			total=parseInt(total);
			
			if(valorm2+4<total){
			valorm2=parseInt(valorm2)+4;
			BusPass(texto2,valorm2,total);
			}

}

function campag2(texto3,valorm3,total2){

			valorm3=parseInt(valorm3);
			if(valorm3>0){
			valorm3=parseInt(valorm3)-4;
			BusPass(texto3,valorm3,total2);
			}
}
function apari(iddi,idlib,idim){
$(".brnpant").fadeOut();
for (var i=1; i <= 4; i++){
	if(idim!=i)
	$("#desa"+i).fadeOut();

};
$("#"+iddi).delay(600).fadeIn();
}

function clospd(clos){
	$("#"+clos).fadeOut();
	$(".cuerpos").delay(500).fadeIn();
	$(".brnpant").delay(500).fadeIn();
}

$(document).ready(function(){
			
		$("#but").click(function(){
			BusPass($("#bb").val(),0,0);
		});

});