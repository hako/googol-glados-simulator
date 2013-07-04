<?php

<!doctype html>

<html>

<!--

This work is licensed under the Creative Commons Attribution-NonCommercial 3.0 Unported License. To view a copy of this license, visit http://creativecommons.org/licenses/by-nc/3.0/.

-->

<head>

<title>Googol GLaDOS:simulator</title>

<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">

<link rel="icon" href="images/GDOS.gif" type="image/gif" >

<script>

    function give_link(){document.getElementById('linkdiv').innerHTML='<input type="button" value="Ignore me." onclick="nextstep()">';}
	
    function nextstep(){window.location='step7.php';}
	
</script>

<title>Googol GLaDOS:simulator</title>

</head>

<body>

<embed src="Sound/glados_s6.wav" id="gladoss6" autostart="true" loop="false" cache="true" hidden="true">

<img src="images/googol_glados.png" style="position: absolute; top: 20px; left: 50%; margin-left: -150px; width: 300px;">

<div id="linkdiv" style="position: absolute; bottom: 408px; left: 727px; margin-left: -150; width: 300; height: 31px;"></div>
  
<script>setTimeout('give_link()',11000)</script>

</body>

</html>

</html>