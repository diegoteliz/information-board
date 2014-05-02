<?php 
include_once('class/class.billboard.php');

$cartelera = new billboard;
$listado = $cartelera->preaching_groups(); ?>
			<section id="grupos">
				<header class="title grupos">
					<div class="wrapper">
						<h1>Grupos de Predicación</h1>
						<div id="nav-menu"></div
					</div>
				</header>
				<div class="wrapper">
					<ul class="list">
						<?php
						$lenght  = sizeof( $listado['date'] );
						for ( $i = 0 ; $i < $lenght ; $i++ ) { 
							$date			= get_date( $listado['date'][$i] , 'Dia 00 de Mes' );
							$time			= $listado['time'][$i];
							$location		= $listado['location'][$i];
							//$responsible	= $cartelera->get_full_name( $listado['responsible'][$i] );
							$responsible	= $listado['responsible'][$i]; ?>
						<li class="list-item grupo-salida">
							<h4><?php echo $location; ?></h4>
							<div class="date"><?php echo $date; ?></div>
							<div class="responsible"><?php echo $responsible; ?></div>
							<div class="time"><?php echo $time; ?> hs</div>
						</li>
						<?php 
						} ?>
					</ul>
				</div>
			</section>
			<script type="text/javascript" src="/js/billboard.js"></script>