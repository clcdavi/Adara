<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Adara Nails Beauty</title>

	<meta name="description" content="Sitio lider de San fernando en busqueda de salones">
    <meta name="author" content="Curso PHP SF 2019">

    <link href="<?= PATH_VENDOR ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="<?= PATH_CSS ?>/styles.css" rel="stylesheet">

    <!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">

	<!-- favIcon -->
	<link href="<?=PATH_IMAGENES?>/adaraNuevoLogo.ico" rel="icon">

	<!-- fuente -->
	
	<style>
		.gris{
			background: #D75093;
		}
		.top-nav-collapse{
			background: rgba(0,0,0,0.1);	
		}

		.adaraNombre{
			font-size: 1rem;
		}
		/* .navbar{
			height:70px;
		} */
	</style>
</head>
<body>
	<div class="container p-0">
	<header>
		<div class="row" style="height:110px"> <!-- row 1 -->

			<nav class="navbar navbar-expand-lg navbar-dark gris scrolling-navbar fixed-top navLogoPequeño">
				<div class="col-md"> <!-- columna 1 -->

					<a class="adaraNombre" href="index.php?m=index"><img id="logoPequeño" src="<?=PATH_IMAGENES?>/logoSinFondo.png" alt="logoPequeño"></a>

				</div> <!-- cierre de clase col 1 -->

				<div class="col-md-4 d-flex justify-content-between"> <!-- columna 2 -->
				
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								
				<span class="navbar-toggler-icon"></span>
								
				</button>
						
					<div class="collapse navbar-collapse" id="navbarSupportedContent">

					<div>Turnos 11 3915-6007</div>
						<!-- lista de redes -->
						<ul class="navbar-nav nav-flex-icons">

						

							<li class="nav-item">
										
								<a href="#" class="nav-link">
													
									<i class="fab fa-whatsapp fa-fw green-text"></i>
		
								</a>
		
							</li>
									
							<li class="nav-item">
										
								<a href="https://www.facebook.com/ADARA-1605857726169572/" class="nav-link">
											
									<i class="fab fa-facebook-f fa-fw blue-text"></i>

								</a>

							</li>

							<li class="nav-item">
										
								<a href="https://www.instagram.com/adara_nails_beauty/" class="nav-link">
											
									<i class="fab fa-instagram fa-fw pink-text bordercolor-pink"></i>

								</a>
							</li>

							<li class="nav-item">
										
								<a href="#" class="nav-link">
											
									<i class="fab fa-twitter fa-fw blue-text"></i>

								</a>
							</li>
						</ul>

						<div class="d-flex align-items-center">
							<button type="button" class="btn btn-pink btn-sm">Ingresar</button>
						</div>

					</div>
				</div> <!-- cierre de clase columna 2-->
			</nav>
		</div> <!-- cierre de clase row -->

		<div class="row d-flex justify-content-center"> <!-- row 2 -->

			<div class="d-flex align-items-center "> <!-- mt-5 pt-5 -->
				<img id="adaraNombre" src="<?=PATH_IMAGENES?>/adaraNombre.png" alt="adaraNombre">
			</div>

		</div>	
		
		<div class="row d-flex justify-content-center"> <!-- row 3 -->
			<!-- <div class="p-0 ">
				<img src="<?=PATH_IMAGENES?>/fTrabajo1.png" class="img-fluid rounded mx-auto d-block" alt="Responsive image" style="max-width: 50%;y height: 70px;">
			</div> -->

		</div>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

	</header>
	<nav>
		
	</nav>
	<section>
		<div class="row d-flex justify-content-center"><!-- row section -->
			<div class="col">
			
				<?php 
					include( PATH_VIEWS . '/common/partials/carrousel.php' );
				?>

			</div>
				
		</div>
	</section>
	<footer>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
	</footer>

	</div> <!-- cierre div de clase container -->

	<script>

	</script>

	<!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js"></script>

	<script src="<?= PATH_VENDOR ?>/jquery/jquery-3.4.1.min.js"></script>
	<script src="<?= PATH_VENDOR ?>/popper/popper.min.js"></script>
	<script src="<?= PATH_VENDOR ?>/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>