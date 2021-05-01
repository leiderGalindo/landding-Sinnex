<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300;1,400&display=swap" rel="stylesheet">

	<link rel="shortcut icon" href="Images/favicon.ico">
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
					<a href="#register"><li>REGISTRY</li></a>
					<a href="#"><li>CALENDAR</li></a>
					<a href="#AWARDS"><li>AWARDS</li></a>
					<a href="NetApp_Ingles.pdf" target="black"><li class="fin">TERMS AND CONDITIONS</li></a>
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
					<h3>
						Activate with Netapp and <br>
						participate in our contest
					</h3>
					<h1>
						Compete and Win with <br>
						Synnex and Netapp
					</h1>
					<p>
						Learn about Netapp´s latest technology trends, <br>
						train your sales and technical team, increase your sales<br> 
						fabulous prizes.
					</p>
				</div>
				<div class="imgdestacado"><img src="imagenes/destacado.jpg"></div>
			</div>
			<div class="iconos">
					<div class="icono"><img src="imagenes/alendario.png">Calendar</div>
					<div class="icono"><img src="imagenes/reloj.png">Terms and Conditions</div>
					<div class="icono"><img src="imagenes/registro.png">Registry</div>
					<div class="icono"><img src="imagenes/premios.png">Awards</div>
			</div>
			<div class="registro">
				<h2>Registry</h2>
				<a name="register" id="register"></a>
				<div class="formulario">
					<form name="form1" method="post" action="guardar.php">
				    	<table width="57%" border="0" align="center" cellpadding="0" cellspacing="0">
				      		<tr>
				        		<td width="50%" align="left">
				        			<p>
				          				<label for="nombre"></label>
				          				<input name="nombres" type="text" id="nombre" placeholder="NAME (CHAMPION)" size="39" required="">
				        			</p>
				        		</td>
				        		<td width="50%" align="left">
				        			<p>
				          				<input name="apellidos" type="text" id="lastname" placeholder="LAST NAME (CHAMPION)" size="38" required="">
				        			</p>
				        		</td>
			          		</tr>
					      	<tr>
					        	<td colspan="2" align="left">
					        		<p>
					          			<input name="email" type="text" id="email" placeholder="EMAIL" size="80" required="">
					        		</p>
					        	</td>
				          	</tr>
				      		<tr>
				        		<td colspan="2" align="left">
				        			<p>
				          				<input name="telefono" type="text" id="phone" placeholder="PHONE (WHATSAPP)" size="80" required="">
				        			</p>
				        		</td>
			          		</tr>
						    <tr>
						        <td colspan="2" align="left">
						        	<p>
						          		<input name="company" type="text" id="company" placeholder="COMPANY NAME" size="80" required="">
						        	</p>
						        </td>
					        </tr>
				      		<tr>
				        		<td colspan="2" align="left">
				        			<p>
				          				<input name="companydireccion" type="text" id="companyaddress" placeholder="COMPANY ADDRESS" size="80" required="">
				        			</p>
				        		</td>
			          		</tr>
						    <tr>
						        <td colspan="2" align="left">
						        	<p>
						          		<label for="infovendors"></label>
						          		<textarea name="infovendors" cols="80" rows="4" id="infovendors" placeholder="PLEASE ENTER THE INFORMATION OF THE VENDORS TO PARTICIPATE FULL NAME AND EMAIL." required=""></textarea>
						        	</p>
						        </td>
					        </tr>
				      		<tr>
				        		<td colspan="2" align="left">
				        			<p>
				          				<textarea name="infoengienners" cols="80" rows="4" id="infoengienners" placeholder="PLEASE ENTER THE INFORMATION OF THE ENGINEERS TO PARTICIPATE FULL NAME AND EMAIL ADDRESS." required=""></textarea>
				        			</p>
				        		</td>
			          		</tr>
			        	</table>
			
						<p>
							With registred, the channel commits to actively participate, Fulfil the commitment  and complete the activities.<br>
							Channels who register will receive a gift as an incentive for participating in the contest.<br>
							Terms and conditions apply.
						</p>
		
						<div class="btn-enviar">
							<input type="submit" name="SEND" id="SEND" value="SEND">
						</div>
	    	      	</form>
				</div>

			</div>
			
			<div class="comoganar">
				<h2>How to win</h2>
				<div class="text-comoganar">	
					<p>
						Each channel must select the champion who will be in charge of leading the initiative. <br>
						Channels earn points throughout the quarter (Feb-April) when they perform the following activities:
					</p>
					<ul>
	    				<li>Sales training: <strong>100 points</strong> </li>
						<li>Technical training :<strong> 200 points</strong></li>
						<li>Competition displacement post sale: <strong>300 puntos</strong> </li>
						<li>Register qualified leads (which will be validated by the Netapp team):<br>
	        				-  Existing customers: <strong>200 points</strong><br>
							-   New customers: <strong>300 points </strong><br>
							-  If an appointment is arranged with the customer/qualified lead: <strong>100 points</strong>  
						</li>
						<li>Close business opportunities (renewals do not count): <strong>500 points</strong></li>
						<li>Perform digital marketing activities, such as:<br>
		    				- Webinars for end user:<strong> 50 points</strong><br>
		    				- Post on social network: <strong>10 points</strong><br>
		    				-  Launch of marketing campaign through Netapp's portal with support from Marianna Madrid (mariannam@synnex.com): 
		    				<strong>40 Points</strong>
		    			</li>
					</ul>
					<p>The participating solutions to be positioned by the channels are: </p>
					<ul>
	       				<li>All FLASH - FAS (C190, A220, A250, A400, A700, A800) </li>
						<li>Cloud Services: Cloud Volume ONTAP (CVO) (intelligent storage in the cloud)</li>
						<li>Virtual Desktop Service (SW platform delivered in the cloud, allows provisioning and managing virtual desktops)</li>
						<li>Cloud Insight (service and operation monitoring tool and optimizes the use of cloud resources). </li>
					</ul>
				</div>
			</div>

		
			<div class="prizes">
				<a name="AWARDS" id="AWARDS"></a>
				<h2>Prizes</h2>
				<div class="prod"><img src="imagenes/p1.jpg"><p>First Place</p></div>
				<div class="prod"><img src="imagenes/p2.jpg"><img src="imagenes/p3.jpg"><p>Second Place</p></div>
				<div class="prod"><img src="imagenes/p4.jpg"><p>Third Place</p></div>
			</div>

			<div class="prizes" name="premios">
				<a name="premios" id="premios"></a> 
				<h2>Sellers and Engineers Awards from winning channels</h2>
				<div class="prodV"><img src="imagenes/pvi1.png"></div>
				<div class="prodV"><img src="imagenes/pvi2.png"></div>
				<div class="prodV"><img src="imagenes/pvi3.png"></div>
				<div class="prodV"><img src="imagenes/pvi4.png"></div>
			</div>
			<div class="prizes" name="premios">
				<p class="ppvi">
					***Sellers and engineers who participate by accumulating points for training, opportunity registration and business closure will receive prizes
				</p>
			</div>

		</div>
	</div>
	<div class="contacto">
		<div class="container">
			<p>
				2021 SYNNEX Corportation<br>
				Todos los derechos reservado
			</p>
		</div>
	</div>
</body>
</html>