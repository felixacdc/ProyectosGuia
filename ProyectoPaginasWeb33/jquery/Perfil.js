var veri=1;
$(document).ready(function(){
//JavaScript del Perfil.php

		$("#opciones").load('../Paginas/Menus/BusquedaLibro.php');
		document.getElementById('m1').style.background = 'rgba(0, 124, 218, 0.3)';
			
		$("#m5").click(function(){
			$("#opciones").load('../Blog/Blog.php');


		});


		$("#m1").click(function(){
			$("#opciones").load('../Paginas/Menus/BusquedaLibro.php');
			document.getElementById('m1').style.background = 'rgba(0, 124, 218, 0.3)';
			document.getElementById('m2').style.background = 'rgba(0, 124, 218, 0.0)';
			document.getElementById('m4').style.background = 'rgba(0, 124, 218, 0.0)';
			document.getElementById('m3').style.background = 'rgba(0, 124, 218, 0.0)';
			veri=1;

		});

		$("#m2").click(function(){
			$("#opciones").load('../Paginas/Menus/ReservacionesCli.php');
			document.getElementById('m2').style.background = 'rgba(0, 124, 218, 0.3)';
			document.getElementById('m1').style.background = 'rgba(0, 124, 218, 0.0)';
			document.getElementById('m4').style.background = 'rgba(0, 124, 218, 0.0)';
			document.getElementById('m3').style.background = 'rgba(0, 124, 218, 0.0)';
			veri=2;

		});

		$("#m3").click(function(){
			document.getElementById('m3').style.background = 'rgba(0, 124, 218, 0.3)';
			document.getElementById('m2').style.background = 'rgba(0, 124, 218, 0.0)';
			document.getElementById('m1').style.background = 'rgba(0, 124, 218, 0.0)';
			document.getElementById('m4').style.background = 'rgba(0, 124, 218, 0.0)';
			veri=6;

		});

		$("#m4").click(function(){
			$("#opciones").load('../Paginas/Menus/ModificarDatosUsua.php');
			document.getElementById('m4').style.background = 'rgba(0, 124, 218, 0.3)';
			document.getElementById('m2').style.background = 'rgba(0, 124, 218, 0.0)';
			document.getElementById('m1').style.background = 'rgba(0, 124, 218, 0.0)';
			document.getElementById('m3').style.background = 'rgba(0, 124, 218, 0.0)';
			veri=3;

		});

		
		$("#m1").hover(function(){
			if(veri!=1){
			document.getElementById('m1').style.background = 'rgba(0, 124, 218, 0.2)';}
		});

		$("#m1").mouseleave(function(){
			if(veri!=1){
			document.getElementById('m1').style.background = 'rgba(0, 124, 218, 0.0)';}
		});


		
		$("#m2").hover(function(){
			if(veri!=2){
			document.getElementById('m2').style.background = 'rgba(0, 124, 218, 0.2)';}
		});

		$("#m2").mouseleave(function(){
			if(veri!=2){
			document.getElementById('m2').style.background = 'rgba(0, 124, 218, 0.0)';}
		});

		$("#m3").hover(function(){
			if(veri!=6){
			document.getElementById('m3').style.background = 'rgba(0, 124, 218, 0.2)';}
		});

		$("#m3").mouseleave(function(){
			if(veri!=6){
			document.getElementById('m3').style.background = 'rgba(0, 124, 218, 0.0)';}
		});
		
		$("#m4").hover(function(){
			if(veri!=3){
			document.getElementById('m4').style.background = 'rgba(0, 124, 218, 0.2)';}
		});

		$("#m4").mouseleave(function(){
			if(veri!=3){
			document.getElementById('m4').style.background = 'rgba(0, 124, 218, 0.0)';}
		});
});