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
				'2015-02-01','2015-02-01','2015-02-02','2015-02-02','2015-02-02','2015-02-03','2015-02-03','2015-02-04','2015-02-04','2015-02-06','2015-02-07','2015-02-08','2015-02-09','2015-02-11','2015-02-12','2015-02-12','2015-02-13','2015-02-14','2015-02-15','2015-02-16','2015-02-16','2015-02-16','2015-02-17','2015-02-17','2015-02-17','2015-02-18','2015-02-18','2015-02-20','2015-02-21','2015-02-22','2015-02-23','2015-02-23','2015-02-23','2015-02-24','2015-02-24','2015-02-24','2015-02-25','2015-02-25','2015-02-27','2015-02-28'
			),

			// Time column
			'time' => array(
				'9:30','9:30','9:00','19:30','19:30','9:00','19:30','9:00','19:30','19:00','9:30','8:30','9:00','19:00','9:00','19:00','19:00','9:00','9:00','9:00','19:00','19:00','7:00','9:00','19:00','9:00','19:00','19:00','9:00','9:30','9:00','19:00','19:00','7:00','9:00','19:00','9:00','19:00','19:00','9:00'
			), 

			// Location column
			'location' => array(
				'Familia Rivero','Salón del Reino','Predicación Telefónica','Barra Santa Lucía','Predicación por intercomunicadores','Familia Navarro','Salón del Reino','Salón del Reino','Familia Rodríguez','Predicación Telefónica','Familia Rivero','Salón del Reino','Predicación Telefónica','Familia Navarro','Familia Rodríguez','Casa de Rosa Giménez','Familia Rivero','Salón del Reino','Salón del Reino','Predicación Telefónica','Barra Santa Lucía','Predicación por intercomunicadores','Parada del Km 26','Salón del Reino','Familia Rodríguez','Salón del Reino','Casa de Rosa Giménez','Predicación Telefónica','Casa de Rosa Giménez','Familia Navarro','Predicación Telefónica','Barra Santa Lucía','Predicación por intercomunicadores','Parada del Km 26','Familia Rodríguez','Familia Rivero','Salón del Reino','Familia Navarro','Predicación Telefónica','Salón del Reino'
			),
			
			// Responsible column
			'responsible' => array(
				'Germán Demarco','Leonardo Guevara','-','Ricardo Rodríguez','Leonardo Guevara','Leonel Navarro','Luis Sandes','Carlos Cabrera','Rubens Rivero','-','Diego Téliz','Michel Fuentes','-','Daniel Delorrio','Germán Demarco','Daniel Delorrio','Daniel Delorrio','Daniel Delorrio','Daniel Delorrio','-','Luis Sandes','Leonardo Guevara','Leonardo Guevara','Carlos Cabrera','Germán Demarco','Carlos Cabrera','Luis Sandes','-','Iván Rivero','Diego Téliz','-','Rubens Rivero','Leonardo Guevara','Leonardo Guevara','Carlos Cabrera','Iván Rivero','Carlos Cabrera','Leonel Navarro','-','Humberto Cardozo'
			)
		);

		return $groups;
	}

	// Clean program
	function clean_program(){

		$clean_program = array(

			// Date column
			'date' => array(
				'2015-02-05','2015-02-07','2015-02-12','2015-02-14','2015-02-19','2015-02-21','2015-02-26','2015-02-28','2015-03-05','2015-03-07','2015-03-12','2015-03-14','2015-03-19','2015-03-21','2015-03-26','2015-03-28','2015-04-02','2015-04-04','2015-04-09','2015-04-11','2015-04-16','2015-04-18','2015-04-23','2015-04-25','2015-04-30','2015-05-02','2015-05-07','2015-05-09'
			),

			// Group id
			'group_id' => array(
				'3','3','4','4','1','1','2','2','3','3','4','4','1','1','2','2','3','3','4','4','1','1','2','2','3','3','4','4'
			),

			// Group name
			'group_name' => array(
				'Grupo Nº3','Grupo Nº3','Grupo Nº4','Grupo Nº4','Grupo Nº1','Grupo Nº1','Grupo Nº2','Grupo Nº2','Grupo Nº3','Grupo Nº3','Grupo Nº4','Grupo Nº4','Grupo Nº1','Grupo Nº1','Grupo Nº2','Grupo Nº2','Grupo Nº3','Grupo Nº3','Grupo Nº4','Grupo Nº4','Grupo Nº1','Grupo Nº1','Grupo Nº2','Grupo Nº2','Grupo Nº3','Grupo Nº3','Grupo Nº4','Grupo Nº4'
			),

			// Responsible group
			'responsible' => array(
				'Luis Sandes','Luis Sandes','Leonardo Guevara','Leonardo Guevara','Leonel Navarro','Leonel Navarro','Carlos Cabrera','Carlos Cabrera','Luis Sandes','Luis Sandes','Leonardo Guevara','Leonardo Guevara','Leonel Navarro','Leonel Navarro','Carlos Cabrera','Carlos Cabrera','Luis Sandes','Luis Sandes','Leonardo Guevara','Leonardo Guevara','Leonel Navarro','Leonel Navarro','Carlos Cabrera','Carlos Cabrera','Luis Sandes','Luis Sandes','Leonardo Guevara','Leonardo Guevara'
			)
		);

		return $clean_program;
	}

	// Sound and Ushers
	function sound_and_ushers(){

		$groups = array(

			// Date column
			'date' => array(
				'2015-02-05','2015-02-07','2015-02-12','2015-02-14','2015-02-19','2015-02-21','2015-02-26','2015-02-28','2015-03-05'
			),

			// Equipment column
			'equipment'	=> array(
				'Rubens','Germán','Iván','Rubens','Diego','Iván','Germán','Diego','Humberto'
			),

			// Microphone 1 column
			'mic1' => array(
				'Marcelo','Diego','Carlos','Germán','Ariel','Carlos','Leonardo','Geremías','Ariel'
			), 

			// Microphone 2 column
			'mic2' => array(
				'Humberto','Ariel','Geremías','Osvaldo','Marcelo','Humberto','Diego','Marcelo','Leonardo'
			),

			// Platform column
			'platform' => array(
				'Luis','Ricardo','Germán','Marcelo','Luis','Diego','Iván','Germán','Iván'
			),
			
			// Ushers column
			'usher' => array(
				'Osvaldo','Michel','Diego','Leonel','Leonardo','Ricardo','Humberto','Osvaldo','Germán'
			)
		);

		return $groups;
	}

	// Watchtower Study
	function watchtower_study(){
		
		$study = array(

			// Date column
			'date' => array(
				'2015-02-07','2015-02-14','2015-02-21','2015-02-28','2015-03-07','2015-03-14','2015-03-21','2015-03-28','2015-04-04','2015-04-11','2015-04-18','2015-04-25','2015-05-02','2015-05-09','2015-05-16','2015-05-23','2015-05-30','2015-06-06','2015-06-13','2015-06-20','2015-06-27'
			),

			// Equipment column
			'conductor'	=> array(
				'' // deprecated
			),

			// Microphone 1 column
			'lector' => array(
				'Iván Rivero','Leonel Navarro','Michel Fuentes','Humberto Cardozo','Germán Demarco','Leonardo Guevara','Rubens Rivero','Luis Sandes','Diego Téliz','Iván Rivero','Ricardo Rodríguez','Leonel Navarro','Michel Fuentes','Humberto Cardozo','Germán Demarco','Leonardo Guevara','Rubens Rivero','Luis Sandes','Diego Téliz','Iván Rivero','Ricardo Rodríguez'
			), 

			// Microphone 2 column
			'tema' => array(
				'Escuchemos para entender el significado','¿Entendemos el significado?','Para sobrevivir, tendremos que estar unidos','¿Qué significa para ti lo que has recibido?','Demos gracias a Jehová','Por qué celebramos la Cena del Señor','Qué hacer para tener un matrimonio fuerte y feliz','Dejen que Jehová proteja su matrimonio','¿Puede el amor durar toda la vida?','Seamos humildes y compasivos como Jesús','Seamos valientes y actuemos con buen juicio como Jesús','“La enseñanza de Jehová” llega a todas las naciones','Jehová dirige nuestra labor mundial de enseñanza','A Jehová le gusta enseñar de forma sencilla','¿Logrará usted mantenerse alerta?','Qué aprendemos de la parábola de los talentos','Apoyemos a los hermanos de Cristo','Ancianos, ¿están capacitando a otros hermanos?','Cómo capacitar a otros','¿Ve usted a Jehová como un amigo de verdad?','No deje de confiar en Jehová'
			),
			
			// Ushers column
			'link' => array(
				'http://www.jw.org/es/publicaciones/revistas/w20141215/jes%C3%BAs-par%C3%A1bolas-atenci%C3%B3n-significado/','http://www.jw.org/es/publicaciones/revistas/w20141215/jes%C3%BAs-par%C3%A1bolas-entendemos-el-significado/','http://www.jw.org/es/publicaciones/revistas/w20141215/unidos-para-sobrevivir/','http://www.jw.org/es/publicaciones/revistas/w20141215/qu%C3%A9-significa-para-ti-lo-que-has-recibido/','http://www.jw.org/es/publicaciones/revistas/w20150115/demos-gracias-a-jehov%C3%A1/','http://www.jw.org/es/publicaciones/revistas/w20150115/por-qu%C3%A9-celebramos-la-cena-del-se%C3%B1or/','http://www.jw.org/es/publicaciones/revistas/w20150115/qu%C3%A9-hacer-para-tener-un-matrimonio-fuerte-y-feliz/','http://www.jw.org/es/publicaciones/revistas/w20150115/jehov%C3%A1-proteja-matrimonio/','http://www.jw.org/es/publicaciones/revistas/w20150115/amor-verdadero-seg%C3%BAn-cantar-de-los-cantares/','http://www.jw.org/es/publicaciones/revistas/w20150215/humildes-y-compasivos-como-jes%C3%BAs/','http://www.jw.org/es/publicaciones/revistas/w20150215/imitemos-el-valor-y-buen-juicio-de-jes%C3%BAs/','http://www.jw.org/es/publicaciones/revistas/w20150215/ense%C3%B1anza-de-jehov%C3%A1-llega-a-todas-naciones/','http://www.jw.org/es/publicaciones/revistas/w20150215/jehov%C3%A1-dirige-nuestra-labor-de-ense%C3%B1anza/','http://www.jw.org/es/publicaciones/revistas/w20150315/clara-sencilla-ensenanza-biblia-verdad/','http://www.jw.org/es/publicaciones/revistas/w20150315/jesus-parabola-10-virgenes/','http://www.jw.org/es/publicaciones/revistas/w20150315/parabola-talentos/','http://www.jw.org/es/publicaciones/revistas/w20150315/apoyemos-a-los-hermanos-de-cristo/','http://www.jw.org/es/publicaciones/revistas/w20150415/ancianos-capacitacion-otros/','http://www.jw.org/es/publicaciones/revistas/w20150415/ancianos-capacitar-otros/','http://www.jw.org/es/publicaciones/revistas/w20150415/jehova-un-amigo-de-verdad/','http://www.jw.org/es/publicaciones/revistas/w20150415/no-deje-de-confiar-en-jehova/'
			)
		);

		return $study;
	}

	// Bible Discourse
	function bible_discourse(){
		
		$discourse = array(

			// Date column
			'date' => array(
				'2015-02-14','2015-02-21','2015-02-28','2015-03-07','2015-03-14','2015-03-21','2015-03-28','2015-04-04','2015-04-11','2015-04-18','2015-04-25','2015-05-02','2015-05-09','2015-05-16','2015-05-23','2015-05-30','2015-06-06','2015-06-13','2015-06-20','2015-06-27','2015-07-04','2015-07-11','2015-07-18','2015-07-25','2015-08-01','2015-08-08','2015-08-15','2015-08-22'
			),

			// Equipment column
			'president'	=> array(
				'Ricardo Rodríguez','Leonel Navarro','Germán Demarco','Iván Rivero','Luis Sandes','Rubens Rivero','Leonardo Guevara','Ricardo Rodríguez','Leonel Navarro','Germán Demarco','Iván Rivero','Luis Sandes','Rubens Rivero','Leonardo Guevara','Ricardo Rodríguez','Leonel Navarro','Germán Demarco','Iván Rivero','Luis Sandes','Rubens Rivero','Leonardo Guevara','Ricardo Rodríguez','Leonel Navarro','Germán Demarco','Iván Rivero','Luis Sandes','Rubens Rivero','Leonardo Guevara'
			),

			// Microphone 1 column
			'topic' => array(
				'Adquiera un corazón de sabiduría','¿Realmente hace usted de Jehová su plaza fuerte?','¿Es el día del juicio un tiempo de temor, o de esperanza?','¿Está transformando la verdad su vida?','Muestre respeto y amor en su matrimonio','¿Sigue Dios ejerciendo la soberanía sobre la Tierra?','¿Cuándo tendremos verdadera paz y seguridad?','Por qué deben ser diferentes los cristianos','Mantenga firme su confianza hasta el fin','“Esténse quietos y vean la salvación de Jehová”','La prueba de mantener lealtad cristiana','¿Guarda usted rencor o perdona?','Lo que encierra el futuro cercano','¿Está usted "marcado" para sobrevivir?','¿Quién puede ser salvo?','Usted puede disfrutar de la vida en paz ahora y para siempre','Tengamos muy presente el día “inspirador de temor”','¿De verdad existe el diablo?','La misericordia, cualidad dominante de los cristianos verdaderos','¿A qué valores concedemos más importancia?','Nunca se haga embotado en su oír','¿Quién es el único que puede gobernar bien a la humanidad?','¿Cuándo tendremos verdadera paz y seguridad?','¿Será usted sobreviviente de los últimos días?','Cómo obtener consuelo en toda tribulación','Dedique tiempo a meditar en asuntos espirituales','¿Cómo pueden los jóvenes hacer frente a la crisis actual?','A confirmar'
			), 

			// Microphone 2 column
			'speaker' => array(
				'Jorge Vurgel','Miguel Zivkovich','Javier Borche','Juan Crecini','José Pérez','Juan Álvarez','Ricardo Silva','Ramón Ramírez','Diego Santiago','Roberto García','Damián Pitt','Alberto Moreno','Alfredo Cruz','Daniel Herbig','Yamandú Ayala','Alberto Noguera','Martín Catani','José Luis Groba','Raúl Jardín','Gabriel Mandirola','Eduardo Curvelo','Eduardo Fernández','Fernando Llambías','Héctor Rodríguez','Pablo Scigliano','Álvaro Silva','Diego Demarco','Carlos Sosa'
			),
			
			// Ushers column
			'congregation' => array(
				'Piedras Norte','Piedras Norte','Piedras Norte','Piedras Norte','Piedras Norte','Piedras Norte','Libertad','Libertad','Libertad','Libertad','La Teja','La Teja','La Teja','La Teja','La Teja','Cerro','Cerro','Cerro','Cerro','Cerro','Cerro','Los Bulevares','Los Bulevares','Los Bulevares','Los Bulevares','Los Bulevares','Los Bulevares','Los Bulevares'
			)
		);

		return $discourse;
	}

	// CBS & Service Meeting
	function cbs_service_meeting(){
		
		$meetings = array(

			// Date column
			'date' => array(
				'2015-02-09','2015-02-16','2015-02-23','2015-03-02'
			),

			// Start Prayer
			'start_prayer' => array(
				'Marcelo Paolino','Ricardo Rodríguez','Leonel Navarro','Iván Rivero'
			), 

			// End Prayer
			'end_prayer' => array(
				'Michel Fuentes','Leonardo Guevara','Luis Sandes','Rubens Rivero'
			),
			
			// CBS Speaker
			'cbs_speaker' => array(
				'Luis Sandes','Rubens Rivero','Iván Rivero','Leonardo Guevara'
			),
			
			// CBS Lector
			'cbs_lector' => array(
				'Michel Fuentes','Diego Téliz','Marcelo Paolino','Humberto Cardozo'
			),
			
			// CBS Info
			'cbs_info' => array(
				'cl cap. 20 párrs. 1-7','cl cap. 20 párrs. 8-15','cl cap. 20 párrs. 16-21 y recuadro de la pág. 207','cl cap. 21 párrs.1-8'
			),
			
			// SM Min 1
			'sm_min_1' => array(
				'15','15','10','10'
			),
			
			// SM Speaker 1
			'sm_speaker_1' => array(
				'Germán Demarco','Leonardo Guevara','Luis Sandes','Ricardo Rodríguez'
			),
			
			// SM Info 1
			'sm_info_1' => array(
				'“¿Por qué un cristiano debe ser ‘celoso de obras excelentes’?”','Preparémonos para proclamar las buenas nuevas con celo.','Necesidades de la congregación.','Ideas para ofrecer las revistas en marzo.'
			),
			
			// SM Min 2
			'sm_min_2' => array(
				'15','15','10','10'
			),
			
			// SM Speaker 2
			'sm_speaker_2' => array(
				'Iván Rivero','Carlos Cabrera','Rubens Rivero','Carlos Cabrera'
			),
			
			// SM Info 2
			'sm_info_2' => array(
				'“Mejore sus habilidades en el ministerio: predique eficazmente a través del interfono.”','“¿Imitará usted el celo de Jehová y Jesús durante la época de la Conmemoración?”','Imite el celo por la adoración verdadera de Jesús.','“Motivémonos unos a otros con celo a las obras excelentes.”'
			),
			
			// SM Min 3
			'sm_min_3' => array(
				'','','10','10'
			),
			
			// SM Speaker 3
			'sm_speaker_3' => array(
				'','','Leonel Navarro','Leonel Navarro'
			),
			
			// SM Info 3
			'sm_info_3' => array(
				'','','“Proclamemos con celo la verdad sobre Jesús.”','¿Cómo nos fue?'
			)
			
		);

		return $meetings;
	}
}
?>
