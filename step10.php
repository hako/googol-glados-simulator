<html>

<!--

(C) Copyright Hakobyte 2012 

-->

<head>

<title>Googol GLaDOS:simulator</title>

<link rel="icon" href="images/GDOS.gif" type="image/gif" >

<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 200px;
	height: 52px;
	z-index: 1;
	left: 764px;
	top: 238px;
}

</style>

<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">

<link href="fonts.css" rel="stylesheet" type="text/css">

<style type="text/css">

@import url(http://fonts.googleapis.com/css?family=Averia+Sans+Libre);

@import url(http://fonts.googleapis.com/css?family=Press+Start+2P);

p{
	font-family: 'Averia Sans Libre', cursive;
}


h1
{
	font-family: "Conv_Catull";	
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
	font-size: 38px;
}


.QuickTime {
	color: #0083C4;
}
.Hako_Colour {
	color: #F60;
}

</style>


<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>

<script>

    function umad(){
        $('#gladosbody').append('<img src="images/troll-dance.gif" loop="false" id="tdgif" style="position:absolute;left:20;top:20;display:none;width:60;"></img>');
        $('#tdgif').fadeIn();
        $('#webbrowser').fadeIn(1500);
        setTimeout('overload()',13000);
    }
	
    function overload(){
        parent.fake_reboot();
       setTimeout("nextstep()",1500);
    }

	function give_link(){document.getElementById('linkdiv').innerHTML='<input type="button" value="Next" onclick="nextstep()">';}

    function nextstep(){window.location='step11.php';}

</script>
 
</script>

<div style="position:absolute;top:0;left:0;width:100%;height:100%;" id="gladosbody">

<embed src="Sound/glados_s10.m4a" id="gladoss6" hidden="true" autostart="true" loop="false" cache="true">

<img src="images/googol_glados_evil.png" id="gladosimg" style="position:absolute;top:120;left:40%;margin-left:-150;width:150;z-index:1;"></img>

<table id="webbrowser" border="1" style="display:none;position:absolute;right:20;top:20;border:1px solid #000000;border-collapse:collapse;"><tr><td><p>< ></p></td><td><p align="center">adsense.google.com</p></td><td><p>- + x</p></td></tr><tr><td colspan="3" style="height:100;" align="left" valign="top"><h2 align="center" class="Googol_Simulator_Font_Colour">&nbsp;</h2>

<h2 align="center" class="Googol_Simulator_Font_Colour">AdSense</h2>
  
<p>-----------------------------------</p><center>Click Activity For Today<br><br><h2 class="Googol_Simulator_Font_Colour">&pound;10,000,000.03</h2></center></td></tr></table>

<div id="linkdiv" style="position:absolute;bottom:0;left:50%;margin-left:-150;width:300;"></div>

<script>umad()</script>

<div id="apDiv1"><script>setTimeout('give_link()',12000)</script></div>

</div>