  function uninstall_driver() {
      $('#gladosimg').animate({
          width: 150
      });
      $('#gladosbody').append('<img class="animated hinge"src="img/driver.svg" id="uninstalleddriver" width="175" style="position:absolute;left:50%;top:50%;opacity:1;"></img>');
      $('#uninstalleddriver').animate({
              opacity: 1,
              left: "70%"
          },

          function() {
              setTimeout('$("#uninstalleddriver").fadeOut(1000,function(){$("#uninstalleddriver").remove()})', 1000);
          });
      setTimeout('iagreed()', 5600);
  }


  function iagreed() {
      $('#gladosbody').append('<div id="atnc" style="position:absolute;left:50%;top:50%;opacity:1;"><p> <input type="checkbox" checked disabled> Terms & Conditions</p></div>');
      $('#atnc').animate({
          opacity: 1,
          left: "60%"
      }, function() {
          setTimeout('$("#atnc").fadeOut(1000,function(){$("#atnc").remove()})', 3000);
      });
      setTimeout('stolendetails()', 4000);
  }


  function stolendetails() {
      $('#gladosimg').animate({
          left: "90%"
      });
      $('#gladosbody').append('<div id="logindetails" style="position:absolute;left:10;top:10;opacity:1;z-index:5;"><p class="animated fadeIn">Login:</p><br><input type="password" value="keylogs_krispies@keeys.com" disabled><br><p class="animated fadeIn">Password:</p><br><input type="password" value="1" disabled>');

      $('#logindetails').animate({
          opacity: 1
      }, 1500, function() {
          setTimeout('$("#logindetails").fadeOut(1000,function(){$("#logindetails").remove()})', 6000);
      });
      setTimeout('decrypting()', 3000);
  }

  function decrypting() {
      $('#gladosbody').append('<div id="decrypting" style="position:absolute;left:10;bottom:10;opacity:1;z-index:5;"><br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <p>  DECRYPTING...</p>');
      setTimeout('next()', 4500);
  }

  var glados7 = new Howl({
      urls: ['../../sounds/glados_s7.wav']
  }).play();

  function next() {
      $.ajax({
              url: "/app",
              type: "GET",
              headers: { 'X-IS-GGS': 'true' },
              contentType: "application/x-www-form-urlencoded",
              data: {
                  "s": "8",
              },
          })
          .success(function(data) {
              if ($.isPlainObject(data)) {
                  window.location = "/nope"
              } else {
                  setTimeout(function() {
                      $('body').html(data);
                  }, 500)
              }
          })
  }