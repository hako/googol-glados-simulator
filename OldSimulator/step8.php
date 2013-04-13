<?php

<!doctype html>

<html>

<!--

This work is licensed under the Creative Commons Attribution-NonCommercial 3.0 Unported License. To view a copy of this license, visit http://creativecommons.org/licenses/by-nc/3.0/.

-->

<head>

<title>Googol GLaDOS:simulator</title>

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

    function scan_cv(){$('#gladosbody').append('<span style="position:absolute;left:60;top:60;display:none;" id="cvtxt"><p>CV.DOCX</p></span>');$('#cvtxt').fadeIn();$('#gladosbody').append('<div id="loader" style="position:absolute;left:50;top:60;width:1;height:10;background:#F2E4B3;"></div>');$('#loader').animate({width:82},1000);setTimeout('make_websites()',2800);}
    function make_websites(){$('#cvtxt').fadeOut();$('#loader').fadeOut();$('#gladosbody').append('<span style="position:absolute;left:30;bottom:60;display:none;" id="websites"><p>websites</p></span>');$('#gladosbody').append('<span style="position:absolute;left:90;bottom:60;display:none;" id="arrow"><p>--></p></span>');$('#gladosbody').append('<span style="position:absolute;left:113;bottom:60;display:none;" id="interwebs"><p>interwebs</p></span>');$('#websites').fadeIn();$('#arrow').delay(500).fadeIn();$('#interwebs').delay(1000).fadeIn();setTimeout('asca()',3800);}
    function asca(){$('#websites').fadeOut();$('#arrow').fadeOut();$('#interwebs').fadeOut();$('#gladosimg').animate({left:"40%",top:120},1000);$('#gladosbody').append('<table id="webbrowser" border="1" style="display:none;position:absolute;right:20;top:20;border:1px solid #000000;border-collapse:collapse;"><tr><td>< ></td><td><p>adsense.google.com</p></td><td>- + x</td></tr><tr><td colspan="3" style="height:100;" align="center" valign="top"><p>AdSense</p> ---------------------------------------<br><br><center><p>Click activity for today</p><br>. . .</center></td></tr></table>');$('#webbrowser').fadeIn(1000);setTimeout('nextstep()',2300);}
    function nextstep(){window.location='step9.php';}
	
</script>

<title>Googol GLaDOS:simulator</title>

<div style="position:absolute;top:0;left:0;width:100%;height:100%;" id="gladosbody">

<embed src="Sound/glados_s8.wav" id="gladoss8" hidden="true" autostart="true" loop="false" cache="true">

<img src="images/googol_glados_evil.png" id="gladosimg" style="position:absolute;top:20;left:90%;margin-left:-150;width:150;z-index:1;"></img>

<div id="linkdiv" style="position:absolute;bottom:0;left:50%;margin-left:-150;width:300;"></div>

<script>setTimeout('scan_cv()',4000)</script>

</div>

</html>