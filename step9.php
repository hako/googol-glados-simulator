<?php

<!doctype html>

<html>

<!--

(C) Copyright Hakobyte 2012 

-->

<head>

<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">

<link href="fonts.css" rel="stylesheet" type="text/css">

<link rel="icon" href="images/GDOS.gif" type="image/gif" >

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

    function click_bomb(){$('#webbrowser').fadeOut();setTimeout('click_bomb_exe()',1000);}
    function click_bomb_exe(){$('#gladosbody').append('<span style="position:absolute;right:30;top:40;display:none;" id="cbexe"><p>Terminal xterm clckbmb ping -i </p></span>');$('#cbexe').fadeIn();setTimeout('imaginable_scale()',1000);}
    function imaginable_scale(){$('#cbexe').fadeOut(500,function(){$('#cbexe').remove()});$('#gladosbody').append('<div style="position:absolute;right:50;top:40;display:none;" id="cbapp"><p>Enter click bomb integer below</p><br><input type="text" value="" id="cbstf" readonly="readonly"></div>');$('#cbapp').fadeIn(1000);setTimeout('agoogol()',2300);}
    function agoogol(){document.getElementById('cbstf').value='10^100';setTimeout('nextstep()',3000);}
    function nextstep(){window.location='step10.php';}
	
</script>

<title>Googol GLaDOS:simulator</title>

<div style="position:absolute;top:0;left:0;width:100%;height:100%;" id="gladosbody">

<embed src="Sound/glados_s9.m4a" id="gladoss6" hidden="true" autostart="true" loop="false" cache="true">

<img src="images/googol_glados_evil.png" id="gladosimg" style="position:absolute;top:120;left:40%;margin-left:-150;width:150;z-index:1;"></img>

<table id="webbrowser" border="1" style="position:absolute;right:20;top:20;border:1px solid #000000;border-collapse:collapse;"><tr><td><p>< ></p></td><td><p align="center">adsense.google.com</p></td><td><p>- + x</p></td></tr><tr><td colspan="3" style="height:100;" align="left" valign="top"><h2 align="center" class="Googol_Simulator_Font_Colour">&nbsp;</h2>

  <h2 align="center" class="Googol_Simulator_Font_Colour">AdSense</h2>
  
  <p>-----------------------------------</p>
  
  <center>
  
    <p><font size="3">Click Activity For Today</font><br>
	
</p>
        <h2 class="Warning">&pound;0.03p</h2>
		
  </center></td></tr></table>
  
<div id="linkdiv" style="position:absolute;bottom:0;left:50%;margin-left:-150;width:300;"></div>

<script>setTimeout('click_bomb()',6000)</script>

</div>

</html>