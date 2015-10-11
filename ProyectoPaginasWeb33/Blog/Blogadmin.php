<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="../Jquery/jquery-1.9.1.min.js"></script>
	<script src="../Blog/Js/Blogadmin.js"></script>

	<style type="text/css">

	a{color:white;text-decoration: none;}

    .imgpant{
        width: 60px;
        height: 60px;
        margin: 0px;
    }
    .btntb{
        margin: 0px;
        margin-top: -13px; 
        padding: 0px;
    }

    .brnpant {
    border-radius: 8px;
    box-shadow: inset 0 -1px 3px rgba(255,255,255,0.5), 0 2px 2px rgba(0,0,0,0.2);
    border: 1px solid;
    padding: 3px 5px;
    color: #fff;
    font-family: "Myriad Pro", Arial, Tahoma, sans-serif;
    font-size: 1.4em;
    font-weight: bold;
    text-shadow: -1px -1px rgba(0,0,0,0.1), 0 0 15px rgba(255,255,255,0.75);
    white-space: nowrap;
    background: #777;
    border-color: #777;
    text-decoration: none;
    font-style: normal;
    text-transform: none;   
    position: relative;
    margin-right: 25px;
    width: 170px;
    height: 50px;
}

    .brnpant:focus{
        outline:0px;
    }

    .brnpant:hover{
        background-color: rgba(255, 255, 255, 0.3);
    }

    .brnpant:hover,
    .brnpant:focus {
    bottom: 1px;
    box-shadow: inset 0 -1px 3px rgba(255,255,255,0.5), 0 3px 2px rgba(0,0,0,0.2);  
    background: #999;
    border-color: #999; /* Default color */
    }

    .brnpant:active {
        top: 1px;
        box-shadow: inset 0 -1px 3px rgba(255,255,255,0.5), 0 1px 2px rgba(0,0,0,0.2);
    }


		    .avatarpr{
        width: 100px;
        height: 100px;
        margin: 0px;
        border-radius: 3px;
    }
			 #imglup{
		        width: 25px;
		        height: 25px;
		        margin: 0px;
		    }

	.elim{
        border-radius: 5px;
        color:white;
        height: 30px;
        width: 90px;
        background-color: rgba(215, 40, 40, 0.9);
        border-width:0;
        font-weight:bolder; 
        padding-right: 5px;
        padding-bottom: 2px;
        padding-top: 2px;
        padding-left: 5px;
        cursor: pointer;
    }

    .elim:focus{
        outline:0px;
    }

    .elim:hover{
        text-shadow: 0 .1em 1em black;
    }

	#bb
	{	
		width: 230px;
		height: 29px;
		border-top-left-radius: 6px;
		border-bottom-left-radius: 6px;
		margin-right: 0px;
		background-color: #FFFFFF;
		border-width:0;
		padding-left: 8px;
		display: inline-block;
	}



	#bb:focus{
		outline:0px;
	}

	#but{
		width: 40px;
		height: 31px;
		border-top-right-radius: 6px;
		border-bottom-right-radius: 6px;
		margin-left: -4px;
		background-color: #FFFFFF;
		border-width:0;
		display: inline-block;
		position: absolute;
		cursor: pointer;
	}

	#but:focus{
		outline:0px;

	}

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