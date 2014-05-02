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
				'2014-03-03','2014-03-04','2014-03-04','2014-03-05','2014-03-05','2014-03-07','2014-03-08','2014-03-08','2014-03-10','2014-03-11','2014-03-11','2014-03-12','2014-03-12','2014-03-14','2014-03-15'
			),

			// Time column
			'time' => array(
				'18:00','09:30','18:00','09:30','18:00','09:30','09:30','18:00','18:00','09:30','18:00','09:30','18:00','09:30','08:30'
			), 

			// Location column
			'location' => array(
				'Familia Rodríguez','Casa de Rosa Giménez','Barra Santa Lucía','Familia Rivero','Familia Rivero','Casa de Blanca Pereira','Salón del Reino','Salón del Reino','Familia Rodríguez','Casa de Rosa Giménez','Barra Santa Lucía','Salón del Reino','Familia Rivero','Casa de Blanca Pereira','Familia Fuentes (Territorio poco trabajado)'
			),
			
			// Responsible column
			'responsible' => array(
				'Ricardo Rodríguez','Humberto Cardozo','Iván Rivero','Carlos Cabrera','Rubens Rivero','Leonel Navarro','Luis Sandes','Michel Fuentes','Ricardo Rodríguez','Humberto Cardozo','Michel Fuentes','Carlos Cabrera','Rubens Rivero','Leonel Navarro','Michel Fuentes'
			)
		);

		return $groups;
	}

	// Clean program
	function clean_program(){
		
		$clean_program = array(

			// Date column
			'date' => array(
				'2014-03-06','2014-03-09','2014-03-13','2014-03-16','2014-03-20','2014-03-23','2014-03-27','2014-03-30','2014-04-03','2014-04-06','2014-04-10','2014-04-13','2014-04-17','2014-04-20','2014-04-24','2014-04-27'
			),

			// Group id
			'group_id' => array(
				'4','4','5','5','1','1','2','2','3','3','4','4','5','5','1','1'
			), 

			// Group name
			'group_name' => array(
				'Grupo Nº4','Grupo Nº4','Grupo Nº5','Grupo Nº5','Grupo Nº1','Grupo Nº1','Grupo Nº2','Grupo Nº2','Grupo Nº3','Grupo Nº3','Grupo Nº4','Grupo Nº4','Grupo Nº5','Grupo Nº5','Grupo Nº1','Grupo Nº1'
			),
			
			// Responsible group
			'responsible' => array(
				'Michel Fuentes','Michel Fuentes','Leonardo Guevara','Leonardo Guevara','Leonel Navarro','Leonel Navarro','Carlos Cabrera','Carlos Cabrera','Luis Sandes','Luis Sandes','Michel Fuentes','Michel Fuentes','Leonardo Guevara','Leonardo Guevara','Leonel Navarro','Leonel Navarro'
			)
		);

		return $clean_program;
	}

	// Sound and Ushers
	function sound_and_ushers(){
		
		$groups = array(

			// Date column
			'date' => array(
				'2014-03-02','2014-03-06','2014-03-09','2014-03-13','2014-03-16','2014-03-20','2014-03-23','2014-03-27','2014-03-30','2014-04-03','2014-04-06','2014-04-10','2014-04-13','2014-04-17','2014-04-20','2014-04-24','2014-04-27'
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
				'Marcelo','Germán','Diego','Luis','Marcelo','Ricardo','Iván','Diego','Germán','Luis','Ricardo','Iván','Marcelo','Diego','Germán','Luis','Iván'
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
				'2014-02-02','2014-02-09','2014-02-16','2014-02-23','2014-03-02','2014-03-09','2014-03-16','2014-03-23','2014-03-30','2014-04-06','2014-04-13','2014-04-20','2014-04-27','2014-05-04','2014-05-11','2014-05-18','2014-05-25','2014-06-01','2014-06-08'
			),

			// Equipment column
			'conductor'	=> array(
				'Luis Sandes','Luis Sandes','Luis Sandes','Luis Sandes','Luis Sandes','Luis Sandes','Luis Sandes','Luis Sandes','Luis Sandes','Luis Sandes','Luis Sandes','Luis Sandes','Luis Sandes','Luis Sandes','Luis Sandes','Luis Sandes','Luis Sandes','Luis Sandes','Luis Sandes'
			),

			// Microphone 1 column
			'lector' => array(
				'Diego Téliz','Carlos Cabrera','Ricardo Rodríguez','Michel Fuentes','Iván Rivero','Germán Demarco','Rubens Rivero','Diego Téliz','Humberto Cardozo','Germán Demarco','Leonel Navarro','Carlos Cabrera','Rubens Rivero','Iván Rivero','Leonel Navarro','Ricardo Rodríguez','Michel Fuentes','Diego Téliz','Humberto Cardozo'
			), 

			// Microphone 2 column
			'tema' => array(
				'Pastores, imiten a Jehová y Jesús','“No se dejen confundir”','¿Haremos sacrificios por el Reino?','“Tiene que servirles de memoria”','“Sigan haciendo esto en memoria de mí”','Adoremos a Jehová, el Rey de la eternidad','Los logros del Reino en sus primeros cien años','Toma buenas decisiones en tu juventud','Sirva a Jehová antes de que lleguen los días calamitosos','¿Hasta cuándo pediremos “Venga tu reino”? ','¡Honremos a Cristo, el glorioso Rey!','¡Alegrémonos por la boda del Cordero!','Jehová, nuestro Proveedor y Protector','Jehová, nuestro mejor Amigo','Mantengamos un espíritu de sacrificio','Mantengamos una actitud positiva','Honremos a nuestros mayores','Cuidemos a nuestros mayores','Imitemos la fe de Moisés'
			),
			
			// Ushers column
			'link' => array(
				'http://www.jw.org/es/publicaciones/revistas/w20131115/pastores-imiten-a-jehov%C3%A1-y-jes%C3%BAs/','http://www.jw.org/es/publicaciones/revistas/w20131215/no-se-dejen-confundir/','http://www.jw.org/es/publicaciones/revistas/w20131215/haremos-sacrificios-por-el-reino/','http://www.jw.org/es/publicaciones/revistas/w20131215/pascua-servirles-de-memoria/','http://www.jw.org/es/publicaciones/revistas/w20131215/en-memoria-de-m%C3%AD/','http://www.jw.org/es/publicaciones/revistas/w20140115/adoremos-a-jehov%C3%A1-rey-de-la-eternidad/','http://www.jw.org/es/publicaciones/revistas/w20140115/reino-primeros-cien-a%C3%B1os/','http://www.jw.org/es/publicaciones/revistas/w20140115/toma-buenas-decisiones-en-tu-juventud/','http://www.jw.org/es/publicaciones/revistas/w20140115/sirva-a-jehov%C3%A1-magn%C3%ADfico-creador/','http://www.jw.org/es/publicaciones/revistas/w20140115/venga-tu-reino/','http://www.jw.org/es/publicaciones/revistas/w20140215/honremos-a-cristo-el-glorioso-rey/','http://www.jw.org/es/publicaciones/revistas/w20140215/alegr%C3%A9monos-boda-del-cordero/','http://www.jw.org/es/publicaciones/revistas/w20140215/jehov%C3%A1-proveedor-protector/','http://www.jw.org/es/publicaciones/revistas/w20140215/jehov%C3%A1-dios-mejor-amigo/','http://www.jw.org/es/publicaciones/revistas/w20140315/esp%C3%ADritu-de-sacrificio/','http://www.jw.org/es/publicaciones/revistas/w20140315/mantengamos-una-actitud-positiva/','http://www.jw.org/es/publicaciones/revistas/w20140315/honremos-a-nuestros-mayores/','http://www.jw.org/es/publicaciones/revistas/w20140315/cuidemos-a-nuestros-mayores/','http://www.jw.org/es/publicaciones/revistas/w20140415/fe-de-mois%C3%A9s/'
			)
		);

		return $study;
	}

	// Bible Discourse
	function bible_discourse(){
		
		$discourse = array(

			// Date column
			'date' => array(
				'2014-02-02','2014-02-09','2014-02-16','2014-02-23','2014-03-02','2014-03-09','2014-03-16','2014-03-23','2014-03-30','2014-04-06','2014-04-13','2014-04-20','2014-04-27','2014-05-04','2014-05-11','2014-05-18','2014-05-25','2014-06-01','2014-06-08'
			),

			// Equipment column
			'president'	=> array(
				'Ricardo Rodríguez','Leonel Navarro','Iván Rivero','Germán Demarco','Leonardo Guevara','Michel Fuentes','Carlos Cabrera','Rubens Rivero','Ricardo Rodríguez','Leonel Navarro','Iván Rivero','Germán Demarco','Leonardo Guevara','Michel Fuentes','Carlos Cabrera','Rubens Rivero','Ricardo Rodríguez','Leonel Navarro','Iván Rivero'
			),

			// Microphone 1 column
			'topic' => array(
				'¿Cifra usted su esperanza en la ciencia o en La Biblia?','¿En las promesas de quién confía usted?','La Biblia ante las prácticas espiritistas','Dedique tiempo en meditar en asuntos espirituales','No dejemos que este mundo nos contamine','Esténsen quietos y vean la salvación de Jehová','El único remedio para la humanidad enferma','Superemos el temor al futuro','Sirva a Jehová con un corazón gozoso','¿Qué pruebas demuestran la autenticidad de La Biblia?','','Esfuércese por lo que es realmente vida','Conferencia especial','¿Conoce usted bien a Dios?','La misericordia; cualidad dominante de los cristianos verdaderos','¿Qué clase de nombre se está haciendo con Dios?','Asamblea especial','','¿Realmente hace usted de Jehová su plaza fuerte?'
			), 

			// Microphone 2 column
			'speaker' => array(
				'Oscar Rivero','José Canavery','Harry Durán','Clever Cortiza','Martín Otárola','Fernando Llambías','Diego Demarco','Pablo Scigliano','Juan Merlino','Martín Cattani','','Héctor Rodríguez','Conferencia especial','Williams Bartora','Juan Nassif','Nelson Lerma','Asamblea especial','','Marcelo Mariño'
			),
			
			// Ushers column
			'congregation' => array(
				'Santa Catalina','Santa Catalina','Santa Catalina','Santa Catalina','Los Bulevares','Los Bulevares','Los Bulevares','Los Bulevares','Los Bulevares','Cerro','','Los Bulevares','Conferencia especial','Paso de la Arena','Paso de la Arena','Paso de la Arena','Asamblea especial','','Paso de la Arena'
			)
		);

		return $discourse;
	}
}
?>