<html>

<!--

(C) Copyright Hakobyte 2012 

-->

<head>

<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">

<link rel="icon" href="images/GDOS.gif" type="image/gif" >

<link href="fonts.css" rel="stylesheet" type="text/css">

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

    function uninstall_driver(){$('#gladosimg').animate({width:150});$('#gladosbody').append('<img src="images/driver.png" id="uninstalleddriver" width="100" style="position:absolute;left:50%;top:50%;opacity:1;z-index:5;"></img>');$('#uninstalleddriver').animate({opacity:1,left:"60%"},function(){setTimeout('$("#uninstalleddriver").fadeOut(1000,function(){$("#uninstalleddriver").remove()})',1000);});setTimeout('iagreed()',5600);}
    function iagreed(){$('#gladosbody').append('<div id="atnc" style="position:absolute;left:50%;top:50%;opacity:1;z-index:5;"><input type="checkbox" checked> <p>Terms & Conditions</p></div>');$('#atnc').animate({opacity:1,left:"60%"},function(){setTimeout('$("#atnc").fadeOut(1000,function(){$("#atnc").remove()})',3000);});setTimeout('stolendetails()',4000);}
    function stolendetails(){$('#gladosimg').animate({left:"90%"});$('#gladosbody').append('<div id="logindetails" style="position:absolute;left:10;top:10;opacity:1;z-index:5;"><p>Email:</p><br><input type="password" value="email_email@someemail.com"><br><br><p>Password:</p><br><input type="password" value="12345678">');$('#logindetails').animate({opacity:1},1500,function(){setTimeout('$("#logindetails").fadeOut(1000,function(){$("#logindetails").remove()})',7000);});setTimeout('decrypting()',4000);}
    function decrypting(){$('#gladosbody').append('<div id="decrypting" style="position:absolute;left:10;bottom:10;opacity:1;z-index:5;"><p>Decrypting...</p>');setTimeout('nextstep()',5000);}
    function nextstep(){window.location='step8.php';}
	
</script>

<title>Googol GLaDOS:simulator</title>

<div style="position:absolute;top:0;left:0;width:100%;height:100%;" id="gladosbody">

<embed src="Sound/glados_s7.m4a" id="gladoss6" hidden="true" autostart="true" loop="false" cache="true">

<img src="images/googol_glados_evil.png" id="gladosimg" style="position:absolute;top:20;left:50%;margin-left:-150;width:300;z-index:1;"></img>

<div id="linkdiv" style="position:absolute;bottom:0;left:50%;margin-left:-150;width:300;"></div>

<script>setTimeout('uninstall_driver()',4000)

</script>

</div>