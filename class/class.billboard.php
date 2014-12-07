<?php 
/**
* Billboard class
* @since 1.0
*/

// Functions (move this from here)
function get_date( $date , $format ) {

	$dias	= array( 'Domingo' , 'Lunes' , 'Martes' , 'Miércoles' , 'Jueves' , 'Viernes' , 'Sábado' );
	$meses	= array( 'Enero' , 'Febrero' , 'Marzo' , 'Abril' , 'Mayo' , 'Junio' , 'Julio' , 'Agosto' , 'Septiembre' , 'Octubre' , 'Noviembre' , 'Diciembre' );

	switch ( $format ) {
		
		case 'Dia 00 de Mes de 0000':
			return $dias[date('w',strtotime($date))]." ".date('d',strtotime($date))." de ".$meses[date('n',strtotime($date))-1]. " de ".date('Y',strtotime($date)) ;
			break;

		case 'Dia 00 de Mes':
			return $dias[date('w',strtotime($date))]." ".date('d',strtotime($date))." de ".$meses[date('n',strtotime($date))-1] ;
			break;

		case 'Semana del 00 de Mes':
			return "Semana del ".date('d',strtotime($date))." de ".$meses[date('n',strtotime($date))-1] ;
			break;

		case 'Dia 00':
			return $dias[date('w',strtotime($date))]." ".date('d',strtotime($date));
			break;

		default:
			return $date;
			break;
	}
}

class billboard {
	
	/*function __construct(argument)
	{
		- Bible Discourse / Public Talk
		- Watchtower Study
		- Congregation Bible Study
		- Theocratic Ministry School
		- Service Meeting
		--
		- Congregation groups
		- Preaching groups
		- Sound and Ushers
		- Cleaning program
		---
		/*public $congregation_bible_study;*/
		/*public $service_meeting;*/
		/*public $bible_discourse;*/
		/*public $watchtower_study;*/
		/*public $congregation_groups;*/
		/*public $cleaning_program;*/
		/*public $theocratic_ministry_school;*/
		
		/*
	}*/

	/* Persons management */
	
	function members_list(){
		
		$members = array(
			1 	=> array( 'name' => 'Diego' , 'surname' => 'Téliz' , 'shortname' => 'D.Téliz' ),
			2 	=> array( 'name' => 'Carlos' , 'surname' => 'Cabrera' , 'shortname' => 'C. Cabrera' ),
			3 	=> array( 'name' => 'Germán' , 'surname' => 'Demarco' , 'shortname' => 'G. Demarco' ),
			4 	=> array( 'name' => 'Humberto' , 'surname' => 'Cardozo' , 'shortname' => 'H. Cardozo' ),
			5 	=> array( 'name' => 'Iván' , 'surname' => 'Rivero' , 'shortname' => 'I. Rivero' ),
			6 	=> array( 'name' => 'Leonardo' , 'surname' => 'Guevara' , 'shortname' => 'L. Guevara' ),
			7 	=> array( 'name' => 'Leonel' , 'surname' => 'Navarro' , 'shortname' => 'L. Navarro' ),
			8 	=> array( 'name' => 'Luis' , 'surname' => 'Sandes' , 'shortname' => 'L. Sandes' ),
			9 	=> array( 'name' => 'Michel' , 'surname' => 'Fuentes' , 'shortname' => 'M. Fuentes' ),
			10 	=> array( 'name' => 'Osvaldo' , 'surname' => 'Simone' , 'shortname' => 'O. Simone' ),
			11 	=> array( 'name' => 'Ricardo' , 'surname' => 'Rodríguez' , 'shortname' => 'R. Rodríguez' ),
			12 	=> array( 'name' => 'Rubens' , 'surname' => 'Rivero' , 'shortname' => 'R. Rivero' ),
			99 	=> array( 'name' => '-' , 'surname' => '' , 'shortname' => '-' ),
			101	=> array( 'name' => 'Daniel' , 'surname' => 'Delorrio' , 'shortname' => 'D. Delorrio' ),
			201	=> array( 'name' => 'Cong. Los' , 'surname' => 'Bulevares' , 'shortname' => 'Los Bulevares' )
		);

		return $members;
	}
	function get_full_name( $id ){
		
		$list = $this->members_list();
		$full_name = $list[$id]['name'].' '.$list[$id]['surname'];
		
		return $full_name;
	}
	function get_name( $id ){
		
		$list = $this->members_list();
		$name = $list[$id]['name'];
		
		return $name;
	}
	function get_surname( $id ){
		
		$list = $this->members_list();
		$surname = $list[$id]['surname'];
		
		return $surname;
	}
	function get_short_name( $id ){
		
		$list = $this->members_list();
		$short_name = $list[$id]['shortname'];
		
		return $short_name;
	}


	/* Billboard sheets */

	// Preaching groups
	function preaching_groups(){
		
		$groups = array(

			// Date column
			'date' => array(
				'2014-12-01','2014-12-02','2014-12-02','2014-12-03','2014-12-03','2014-12-06','2014-12-07','2014-12-08','2014-12-09','2014-12-09','2014-12-10','2014-12-10','2014-12-13','2014-12-13','2014-12-13','2014-12-15','2014-12-16','2014-12-16','2014-12-17','2014-12-17','2014-12-20','2014-12-21','2014-12-22','2014-12-23','2014-12-24','2014-12-26','2014-12-27','2014-12-28','2014-12-29','2014-12-30','2014-12-31'
			),

			// Time column
			'time' => array(
				'18:30','9:00','18:30','9:00','18:30','9:00','9:30','18:30','9:00','18:30','9:00','18:30','9:00','18:30','18:30','18:30','9:00','18:30','9:00','18:30','9:00','9:30','18:30','9:00','9:00','18:30','9:00','9:30','18:30','9:00','9:00'
			), 

			// Location column
			'location' => array(
				'Familia Rivero','Casa de Rosa Giménez','Familia Rivero','Salón del Reino','Salón del Reino','Familia Rodríguez','Familia Rivero','Familia Navarro','Casa de Rosa Giménez','Familia Rivero','Salón del Reino','Salón del Reino','Barra Santa Lucía','Familia Navarro','Salón del Reino','Salón del Reino','Familia Rivero','Familia Rivero','Salón del Reino','Salón del Reino','Salón del Reino','Familia Rivero','Familia Navarro','Salón del Reino','Salón del Reino','Familia Navarro','Salón del Reino','Familia Rivero','Familia Navarro','Salón del Reino','Salón del Reino'
			),
			
			// Responsible column
			'responsible' => array(
				'Ricardo Rodríguez','Humberto Cardozo','Luis Sandes','Carlos Cabrera','Germán Demarco','Carlos Cabrera','Ricardo Rodríguez','Ricardo Rodríguez','Humberto Cardozo','Osvaldo Simone','Carlos Cabrera','Rubens Rivero','Diego Téliz','Visita S. de Servicio','Luis Sandes','Ricardo Rodríguez','Humberto Cardozo','Luis Sandes','Carlos Cabrera','Ricardo Rodríguez','Carlos Cabrera','Iván Rivero','Ricardo Rodríguez','Humberto Cardozo','Carlos Cabrera','Luis Sandes','Luis Sandes','Humberto Cardozo','Ricardo Rodríguez','Humberto Cardozo','Carlos Cabrera'
			)
		);

		return $groups;
	}

	// Clean program
	function clean_program(){

		$clean_program = array(

			// Date column
			'date' => array(
				'2014-11-04','2014-11-06','2014-11-13','2014-11-16','2014-11-20','2014-11-23','2014-11-27','2014-11-30','2014-12-04','2014-12-07','2014-12-11','2014-12-14','2014-12-18','2014-12-21','2014-12-23','2014-12-28','2014-12-30','2015-01-04','2015-01-08','2015-01-11','2015-01-15','2015-01-18','2015-01-22','2015-01-25'
			),

			// Group id
			'group_id' => array(
				'4','4','5','5','1','1','2','2','3','3','4','4','5','5','1','1','2','2','3','3','4','4','5','5'
			),

			// Group name
			'group_name' => array(
				'Grupo Nº4','Grupo Nº4','Grupo Nº5','Grupo Nº5','Grupo Nº1','Grupo Nº1','Grupo Nº2','Grupo Nº2','Grupo Nº3','Grupo Nº3','Grupo Nº4','Grupo Nº4','Grupo Nº5','Grupo Nº5','Grupo Nº1','Grupo Nº1','Grupo Nº2','Grupo Nº2','Grupo Nº3','Grupo Nº3','Grupo Nº4','Grupo Nº4','Grupo Nº5','Grupo Nº5'
			),

			// Responsible group
			'responsible' => array(
				'Michel Fuentes','Michel Fuentes','Leonardo Guevara','Leonardo Guevara','Leonel Navarro','Leonel Navarro','Carlos Cabrera','Carlos Cabrera','Luis Sandes','Luis Sandes','Michel Fuentes','Michel Fuentes','Leonardo Guevara','Leonardo Guevara','Leonel Navarro','Leonel Navarro','Carlos Cabrera','Carlos Cabrera','Luis Sandes','Luis Sandes','Michel Fuentes','Michel Fuentes','Leonardo Guevara','Leonardo Guevara'
			)
		);

		return $clean_program;
	}

	// Sound and Ushers
	function sound_and_ushers(){

		$groups = array(

			// Date column
			'date' => array(
				'2014-11-06','2014-11-13','2014-11-16','2014-11-20','2014-11-23','2014-11-27','2014-11-30','2014-12-04','2014-12-07','2014-12-11','2014-12-14','2014-12-18','2014-12-21','2014-12-23','2014-12-28','2014-12-30'
			),

			// Equipment column
			'equipment'	=> array(
				'Diego','Rubens','Humberto','Iván','Germán','Diego','Humberto','Rubens','Germán','Iván','Rubens','Diego','Iván','Germán','Diego','Humberto'
			),

			// Microphone 1 column
			'mic1' => array(
				'Humberto','Germán','Carlos','Osvaldo','Marcelo','Ariel','Carlos','Marcelo','Diego','Carlos','Germán','Ariel','Carlos','Leonardo','Geremías','Ariel'
			), 

			// Microphone 2 column
			'mic2' => array(
				'Rubens','Iván','Ariel','Geremías','Diego','Germán','Leonardo','Humberto','Ariel','Geremías','Osvaldo','Marcelo','Humberto','Diego','Marcelo','Leonardo'
			),

			// Platform column
			'platform' => array(
				'Marcelo','Diego','Marcelo','Luis','Ricardo','Iván','Diego','Luis','Ricardo','Germán','Marcelo','Luis','Diego','Iván','Germán','Iván'
			),
			
			// Ushers column
			'usher' => array(
				'Ricardo','Leonel','Leonardo','Ricardo','Humberto','Osvaldo','Germán','Osvaldo','Michel','Diego','Leonel','Leonardo','Ricardo','Humberto','Osvaldo','Germán'
			)
		);

		return $groups;
	}

	// Watchtower Study
	function watchtower_study(){
		
		$study = array(

			// Date column
			'date' => array(
				'2014-12-06','2014-12-14','2014-12-20','2014-12-27','2015-01-03'
			),

			// Equipment column
			'conductor'	=> array(
				'Luis Sandes','Luis Sandes','Luis Sandes','Luis Sandes','Luis Sandes'
			),

			// Microphone 1 column
			'lector' => array(
				'Iván Rivero','Carlos Cabrera','Germán Demarco','Leonardo Guevara','Humberto Cardozo'
			), 

			// Microphone 2 column
			'tema' => array(
				'Tenga fe absoluta en el Reino','Llegarán a ser “un reino de sacerdotes”','Valoremos nuestro privilegio de trabajar con Jehová','Tengamos la mente puesta “en las cosas de arriba”','La resurrección de Jesús: ¿por qué es tan importante?'
			),
			
			// Ushers column
			'link' => array(
				'http://www.jw.org/es/publicaciones/revistas/w20141015/fe-absoluta-reino/','http://www.jw.org/es/publicaciones/revistas/w20141015/un-reino-de-sacerdotes/','http://www.jw.org/es/publicaciones/revistas/w20141015/valoremos-nuestro-privilegio-de-trabajar-con-jehov%C3%A1/','http://www.jw.org/es/publicaciones/revistas/w20141015/tengamos-mente-puesta-en-cosas-de-arriba/','http://www.jw.org/es/publicaciones/revistas/w20141115/resurrecci%C3%B3n-de-jes%C3%BAs-por-qu%C3%A9-tan-importante/'
			)
		);

		return $study;
	}

	// Bible Discourse
	function bible_discourse(){
		
		$discourse = array(

			// Date column
			'date' => array(
				'2014-09-21','2014-09-28','2014-10-05','2014-10-12','2014-10-19','2014-10-26','2014-11-02','2014-11-09','2014-11-16','2014-11-23','2014-11-30','2014-12-07','2014-12-14','2014-12-21','2014-12-28'
			),

			// Equipment column
			'president'	=> array(
				'Leonel Navarro','Germán Demarco','Iván Rivero','Michel Fuentes','Ricardo Rodríguez','Leonardo Guevara','Carlos Cabrera','Rubens Rivero','Iván Rivero','Ricardo Rodríguez','Leonel Navarro','Michel Fuentes','Germán Demarco','Leonardo Guevara','Iván Rivero'
			),

			// Microphone 1 column
			'topic' => array(
				'Liberados de un mundo de oscuridad','Utilice la educación para alabar a Jehová','Padres, ¿están edificando con materiales incombustibles?','Cómo protegernos de las trampas de Satanás','¿Por qué temer al Dios verdadero?','¿Qué logra la curación de las naciones?','El mundo que nos rodea prueba que Dios existe','Conduciéndonos honradamente en todo tiempo','¿Qué clase de nombre se está haciendo con Dios?','Obren prudentemente a medida que se acerca el fin','Buenas nuevas en un mundo violento','Nunca se haga embotado en su oír','Cifre su confianza en Jehová','Como hallar honra y gozo en el ministerio de Dios','¿Cómo debemos servir a Dios?'
			), 

			// Microphone 2 column
			'speaker' => array(
				'Cristian Barajiola','Raúl Rocha','Daniel Saravia','Leonardo Etchevarría','Freddy Hunderwaredt','Luis Tedros','J. Carlos Scarpelli','Pablo Fernández','Nelson Lerma','Daniel Suanes','Exequiel González','Arturo Texeira','Martín Uriarte','Miguel Braga','Ricardo Barboza'
			),
			
			// Ushers column
			'congregation' => array(
				'Ciudad del Plata','Ciudad del Plata','La Paz','La Paz','La Paz','La Paz','Pinar Norte','Pinar Norte','Paso de la Arena','Nuevo París','Nuevo París','Nuevo París','Nuevo París','Nuevo París','Nuevo París'
			)
		);

		return $discourse;
	}

	// CBS & Service Meeting
	function cbs_service_meeting(){
		
		$meetings = array(

			// Date column
			'date' => array(
				'2014-12-08','2014-12-15','2014-12-22','2014-12-29','2015-01-05'
			),

			// Start Prayer
			'start_prayer' => array(
				'Marcelo Paolino','Luis Sandes','Leonel Navarro','Ricardo Rodríguez','Humberto Cardozo'
			), 

			// End Prayer
			'end_prayer' => array(
				'Iván Rivero','Michel Fuentes','Germán Demarco','Diego Téliz','Rubens Rivero'
			),
			
			// CBS Speaker
			'cbs_speaker' => array(
				'Ricardo Rodríguez','Carlos Cabrera','Rubens Rivero','Leonardo Guevara','Leonel Navarro'
			),
			
			// CBS Lector
			'cbs_lector' => array(
				'Diego Téliz','Humberto Cardozo','Marcelo Paolino','Iván Rivero','Diego Téliz'
			),
			
			// CBS Info
			'cbs_info' => array(
				'cl cap. 17 párrs. 1-8','cl cap. 17 párrs. 9-16','cl cap. 17 párrs. 17-23 y recuadro de la pág. 177','cl cap. 18 párrs. 1-8','cl cap. 18 párrs. 9-19'
			),
			
			// SM Min 1
			'sm_min_1' => array(
				'10','15','5','20','30'
			),
			
			// SM Speaker 1
			'sm_speaker_1' => array(
				'Rubens Rivero','Germán Demarco','Luis Sandes','Carlos Cabrera','Luis Sandes'
			),
			
			// SM Info 1
			'sm_info_1' => array(
				'Este mes nos aguardan “cosas buenas”.','“¿Dirigimos bien nuestros cursos bíblicos?”','Necesidades de la congregación.','Enseñemos “cosas buenas” de forma progresiva a nuestros estudiantes y a nuestros hijos','“Nuevas canciones para alabar a Jehová.”'
			),
			
			// SM Min 2
			'sm_min_2' => array(
				'20','15','25','10',''
			),
			
			// SM Speaker 2
			'sm_speaker_2' => array(
				'Leonel Navarro','Iván Rivero','Leonardo Guevara','Ricardo Rodríguez',''
			),
			
			// SM Info 2
			'sm_info_2' => array(
				'“Mejore sus habilidades en el ministerio: demuestre cómo estudiar la Biblia con el libro Enseña.”','Una herramienta que nos prepara para dirigir mejor nuestros cursos bíblicos.','“La Escuela del Ministerio Teocrático del año 2015 nos ayudará a mejorar nuestra enseñanza.”','“Compartamos nuestras ‘cosas buenas’ siendo hospitalarios (Mat. 12:35a).”',''
			),
			
			// SM Min 3
			'sm_min_3' => array(
				'','','','',''
			),
			
			// SM Speaker 3
			'sm_speaker_3' => array(
				'','','','',''
			),
			
			// SM Info 3
			'sm_info_3' => array(
				'','','','',''
			)
			
		);

		return $meetings;
	}
}
?>
