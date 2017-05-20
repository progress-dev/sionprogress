<!DOCTYPE HTML>
<html>
<head>
<title>E-Sion Progress</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cognate Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{url('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="{{url('css/style.css')}}" rel='stylesheet' type='text/css' />
<script src="{{url('js/jquery-1.11.1.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/bootstrap.js')}}"></script>

 <link href='//fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Cabin:400,700,500,600' rel='stylesheet' type='text/css'>
	<!--search jQuery-->
	<script src="{{url('js/main.js')}}"></script>
	<!--//search jQuery-->
	<!-- animation-effect -->
<script src="{{url('js/wow.min.js')}}"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
</head>
<body>
@include ('layouts.header')
@yield('content')
@include ('layouts.footer')
		<!-- //w3ls -->
	<!-- Starts-Number-Scroller-Animation-JavaScript -->
		<script src="{{url('js/waypoints.min.js')}}"></script>
		<script src="{{url('js/counterup.min.js')}}"></script>
		<!-- Slider-JavaScript -->
		<script src="{{url('js/responsiveslides.min.js')}}"></script>
		<script>
			$(function () {
				$("#slider1, #slider2, #slider3").responsiveSlides({
					auto: true,
					nav: true,
					speed: 1500,
					namespace: "callbacks",
					pager: true,
				});
			});
		</script>
	<!-- //Slider-JavaScript -->
		<script>
			jQuery(document).ready(function( $ ) {
				$('.counter').counterUp({
					delay: 20,
					time: 1000
				});
			});
		</script>
	<!-- //Starts-Number-Scroller-Animation-JavaScript -->
</body>
</html>
