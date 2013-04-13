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

    var installstatus='1';
	
    var spazstatus='1';
	
    function start_install_persay(){$('#installprogress').animate({opacity:1,top:50},function(){in_progress();});}
	
    function in_progress(){
	
        if(installstatus=="1"){document.getElementById('whatisinstalling').innerHTML='unzipping';installstatus='2';setTimeout("in_progress()",900);return false;}
		
        if(installstatus=="2"){document.getElementById('whatisinstalling').innerHTML='readme.txt';document.getElementById('pnumber').innerHTML='1';installstatus='3';setTimeout("in_progress()",200);return false;}
		
        if(installstatus=="3"){document.getElementById('whatisinstalling').innerHTML='501.me';document.getElementById('pnumber').innerHTML='5';installstatus='4';setTimeout("in_progress()",500);return false;}
		
        if(installstatus=="4"){document.getElementById('whatisinstalling').innerHTML='lvl.dll';document.getElementById('pnumber').innerHTML='10';installstatus='5';setTimeout("in_progress()",200);return false;}
		
        if(installstatus=="5"){document.getElementById('whatisinstalling').innerHTML='goo.dll';document.getElementById('pnumber').innerHTML='11';installstatus='6';setTimeout("in_progress()",300);return false;}
		
        if(installstatus=="6"){document.getElementById('whatisinstalling').innerHTML='dev.dll';document.getElementById('pnumber').innerHTML='28';installstatus='7';setTimeout("in_progress()",300);return false;}
		
        if(installstatus=="7"){document.getElementById('whatisinstalling').innerHTML='blu.dll';document.getElementById('pnumber').innerHTML='31';installstatus='8';setTimeout("in_progress()",300);return false;}
		
        if(installstatus=="8"){document.getElementById('whatisinstalling').innerHTML='su.x';document.getElementById('pnumber').innerHTML='47';installstatus='9';setTimeout("in_progress()",300);return false;}
		
        if(installstatus=="9"){document.getElementById('whatisinstalling').innerHTML='no.ip';document.getElementById('pnumber').innerHTML='53';installstatus='10';setTimeout("in_progress()",300);return false;}
		
        if(installstatus=="10"){document.getElementById('whatisinstalling').innerHTML='pr0n.avi';document.getElementById('pnumber').innerHTML='59';installstatus='11';setTimeout("in_progress()",300);return false;}
		
        if(installstatus=="11"){document.getElementById('whatisinstalling').innerHTML='goog.ol';document.getElementById('pnumber').innerHTML='65';installstatus='12';setTimeout("in_progress()",300);return false;}
		
        if(installstatus=="12"){document.getElementById('whatisinstalling').innerHTML='log.txt';document.getElementById('pnumber').innerHTML='71';installstatus='13';setTimeout("in_progress()",300);return false;}
		
        if(installstatus=="13"){document.getElementById('whatisinstalling').innerHTML='GLaDoS.app';document.getElementById('pnumber').innerHTML='80';installstatus='14';setTimeout("in_progress()",1000);return false;}
		
        if(installstatus=="14"){document.getElementById('pnumber').innerHTML='99';installstatus='15';wait_for_bang();install_spaz_attack();return false;}
    }
	
    function install_spaz_attack(){
	
        if(spazstatus=="1"){document.getElementById('pnumber').innerHTML='97';spazstatus='2';setTimeout("install_spaz_attack()",70);return false;}
		
        if(spazstatus=="2"){document.getElementById('pnumber').innerHTML='90';spazstatus='3';setTimeout("install_spaz_attack()",70);return false;}
		
        if(spazstatus=="3"){document.getElementById('pnumber').innerHTML='94';spazstatus='4';setTimeout("install_spaz_attack()",70);return false;}
		
        if(spazstatus=="4"){document.getElementById('pnumber').innerHTML='96';spazstatus='5';setTimeout("install_spaz_attack()",70);return false;}
		
        if(spazstatus=="5"){document.getElementById('pnumber').innerHTML='92';spazstatus='6';setTimeout("install_spaz_attack()",70);return false;}
		
        if(spazstatus=="6"){document.getElementById('pnumber').innerHTML='95';spazstatus='7';setTimeout("install_spaz_attack()",70);return false;}
		
        if(spazstatus=="7"){document.getElementById('pnumber').innerHTML='91';spazstatus='8';setTimeout("install_spaz_attack()",70);return false;}
		
        if(spazstatus=="8"){document.getElementById('pnumber').innerHTML='93';spazstatus='9';setTimeout("install_spaz_attack()",70);return false;}
		
        if(spazstatus=="9"){document.getElementById('pnumber').innerHTML='98';spazstatus='1';setTimeout("install_spaz_attack()",70);return false;}
		
        if(spazstatus=="10"){document.getElementById('pnumber').innerHTML='0';return false;}
    }
	
    function wait_for_bang(){setTimeout("bang_keyboard()",7000);}
	
    function bang_keyboard(){spazstatus='10';setTimeout("nextstep()",1500);}
	
    function nextstep(){window.location='step4.php';}
	
</script>

<title>Googol GLaDOS:simulator</title>

<center>

    <div id="installprogress" style="position:relative;top:70;opacity:0;"><font size="15" class="Googol_Simulator_Font_Colour">Installing </font> <span class="Googol_Simulator_Font_Colour"><font size="15" id="pnumber">0</font><font size="15">%</font></span></div><br>
    <div class="Googol_Simulator_Font_Colour" id="whatisinstalling" style="position:relative;top:50;"></div>
	
</center>

<script>start_install_persay()</script>

</center>

</body>

</html>

