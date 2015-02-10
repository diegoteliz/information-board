<?php 
include_once('class/class.billboard.php'); 

$cartelera = new billboard;
$listado = $cartelera->watchtower_study(); ?>
			<section id="atalaya">
				<header class="title atalaya">
					<div class="wrapper">
						<h1>Estudio de la Atalaya</h1>
						<div id="nav-menu"></div>
					</div>
				</header>
				<div class="wrapper">
					<ul class="list">
						<!-- <li class="list-item">
							<h4>Información no disponible</h4>
						</li> -->
						<?php
						$lenght  = sizeof( $listado['date'] );
						for ( $i = 0 ; $i < $lenght ; $i++ ) { 
							$date		= get_date( $listado['date'][$i] , 'Dia 00 de Mes' );
							//$conductor	= $listado['conductor'][$i];
							$conductor	= 'Carlos Cabrera';
							$lector		= $listado['lector'][$i];
							$tema		= $listado['tema'][$i];
							$link		= $listado['link'][$i]; ?>
						<li class="list-item atalaya-item">
							<h4><?php echo $date; ?></h4>
							<div class="tema"><?php echo $tema; ?></div>
							<div class="link"><a href="<?php echo $link; ?>" target="_blank">Leer artículo en línea</a></div>
							<div class="conductor"><b>Conductor: </b><?php echo $conductor; ?></div>
							<div class="lector"><b>Lector: </b><?php echo $lector; ?></div>
						</li>
						<?php 
						} ?>
					</ul>
				</div>
			</section>
			<script type="text/javascript" src="/js/billboard.js"></script>