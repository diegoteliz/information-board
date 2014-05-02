<?php 
include_once('class/class.billboard.php'); 

$cartelera = new billboard;
$listado = $cartelera->bible_discourse(); ?>
			<section id="discurso">
				<header class="title discurso">
					<div class="wrapper">
						<h1>Discurso Bíblico</h1>
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
							$date			= get_date( $listado['date'][$i] , 'Dia 00 de Mes' );
							$president		= $listado['president'][$i];
							$topic			= $listado['topic'][$i];
							$speaker		= $listado['speaker'][$i];
							$congregation	= $listado['congregation'][$i]; ?>
						<li class="list-item discurso-item">
							<h4><?php echo $date; ?></h4>
							<div class="presidente"><b>Presidente: </b><?php echo $president; ?></div>
							<div class="tema"><?php echo $topic; ?></div>
							<div class="orador"><?php echo $speaker; ?></div>
							<div class="congregacion"><?php echo $congregation; ?></div>
						</li>
						<?php 
						} ?>
					</ul>
				</div>
			</section>
			<script type="text/javascript" src="/js/billboard.js"></script>