<?php 
//Perfil Usuario
include ("sesionperf.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>LiteraturaMania</title>
	<link rel="stylesheet" type="text/css" href="../Css/Perfil.css">
	<script src="../Jquery/jquery-1.9.1.min.js"></script>
	<script src="../Jquery/Perfil.js"></script>
	<link rel="stylesheet" type="text/css" href="../Css/Logo/stylelo.css" />
</head>

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

#menu ul li:hover{
  background-color: rgba(34, 69, 98, 0.9);
}
  </style>


<body>
<!--Perfil del ususario-->
<script type="text/javascript">
    function ap(){

        $("#mensanuli").text("Datos Modificados");
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
                    <span class="cs-text-mid"  id="treis"><label id="texto">Bienvenido</label></span>
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

          <td>

            <style type="text/css">
           .fh{
            color: white;font-family: Adobe Fangsong Std R;
            font-size: 18px;
           }
           #lblbus{
            width: 60%;
            margin-left: 20%;
           }
          </style>

          <div id="datoshora">
          <label class="fh">Fecha: </label>
          <label id="date" class="fh"></label><br/>
          <label class="fh">Hora: </label>
          <label id="time" class="fh"></label>


        </div>

        <script type="text/javascript">
          function fechh(){
                        $.ajax({
               url: "http://date.jsontest.com/",
               dataType: 'json',             
               success: function(result)
               {
                    $("#time").text(result['time']);
                    $("#date").text(result['date']);
                    fechh();
                
               }

            }); 
          }
        $(document).ready(function() {      
        
            fechh();

         }); 
         

        
    </script>
          </td>

 
        
    </tr>
    </table>


	<section id="menu">
		<ul>
			<li id="m1"><label>Busqueda De Libros</label></li>
			<li id="m2"><label>Mis Reservaciones</label></li>
      <li id="m4"><label>Modificar Datos</label></li>
      <li id="m5"><label>Blog</label></li>
			<li id="m3">
        <div>
        <?php  echo '<img src="../ImagenesAvatar/'.$_SESSION["usuario"].'.png" id="avatar"/>'; ?>
        <a href="salir.php"><?php echo $_SESSION["usuario"];?>
        <span>Cerrar Secion</span>
        </a>

      </li> 

		</ul>
	</section>

	<div id="opciones">

  <!--<script>
  (function() {
    var cx = '008713816882204626394:qgtdmzvilw0';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();

  </script>
  <gcse:search id="lblbus"></gcse:search>-->
	</div>

</body>
</html>


