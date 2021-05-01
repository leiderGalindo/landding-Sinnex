<?php 
	include('controllers/UserRegisterController.php');
	$userRegistered = UserRegistered::ctrUserRegistered();
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

	<link rel="shortcut icon" href="es/imagenes/favicon.ico">
	<link rel="stylesheet" type="text/css" href="librarys/bootstrap/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="librarys/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="librarys/datatables-responsive/css/responsive.bootstrap4.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="librarys/bootstrap/js/bootstrap.min.js"></script>

	<script src="librarys/datatables/jquery.dataTables.min.js"></script>
    <script src="librarys/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="librarys/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="librarys/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

	<script>
		var num = 50; //number of pixels before modifying styles
		$(window).bind('scroll', function () {
			if ($(window).scrollTop() > num) {
				$('.menu').addClass('fixeed');
			} else {
				$('.menu').removeClass('fixeed');
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
	<link href="es/css/estilos.css" rel="stylesheet">


	<style type="text/css">
		.fixeed {
			position: fixed;
			background: rgba(16,16,33,0.8);
			left: 0;
			width: 100%;
			z-index:3;
			top: 0px;
		}

		.fixeed .menu { margin-top: 0; }

		@media (max-width:2080px){
			#logoNetApp{
				margin-top: 3%;
			}

			#logoSinnex{
				width: 44%;
				height: 79%;
			}
		}
		@media (max-width:1080px){
			#logoNetApp{
				margin-top: 5%;
			}

			#logoSinnex{
				width: 50%;
				height: 100%;
			}
		}
		@media (max-width:1000px){
			#logoNetApp{
				margin-top: 1%;
			}

			#logoSinnex{
				width: 50%;
				height: 100%;
			}
		}
		@media (max-width:800px){
			.menuD{
				background: rgba(16,16,33,0.8);
			}
			#logoNetApp{
				/*margin-top: 20%;*/
				width: 100%;
			}

			#logoSinnex{
				/*margin-top: auto;*/
				width: 50%;
				height: 100%;
			}
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="col-12">&nbsp;</div>
		<div class="row w-100">
			<div class="col-6"><img src="es/imagenes/logo.png" id="logoNetApp"></div>
			<div class="col-6 d-flex justify-content-end"><img src="es/imagenes/synnex.png" id="logoSinnex"></div>
		</div>
	</div>

	<div class="menu">
		<div class="container">
			<nav>
				<div class="handle">Menu</div>
				<ul class="menuD">
					<a href="#"><li class="inicio">HOME</li></a>
					<a href="es/index.php"><li>SPANISH FORM</li></a>
					<a href="eng/index.php"><li>ENGLISH FORM</li></a>
					<a href="es/Terminos y condiciones_Español.pdf" target="black"><li class="fin">TERMS AND CONDITIONS</li></a>
				</ul>
			</nav>
		</div>
		<script>
			$('.handle').on('click', function(){
				$('nav ul').toggleClass('showing');
			});
		</script>
	</div>
	
	<div class="container">
			<div style="display: table;width: 100%;background: #ffffff;position: relative;margin-bottom: 20px; border-radius: 10px">
				<div class="text-center" style="display: table;width: 100%;float: left;text-align: center;padding-top: 50px;    padding-left: 2%;padding-right: 2%;margin-bottom: 50px;">
					<h3 style="font-size: 28px; line-height: 33px; text-align: center; text-transform: uppercase;  color: #41406C; font-weight: 400; margin-bottom: 5px;">
						Registered Users
					</h3>	
				</div>
			</div>
		
			<div style="background-color: #ffff;padding: 20px;border-radius: 10px;margin-bottom: 30px;">
				<div class="table-responsive">
					<table class="table table-light table-hover dataTable table-striped " id="example1">
					    <thead>
					        <tr class="bg-primary text-white">
					            <th>#</th>
					            <th>Name</th>
					            <th>Surname</th>
					            <th>Email</th>
					            <th>Phone</th>
					            <th>Company</th>
					            <th>Company Address</th>
					            <th>Info Vendors</th>
					            <th>Info Engineers</th>
					        </tr>
					    </thead>
					    <tbody>
        
        					<?php
        						$i = 0;
        						foreach ($userRegistered as $key => $value) {
        							$i++;
        					?>
        							<tr>
						                <td><?php echo $i; ?></td>
						                <td><?php echo $value['nombres']; ?></td>
						                <td><?php echo $value['apellidos']; ?></td>
						                <td><?php echo $value['email']; ?></td>
						                <td><?php echo $value['telefono']; ?></td>
						                <td><?php echo $value['company']; ?></td>
						                <td><?php echo $value['companydireccion']; ?></td>
						                <td><?php echo $value['infovendors']; ?></td>
						                <td><?php echo $value['infoengineers']; ?></td>
						            </tr>
        					<?php
        						}
        					?>

						</tbody>
					</table>
				</div>
			</div>	

	</div>
	
	<footer style="bottom: 0;">
		<div class="contacto">
			<div class="container">
				<p>
					2021 SYNNEX Corportation<br>
					All rights reserved
				</p>
			</div>
		</div>
	</footer>
<script type="text/javascript" src="js/function.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>