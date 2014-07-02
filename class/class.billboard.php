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
		- Bible Discourse
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
				'2014-07-01','2014-07-01','2014-07-02','2014-07-02','2014-07-04','2014-07-05','2014-07-05','2014-07-05','2014-07-06','2014-07-07','2014-07-08','2014-07-08','2014-07-09','2014-07-09','2014-07-11','2014-07-12','2014-07-12','2014-07-14','2014-07-15','2014-07-15','2014-07-16','2014-07-16','2014-07-18','2014-07-19','2014-07-19','2014-07-20','2014-07-21','2014-07-22','2014-07-23','2014-07-23','2014-07-24','2014-07-25','2014-07-26','2014-07-26','2014-07-28','2014-07-29','2014-07-29','2014-07-30','2014-07-30'
			),

			// Time column
			'time' => array(
				'9:30','15:00','9:30','15:00','15:00','9:30','15:00','15:00','11:00','16:00','9:30','15:00','9:30','15:00','15:00','9:30','15:00','16:00','9:30','15:00','9:30','15:00','15:00','9:30','15:00','11:00','16:00','9:30','9:30','15:00','9:30','9:30','9:30','15:00','16:00','9:30','15:00','9:30','15:00'
			), 

			// Location column
			'location' => array(
				'Salón del Reino','Familia Rivero','Salón del Reino','Familia Rivero','Casa de Blanca Pereira','Salón del Reino','Familia Rivero','Casa de Rosa Giménez','Salón del Reino','Familia Rodríguez','Salón del Reino','Familia Rivero','Salón del Reino','Familia Rivero','Familia Navarro','Familia Fuentes','A confirmar','Familia Rodríguez','Salón del Reino','Familia Rivero','Salón del Reino','Familia Rivero','Casa de Blanca Pereira','Salón del Reino','Familia Navarro','Salón del Reino','Familia Rodríguez','Salón del Reino','Familia Rodríguez','Familia Rivero','Casa de Blanca Pereira','Casa de Rosa Giménez','Salón del Reino','Salón del Reino','Familia Rodríguez','Salón del Reino','Familia Rivero','Familia Rivero','Salón del Reino'
			),
			
			// Responsible column
			'responsible' => array(
				'Humberto Cardozo','Osvaldo Simone','Carlos Cabrera','Rubens Rivero','Leonel Navarro','Germán Demarco','Carlos Cabrera','Luis Sandes','Leonardo Guevara','Ricardo Rodríguez','Humberto Cardozo','Osvaldo Simone','Carlos Cabrera','Rubens Rivero','Leonel Navarro','Michel Fuentes','A confirmar','Ricardo Rodríguez','Humberto Cardozo','Osvaldo Simone','Carlos Cabrera','Rubens Rivero','Leonel Navarro','Diego Téliz','Leonardo Guevara','Michel Fuentes','Ricardo Rodríguez','Humberto Cardozo','Daniel Delorrio','Daniel Delorrio','Daniel Delorrio','Daniel Delorrio','Daniel Delorrio','Daniel Delorrio','Ricardo Rodríguez','Humberto Cardozo','Osvaldo Simone','Carlos Cabrera','Rubens Rivero'
			)
		);

		return $groups;
	}

	// Clean program
	function clean_program(){
		
		$clean_program = array(

			// Date column
			'date' => array(
				'2014-05-01','2014-05-04','2014-05-08','2014-05-11','2014-05-15','2014-05-18','2014-05-22','2014-05-25','2014-05-29','2014-06-01','2014-06-05','2014-06-08','2014-06-12','2014-06-15','2014-06-19','2014-06-22','2014-06-26','2014-06-29'
			),

			// Group id
			'group_id' => array(
				'2','2','3','3','4','4','5','5','1','1','2','2','3','3','4','4','5','5'
			), 

			// Group name
			'group_name' => array(
				'Grupo Nº2','Grupo Nº2','Grupo Nº3','Grupo Nº3','Grupo Nº4','Grupo Nº4','Grupo Nº5','Grupo Nº5','Grupo Nº1','Grupo Nº1','Grupo Nº2','Grupo Nº2','Grupo Nº3','Grupo Nº3','Grupo Nº4','Grupo Nº4','Grupo Nº5','Grupo Nº5'
			),
			
			// Responsible group
			'responsible' => array(
				'Carlos Cabrera','Carlos Cabrera','Luis Sandes','Luis Sandes','Michel Fuentes','Michel Fuentes','Leonardo Guevara','Leonardo Guevara','Leonel Navarro','Leonel Navarro','Carlos Cabrera','Carlos Cabrera','Luis Sandes','Luis Sandes','Michel Fuentes','Michel Fuentes','Leonardo Guevara','Leonardo Guevara'
			)
		);

		return $clean_program;
	}

	// Sound and Ushers
	function sound_and_ushers(){
		
		$groups = array(

			// Date column
			'date' => array(
				'2014-05-04','2014-05-08','2014-05-11','2014-05-15','2014-05-18','2014-05-22','2014-05-25','2014-05-29','2014-06-01','2014-06-05','2014-06-08','2014-06-12','2014-06-15','2014-06-19','2014-06-22','2014-06-26','2014-06-29'
			),

			// Equipment column
			'equipment'	=> array(
				'Diego','Iván','Rubens','Humberto','Iván','Germán','Diego','Humberto','Rubens','Germán','Iván','Rubens','Diego','Iván','Germán','Diego','Humberto'
			),

			// Microphone 1 column
			'mic1' => array(
				'Germán','Humberto','Germán','Carlos','Osvaldo','Marcelo','Ariel','Carlos','Marcelo','Diego','Carlos','Germán','Ariel','Carlos','Leonardo','Geremías','Ariel'
			), 

			// Microphone 2 column
			'mic2' => array(
				'Ricardo','Rubens','Iván','Ariel','Geremías','Diego','Germán','Leonardo','Humberto','Ariel','Geremías','Marcelo','Osvaldo','Humberto','Diego','Marcelo','Leonardo'
			),

			// Platform column
			'platform' => array(
				'Marcelo','Germán','Diego','Luis','Marcelo','Ricardo','Iván','Diego','Germán','Luis','Ricardo','Iván','Marcelo','Diego','Luis','Germán','Iván'
			),
			
			// Ushers column
			'usher' => array(
				'Michel','Diego','Leonel','Leonardo','Ricardo','Humberto','Osvaldo','Germán','Osvaldo','Michel','Diego','Leonel','Leonardo','Ricardo','Humberto','Osvaldo','Germán'
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
				'2014-06-08','2014-06-15','2014-06-22','2014-06-29','2014-07-06','2014-07-13','2014-07-20','2014-07-27','2014-08-03','2014-08-10','2014-08-17','2014-08-24','2014-08-31','2014-09-07','2014-09-14','2014-09-21'
			),

			// Equipment column
			'president'	=> array(
				'Iván Rivero','Leonardo Guevara','Carlos Cabrera','Rubens Rivero','Iván Rivero','Michel Fuentes','Carlos Cabrera','Germán Demarco','Leonel Navarro','Rubens Rivero','Iván Rivero','Carlos Cabrera','Leonardo Guevara','Michel Fuentes','Rubens Rivero','Leonel Navarro'
			),

			// Microphone 1 column
			'topic' => array(
				'¿Realmente hace usted de Jehová su plaza fuerte?','¿Cómo se puede ser feliz a pesar de tener hambre?','Andemos en el camino de la integridad','Edifique su fe en el Hacedor del hombre','-','Una congregación leal bajo la dirección de Cristo','Que todo cuanto tengamos glorifique a Dios','Sirvamos con la organización unificada de Jehová','¿Cómo puede usted colaborar con el Reino de Dios?','El tiempo de juicio para la religión','Permanezcamos sin culpa en medio de una generación torcida','¿Es esta vida todo cuanto hay?','Jehová, el Magnífico Creador','Aprecie las maravillas de la creación de Dios','Liberados de un mundo de oscuridad','Utilice la educación para alabar a Jehová'
			), 

			// Microphone 2 column
			'speaker' => array(
				'Marcelo Mariño','Alejandro Roldán','Manuel Rollón','Miguel Herbig','Claudio Breijo','J. C. L.','Jorge M.','Freddy M.','L. Olivera','Luis Benítez','M. Rodríguez','Gustavo C.','Alex Vlaemihok','Jorge Rocha','Ricardo Molina','Cristian B.'
			),
			
			// Ushers column
			'congregation' => array(
				'Paso de la Arena','Paso de la Arena','Paso de la Arena','Paso de la Arena','-','Playa Pascual','Playa Pascual','Playa Pascual','Playa Pascual','Ciudad del Plata','Ciudad del Plata','Ciudad del Plata','Ciudad del Plata','Ciudad del Plata','Ciudad del Plata','Ciudad del Plata'
			)
		);

		return $discourse;
	}
}
?>