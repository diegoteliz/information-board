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
				'2014-09-15','2014-09-16','2014-09-16','2014-09-17','2014-09-17','2014-09-19','2014-09-20','2014-09-20','2014-09-21','2014-09-22','2014-09-23','2014-09-23','2014-09-24','2014-09-24','2014-09-26','2014-09-27','2014-09-27','2014-09-29','2014-09-30','2014-09-30'
			),

			// Time column
			'time' => array(
				'16:00','09:30','16:00','09:30','16:00','16:00','09:30','16:00','11:00','16:00','09:30','16:00','09:30','16:00','16:00','09:30','16:00','16:00','09:30','16:00'
			), 

			// Location column
			'location' => array(
				'Familia Rivero','Salón del Reino','Familia Rivero','Salón del Reino','Familia Rivero','Casa de Blanca Pereira','Salón del Reino','Casa de Rosa Giménez','Salón del Reino','Familia Rodríguez','Barra Santa Lucía','Familia Rivero','Familia Rivero','Salón del Reino','Casa de Blanca Pereira','Salón del Reino','Familia Rivero','Familia Rodríguez','Barra Santa Lucía','Salón del Reino'
			),
			
			// Responsible column
			'responsible' => array(
				'Osvaldo Simone','Humberto Cardozo','-','Carlos Cabrera','Rubens Rivero','Leonel Navarro','Diego Téliz','Carlos Cabrera','Ricardo Rodríguez','Osvaldo Simone','Humberto Cardozo','-','Carlos Cabrera','Rubens Rivero','Leonel Navarro','Carlos Cabrera','Luis Sandes','Ricardo Rodríguez','Humberto Cardozo','Rubens Rivero'
			)
		);

		return $groups;
	}

	// Clean program
	function clean_program(){
		
		$clean_program = array(

			// Date column
			'date' => array(
				'2014-09-14','2014-09-18','2014-09-21','2014-09-25','2014-09-28','2014-10-02','2014-10-05','2014-10-09','2014-10-12','2014-10-16','2014-10-19','2014-10-23','2014-10-26','2014-10-30','2014-11-02','2014-11-06','2014-11-09','2014-11-13','2014-11-16'
			),

			// Group id
			'group_id' => array(
				'1','2','2','3','3','4','4','5','5','1','1','2','2','3','3','4','4','5','5'
			), 

			// Group name
			'group_name' => array(
				'Grupo Nº1','Grupo Nº2','Grupo Nº2','Grupo Nº3','Grupo Nº3','Grupo Nº4','Grupo Nº4','Grupo Nº5','Grupo Nº5','Grupo Nº1','Grupo Nº1','Grupo Nº2','Grupo Nº2','Grupo Nº3','Grupo Nº3','Grupo Nº4','Grupo Nº4','Grupo Nº5','Grupo Nº5'
			),
			
			// Responsible group
			'responsible' => array(
				'Leonel Navarro','Carlos Cabrera','Carlos Cabrera','Luis Sandes','Luis Sandes','Michel Fuentes','Michel Fuentes','Leonardo Guevara','Leonardo Guevara','Leonel Navarro','Leonel Navarro','Carlos Cabrera','Carlos Cabrera','Luis Sandes','Luis Sandes','Michel Fuentes','Michel Fuentes','Leonardo Guevara','Leonardo Guevara'
			)
		);

		return $clean_program;
	}

	// Sound and Ushers
	function sound_and_ushers(){
		
		$groups = array(

			// Date column
			'date' => array(
				'2014-09-14','2014-09-18','2014-09-21','2014-09-25','2014-09-28','2014-10-02','2014-10-05','2014-10-09','2014-10-12','2014-10-16','2014-10-19','2014-10-23','2014-10-26','2014-10-30','2014-11-02','2014-11-06','2014-11-09','2014-11-13','2014-11-16'
			),

			// Equipment column
			'equipment'	=> array(
				'Rubens','Humberto','Iván','Germán','Diego','Humberto','Rubens','Germán','Iván','Rubens','Diego','Iván','Germán','Diego','Humberto','Diego','Iván','Rubens','Humberto'
			),

			// Microphone 1 column
			'mic1' => array(
				'Germán','Carlos','Osvaldo','Marcelo','Ariel','Carlos','Marcelo','Diego','Carlos','Germán','Ariel','Carlos','Leonardo','Geremías','Ariel','Germán','Humberto','Germán','Carlos'
			), 

			// Microphone 2 column
			'mic2' => array(
				'Iván','Ariel','Geremías','Diego','Germán','Leonardo','Humberto','Ariel','Geremías','Marcelo','Osvaldo','Humberto','Diego','Marcelo','Leonardo','Ricardo','Rubens','Iván','Ariel'
			),

			// Platform column
			'platform' => array(
				'Diego','Luis','Marcelo','Ricardo','Iván','Diego','Germán','Luis','Ricardo','Luis','Marcelo','Diego','Iván','Germán','Iván','Marcelo','Germán','Diego','Luis'
			),
			
			// Ushers column
			'usher' => array(
				'Leonel','Leonardo','Ricardo','Humberto','Osvaldo','Germán','Osvaldo','Michel','Diego','Leonel','Leonardo','Ricardo','Humberto','Osvaldo','Germán','Michel','Diego','Leonel','Leonardo'
			)
		);

		return $groups;
	}

	// Watchtower Study
	function watchtower_study(){
		
		$study = array(

			// Date column
			'date' => array(
				'2014-06-01','2014-06-08','2014-06-15','2014-06-22','2014-06-29','2014-07-06','2014-07-13','2014-07-20','2014-07-27','2014-08-03','2014-08-10','2014-08-17','2014-08-24','2014-08-31','2014-09-07','2014-09-14','2014-09-21','2014-09-28','2014-10-05','2014-10-12','2014-10-19','2014-10-26','2014-11-02','2014-11-09','2014-11-16','2014-11-23','2014-11-30'
			),

			// Equipment column
			'conductor'	=> array(
				'Luis Sandes','Luis Sandes','Luis Sandes','Luis Sandes','Luis Sandes','Luis Sandes','Luis Sandes','Luis Sandes','Luis Sandes','Luis Sandes','Luis Sandes','Luis Sandes','Luis Sandes','Luis Sandes','Luis Sandes','Luis Sandes','Luis Sandes','Luis Sandes','Luis Sandes','Luis Sandes','Luis Sandes','Luis Sandes','Luis Sandes','Luis Sandes','Luis Sandes','Luis Sandes','Luis Sandes'
			),

			// Microphone 1 column
			'lector' => array(
				'Diego Téliz','Humberto Cardozo','Ricardo Rodríguez','Michel Fuentes','Leonel Navarro','Diego Téliz','Rubens Rivero','Iván Rivero','Carlos Cabrera','Leonardo Guevara','Germán Demarco','Humberto Cardozo','Ricardo Rodríguez','Michel Fuentes','Leonel Navarro','Diego Téliz','Rubens Rivero','Iván Rivero','Carlos Cabrera','Leonardo Guevara','Germán Demarco','Humberto Cardozo','Ricardo Rodríguez','Michel Fuentes','Leonel Navarro','Diego Téliz','Rubens Rivero'
			), 

			// Microphone 2 column
			'tema' => array(
				'Cuidemos a nuestros mayores','Imitemos la fe de Moisés','¿Vemos a “Aquel que es invisible”?','Nadie puede servir a dos amos','¡Ánimo! Jehová lo ayudará','¿Agradecemos que Jehová nos vigile?','¿Cómo “dar una respuesta a cada uno”?','Siga la Regla de Oro en su ministerio','Jehová es un Dios de organización','¿Avanzamos con la organización de Jehová?','“Tienes que amar a Jehová tu Dios”','“Tienes que amar a tu prójimo”','¿Vemos a los débiles como Jehová los ve?','Ayudemos a los hermanos a desarrollar todo su potencial','“Jehová conoce a los que le pertenecen”','Los siervos de Jehová renuncian a la injusticia','“Ustedes son mis testigos”','“Serán testigos de mí”','Las mujeres en el propósito de Jehová','La Palabra de Dios es viva: ¡usémosla!','Jehová se acerca a nosotros','Escuchemos la voz de Jehová dondequiera que estemos','¿Está usted convencido de que ha encontrado la verdad?','Sirva lealmente a Dios a pesar de “muchas tribulaciones”','Padres, pastoreen a sus hijos','El último enemigo, la muerte, desaparecerá','Tengamos presentes a los siervos de tiempo completo'
			),
			
			// Ushers column
			'link' => array(
				'http://www.jw.org/es/publicaciones/revistas/w20140315/cuidemos-a-nuestros-mayores/','http://www.jw.org/es/publicaciones/revistas/w20140415/fe-de-mois%C3%A9s/','http://www.jw.org/es/publicaciones/revistas/w20140415/aquel-que-es-invisible/','http://www.jw.org/es/publicaciones/revistas/w20140415/nadie-puede-servir-a-dos-amos/','http://www.jw.org/es/publicaciones/revistas/w20140415/jehov%C3%A1-lo-ayudar%C3%A1/','http://www.jw.org/es/publicaciones/revistas/w20140415/agradecemos-que-jehov%C3%A1-nos-vigile/','http://www.jw.org/es/publicaciones/revistas/w20140515/c%C3%B3mo-dar-una-respuesta-a-cada-uno/','http://www.jw.org/es/publicaciones/revistas/w20140515/la-regla-de-oro/','http://www.jw.org/es/publicaciones/revistas/w20140515/jehov%C3%A1-dios-de-organizaci%C3%B3n/','http://www.jw.org/es/publicaciones/revistas/w20140515/avanzamos-con-organizaci%C3%B3n-jehov%C3%A1/','http://www.jw.org/es/publicaciones/revistas/w20140615/amar-a-jehov%C3%A1-tu-dios/','http://www.jw.org/es/publicaciones/revistas/w20140615/amar-a-tu-pr%C3%B3jimo/','http://www.jw.org/es/publicaciones/revistas/w20140615/vemos-a-d%C3%A9biles/','http://www.jw.org/es/publicaciones/revistas/w20140615/ayudemos-a-los-hermanos-a-desarrollar-todo-su-potencial/','http://www.jw.org/es/publicaciones/revistas/w20140715/dios-conoce-a-los-que-le-pertenecen/','http://www.jw.org/es/publicaciones/revistas/w20140715/siervos-jehov%C3%A1-renuncian-injusticia/','http://www.jw.org/es/publicaciones/revistas/w20140715/ustedes-son-mis-testigos/','http://www.jw.org/es/publicaciones/revistas/w20140715/testigos-de-m%C3%AD/','http://www.jw.org/es/publicaciones/revistas/w20140815/mujeres-en-prop%C3%B3sito-de-jehov%C3%A1/','http://www.jw.org/es/publicaciones/revistas/w20140815/la-palabra-de-dios-es-viva/','http://www.jw.org/es/publicaciones/revistas/w20140815/jehov%C3%A1-se-acerca-a-nosotros/','http://www.jw.org/es/publicaciones/revistas/w20140815/escuche-voz-jehov%C3%A1/','http://www.jw.org/es/publicaciones/revistas/w20140915/testigos-de-jehov%C3%A1-convencidos-encontrado-verdad/','http://www.jw.org/es/publicaciones/revistas/w20140915/sirva-a-dios-a-pesar-de-tribulaciones/','http://www.jw.org/es/publicaciones/revistas/w20140915/padres-pastoreen-a-sus-hijos/','http://www.jw.org/es/publicaciones/revistas/w20140915/%C3%BAltimo-enemigo-muerte-desaparecer%C3%A1/','http://www.jw.org/es/publicaciones/revistas/w20140915/tengamos-presentes-a-los-siervos-de-tiempo-completo/'
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
				'2014-09-22','2014-09-29','2014-10-06','2014-10-13','2014-10-20','2014-10-27','2014-11-03'
			),

			// Start Prayer
			'start_prayer' => array(
				'Carlos Cabrera','Marcelo Paolino','Michel Fuentes','Ricardo Rodríguez','Luis Sandes','Ricardo Rodríguez','Carlos Cabrera'
			), 

			// End Prayer
			'end_prayer' => array(
				'Michel Fuentes','Germán Demarco','Diego Téliz','Leonardo Guevara','Leonel Navarro','Rubens Rivero','Osvaldo Simone'
			),
			
			// CBS Speaker
			'cbs_speaker' => array(
				'Iván Rivero','Michel Fuentes','Rubens Rivero','Michel Fuentes','Leonel Navarro','Leonardo Guevara','Rubens Rivero'
			),
			
			// CBS Lector
			'cbs_lector' => array(
				'Marcelo Paolino','Rubens Rivero','Humberto Cardozo','Marcelo Paolino','Diego Téliz','Humberto Cardozo','Marcelo Paolino'
			),
			
			// CBS Info
			'cbs_info' => array(
				'cl cap. 13 párrs. 11-18','cl cap. 13 párrs. 19-23 y recuadro de la pág. 137','cl cap. 14 párrs. 1-9','cl cap. 14 párrs. 10-15','cl cap. 14 párrs. 16-20 y recuadro de la pág. 147','cl cap. 15 párrs. 1-10','cl cap. 15 párrs. 11-19'
			),
			
			// SM Min 1
			'sm_min_1' => array(
				'15','10','10','5','15','15','10'
			),
			
			// SM Speaker 1
			'sm_speaker_1' => array(
				'Rubens Rivero','Ricardo Rodríguez','Carlos Cabrera','Luis Sandes','Rubens Rivero','Germán Demarco','Ricardo Rodríguez'
			),
			
			// SM Info 1
			'sm_info_1' => array(
				'La enriquecedora vida de los misioneros','Cómo iniciar estudios bíblicos el primer sábado del mes.','Ideas para ofrecer las revistas en octubre.','¿Qué significa predicar con urgencia?','“Cómo explicar nuestras creencias sobre 1914.”','“Cómo cultivar el sentido de urgencia en la predicación.”','Ayudemos a los niños a prepararse para la predicación.'
			),
			
			// SM Min 2
			'sm_min_2' => array(
				'15','10','10','10','15','15','10'
			),
			
			// SM Speaker 2
			'sm_speaker_2' => array(
				'Luis Sandes','Iván Rivero','Leonel Navarro','Leonardo Guevara','Carlos Cabrera','Iván Rivero','Carlos Cabrera'
			),
			
			// SM Info 2
			'sm_info_2' => array(
				'“Usemos jw.org en el ministerio.”','¿Cuál es la lección?','Necesidades de la congregación.','¿Por qué es urgente nuestra predicación?','Ayuda para explicar nuestras creencias sobre 1914.','Preparémonos bien para predicar con sentido de urgencia.','Cómo predican la Palabra con sentido de urgencia.'
			),
			
			// SM Min 3
			'sm_min_3' => array(
				'','10','10','15','','','10'
			),
			
			// SM Speaker 3
			'sm_speaker_3' => array(
				'','Leonardo Guevara','Germán Demarco','Leonel Navarro','','','Michel Fuentes'
			),
			
			// SM Info 3
			'sm_info_3' => array(
				'','Entrevista al coordinador del cuerpo de ancianos.','¿Cómo nos fue?','“Aproveche las oportunidades que usted tiene de hablar del Reino.”','','','¿Ha mejorado sus habilidades?'
			)
			
		);

		return $meetings;
	}
}
?>
