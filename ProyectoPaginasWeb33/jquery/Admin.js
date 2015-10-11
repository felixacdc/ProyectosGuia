var veri=1;
$(document).ready(function(){//JavaScript de Administer.js

		$("#opciones").load('../Paginas/Menus/AdBusRes.php');
		document.getElementById('men1').style.background = 'rgba(0, 124, 218, 0.3)';

		$("#men1").click(function(){
			$("#opciones").load('../Paginas/Menus/AdBusRes.php');
			document.getElementById('men1').style.background = 'rgba(0, 124, 218, 0.3)';
			document.getElementById('men2').style.background = 'rgba(0, 124, 218, 0.0)';
			document.getElementById('men3').style.background = 'rgba(0, 124, 218, 0.0)';
			document.getElementById('men4').style.background = 'rgba(0, 124, 218, 0.0)';
			document.getElementById('men5').style.background = 'rgba(0, 124, 218, 0.0)';
			veri=1;
			
		});

		$("#men6").click(function(){
			$("#opciones").load('../Blog/Blogadmin.php');
		});

		$("#men2").click(function(){
			$("#opciones").load('../Paginas/Menus/NuevoLibro.php');
			document.getElementById('men2').style.background = 'rgba(0, 124, 218, 0.3)';
			document.getElementById('men1').style.background = 'rgba(0, 124, 218, 0.0)';
			document.getElementById('men3').style.background = 'rgba(0, 124, 218, 0.0)';
			document.getElementById('men4').style.background = 'rgba(0, 124, 218, 0.0)';
			document.getElementById('men5').style.background = 'rgba(0, 124, 218, 0.0)';
			veri=2;
			
		});

		$("#men3").click(function(){
			document.getElementById('men3').style.background = 'rgba(0, 124, 218, 0.3)';
			document.getElementById('men2').style.background = 'rgba(0, 124, 218, 0.0)';
			document.getElementById('men4').style.background = 'rgba(0, 124, 218, 0.0)';
			document.getElementById('men1').style.background = 'rgba(0, 124, 218, 0.0)';
			document.getElementById('men5').style.background = 'rgba(0, 124, 218, 0.0)';
			veri=4;
			
		});

		$("#men4").click(function(){
			$("#opciones").load('../Paginas/Menus/ExLibro.php');
			document.getElementById('men4').style.background = 'rgba(0, 124, 218, 0.3)';
			document.getElementById('men2').style.background = 'rgba(0, 124, 218, 0.0)';
			document.getElementById('men3').style.background = 'rgba(0, 124, 218, 0.0)';
			document.getElementById('men1').style.background = 'rgba(0, 124, 218, 0.0)';
			document.getElementById('men5').style.background = 'rgba(0, 124, 218, 0.0)';
			veri=4;
			
		});

		$("#men5").click(function(){
			$("#opciones").load('../Paginas/Menus/EliminarLibroAD.php');
			document.getElementById('men5').style.background = 'rgba(0, 124, 218, 0.3)';
			document.getElementById('men2').style.background = 'rgba(0, 124, 218, 0.0)';
			document.getElementById('men3').style.background = 'rgba(0, 124, 218, 0.0)';
			document.getElementById('men4').style.background = 'rgba(0, 124, 218, 0.0)';
			document.getElementById('men1').style.background = 'rgba(0, 124, 218, 0.0)';
			veri=5;
			
		});

		$("#men1").hover(function(){
			if(veri!=1){
			document.getElementById('men1').style.background = 'rgba(0, 124, 218, 0.2)';}
		});

		$("#men1").mouseleave(function(){
			if(veri!=1){
			document.getElementById('men1').style.background = 'rgba(0, 124, 218, 0.0)';}
		});


		
		$("#men2").hover(function(){
			if(veri!=2){
			document.getElementById('men2').style.background = 'rgba(0, 124, 218, 0.2)';}
		});

		$("#men2").mouseleave(function(){
			if(veri!=2){
			document.getElementById('men2').style.background = 'rgba(0, 124, 218, 0.0)';}
		});

		$("#men3").hover(function(){
			if(veri!=3){
			document.getElementById('men3').style.background = 'rgba(0, 124, 218, 0.2)';}
		});

		$("#men3").mouseleave(function(){
			if(veri!=3){
			document.getElementById('men3').style.background = 'rgba(0, 124, 218, 0.0)';}
		});
		
		$("#men4").hover(function(){
			if(veri!=4){
			document.getElementById('men4').style.background = 'rgba(0, 124, 218, 0.2)';}
		});

		$("#men4").mouseleave(function(){
			if(veri!=4){
			document.getElementById('men4').style.background = 'rgba(0, 124, 218, 0.0)';}
		});

		$("#men5").hover(function(){
			if(veri!=5){
			document.getElementById('men5').style.background = 'rgba(0, 124, 218, 0.2)';}
		});

		$("#men5").mouseleave(function(){
			if(veri!=5){
			document.getElementById('men5').style.background = 'rgba(0, 124, 218, 0.0)';}
		});
			
});