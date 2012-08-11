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
	font-size: 24px;
}


h1
{
	font-family: 'Conv_Catull';
	font-size: 48px;	
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

#apDiv1 {
	position: absolute;
	width: 116px;
	height: 62px;
	z-index: 1;
	left: 485px;
	top: 9px;
}
#apDiv2 {
	position: absolute;
	width: 90px;
	height: 30px;
	z-index: 1;
	left: 1040px;
	top: 3px;
}
</style>

<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
<script>
    var speedstage='1';
    function download_speed(){
        if(speedstage=='1'){document.getElementById('kbsspeed').innerHTML='0.3 kb/s';speedstage='2';setTimeout("download_speed()",700);return false;}
        if(speedstage=='2'){document.getElementById('kbsspeed').innerHTML='0.7 kb/s';speedstage='3';setTimeout("download_speed()",1000);return false;}
        if(speedstage=='3'){document.getElementById('kbsspeed').innerHTML='0.4 kb/s';speedstage='4';setTimeout("download_speed()",900);return false;}
        if(speedstage=='4'){document.getElementById('kbsspeed').innerHTML='0.9 kb/s';speedstage='5';setTimeout("download_speed()",3000);return false;}
        if(speedstage=='5'){document.getElementById('kbsspeed').innerHTML='1.3 kb/s';speedstage='6';setTimeout("download_speed()",400);return false;}
        if(speedstage=='6'){document.getElementById('kbsspeed').innerHTML='0.2 kb/s';speedstage='1';setTimeout("download_speed()",1400);return false;}
        if(speedstage=='10'){document.getElementById('kbsspeed').innerHTML='Finished';return false;}
    }
    function prepare_download_persay(){setTimeout("start_download_persay()",2000);}
    function start_download_persay(){document.getElementById('loadingbar').innerHTML='<div id="loader" style="width:1;height:100%;background:#55bb00;"></div>';$('#loader').animate({width:"100%"},60000,function(){finish_download_persay();});download_speed();}
    function finish_download_persay(){speedstage='10';$('#results').fadeOut(700, function(){document.getElementById('results').innerHTML='<br><input type="button" value="Install" onclick="nextstep()">';$('#results').fadeIn();});}
    function nextstep(){window.location='step3.php';}
</script>









<title>Googol GLaDOS:simulator</title>
</head>

<body class="Googol_Simulator_Font_Colour">

<span style="position:absolute;top:0;left:0;">gnome</span>
<span class="Googol_Simulator_Font_Colour" id="kbsspeed" style="position:absolute;top:0;right:0;"></span>
<center>
<p><font size="5">Thanks 10<sup>100</sup></font><font size="5"><span class="WOW">	4</span></font></p>
  <p><font size="5" class="downlaoding">Downloading</font></p>
    
    <div style="position: absolute; top: 232px; left: 46px; width: 90%; height: 40; border: 2px solid #000000; text-align: center;" id="loadingbar"><img src="images/loading.gif"></img></div><br><br><div id="results"><h1><font color="#2E5CEB">G</font><font color="#E92D3F">o</font><font color="#FDBA17">o</font><font color="#2E5CEB">g</font><font color="#E92D3F">o</font><font color="#069519">l</font> <font color="#FDBA17">G</font><font color="#069519">l</font><font color="#E92D3F">a</font><font color="#2E5CEB">D</font><font color="#E92D3F">O</font><font color="#2E5CEB">S</font></h1></div>
</center>
<span style="position:absolute;bottom:0;right:0;">V.I.R.US</span>

<script>prepare_download_persay()</script>

</body>

</html>








