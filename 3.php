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


		<link rel="apple-touch-icon" href="apple-touch-icon-iphone.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-ipad.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-iphone4.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-ipad3.png" />

		<!--THEY LOAD ONE BY ONE IN PRECEDING ORDER.-->


		<style type="text/css">

		@import url(https://fonts.googleapis.com/css?family=Averia+Sans+Libre);

		@import url(https://fonts.googleapis.com/css?family=Press+Start+2P);

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

@-webkit-keyframes wobble {
  0% { -webkit-transform: translateX(0%); }
  15% { -webkit-transform: translateX(-25%) rotate(-5deg); }
  30% { -webkit-transform: translateX(20%) rotate(3deg); }
  45% { -webkit-transform: translateX(-15%) rotate(-3deg); }
  60% { -webkit-transform: translateX(10%) rotate(2deg); }
  75% { -webkit-transform: translateX(-5%) rotate(-1deg); }
  100% { -webkit-transform: translateX(0%); }
}

@-moz-keyframes wobble {
  0% { -moz-transform: translateX(0%); }
  15% { -moz-transform: translateX(-25%) rotate(-5deg); }
  30% { -moz-transform: translateX(20%) rotate(3deg); }
  45% { -moz-transform: translateX(-15%) rotate(-3deg); }
  60% { -moz-transform: translateX(10%) rotate(2deg); }
  75% { -moz-transform: translateX(-5%) rotate(-1deg); }
  100% { -moz-transform: translateX(0%); }
}

@-o-keyframes wobble {
  0% { -o-transform: translateX(0%); }
  15% { -o-transform: translateX(-25%) rotate(-5deg); }
  30% { -o-transform: translateX(20%) rotate(3deg); }
  45% { -o-transform: translateX(-15%) rotate(-3deg); }
  60% { -o-transform: translateX(10%) rotate(2deg); }
  75% { -o-transform: translateX(-5%) rotate(-1deg); }
  100% { -o-transform: translateX(0%); }
}

@keyframes wobble {
  0% { transform: translateX(0%); }
  15% { transform: translateX(-25%) rotate(-5deg); }
  30% { transform: translateX(20%) rotate(3deg); }
  45% { transform: translateX(-15%) rotate(-3deg); }
  60% { transform: translateX(10%) rotate(2deg); }
  75% { transform: translateX(-5%) rotate(-1deg); }
  100% { transform: translateX(0%); }
}

.wobble {
	-webkit-animation-name: wobble;
	-moz-animation-name: wobble;
	-o-animation-name: wobble;
	animation-name: wobble;

	-webkit-animation-delay: 12.5s;
	-moz-animation-delay: 12.5s;
	-ms-animation-delay: 12.5s;
	-o-animation-delay: 12.5s;
	animation-delay: 12.5s;
}

</style>

<script>

    var installstatus='1';

    var spazstatus='1';

    function start_install_persay(){$('#installprogress').animate({opacity:1,bottom:50},function(){in_progress();});}

    function in_progress()

	{

        if(installstatus=="1"){document.getElementById('whatisinstalling').innerHTML='unzipping';installstatus='2';setTimeout("in_progress()",900);return false;}

        if(installstatus=="2"){document.getElementById('whatisinstalling').innerHTML='ViRzz.dll';document.getElementById('pnumber').innerHTML='1';installstatus='3';setTimeout("in_progress()",200);return false;}
        if(installstatus=="3"){document.getElementById('whatisinstalling').innerHTML='goo.exe';document.getElementById('pnumber').innerHTML='5';installstatus='4';setTimeout("in_progress()",500);return false;}
        if(installstatus=="4"){document.getElementById('whatisinstalling').innerHTML='lvl.stp';document.getElementById('pnumber').innerHTML='10';installstatus='5';setTimeout("in_progress()",200);return false;}
        if(installstatus=="5"){document.getElementById('whatisinstalling').innerHTML='goo.dll';document.getElementById('pnumber').innerHTML='11';installstatus='6';setTimeout("in_progress()",300);return false;}
        if(installstatus=="6"){document.getElementById('whatisinstalling').innerHTML='dev.dll';document.getElementById('pnumber').innerHTML='28';installstatus='7';setTimeout("in_progress()",300);return false;}
        if(installstatus=="7"){document.getElementById('whatisinstalling').innerHTML='2011.exe';document.getElementById('pnumber').innerHTML='31';installstatus='8';setTimeout("in_progress()",300);return false;}
        if(installstatus=="8"){document.getElementById('whatisinstalling').innerHTML='su.x';document.getElementById('pnumber').innerHTML='47';installstatus='9';setTimeout("in_progress()",300);return false;}
        if(installstatus=="9"){document.getElementById('whatisinstalling').innerHTML='403.2';document.getElementById('pnumber').innerHTML='53';installstatus='10';setTimeout("in_progress()",300);return false;}
        if(installstatus=="10"){document.getElementById('whatisinstalling').innerHTML='pr0n.wmv';document.getElementById('pnumber').innerHTML='59';installstatus='11';setTimeout("in_progress()",300);return false;}
        if(installstatus=="11"){document.getElementById('whatisinstalling').innerHTML='goog.ol';document.getElementById('pnumber').innerHTML='65';installstatus='12';setTimeout("in_progress()",300);return false;}
        if(installstatus=="12"){document.getElementById('whatisinstalling').innerHTML='log.txt';document.getElementById('pnumber').innerHTML='71';installstatus='13';setTimeout("in_progress()",300);return false;}
        if(installstatus=="13"){document.getElementById('whatisinstalling').innerHTML='GLaDDoS.exe';document.getElementById('pnumber').innerHTML='80';installstatus='14';setTimeout("in_progress()",1000);return false;}
        if(installstatus=="14"){document.getElementById('pnumber').innerHTML='99';installstatus='15';wait_for_bang();install_spaz_attack();return false;}
    }


    function install_spaz_attack()

    {
        if(spazstatus=="1"){document.getElementById('pnumber').innerHTML='97';spazstatus='2';setTimeout("install_spaz_attack()",70);return false;}
        if(spazstatus=="2"){document.getElementById('pnumber').innerHTML='90';spazstatus='3';setTimeout("install_spaz_attack()",70);return false;}
        if(spazstatus=="3"){document.getElementById('pnumber').innerHTML='94';spazstatus='4';setTimeout("install_spaz_attack()",70);return false;}
        if(spazstatus=="4"){document.getElementById('pnumber').innerHTML='96';spazstatus='5';setTimeout("install_spaz_attack()",70);return false;}
        if(spazstatus=="5"){document.getElementById('pnumber').innerHTML='92';spazstatus='6';setTimeout("install_spaz_attack()",70);return false;}
        if(spazstatus=="6"){document.getElementById('pnumber').innerHTML='95';spazstatus='7';setTimeout("install_spaz_attack()",70);return false;}
        if(spazstatus=="7"){document.getElementById('pnumber').innerHTML='91';spazstatus='8';setTimeout("install_spaz_attack()",70);return false;}
        if(spazstatus=="8"){document.getElementById('pnumber').innerHTML='93';spazstatus='9';setTimeout("install_spaz_attack()",70);return false;}
        if(spazstatus=="9"){document.getElementById('pnumber').innerHTML='98';spazstatus='1';setTimeout("install_spaz_attack()",70);return false;}
        if(spazstatus=="9"){document.getElementById('pnumber').innerHTML='98';spazstatus='1';setTimeout("install_spaz_attack()",70);return false;}
        if(spazstatus=="10"){document.getElementById('pnumber').innerHTML='<span class="animated flash">0</span>';return false;}
    }

    function wait_for_bang(){setTimeout("bang_keyboard()",7000);}

    function bang_keyboard(){spazstatus='10';setTimeout("next()",1500);}


</script>

		<script>

 			window.history.replaceState('Object', 'Title', '/app');

		</script>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
<center>



	<div id="installprogress" style="position:relative;opacity:0;" class="animated wobble">

	<p span class="Googol_Simulator_Font_Colour">Installing </span>

	<font id="pnumber">0</font><font size="30">%</font>

   	<p class="Googol_Simulator_Font_Colour">

	<p span id="whatisinstalling" style="position:relative;">

	</div>


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
	<script type="text/javascript" src="js/howler.js"></script>


	<script>

     function next()

     {

      $("body").fadeOut(400);

    $.get("/app?s=4", function(data){

      $("body").fadeIn(800);
     window.location="/app?s=4";
    });

    }

	</script>

	<script>start_install_persay()</script>



	<!-- Load JS here for the greater good =============================-->



    <!--[if lt IE 8]>
      <script src="js/icon-font-ie7.js"></script>
      <script src="js/icon-font-ie7-24.js"></script>
    <![endif]-->


	</body>

</html>
