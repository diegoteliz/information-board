<?php 
include_once('class/class.billboard.php');

$cartelera = new billboard;
$listado = $cartelera->sound_and_ushers(); ?>
			<section id="sonido">
				<header class="title sonido">
					<div class="wrapper">
						<h1>Sonido y Acomodadores</h1>
						<div id="nav-menu"></div>
					</div>
				</header>
				<div class="wrapper">
					<ul class="list">
						<?php
						$lenght  = sizeof( $listado['date'] );
						for ( $i = 0 ; $i < $lenght ; $i++ ) { 
							$date		= get_date( $listado['date'][$i] , 'Dia 00 de Mes' );
							$equipment	= $listado['equipment'][$i];
							$mic1		= $listado['mic1'][$i];
							$mic2		= $listado['mic2'][$i];
							$platform	= $listado['platform'][$i];
							$usher		= $listado['usher'][$i]; ?>
						<li class="list-item sonido-item<?php echo ( $i%2 != 0 ) ? ' pair' : '' ; ?>">
							<h4><?php echo $date; ?></h4>
							<p><span class="subtitle">Equipo de Sonido: </span><?php echo $equipment; ?></p>
							<p><span class="subtitle">Micrófono 1: </span><?php echo $mic1; ?><br /><span class="subtitle"> Micrófono 2: </span><?php echo $mic2; ?></p>
							<p><span class="subtitle">Plataforma: </span><?php echo $platform; ?><br /><span class="subtitle">Acomodador: </span><?php echo $usher; ?></p>
						</li>
						<?php 
						} ?>
					</ul>
				</div>
			</section>
			<script type="text/javascript" src="/js/billboard.js"></script>