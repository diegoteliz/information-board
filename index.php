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
		<meta name="description" content="JW Assistant - Congregation tasks in the easiest way." />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>JW Assistant</title>
		
		<!--
        /*******************************************************
        ***************  Copyright © 2013 - JW.uy  *************
        ***  Desinged and Developed by Aero Creative Studio  ***
        *****************   By Diego Téliz  ********************
        *******************************************************/
        -->

		<!-- Styles-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
		
		<style>
			
			/* Reset */
			html, body, div, span, applet, object, iframe,
			h1, h2, h3, h4, h5, h6, p, figure, blockquote, pre,
			a, abbr, acronym, address, big, cite, code,
			del, dfn, em, font, ins, kbd, q, s, samp,
			small, strike, strong, sub, sup, tt, var,
			dl, dt, dd, ol, ul, li,
			fieldset, form, label, legend,
			table, caption, tbody, tfoot, thead, tr, th, td {
				border: 0;
				font-family: inherit;
				font-size: 100%;
				font-style: inherit;
				font-weight: inherit;
				margin: 0;
				outline: 0;
				padding: 0;
				vertical-align: baseline;
			}
			:focus {
				outline: 0;
			}
			body {
				background: #FFF;
				line-height: 1;
			}
			ol, ul {
				list-style: none;
			}
			table {
				border-collapse: separate;
				border-spacing: 0;
			}
			caption, th, td {
				font-weight: normal;
				text-align: left;
			}
			blockquote:before, blockquote:after,
			q:before, q:after {
				content: "";
			}
			blockquote, q {
				quotes: "" "";
			}
			a img {
				border: 0;
			}
			article, aside, details, figcaption, figure,
			footer, header, hgroup, menu, nav, section {
				display: block;
			}

			/* Temporary styles */
			html {
				height: 100%;
			}
			
			body {
				color: #111;
				font: 16px 'Open Sans', sans-serif;
				height: 100%;
				-moz-osx-font-smoothing: grayscale;
    			-webkit-font-smoothing: antialiased;
			}

			h1 {
				color: #0072C6;
				font-size: 2rem;
				font-weight: 300;
			}
			@media only screen and (min-width: 340px) {
				h1 {
					font-size: 3rem;
				}
			}
			@media only screen and (min-width: 512px) {
				h1 {
					font-size: 4rem;
				}
			}

			h3 {
				color: #0072C6;
				font-size: 0.85rem;
			}
			@media only screen and (min-width: 340px) {
				h3 {
					font-size: 1rem;
				}
			}
			@media only screen and (min-width: 512px) {
				h3 {
					font-size: 1.25rem;
				}
			}

			a {
				color: #aaa;
				text-decoration: none;
				-webkit-transition:all 0.2s ease;
				transition:all 0.2s ease;
			}

			a:hover {
				color: #0072C6;
				-webkit-transition:all 0.2s ease;
				transition:all 0.2s ease;
			}

			#dinamic-content {
				height: 100%;
				width: 100%;
			}
			
			.wrapper {
				box-sizing: border-box;
				height: 100%;
				margin: 0 auto;
				padding: 0 20%;
				position: relative;
				width: 100%;
			}
			@media only screen and (min-width: 340px) {
				.wrapper {
					padding: 0 10%;
				}
			}
			@media only screen and (min-width: 1024px) {
				.wrapper {
					width: 1024px;
				}
			}

			.claim {
				position: relative;
				text-align: center;
				top: 45%;
				transform: translateY(-50%);
			}

			.info {
				color: #aaa;
				font-size: 0.75rem;
				padding: 10px 0;
			}
			@media only screen and (min-width: 340px) {
				.info {
					font-size: 0.8rem;
				}
			}

			/* Animations*/
			@-webkit-keyframes resetTranslateY {
				0% {
				}
				100% {
					opacity: 1;
					-webkit-transform: translateY(0);
					transform: translateY(0);
					visibility: visible;
				}
			}

			@keyframes resetTranslateY {
				0% {
				}
				100% {
					opacity: 1;
					-webkit-transform: translateY(0);
					transform: translateY(0);
					visibility: visible;
				}
			}

			.animate-cascade-up-0,
			.animate-cascade-up-1,
			.animate-cascade-up-2 {
				-webkit-animation: resetTranslateY 0.4s cubic-bezier(0.2, 1, 0.3, 1) 1s forwards;
				animation: resetTranslateY 0.6s cubic-bezier(0.2, 1, 0.3, 1) 1s forwards;
				opacity: 0;
    			visibility: hidden;
    			-webkit-transform: translateY(20px);
				transform: translateY(20px);
			}

			.animate-cascade-up-0 {
				-webkit-animation-delay: 0.05s;
				animation-delay: 0.05s;
			}

			.animate-cascade-up-1 {
				-webkit-animation-delay: 0.44s;
				animation-delay: 0.44s;
			}

			.animate-cascade-up-2 {
				-webkit-animation-delay: 0.58s;
				animation-delay: 0.58s;
			}
		
		</style>

		<!-- Scripts -->
		<script type="text/javascript" src="/js/jquery.js"></script>
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
		<div id="dinamic-content">
			<div class="wrapper">
				<div class="claim">
					<h1 class="animate-cascade-up-0">JW Assistant</h1>
					<h3 class="animate-cascade-up-1">Congregation tasks in the easiest way</h3>
					<p class="info animate-cascade-up-2"><a href="mailto:info@jw.uy">info@jw.uy</a></p>
				</div>
			</div>
		</div>
		<div id="dinamic-preloader"></div>
		
		<script type="text/javascript">

		$(document).ready(function(){

			//------------ View layer ------------
			dinamicView = Backbone.View.extend({
				initialize: function(){
					/*this.view.bind('change', this.starter,this);
					this.view.bind('destroy', this.end,this);*/
				},
				render: function(page,title){

					var page	= page,
						title	= title,
						content	= $('#dinamic-content');
					
					$.ajax({
						url: 'dinamic-'+page+'.php'
					})
					.done(function(data) {
						$(document).attr('title',title);
						content.html(data);
					})
					.fail(function(){
						alert('an error occurred');
					})
					
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
					''										: 'homePage',
					// External Redirects
					'informes/grupo-1'						: 'informes1Redirect',
					'informes/grupo-2'						: 'informes2Redirect',
					'informes/grupo-3'						: 'informes3Redirect',
					'informes/grupo-4'						: 'informes4Redirect',
					'informes/grupo-5'						: 'informes5Redirect',
					'informes/todos'						: 'informesRedirect',
					'planillas'								: 'planillasRedirect'
				},
				
				// Pages
				homePage : function() {
					//var home = new dinamicView();
					//home.render('home', 'JW Assistant');
				},
				//External Redirects
				informes1Redirect : function() {
					window.location.href = "https://docs.google.com/spreadsheets/d/1hL7RC2tXztDUNJZQnyEWMasGw8pl5P-D_IReHB_g8lw/edit";
				},
				informes2Redirect : function() {
					window.location.href = "https://docs.google.com/spreadsheets/d/1jcWe3uZOshN7SF3qNfjYMK9YixAgiQrmPQ7XQk3Lvfg/edit";
				},
				informes3Redirect : function() {
					window.location.href = "https://docs.google.com/spreadsheets/d/1OaJD6O4GQWi5Vi8ye3y24Vw1tWR94J9TKF3JoYJY0og/edit";
				},
				informes4Redirect : function() {
					window.location.href = "https://docs.google.com/spreadsheets/d/1HI3lBIw0vW4Y_lshSpKyjLS63uPatQQenNSz_J1h_wA/edit";
				},
				informes5Redirect : function() {
					window.location.href = "https://docs.google.com/spreadsheets/d/1_UZij9YaH7Af-zWnlXAv84MeUfn6BNz516jMUzGNSVE/edit";
				},
				informesRedirect : function() {
					window.location.href = "https://docs.google.com/spreadsheets/d/1DRQ_A7WDYRTFH9v9E4fiP6J1nYj7GCJ2IVCsLz-k5BM/edit#gid=630981098";
				},
				planillasRedirect : function() {
					window.location.href = "https://docs.google.com/spreadsheets/d/1aFJuSNVbcL6vTYj3oUwFkFlEPwG1MqooGBSAnuGPT8Q/edit#gid=0";
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