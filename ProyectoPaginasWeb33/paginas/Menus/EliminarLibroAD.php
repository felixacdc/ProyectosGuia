<?php include ("../sesionadm.php");?>
<!DOCTYPE html>
<html>
<head>
	<!--Busca las reservaciones de usuarios-->
	<title></title>
	<script src="../Jquery/jquery-1.9.1.min.js"></script>
	<script src="js/EliminarLibroAD.js"></script>
	<!--<link href='css/cssad.css' rel='stylesheet' type='text/css'>-->
    <link href='Css/EliminarLibroAD.css' rel='stylesheet' type='text/css'>
	
	<style type="text/css">
		   .prebuntaborr
		   {
		        position: fixed;
			    z-index:100;
			    top: 0px;
			    left: 0px;
			    height:100%;
			    width:100%;
			    background-color: rgba(0, 0, 0, 0.5);
			    display: none;
		   }

		   #SiEL
			{	width: 150px;
				height: 30px;
				box-shadow: 0 1px 1px #eaeaea, inset 0 1px 0 #fbfbfb;
				margin-left: -24px; 
				border-color: rgba(0, 44, 116, 0.7);
				background: (top,  #f9f9f9, #f0f0f0);
				color: #555;
				text-shadow: 0 1px 0 #fff;
				border-radius: 3px;
				font-size: 18px;
				border: 1px solid #dedede;
				font-family: Adobe Fangsong Std R;

			}

			#SiEL:hover
			{
				 background: #f4f4f4;
			    border-color: #c7c7c7 #c3c3c3 #bebebe;
			     box-shadow: 0px 0px 10px  white, inset 0 1px 0 #f3f3f3;
			    text-shadow: 0 1px 0 #fdfdfd;
			    background: -moz-linear-gradient(top,  #efefef, #f8f8f8);
			    background: -webkit-linear-gradient(top,  #efefef, #f8f8f8);
			    background: -o-linear-gradient(top,  #efefef, #f8f8f8);
			    background: -ms-linear-gradient(top,  #efefef, #f8f8f8);
			    background: linear-gradient(top,  #efefef, #f8f8f8); 
			}

			 #NoEL
			{	width: 150px;
				height: 30px;
				box-shadow: 0 1px 1px #eaeaea, inset 0 1px 0 #fbfbfb;
				margin-left: 10px; 
				border-color: rgba(0, 44, 116, 0.7);
				background: (top,  #f9f9f9, #f0f0f0);
				color: #555;
				text-shadow: 0 1px 0 #fff;
				border-radius: 3px;
				font-size: 18px;
				border: 1px solid #dedede;
				font-family: Adobe Fangsong Std R;

			}

			#NoEL:hover
			{
				 background: #f4f4f4;
			    border-color: #c7c7c7 #c3c3c3 #bebebe;
			     box-shadow: 0px 0px 10px  white, inset 0 1px 0 #f3f3f3;
			    text-shadow: 0 1px 0 #fdfdfd;
			    background: -moz-linear-gradient(top,  #efefef, #f8f8f8);
			    background: -webkit-linear-gradient(top,  #efefef, #f8f8f8);
			    background: -o-linear-gradient(top,  #efefef, #f8f8f8);
			    background: -ms-linear-gradient(top,  #efefef, #f8f8f8);
			    background: linear-gradient(top,  #efefef, #f8f8f8); 
			}

			#funcEli
			{
			margin-top: 180px;
			margin-left: 400px;
			width:501px;
			height:200px;
			background: url("Menus/Img/FondoEli.png");
			border-radius: 5px;

			}

			#TituloMensaEli td{
				border-bottom: 1px solid rgba(118, 121, 119, 1);
				height: 30px;
			}

			#TituloMensaEli h2{
				float: left;
			}

			#MensajeEli h4{
				margin-top: -10px;
			}

	</style>	

</head>
<body>
<div id="movdiv">
<input type="text" name="Busqueda" placeholder="Buscar" id="bb">
<button name="Busq" id="but"><img src="Menus/Img/busc2.ico" id="imglup"></button>
</div>


	
	<div id="despli">

	</div>


	
</body>
</html>