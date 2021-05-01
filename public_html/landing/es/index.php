<?php
$guardado=$_POST['guardado'];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300;1,400&display=swap" rel="stylesheet">

<link rel="shortcut icon" href="imagenes/favicon.ico">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
var num = 50; //number of pixels before modifying styles
$(window).bind('scroll', function () {
if ($(window).scrollTop() > num) {
$('.menuprincipal').addClass('fixed');
} else {
$('.menuprincipal').removeClass('fixed');
}
});
</script>
<script>
$(document).ready(function() {
  $('a[href^="#"]').click(function() {
    var destino = $(this.hash);
    if (destino.length == 0) {
      destino = $('a[name="' + this.hash.substr(1) + '"]');
    }
    if (destino.length == 0) {
      destino = $('html');
    }
    $('html, body').animate({ scrollTop: destino.offset().top }, 1000);
    return false;
  });
});
</script>

<title>NetApp</title>
<link href="css/estilos.css" rel="stylesheet">

</head>
<body>
<div class="logos">
<div class="container">
<div class="logo"><img src="imagenes/logo.png"></div>
<div class="logo2"><img src="imagenes/synnex.png"></div>
</div>
</div>

<div class="menuprincipal">
<div class="container">
<nav>
<ul>
<a href="index.php"><li class="inicio">HOME</li></a>
<a href="#form1"><li>REGISTRO</li></a>
<a href="#"><li>CALENDARIO</li></a>
<a href="#premios"><li>PREMIOS</li></a>
<a href="Terminos y condiciones_Español.pdf" target="black"><li class="fin">TERMINOS Y CONDICIONES</li></a>
</ul>
<div class="handle">Menu</div>
</nav>
</div>
<script>
$('.handle').on('click', function(){
$('nav ul').toggleClass('showing');
});
</script>
</div>	
	
<div class="container">
	<div class="contenido">
	<div class="destacado">
	<div class="text-destacado">
		<h3>Activate con Netapp y <br>
participa en nuestro concurso </h3>
<h1>Compite y Gana con <br>
Synnex y Netapp</h1>
		<p>Aprende sobre las últimas tendencias tecnológicas de Netapp, <br>
capacita a tu equipo comercial y técnico, aumenta tus ventas  <br>
y gana fabulosos premios.</p>
		</div>
		<div class="imgdestacado"><img src="imagenes/destacado.jpg"></div>
		
	</div>
	<div class="iconos">
		<div class="icono"><img src="imagenes/alendario.png">Calendario</div>
				<div class="icono"><img src="imagenes/reloj.png">Terminos y Condiciones</div>
				<div class="icono"><img src="imagenes/registro.png">Registro</div>
				<div class="icono"><img src="imagenes/premios.png">Premios</div>
		</div>
	<div class="registro">
	<h2>Registro</h2>
		<?php
if(is_null($guardado))
	{
		}
else {
echo "Datos guardados.";
}
?>
<a name="form1" id="form1"></a>
			<div class="formulario">
		  <form name="form1" method="post" action="guardar.php">
		    <table width="57%" border="0" align="center" cellpadding="0" cellspacing="0">
		      <tr>
		        <td width="50%" align="left"><p>
		          <label for="nombre"></label>
		          <input name="nombres" type="text" id="nombre" placeholder="NAME (CHAMPION)" size="39" required="">
		        </p></td>
		        <td width="50%" align="left"><p>
		          <input name="apellidos" type="text" id="lastname" placeholder="LAST NAME (CHAMPION)" size="38" required="">
		        </p></td>
	          </tr>
		      <tr>
		        <td colspan="2" align="left"><p>
		          <input name="email" type="text" id="email" placeholder="EMAIL" size="80" required="">
		        </p></td>
	          </tr>
		      <tr>
		        <td colspan="2" align="left"><p>
		          <input name="telefono" type="text" id="phone" placeholder="PHONE (WHATSAPP)" size="80" required="">
		        </p></td>
	          </tr>
		      <tr>
		        <td colspan="2" align="left"><p>
		          <input name="company" type="text" id="company" placeholder="COMPANY NAME" size="80" required="">
		        </p></td>
	          </tr>
		      <tr>
		        <td colspan="2" align="left"><p>
		          <input name="companydireccion" type="text" id="companyaddress" placeholder="COMPANY ADDRESS" size="80" required="">
		        </p></td>
	          </tr>
		      <tr>
		        <td colspan="2" align="left"><p>
		          <label for="infovendors"></label>
		          <textarea name="infovendors" cols="80" rows="4" id="infovendors" placeholder="PLEASE ENTER THE INFORMATION OF THE VENDORS TO PARTICIPATE FULL NAME AND EMAIL" required=""></textarea>
		        </p></td>
	          </tr>
		      <tr>
		        <td colspan="2" align="left"><p>
		          <textarea name="infoengineers" cols="80" rows="4" id="infoengienners" placeholder="PLEASE ENTER THE INFORMATION OF THE ENGINEERS TO PARTICIPATE FULL NAME AND EMAIL ADDRESS." required=""></textarea>
		        </p></td>
	          </tr>
	        </table>
		
		<p>Con el registro, el canal se compromete a participar activamente, cumplir con los compromisos y finalizar la actividad
  <br>
Los canales que se registren recibirán un regalo como incentivo por participar en el concurso.
<br>
Aplican terminos y condiciones. </p>
	
	<div class="btn-enviar">
	  <input type="submit" name="SEND" id="SEND" value="SEND">
	</div>
    	      </form>
		</div>

	</div>
		
	<div class="comoganar">
	<h2>Como ganar</h2>
	<div class="text-comoganar">	
		<p>Cada canal debe seleccionar al champion quien estará a cargo de liderar la iniciativa.  
			<br>
Los canales van sumando puntos en todo el trimestre (Feb-Abril) cuando realizan las siguientes actividades:
 </p>
<ul>
    <li>Realizan entrenamientos de ventas:<strong> 100 points</strong> </li>
<li>Realizan entrenamientos técnicos:<strong> 200 points</strong></li>
<li>Sacan las competencias post ventas:<strong> 300 puntos</strong> </li>
	<li>Registran leads calificados (los cuales serán validados por el team de Netapp):
		<br>
        -  Clientes actuales: <strong>200 points</strong>
<br>
		-   Clientes nuevos: <strong>300 points </strong>
<br>
		-  Si se coordina cita con el cliente / lead calificado:<strong> 100 points</strong>  
</li>
<li>Cierran oportunidades de negocios (no cuentan renovaciones):<strong> 500 points</strong></li>
<li>Realizan actividades de marketing digital, tales como:
<br>
	    - Webinars para usuarios finales: <strong>50 points</strong>
<br>
	    - Post en redes sociales:<strong> 10 points</strong>
<br>
	    - Lanzamiento de campaña de marketing a través del portal de Netapp con el apoyo de Marianna Madrid (mariannam@synnex.com)</li>
		</ul>
		<p>Las soluciones participantes y que deberán los canales posicionar son:</p>
<ul>
       <li>All FLASH - FAS (C190, A220, A250, A400, A700, A800) </li>
<li>Servicios Cloud: Cloud Volumen ONTAP (CVO) (almacenamiento inteligente en la nube)</li>
<li>Virtual Desktop Service (plataforma de SW entregada en la nube, permite aprovisionar y administrar escritorios virtuales)
</li>
<li> Cloud Insight (herramienta de monitoreo de servicios y operación y optimiza el uso de los recursos en la nube)
 </li>
		</ul>
		</div>
		</div>

	
	<div class="prizes" name="premios">
		<a name="premios" id="premios"></a> 
		<h2>Premios</h2>
		<div class="prod"><img src="imagenes/p1.jpg"><p>1er lugar</p></div>
		<div class="prod"><img src="imagenes/p2.jpg"><img src="imagenes/p3.jpg"><p>2do lugar</p></div>
		<div class="prod"><img src="imagenes/p4.jpg"><p>3er lugar</p></div>
	</div>

	<div class="prizes" name="premios">
		<a name="premios" id="premios"></a> 
		<h2>Premios Vendedores e ingenieros de los canales ganadores</h2>
		<div class="prodV"><img src="imagenes/pvi1.png"></div>
		<div class="prodV"><img src="imagenes/pvi2.png"></div>
		<div class="prodV"><img src="imagenes/pvi3.png"></div>
		<div class="prodV"><img src="imagenes/pvi4.png"></div>
	</div>
	<div class="prizes" name="premios">
		<p class="ppvi">***Los vendedores e ingenieros que participen acumulando puntos por entrenamientos, registro de oportunidades y cierre de negocios recibirán premios</p>
	</div>

	</div>
	</div>
<div class="contacto">
	<div class="container">
<p>2021 SYNNEX Corportation
<br>
Todos los derechos reservado</p>
	</div></div>
</body>
</html>