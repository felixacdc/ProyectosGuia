/*--------------------------------------
		LLENADO DE TABLA MODAL
-----------------------------------------*/
function callrecord(){
        
	    $.ajax({
            url: "paginas/cargarusuarios.php", 
            dataType: "json",
            success: function(data){
                console.log(data);
                alert("Si");
                
                $("#regtb tbody").html('');
                
                if(data != null && $.isArray(data)){
                    
                    $.each(data, function(value){
                         
                        $("#regtb tbody").append("<tr><td>" + value.nombre + "</td><td>" + value.apellido + "</td><td>" + value.carrera + "</td><td>" + value.plan + "</td></tr>");
                    });
                }
            },
            error: function(data) {
                 console.log(data);
            } 
        });
}


function callrecord2(){
    $.ajax({
        type: 'POST',
        url: 'Paginas/MostrarUsuarios.php',
        data: {
                    
                }
    }).done(function(respuesta){

        $("#regtb tbody").html(respuesta);
                    
    });
}

/*--------------------------------------
			CUERPO PRINCIPAL
-----------------------------------------*/

$(document).ready(function(){

	$("#btnregistrados").click(function(){
		callrecord2();
	})

	$("#btnregistrar").click(function(){
		location.href="paginas/Registro.php"
	})

})







