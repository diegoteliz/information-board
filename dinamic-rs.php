<?php 
include_once('class/class.billboard.php'); 

$cartelera = new billboard;
$listado = $cartelera->cbs_service_meeting(); ?>
			<section id="rs">
				<header class="title rs">
					<div class="wrapper">
						<h1>EBC y R. de Servicio</h1>
						<div id="nav-menu"></div>
					</div>
				</header>
				<div class="wrapper">
					<ul class="list">
						<?php
						$lenght  = sizeof( $listado['date'] );
						for ( $i = 0 ; $i < $lenght ; $i++ ) { 
							$date			= get_date( $listado['date'][$i] , 'Semana del 00 de Mes' );
							$start_prayer	= $listado['start_prayer'][$i];
							$end_prayer		= $listado['end_prayer'][$i];
							$cbs_speaker	= $listado['cbs_speaker'][$i];
							$cbs_lector		= $listado['cbs_lector'][$i];
							$cbs_info		= $listado['cbs_info'][$i];
							$sm_min_1		= $listado['sm_min_1'][$i];
							$sm_speaker_1	= $listado['sm_speaker_1'][$i];
							$sm_info_1		= $listado['sm_info_1'][$i];
							$sm_min_2		= $listado['sm_min_2'][$i];
							$sm_speaker_2	= $listado['sm_speaker_2'][$i];
							$sm_info_2		= $listado['sm_info_2'][$i];
							$sm_min_3		= $listado['sm_min_3'][$i];
							$sm_speaker_3	= $listado['sm_speaker_3'][$i];
							$sm_info_3		= $listado['sm_info_3'][$i]; ?>
						<li class="list-item rs-item">
							<h4><?php echo $date; ?></h4>
							
							<h5>Estudio Bíblico de Congregación</h5>
							<div class="asignacion"><b>Oración de inicio:</b> <?php echo $start_prayer; ?></div>
							<div class="asignacion">
								<b>Conductor:</b> <?php echo $cbs_speaker; ?><br />
								<b>Lector:</b> <?php echo $cbs_lector; ?><br />
							</div>
							<div class="info"><?php echo $cbs_info; ?></div>

							<h5>Reunión de servicio</h5>
							
							<?php if ( $sm_min_1 ): ?>
							<div class="asignacion"><b><?php echo $sm_min_1; ?> min:</b> <?php echo $sm_speaker_1; ?></div>
							<div class="info"><?php echo $sm_info_1; ?></div>	
							<?php endif ?>

							<?php if ( $sm_min_2 ): ?>
							<div class="asignacion"><b><?php echo $sm_min_2; ?> min:</b> <?php echo $sm_speaker_2; ?></div>
							<div class="info"><?php echo $sm_info_2; ?></div>	
							<?php endif ?>

							<?php if ( $sm_min_3 ): ?>
							<div class="asignacion"><b><?php echo $sm_min_3; ?> min:</b> <?php echo $sm_speaker_3; ?></div>
							<div class="info"><?php echo $sm_info_3; ?></div>	
							<?php endif ?>
							<div class="asignacion"><b>Oración de conclusión:</b> <?php echo $end_prayer; ?></div>
							
						</li>
						<?php 
						} ?>
					</ul>
				</div>
			</section>
			<script type="text/javascript" src="/js/billboard.js"></script>