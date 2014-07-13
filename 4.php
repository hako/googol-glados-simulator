<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <!--<![endif]-->

<html lang="en" class="no-js" manifest="cache.appcache">

<head>

	<title>Googol GLaDOS:simulator</title>


		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="A HTML5 Simulator of the animation Googol GLaDOS">
		<meta name="viewport" content="width=device-width">
		<link href="img/GDOS.gif" rel="shortcut icon" >
		<link rel="icon" type="image/png" href="favicon.png">
		<link href="css/icons.css" rel="stylesheet">
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/normalize.min.css" rel="stylesheet" >
		<link href="css/docs.css" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet" >
		<link href="css/animate-custom.css" rel="stylesheet">
		<link href="css/flat-ui.css" rel="stylesheet">
		<link href="css/fonts.css" rel="stylesheet">
		<link href="css/bootstrap-responsive.css" rel="stylesheet">
       	<link href="css/real-world.css" rel="stylesheet">
       	<link href="css/modern-buttons.css" rel="stylesheet">

		<link rel="apple-touch-icon" href="apple-touch-icon-iphone.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-ipad.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-iphone4.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-ipad3.png" />

		<!--THEY LOAD ONE BY ONE IN PRECEDING ORDER.-->


		<style type="text/css">

		@import url(https://fonts.googleapis.com/css?family=Averia+Sans+Libre);

		@import url(https://fonts.googleapis.com/css?family=Press+Start+2P);


		.btnl
		{
			box-shadow: 0px 5px 0px #856F17;
		}

		p

		{
			font-family: 'Averia Sans Libre', cursive;
			font-size: 48px;
			color: #2e3436;
		}


		h1
		{
			font-family: 'Conv_Catull';

		}


		.Googol_Colour {
			color: #2E5CEB;
		}
		.Googol_Colour_0 {
			color: #E92D3F;
		}
		.Googol_Colour_1 {
			color: #FDBA17;
		}
		.Googol_Colour_2 {
			color: #2E5CEB;
		}
		.Googol_Colour_3 {
			color: #E92D3F;
		}
		.Googol_Colour_4 {
			color: #069519;
		}
		.Googol_Colour_5 {
			color: #FDBA17;
		}
		.Googol_Colour_6 {
			color: #069519;
		}
		.Googol_Colour_7 {
			color: #E92D3F;
		}
		.Googol_Colour_8 {
			color: #2E5CEB;
		}
		.Googol_Colour_9 {
			color: #E92D3F;
		}
		.Googol_Colour_10 {
			color: #2E5CEB;
		}

		.Googol_Simulator_Font_Colour {
			font-family: 'Averia Sans Libre', cursive;
			color:#333
			font-size: 32px;
		}


		@-webkit-keyframes fadeIn2 {
			  0% {opacity: 0;}
			100% {opacity: 1;}
		}

		@-moz-keyframes fadeIn2 {
			0% {opacity: 0;}
			100% {opacity: 1;}
		}

		@-o-keyframes fadeIn2 {
			0% {opacity: 0;}
			100% {opacity: 1;}
		}

		@keyframes fadeIn2 {
			0% {opacity: 0;}
			100% {opacity: 1;}
		}

		.fadeIn2 {
			-webkit-animation-name: fadeIn2;
			-moz-animation-name: fadeIn2;
			-o-animation-name: fadeIn2;
			animation-name: fadeIn2;

			-webkit-animation-iteration-count: 1;
			-moz-animation-iteration-count: 1;
			-ms-animation-iteration-count: 1;
			-o-animation-iteration-count: 1;
			animation-iteration-count: 1;

			-webkit-animation-delay: 1s;
			-moz-animation-delay: 1s;
			-ms-animation-delay: 1s;
			-o-animation-delay: 1s;
			animation-delay: 1s;
		}


		@-webkit-keyframes fadeIn3 {
			  0% {opacity: 0;}
			100% {opacity: 1;}
		}

		@-moz-keyframes fadeIn3 {
			0% {opacity: 0;}
			100% {opacity: 1;}
		}

		@-o-keyframes fadeIn3 {
			0% {opacity: 0;}
			100% {opacity: 1;}
		}

		@keyframes fadeIn3 {
			0% {opacity: 0;}
			100% {opacity: 1;}
		}

		.fadeIn3 {
			-webkit-animation-name: fadeIn3;
			-moz-animation-name: fadeIn3;
			-o-animation-name: fadeIn3;
			animation-name: fadeIn3;

			-webkit-animation-iteration-count: 1;
			-moz-animation-iteration-count: 1;
			-ms-animation-iteration-count: 1;
			-o-animation-iteration-count: 1;
			animation-iteration-count: 1;

			-webkit-animation-delay: 1.5s;
			-moz-animation-delay: 1.5s;
			-ms-animation-delay: 1.5s;
			-o-animation-delay: 1.5s;
			animation-delay: 1.5s;
		}


	</style>

	</head>

	<body>

		<script>

 			window.history.replaceState('Object', 'Title', '/app');

		</script>

	<br>
	<br>


<center>

<p class="animated fadeInLeft"><span class="animated flash"><span class="Warning"><b>Warning</b>: </span></span>12: Integer overflow<span class="animated flash">_</span></p><br>


<center>

 <p class="animated fadeIn2 Googol_Simulator_Font_Colour">Installed</p>

<button class="animated fadeIn3 btn btn-1-1 btn-warning" input value="Reboot" onClick="next()" type="button" ><b>Reboot</b><br></button>


</center>

	<!-- Load JS here for the greater good =============================-->

	<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.10.0.custom.min.js"></script>
	<script type="text/javascript" src="js/jquery.dropkick-1.0.0.js"></script>
	<script type="text/javascript" src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<script type="text/javascript" src="js/custom_checkbox_and_radio.js"></script>
	<script type="text/javascript" src="js/custom_radio.js"></script>
	<script type="text/javascript" src="js/jquery.tagsinput.js"></script>
	<script type="text/javascript" src="js/bootstrap-tooltip.js"></script>
	<script type="text/javascript" src="js/bootstrap-transition.js"></script>
    <script type="text/javascript" src="js/bootstrap-alert.js"></script>
    <script type="text/javascript" src="js/bootstrap-modal.js"></script>
    <script type="text/javascript" src="js/bootstrap-dropdown.js"></script>
    <script type="text/javascript" src="js/bootstrap-scrollspy.js"></script>
    <script type="text/javascript" src="js/bootstrap-tab.js"></script>
    <script type="text/javascript" src="js/bootstrap-tooltip.js"></script>
    <script type="text/javascript" src="js/bootstrap-popover.js"></script>
    <script type="text/javascript" src="js/bootstrap-button.js"></script>
    <script type="text/javascript" src="js/bootstrap-collapse.js"></script>
    <script type="text/javascript" src="js/bootstrap-carousel.js"></script>
    <script type="text/javascript" src="js/bootstrap-typeahead.js"></script>
    <script type="text/javascript" src="js/bootstrap-affix.js"></script>
    <script type="text/javascript" src="js/application.js"></script>
	<script type="text/javascript" src="js/jquery.placeholder.js"></script>
	<script type="text/javascript" src="https://vjs.zencdn.net/c/video.js"></script>
	<script type="text/javascript" src="js/application.js"></script>


	<script>

     function next()

     {

      $("body").fadeOut(400);

    $.get("/app?s=5", function(data){

      $("body").fadeIn(800);
     window.location="/app?s=5";
    });

    }

	</script>

	<!-- Load JS here for the greater good =============================-->



    <!--[if lt IE 8]>
      <script src="js/icon-font-ie7.js"></script>
      <script src="js/icon-font-ie7-24.js"></script>
    <![endif]-->


	</body>

</html>
