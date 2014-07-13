<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <!--<![endif]-->

<html lang="en" class="no-js">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A simulation of the animation Googol GLaDOS.">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width">
    <link href="img/GDOS.gif" rel="shortcut icon" >
    <link rel="icon" type="image/png" href="favicon.png">

    <title>Googol GLaDOS:simulator</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/real-world.css" rel="stylesheet">
    <link href="css/fonts.css" rel="stylesheet">
    <link href="css/ionicons.css" rel="stylesheet">
    <link href="css/icomoon.css" rel="stylesheet">
    <link href="css/modern-buttons.css" rel="stylesheet">

    <link rel="apple-touch-icon" href="apple-touch-icon-iphone.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-ipad.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-iphone4.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-ipad3.png" />

    <style type="text/css">

     @import url(https://fonts.googleapis.com/css?family=Averia+Sans+Libre);

      p
      {
        font-family: 'Averia Sans Libre';
        text-align: center;
        color: #000;
      }

      .white

      {

        color: #FFFFFF;

      }

      .black

      {

        color: #000000;

      }

      .red {
      color: #FF4240;
      }

      .Googol
      {
      font-family: 'Conv_Catull';
      text-align: center;
      font-size: 70px;

      }

      .Googol_Small
      {
      font-family: 'Conv_Catull';
      text-align: center;
      font-size: 20px;

      }
      .Googol_Colour {
        color: #2E5CEB;
      }
      .Googol_Colour_0 {
      color: #E92D3F;
      font-family: "Conv_Catull";
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
        font-family: 'Averia Sans Libre';
        color: #000000;
        font-size: 58px;
      }

        .Googol_Simulator_Font_Normal {
        font-family: 'Averia Sans Libre';
        color: #000000;
      }

      h1{
        font-family: "Conv_Catull";
        color: rgb(0, 0, 0);
        font-size: 76px;
      }

      h2
      {

        font-size: 45px;

      }


      h3
      {

        font-size: 25px;

      }

      #video_background {
        opacity: 90;
        position: fixed;
        bottom: -20px;
        resize: both;
        width: 100%;
        height: 100%;
        z-index: -10000;
        }

    </style>


<!-- Video background resizing to fullscreen.-->

  <script type="text/javascript">

    window.onresize = resize;
 window.onload = resize;

    function resize() {
      var windowWidth = (window.innerWidth);
 var windowHeight = (window.innerHeight);
      var windowProportion = windowWidth / windowHeight;


      var origWidth = 568;
 var origHeight = 360;
 // Video size
      var origProportion = origWidth / origHeight;

      var proportion = windowHeight / origHeight;
      if (windowProportion >= origProportion) {
        proportion = windowWidth / origWidth;
      }

      document.getElementById('video_background').style.width = proportion * origWidth+"px";
      document.getElementById('video_background').style.height = proportion * origHeight+"px";
    }

  </script>

  </head>

  <body>
    <video class="animated-slow fadeIn" id="video_background" preload="auto" muted="true"autoplay="true" loop="loop" >
    <source src="https://www.transcode.io/app/v1?account_id=527eaee8cc119c0200000003&key=ggs.mp4" type="video/mp4" />
    </video>


    <!-- Full Page Image Header Area -->

    <div id="top" class="animated fadeInUp header">
      <div class="vert-text">
           <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <div class="alert alert-success Note">
    <button type="button" class="close" data-dismiss="alert">×</button>
 <span class="label label-success">NEW!</span><a href="http://googolglados.tumblr.com/download">   You can now download Googol GLaDOS for Windows here!</a><a href="">
</a></div>
        <div align="center"> <span class="Googol_Colour"><span class="Googol">G</span><span class="Googol Googol_Colour_0">o</span><span class="Googol Googol_Colour_1">o</span><span class="Googol Googol_Colour_2">g</span><span class="Googol Googol_Colour_3">o</span><span class="Googol Googol_Colour_4">l</span> &nbsp;  <span class="Googol Googol_Colour_5">G</span><span class="Googol Googol_Colour_6">L</span><span class="Googol Googol_Colour_7">a</span><span class="Googol Googol_Colour_8">D</span><span class="Googol Googol_Colour_9">O</span><span class="Googol Googol_Colour_10">S</span> </span> <span class="p Googol_Simulator_Font_Colour"> simulator </span></span></div>
        <p>An <b>open source</b> experiment of recreating the animation <a href="http://www.youtube.com/watch?v=sDhc4mKtMkU"><b>'Googol GLaDOS'</b></a> in <strong> <abbr title="Javascript">JS</abbr> </p>
        <p><a href="#intro"<small>You <b>must</b> read the instructions before continuing.</small></a></p>
        <a href="#launch" class="btn btn-1 btn-1a">Launch Simulator!</a>

      </div>
    </div>
    </div>
    </div>

    <!-- /Full Page Image Header Area -->

    <!-- Intro -->

    <div id="intro" class="intro">

      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
            <center>
             <h1 class="icon-alert-circled white"></h1>
           </center>
                <h2 class="white">Instructions</h2>
            <hr>
            <p class="lead">1. Watch the animation <a href="http://www.youtube.com/watch?v=sDhc4mKtMkU">Googol GLaDOS</a></a>.</p>
            <p class="lead">2. You may have to wait a few seconds because the simulator caches all the files for offline use.</p>
            <p class="lead">3. <a href="#top">Launch</a> the simulator and have fun! :D</p>

            <h3 class="icon-information-circled white"></h3>
            <p class="lead">Note: <i>Everything you see from the simulator are just animations, it is harmless.</i></p>
            <h1 class="white" data-icon="$"></h3>
            <p class="lead">Google Chrome is the <b>recommended</b> browser for good results.</p>
            <p class="lead"><i>Use a different browser at your own risk!</i></p>
          </div>
        </div>
      </div>
    </div>

    <!-- /Intro -->

    <!-- Mirrors -->

    <div id="mirrors" class="mirrors">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 text-center">
            <center>
            <h1 class="icon-ios7-world white"></h1>
            </center>
            <h2>Mirrors</h2>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2 col-md-offset-2 text-center">
            <h5>Current.</h5>
            <div class="service-item">
              <a href="http://ggs.hakobaito.co.uk/"><h1 class="icon-ios7-circle-filled white"></h1></a>
              <h4>New York Server</h4>
              <p class="white">Official location for the Googol GLaDOS Simulator</p>
            </div>
          </div>
          <div class="col-md-2 text-center">
            <h5>Old.</h5>
            <div class="service-item">
              <a href="http://www.hakobaito.co.uk/googolglados:simulator/"><h1 class="icon-ios7-circle-outline white"></h1></a>
              <h4>Old Simulator</h4>
              <p class="white">(Very old and outdated, still useable)</p>
            </div>
          </div>
          <div class="col-md-2 text-center">
             <h5>Social.</h5>
            <div class="service-item">
              <a href="https://www.facebook.com/appcenter/googolgladosimulator"><h1 class="icon-contrast white"></h1></a>
              <h4>Facebook</h4>
              <p class="white">Try the simulator on Facebook!</p>
            </div>
          </div>
          <div class="col-md-2 text-center">
            <h5>Genesis.</h5>
            <div class="service-item">
              <a href="http://alexianson.co.uk/archive/gg/"><h1 class="icon-ios7-minus white"></h1></a>
              <h4>The Original</h4>
              <p class="white">The Original Googol GLaDOS Simulator</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- /Mirrors -->

    <!-- Downloads -->

   <div id="download" class="block">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
            &nbsp;
            <br>
             <br>
                <center>
              <h1 class="icon-archive white"></h1>
        </center>
            <h2>Downloads</h2>
            <hr>
            <p class="white">You can download the source code of the simulator through github.</p>
             <div class="text-center">
              <center>
            <h3>GitHub</h3>
            <div class="service-item">
              <button class="white btn btn-6 btn-6d"> <a href="http://git.io/I_Qa2Q"><h1 class="icon-social-github white "></h1></a></button>
              <h4>Download</h4>
              <p class="white">v2.0.1-wheatley</p>
                  <br>
             <br>
              </center>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>

    <!-- /Downloads -->

    <!-- Before You Continue... -->

    <div id="block3" class="block_3">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
            &nbsp;
            <br>
             <br>
              <br>
              <br>
              <p id="launch"></p>
               <br>
               <br>
            <h2>Before you continue...</h2>
            <hr>
            <center>
            <h3>This simulator is an animated simulation of the cartoon "Googol GLaDOS".</h3>
            <br>
            <h2><u class="red">It is not a virus.</u></h2>
            <br>
            <h3>It's all just animations, nothing will happen to your computer.</h3>
            <p><i class="white">(Just, lettin you know.)</i></p>
            <br>
            <button class="btn btn-1-1 btn-default" OnClick="next()" style="padding: 29px 48px;">Continue!</button> <button class="btn btn-1-1 btn-warning" OnClick="chicken()" style="padding: 29px 50px;">I'm too scared!</button>
            <br>
               <br>
               <br>
               <br>
                <br>
               <br>
               <br>
                 <br>
               <br>
          </div>
        </div>
        </center>
          </div>
        </div>
      </div>
    </div>

    <!-- /Before You Continue-->

   <!-- About -->

 <div id="intro" class="block_2">

      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
            <br>
             <br>
              <br>
              <br>
            <center>
             <h1 class="icon-information-circled black"></h1>
           </center>
                <h2 class="black">About</h2>
            <hr class="black">
            <p class="lead">An <b>open source</b> experiment of recreating the animation <a href="http://www.youtube.com/watch?v=sDhc4mKtMkU"><b>'Googol GLaDOS'</b></a> in <strong> <abbr title="Javascript">JS</abbr> </strong></p>
            <p align="center" class="lead"><b>Why open source + story</b></p>
            <p align="center">I started to work on this when a user (Alex) wrote this application and
  sent his recreated attempt to emulate the animation hakobyte made (googol
  glados) - search on google.</p>
  <p align="center">But the application was vulnerable and also close to becoming lost, so
  I quickly retrieved the raw files from Alex's hosting website</p>
  <p align="center">I fixed the raw code from the original simulator which is now a dead link,
  which is why you are seeing a refined version of the simulator right here.</p>
  <p align="center">Now that Alex is no-longer working on it, (hakobyte) has responsibility
    of maintaining and improving the simulator until I made it open source
    for anyone to download. </p>
    <p align="center">- <b>Hako  =[],</b></p>
          </div>
        </div>
      </div>
    </div>

    <!-- /About-->

    <!-- Credits -->

    <div id="credits" class="credits">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
            <h3><script language="php">$randvars = array('Made ', 'Crafted ', 'Designed ', 'Built ', 'Created ');
$randint                                         = rand(0, 4);
echo ($randvars[$randint]);
</script>with <span style="color:#FF7373;" data-icon="."></span> in England by:</h3>
            <br>
            <a href="https://twitter.com/hakobyte" style="padding: 25px 44px;" class="btn btn-1-1-1 btn-1d">@hakobyte</a>
            <a href="https://twitter.com/BlahBlah_BEN" style="padding: 25px 44px;" class="btn btn-1-1-1 btn-1d">@BlahBlah_BEN</a>
          </div>
        </div>
      </div>
    </div>

    <!-- /Credits -->

    <!-- Footer -->

    <footer>
            <div class="container">
        <div class="row">
         <ul class="list-inline">
          <div class="col-md-6 col-md-offset-3 text-center">
<li><p align="center"><a href="https://mixpanel.com/f/partner"><img src="//cdn.mxpnl.com/site_media/images/partner/badge_blue.png" alt="Mobile Analytics" /></a></p></li>
&nbsp;
        <li><p align="center"><a href="https://www.digitalocean.com/?refcode=c9489c76b1b2"><img src="img/digitalocean-badge-gray.png"></a></p></li>

</li>
</div>
        <br>
        <br>
</div>
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
            <br>
            <br>
            <ul class="list-inline">
              <li><a href="https://www.facebook.com/GoogolGLadosSimulator"><h3 class="icon-facebook"></h3></li>
              <li><a href="https://www.youtube.com/watch?v=sDhc4mKtMkU"><h3 class="icon-social-youtube"></h3></li></a>
              <li><a href="http://git.io/7O4kKQ"><h3 class="icon-social-github"></h3></li></a>
              <li><a href="http://www.hakobaito.co.uk/b/a-real-googol-glados"><h3 class="icon-social-windows"></h3></li></a>
            </ul>
            <p class"muted="" credit"=""><a href="http://www.hakobaito.co.uk">hakobaito.co.uk</a> | <a href="https://www.iubenda.com/privacy-policy/257375/legal">privacy policy</a> | <a href="http://status.ggs.hakobaito.co.uk/">simulator status</a> | <a href="http://hakob.yt/donate">donate</a>
</p>
            <hr>
            <p>&copy; 2014</p>
            <small>The Googol GLaDOS Simulator by Alex I'Anson is licensed under a Creative Commons NC License.</small>
            <br>
            <small>v3.0-caroline-release</small>
          </div>
        </div>
      </div>

    </footer>

    <!-- /Footer -->

  <!-- Bootstrap core JavaScript -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/howler.js"></script>

  <!-- Transition -->
  <script>
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
              || location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });
    </script>





  <!-- Load JS here for the greater good =============================-->

    <!--[if lt IE 8]>
      <script src="js/icon-font-ie7.js"></script>
      <script src="js/icon-font-ie7-24.js"></script>
    <![endif]-->



<!-- Redirect & Chicken noise.-->

    <script>

    function redirect()

    {
      eval(function(p,a,c,k,e,d){e=function(c){return c.toString(36)};if(!''.replace(/^/,String)){while(c--){d[c.toString(a)]=k[c]||c.toString(a)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('4.5=\'3://2.0.1.6/b/7-f-d-c-8-9-a-e\';',16,16,'hakobaito|co|www|http|window|location|uk|q|s|simulator|||gg|the|virus|is'.split('|'),0,{}))

    }

     function next()

     {
eval(function(p,a,c,k,e,d){e=function(c){return c.toString(36)};if(!''.replace(/^/,String)){while(c--){d[c.toString(a)]=k[c]||c.toString(a)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('$("3").f(e);$.g("/6?s=1",h(2){0.5("j i d b 8 9!");$("3").a(c);k($.l(2)){0.5("u w x t r n, m o p!");4.7="/q"}v{4.7="/6?s=1"}});',34,34,'mixpanel||data|body|window|track|app|location|the|simulator|fadeIn|started|800|has|400|fadeOut|get|function|user|A|if|isPlainObject|and|device|got|rejected|nope|unsupported||an|But|else|was|using'.split('|'),0,{}))
    }

    </script>


    <script>


     function chicken()

     {

     var chicken = new Howl({
  urls: ['Sound/chicken.wav']
    }).play();

     $("body").fadeOut(400);

    setTimeout('redirect()',3000);

    }

    </script>

  </body>

</html>
