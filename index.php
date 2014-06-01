<?php

include_once 'functions.php';

if ( preg_match( '/(?i)msie [1-7]/' , $_SERVER[ 'HTTP_USER_AGENT' ] ) ) {
	include_once 'include/update_browser.php';
	exit;
}

?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<!-- Metatags -->
		<meta charset="UTF-8" />
		<meta name="description" content="Cartelera de anuncios online de la congregación Delta del Tigre, San José, Uruguay." />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- Windows 8 icon -->
		<meta name="msapplication-TileColor" content="#D96D00"/>
		<meta name="msapplication-TileImage" content="/img/billboard-logo.png"/>

		<title>Delta del Tigre</title>
		<!--
        /*******************************************************
        ***************  Copyright © 2013 - JW.uy  *************
        ***  Desinged and Developed by Aero Creative Studio  ***
        *****************   By Diego Téliz  ********************
        *******************************************************/
        -->

		<!-- CSS, Fonts & Icon-->
		<link rel="stylesheet" type="text/css" href="/style.css"  />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,300italic|Quicksand:400,300' rel='stylesheet' type='text/css'>
		<link rel="icon" href="img/favicon.ico" sizes="16x16" type="image/x-icon" />

		<!-- Opera speed dial icon -->
		<link rel="icon" type="image/png" href="/img/opera-speed-dial.png">

		<!-- Scripts -->
		<script type="text/javascript" src="/js/jquery.js"></script>
		<script type="text/javascript" src="/js/jquery-ui.js"></script>
		<script type="text/javascript" src="/js/underscore.js"></script>
		<script type="text/javascript" src="/js/backbone.js"></script>
		<script type="text/javascript" src="/js/backbone.analytics.js"></script>

		<!-- Google Analytics -->
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-42706292-1', 'jw.uy');
			ga('send', 'pageview');
		</script>

	</head>
	<body>
		<div id="dinamic-content"><!-- Here load the content --></div>
		<div id="dinamic-preloader"></div>
		
		<!-- Footer -->
		<?php include_once 'footer.php'; ?>

		<script type="text/javascript">

		$(document).ready(function(){

			//------------ View layer ------------
			dinamicView = Backbone.View.extend({
				initialize: function(){
					/*this.view.bind('change', this.starter,this);
					this.view.bind('destroy', this.end,this);*/
				},
				render: function(page,title){

					var page		= page;
					var title		= title;
					var content		= $('#dinamic-content');
					var preloader	= $('#dinamic-preloader');

					preloader.fadeIn(200);
					content.fadeOut(600,function(){
						$.ajax({
							url: 'dinamic-'+page+'.php'
						})
						.done(function(data) {
							$(document).attr('title',title);
							content.html(data);
							content.fadeIn(600);
							preloader.fadeOut(200);
					// 		//$('img').bind('load',function(){ // when all images are loaded -> this not working
					// 			$('.menu ul li a').removeClass('active');
					// 			if(page!='home'){
					// 				$('.menu ul li a[href*='+page+']').addClass('active');
					// 			}
					// 			backgrounds.fadeIn(600);
					// 			content.fadeIn(600);
					// 			footer.fadeIn(600);
					// 			preloader.fadeOut(200);
					// 		//})
						})
						.fail(function(){
							alert('an error occurred');
						})
						
					});
					
				},
				remove: function(){
					console.log('remove');
				},
				starter : function() {
					console.log('start');
				},
				end : function() {
					console.log('end');
				}
			});

			// Define router
			var AppRouter = Backbone.Router.extend({
				routes: {
					// Pages
					''						: 'homePage',
					'escuela'				: 'escuelaPage',
					'grupos'				: 'gruposPage',
					'reunion-servicio'		: 'rsPage',
					'discurso'				: 'discursoPage',
					'atalaya'				: 'atalayaPage',
					'sonido'				: 'sonidoPage',
					'limpieza'				: 'limpiezaPage',
					'anuncios'				: 'anunciosPage',
					'grupos-congregacion'	: 'gruposcPage',
					// Redirects
					'escuela-del-ministerio-teocratico'		: 'escuelaRedirect',
					'emt'									: 'escuelaRedirect',
					'g'										: 'gruposRedirect',
					'estudio-biblico-y-reunion-de-servicio'	: 'rsRedirect',
					'ebc'									: 'rsRedirect',
					'rs'									: 'rsRedirect',
					'ebc-rs'								: 'rsRedirect',
					'discurso-publico'						: 'discursoRedirect',
					'discurso-biblico'						: 'discursoRedirect',
					'db'									: 'discursoRedirect',
					'dp'									: 'discursoRedirect',
					'estudio-de-la-atalaya'					: 'atalayaRedirect',
					'ea'									: 'atalayaRedirect',
					'sonido-y-acomodadores'					: 'sonidoRedirect',
					'acomodadores'							: 'sonidoRedirect',
					'sa'									: 'sonidoRedirect',
					's'										: 'sonidoRedirect',
					'programa-de-limpieza'					: 'limpiezaRedirect',
					'l'										: 'limpiezaRedirect',
					'grupos-de-congregacion'				: 'gruposcRedirect',
					'gc'									: 'gruposcRedirect',
					'a'										: 'anunciosRedirect',
					// External Redirects
					'informes/grupo-1'						: 'informes1Redirect',
					'informes/grupo-2'						: 'informes2Redirect',
					'informes/grupo-3'						: 'informes3Redirect',
					'informes/grupo-4'						: 'informes4Redirect',
					'informes/grupo-5'						: 'informes5Redirect',
					'informes/todos'						: 'informesRedirect'
				},
				
				// Pages
				homePage : function() {
					var home = new dinamicView();
					home.render('home', 'Delta del Tigre');
				},
				gruposPage : function() {
					var grupos = new dinamicView();
					grupos.render('grupos', 'Grupos de Predicación | Delta del Tigre');
				},
				gruposcPage : function() {
					var gruposc = new dinamicView();
					gruposc.render('gruposc', 'Grupos de Congregación | Delta del Tigre');
				},
				anunciosPage : function() {
					var anuncios = new dinamicView();
					anuncios.render('anuncios', 'Anuncios | Delta del Tigre');
				},
				limpiezaPage : function() {
					var limpieza = new dinamicView();
					limpieza.render('limpieza', 'Programa de Limpieza | Delta del Tigre');
				},
				sonidoPage : function() {
					var sonido = new dinamicView();
					sonido.render('sonido', 'Sonido y Acomodadores | Delta del Tigre');
				},
				escuelaPage : function() {
					var escuela = new dinamicView();
					escuela.render('escuela', 'Escuela del Ministerio Teocrático | Delta del Tigre');
				},
				rsPage : function() {
					var rs = new dinamicView();
					rs.render('rs', 'EBC y Reunión de Servicio | Delta del Tigre');
				},
				discursoPage : function() {
					var discurso = new dinamicView();
					discurso.render('discurso', 'Discurso Bíblico | Delta del Tigre');
				},
				atalayaPage : function() {
					var atalaya = new dinamicView();
					atalaya.render('atalaya', 'Estudio de la Atalaya | Delta del Tigre');
				},
				//Redirects
				gruposRedirect : function() {
					jwRouter.navigate('/grupos', {trigger:true});
				},
				gruposcRedirect : function() {
					jwRouter.navigate('/grupos-congregacion', {trigger:true});
				},
				anunciosRedirect : function() {
					jwRouter.navigate('/anuncios', {trigger:true});
				},
				limpiezaRedirect : function() {
					jwRouter.navigate('/limpieza', {trigger:true});
				},
				escuelaRedirect : function() {
					jwRouter.navigate('/escuela', {trigger:true});
				},
				rsRedirect : function() {
					jwRouter.navigate('/reunion-servicio', {trigger:true});
				},
				discursoRedirect : function() {
					jwRouter.navigate('/discurso', {trigger:true});
				},
				atalayaRedirect : function() {
					jwRouter.navigate('/atalaya', {trigger:true});
				},
				sonidoRedirect : function() {
					jwRouter.navigate('/sonido', {trigger:true});
				},
				//External Redirects
				informes1Redirect : function() {
					window.location.href = "https://docs.google.com/spreadsheets/d/1hL7RC2tXztDUNJZQnyEWMasGw8pl5P-D_IReHB_g8lw/edit#gid=252488701";
				},
				informes2Redirect : function() {
					window.location.href = "https://docs.google.com/spreadsheets/d/1jcWe3uZOshN7SF3qNfjYMK9YixAgiQrmPQ7XQk3Lvfg/edit#gid=1958738429";
				},
				informes3Redirect : function() {
					window.location.href = "https://docs.google.com/spreadsheets/d/1OaJD6O4GQWi5Vi8ye3y24Vw1tWR94J9TKF3JoYJY0og/edit#gid=1297933870";
				},
				informes4Redirect : function() {
					window.location.href = "https://docs.google.com/spreadsheets/d/1HI3lBIw0vW4Y_lshSpKyjLS63uPatQQenNSz_J1h_wA/edit#gid=40724863";
				},
				informes5Redirect : function() {
					window.location.href = "https://docs.google.com/spreadsheets/d/1_UZij9YaH7Af-zWnlXAv84MeUfn6BNz516jMUzGNSVE/edit#gid=1276026973";
				},
				informesRedirect : function() {
					window.location.href = "https://docs.google.com/spreadsheets/d/1DRQ_A7WDYRTFH9v9E4fiP6J1nYj7GCJ2IVCsLz-k5BM/edit#gid=630981098";
				}
			});

			// Initiate the router
			var jwRouter = new AppRouter;

			$('.dinamic').click(function(event) {
				event.preventDefault();
				var href = ($(this)[0].tagName == 'A') ? $(this).attr('href') : $(this).attr('data-href');
				jwRouter.navigate(href, {trigger:true});
			});

			Backbone.history.start({pushState: true});

			
		}); // document ready end

		</script>
	</body>
</html>