<?php include ("sesionadm.php");?>



<!DOCTYPE html>
<html>
<head>
  <!--Perfil del administrador-->
	<title>LiteraturaMania</title>
	<script src="../Jquery/jquery-1.9.1.min.js"></script>
	<script src="../Jquery/Admin.js"></script>

  <link rel="stylesheet" type="text/css" href="../Css/Perfil.css">
	<link rel="stylesheet" type="text/css" href="../Css/Logo/stylelo.css" />
  <style type="text/css">
    #mensanuli{
      display: none;
      width: 300px;
      height: 40px;
      background-color: rgba(0, 124, 218, 0.3);
      position: fixed;
      margin-top: -10px; 
      margin-left: 500px;
      color: white;
      font-size: 30px;
      font-family: Adobe Fangsong Std R;
      border-radius: 5px;
      text-align: center;
      padding-top: 5px;

    }
    #avatar2{
        width: 50px;
        height: 50px;
        margin-top: -10px;
        margin-left: 8px;
        position: absolute;
        border-radius: 3px;
    }

    #libel21
    {
      display: none;
      width: 300px;
      height: 40px;
      background-color: rgba(215, 44, 44, 0.6);
      position: fixed;
      margin-top: -10px; 
      margin-left: 500px;
      color: white;
      font-size: 30px;
      font-family: Adobe Fangsong Std R;
      border-radius: 5px;
      text-align: center;
      padding-top: 5px;

    }
  </style>
  
</head>
<body>

<script type="text/javascript">
    function ap(){

        $("#mensanuli").text("Libro Ingresado");
        $("#mensanuli").fadeIn();
        $("#mensanuli").delay(2000).fadeOut();
  }

</script>

<?php
  error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    if($_SESSION["nuevoli"]==true){
      echo "<div id='mensanuli'></div>";
?>    
<script type="text/javascript">

  ap();
    
</script>
<?php
}
$_SESSION["nuevoli"]=false;
?>


<?php
      echo "<div id='libel21'></div>";
?>    


	<section id="Cuerpo">
	<table>
     <tr>
        <td class="logotipo">
          <div id="containerEx2"> 

          <div id="ex2"> 
              <img id="IL"src="../Imagenes/libro4.png"> 
        </div> 

        </div> 


        </td>
        <td class="logotipo">
          <div class="container">
            <section class="main">
                 
                <h2 class="cs-text">
                    <span class="cs-text-cut" id="uno">LiteraturaMania</span>
                    <span class="cs-text-mid" id="treis"><label id="texto">Bienvenido</label></span>
                    <span class="cs-text-cut" id="dos">LiteraturaMania</span>

                </h2>
                 
            </section>
             
          </div>
          <script type="text/javascript" src="../Css/Logo/jquery.lettering.js"></script>
          <script>
              $(document).ready(function() {
                  $(".cs-text-cut").lettering('words');
              });
          </script>
          </td>
        
    </tr>
    </table>


	<section id="menu">
		<ul>
			<li id="men1"><label>Reservaciones</label></li>
      <li id="men2"><label>Nuevo Libro</label></li>
      <li id="men5"><label>Eliminar Libro</label></li>
      <li id="men4"><label>Exitencias</label></li>
      <li id="men6"><label>Blog</label></li>
			<li id="men3">
      <img src="../ImagenesAvatar/Administer.png" id="avatar2"/>
      <a href="salir.php">
      <?php echo $_SESSION["usuario"];?>
      <span>Cerrar Secion</span></a></li>
		</ul>
	</section>

	<div id="opciones">

  

	</div>

</body>
</html>