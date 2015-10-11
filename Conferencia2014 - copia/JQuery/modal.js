function MostrarUsuarios(){ 
			$.ajax({
				type: 'POST',
				url: 'Paginas/MostrarUsuarios.php',
				data: {
					
				}
			}).done(function(respuesta){

				$("#Contenido").html(respuesta);
					
			});
}







$(document).ready(function(){

	

	$('#btnconsulta').click(function(){
		MostrarUsuarios();
		$('#myModal').modal({show:true})
				
	});
	
		


});