
<?php
//pagina principal
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
session_start();

if($_SESSION["activacion"]){
  $usu=$_SESSION['usuario'];

  include('paginas/conexion.php');

  $consulta="SELECT * FROM regusuarios WHERE usuario='$usu'";

    $ejecutar_consulta=$conexion->query($consulta);

    $num_regs=$ejecutar_consulta->num_rows;

    if($num_regs==0)
    { 
      $consulta2="SELECT * FROM admibiblio WHERE usuario_ad='$usu'";

      $ejecutar_consulta2=$conexion->query($consulta2);

      $num_regs2=$ejecutar_consulta2->num_rows;

      if($num_regs2!=0)
      {

        header("Location: paginas/Administer.php");
      }
    }else{


      header("Location: paginas/Perfil.php");
    }

}

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link type="text/css" rel="stylesheet" href="Css/Login.css"/>
<link rel="stylesheet" type="text/css" href="Css/Formulario.css">
<link rel="stylesheet" type="text/css" href="Css/Logo/stylelo.css" />


<script src="Jquery/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="Jquery/jquery.leanModal.min.js"></script>
<script src="Jquery/Login.js"></script>
<script src="sliderengine/amazingslider.js"></script>
<script src="sliderengine/initslider-1.js"></script>

<style type="text/css">
  #RecuperarCon{
    display: none;
    color: white;
    margin-left: 82px;
    cursor: pointer;
    text-decoration: underline;
    font-family: Adobe Fangsong Std R;
  }

  #RecuperarCon:hover{
    text-shadow: 0 .1em 1em lightblue;
  }

  #Ing{
    margin-bottom: 10px;
  }

</style>

</head>

<body>
	
<section id="Cuerpo">
    <table>
     <tr>
        <td class="logotipo">
          <div id="containerEx2"> 

          <div id="ex2"> 
              <img id="IL"src="Imagenes/libro4.png"> 
        </div> 

        </div> 


        </td>
        <td class="logotipo">
          <div class="container">
            <section class="main">
                 
                <h2 class="cs-text">
                    <span class="cs-text-cut" id="uno">LiteraturaMania</span>
                    <span class="cs-text-mid"><label id="texto">Reserva Tus Libros</label></span>
                    <span class="cs-text-cut" id="dos">LiteraturaMania</span>
                </h2>
                 
            </section>
             
          </div>
          <script type="text/javascript" src="Css/Logo/jquery.lettering.js"></script>
          <script>
              $(document).ready(function() {
                  $(".cs-text-cut").lettering('words');
              });
          </script>
          </td>
        
    </tr>
    </table>


	<div id="Sepa">
    <a id="go" name="test" href="#cmd"><div id="formu" class="r"><label class="lbl"><img class="im" src="Imagenes/Ini.ico">Iniciar Sesion</label></div></a>
    <a href="Paginas/Registro.php"><div id="me2" class="r"><img class="im" src="Imagenes/Regis.ico"><label class="lbl">Registrar</label></div></a>
    </div>
    <script src="Jquery/FormularioLogin.js"></script>
            <div id='lean_overlay'>
            <form name="Datos" method="post" action="Paginas/Portal.php" id="cmd">
                <h1 id="logi">Login</h1>
              
                  <input type="text" name="Usuario" id="datos" placeholder="Usuario" class="texto" autocomplete="off"/>
                  
                  <div id="tri1" class="tris"></div>
                  <div id="Error1" class="errores">
                  <img src="Imagenes/Error1.png" id="IErr" class="Erro">
                  <label id="Mensaje1" class="Mensa"></label>
                  </div>

                  <input type="password" name="Contraseña" id="datos2" placeholder="Contraseña" class="texto" autocomplete="off"/>
                  <div id="tri2" class="tris"></div>
                  <div id="Error2" class="errores">
                    <img src="Imagenes/Error1.png" id="IErr2" class="Erro">
                <label id="Mensaje2" class="Mensa"></label>
              </div>

              <input type="button" name="Ingresar" id="Ing" value="Iniciar Sesion" /><br/>
              <a href="Paginas/RecuperarContra.php" id="RecuperarCon"><label>Recuperacion De Datos</label></a>
                </form>
            </div>
       
        
    
<div style="margin:105px auto;max-width:900px;" id="carru">
    
    <div id="amazingslider-1" style="display:block;position:relative;margin:16px auto 56px;">
        <ul class="amazingslider-slides" style="display:none;">
            <li><img src="images/Sirena.png" alt="Sirena" /></li>
            <li><img src="images/don_quijote_de_la_mancha.png" alt="Don Quijote De La Mancha" /></li>
            <li><img src="images/imgOliver Twist2.png" alt="Oliver Twist" /></li>
            <li><img src="images/9626467.png" alt="Veinte Poemas De Amor Y Una Cancion Desesperada" /></li>
            <li><img src="images/13107-el-alquimista-paulo-cohelo.png" alt="El Alquimista" /></li>
            <li><img src="images/La-reina-sin-nombre.png" alt="La-reina-sin-nombre" /></li>
            <li><img src="images/el_temor_de_un_hombre_sabio_600_912.png" alt="El Temor De Un Hombre Sabio" /></li>
        </ul>
        <ul class="amazingslider-thumbnails" style="display:none;">
            <li><img src="images/Sirena-tn.jpg" /></li>
            <li><img src="images/don_quijote_de_la_mancha-tn.jpg" /></li>
            <li><img src="images/imgOliver Twist2-tn.jpg" /></li>
            <li><img src="images/9626467-tn.jpg" /></li>
            <li><img src="images/13107-el-alquimista-paulo-cohelo-tn.jpg" /></li>
            <li><img src="images/La-reina-sin-nombre-tn.jpg" /></li>
            <li><img src="images/el_temor_de_un_hombre_sabio_600_912-tn.jpg" /></li>
        </ul>
    </div>

    
</div>
      

      <section id="comentarios">
        <div class="Temas">
          <h2>Sevicios</h2>
          <p>Ofrecemos reservaciones de una vasta variedad de obras literarias en línea facil y rapido.</p>
        </div>
        <div class="Temas" id="v1">
          <h2>Hacer Reservaciones</h2>
          <p>Para poder proceder a reservar tus libros favoritos tienes que crear una cuenta en nuestra pagina.</p>
        </div>
        <div class="Temas" id="v1">
          <h2>Aportes</h2>
          <p>Crear facilidades de obtención de libros para fomentar la lectura en la juventud.</p>
        </div>
      </section>


</section>
</body>
</html>
