<?php 
include_once('class/class.billboard.php');

$cartelera = new billboard;
$listado = $cartelera->clean_program(); ?>
			<section id="limpieza">
				<header class="title limpieza">
					<div class="wrapper">
						<h1>Programa de Limpieza</h1>
						<div id="nav-menu"></div>
					</div>
				</header>
				<div class="wrapper">
					<ul class="list">
						<?php
						$lenght  = sizeof( $listado['date'] );
						for ( $i = 0 ; $i < $lenght ; $i++ ) { 
							$date			= get_date( $listado['date'][$i] , 'Dia 00 de Mes' );
							$group_id		= $listado['group_id'][$i];
							$group_name		= $listado['group_name'][$i];
							$responsible	= $listado['responsible'][$i]?>
						<li class="list-item limpieza-item">
							<h4><?php echo $date; ?></h4>
							<p class="nombre-grupo grupo-<?php echo $group_id; ?>"><?php echo $group_name; ?></p>
							<p class="responsible"><?php echo $responsible; ?></p>
						</li>
						<?php 
						} ?>
					</ul>
				</div>
			</section>
			<script type="text/javascript" src="/js/billboard.js"></script>