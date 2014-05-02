(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-42706292-1', 'jw.uy');
ga('send', 'pageview');


$(document).ready(function(){

	//-------------- Home button --------------------
	$('#nav-menu').click(function(event) {
		event.preventDefault();
		location.href='/';
	});
	
}); // document ready end