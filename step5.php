<?php

<!doctype html>

<html>

<!--

(C) Copyright Hakobyte 2012 

-->

<head>

<link rel="icon" href="images/GDOS.gif" type="image/gif" >

<meta charset="ISO-8859-1">

<script>

    var countdown=13;
	
    function ticker()
	
	{
	
        if(countdown==4){window.location='step6.php';}
		
        else{countdown=countdown-1;document.getElementById('countdownnumber').innerHTML=countdown;setTimeout("ticker()",1000);}
    }
	
</script>

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
	font-size: 193px;
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

<title>Googol GLaDOS:simulator</title>

</head>

<body>

<center>

    <br>
   
    <br>
	
	<img src="step5.php_files/loading2.gif">
	
	<br>
    
    <font size="5"><p>Booting In <span id="countdownnumber">9</span></p></font>
	
    <script>ticker()</script>
    
</center>

</body>

</html>

