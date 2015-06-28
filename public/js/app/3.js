   var installstatus = '1';

   var spazstatus = '1';

   function start_install_persay() {
       $('#installprogress').animate({
           opacity: 1,
           bottom: 50
       }, function() {
           in_progress();
       });
   }

   function in_progress()
   {
       if (installstatus == "1") {
           document.getElementById('whatisinstalling').innerHTML = 'unzipping';
           installstatus = '2';
           setTimeout("in_progress()", 900);
           return false;
       }

       if (installstatus == "2") {
           document.getElementById('whatisinstalling').innerHTML = 'ViRzz.dll';
           document.getElementById('pnumber').innerHTML = '1';
           installstatus = '3';
           setTimeout("in_progress()", 200);
           return false;
       }
       if (installstatus == "3") {
           document.getElementById('whatisinstalling').innerHTML = 'goo.exe';
           document.getElementById('pnumber').innerHTML = '5';
           installstatus = '4';
           setTimeout("in_progress()", 500);
           return false;
       }
       if (installstatus == "4") {
           document.getElementById('whatisinstalling').innerHTML = 'lvl.stp';
           document.getElementById('pnumber').innerHTML = '10';
           installstatus = '5';
           setTimeout("in_progress()", 200);
           return false;
       }
       if (installstatus == "5") {
           document.getElementById('whatisinstalling').innerHTML = 'goo.dll';
           document.getElementById('pnumber').innerHTML = '11';
           installstatus = '6';
           setTimeout("in_progress()", 300);
           return false;
       }
       if (installstatus == "6") {
           document.getElementById('whatisinstalling').innerHTML = 'dev.dll';
           document.getElementById('pnumber').innerHTML = '28';
           installstatus = '7';
           setTimeout("in_progress()", 300);
           return false;
       }
       if (installstatus == "7") {
           document.getElementById('whatisinstalling').innerHTML = '2011.exe';
           document.getElementById('pnumber').innerHTML = '31';
           installstatus = '8';
           setTimeout("in_progress()", 300);
           return false;
       }
       if (installstatus == "8") {
           document.getElementById('whatisinstalling').innerHTML = 'su.x';
           document.getElementById('pnumber').innerHTML = '47';
           installstatus = '9';
           setTimeout("in_progress()", 300);
           return false;
       }
       if (installstatus == "9") {
           document.getElementById('whatisinstalling').innerHTML = '403.2';
           document.getElementById('pnumber').innerHTML = '53';
           installstatus = '10';
           setTimeout("in_progress()", 300);
           return false;
       }
       if (installstatus == "10") {
           document.getElementById('whatisinstalling').innerHTML = 'pr0n.wmv';
           document.getElementById('pnumber').innerHTML = '59';
           installstatus = '11';
           setTimeout("in_progress()", 300);
           return false;
       }
       if (installstatus == "11") {
           document.getElementById('whatisinstalling').innerHTML = 'goog.ol';
           document.getElementById('pnumber').innerHTML = '65';
           installstatus = '12';
           setTimeout("in_progress()", 300);
           return false;
       }
       if (installstatus == "12") {
           document.getElementById('whatisinstalling').innerHTML = 'log.txt';
           document.getElementById('pnumber').innerHTML = '71';
           installstatus = '13';
           setTimeout("in_progress()", 300);
           return false;
       }
       if (installstatus == "13") {
           document.getElementById('whatisinstalling').innerHTML = 'GLaDDoS.exe';
           document.getElementById('pnumber').innerHTML = '80';
           installstatus = '14';
           setTimeout("in_progress()", 1000);
           return false;
       }
       if (installstatus == "14") {
           document.getElementById('pnumber').innerHTML = '99';
           installstatus = '15';
           wait_for_bang();
           install_spaz_attack();
           return false;
       }
   }


   function install_spaz_attack()

   {
       if (spazstatus == "1") {
           document.getElementById('pnumber').innerHTML = '97';
           spazstatus = '2';
           setTimeout("install_spaz_attack()", 70);
           return false;
       }
       if (spazstatus == "2") {
           document.getElementById('pnumber').innerHTML = '90';
           spazstatus = '3';
           setTimeout("install_spaz_attack()", 70);
           return false;
       }
       if (spazstatus == "3") {
           document.getElementById('pnumber').innerHTML = '94';
           spazstatus = '4';
           setTimeout("install_spaz_attack()", 70);
           return false;
       }
       if (spazstatus == "4") {
           document.getElementById('pnumber').innerHTML = '96';
           spazstatus = '5';
           setTimeout("install_spaz_attack()", 70);
           return false;
       }
       if (spazstatus == "5") {
           document.getElementById('pnumber').innerHTML = '92';
           spazstatus = '6';
           setTimeout("install_spaz_attack()", 70);
           return false;
       }
       if (spazstatus == "6") {
           document.getElementById('pnumber').innerHTML = '95';
           spazstatus = '7';
           setTimeout("install_spaz_attack()", 70);
           return false;
       }
       if (spazstatus == "7") {
           document.getElementById('pnumber').innerHTML = '91';
           spazstatus = '8';
           setTimeout("install_spaz_attack()", 70);
           return false;
       }
       if (spazstatus == "8") {
           document.getElementById('pnumber').innerHTML = '93';
           spazstatus = '9';
           setTimeout("install_spaz_attack()", 70);
           return false;
       }
       if (spazstatus == "9") {
           document.getElementById('pnumber').innerHTML = '98';
           spazstatus = '1';
           setTimeout("install_spaz_attack()", 70);
           return false;
       }
       if (spazstatus == "9") {
           document.getElementById('pnumber').innerHTML = '98';
           spazstatus = '1';
           setTimeout("install_spaz_attack()", 70);
           return false;
       }
       if (spazstatus == "10") {
           document.getElementById('pnumber').innerHTML = '<span class="animated flash">0</span>';
           return false;
       }
   }

   function wait_for_bang() {
       setTimeout("bang_keyboard()", 7000);
   }

   function bang_keyboard() {
       spazstatus = '10';
       setTimeout("next()", 1500);
   }

   function next() {
 $("body").fadeOut(400);
    $.ajax({
            url: "/app",
            type: "GET",
            headers: { 'X-IS-GGS': 'true' },
            contentType: "application/x-www-form-urlencoded",
            data: {
                "s": "4",
            },
        })
        .success(function(data) {
            if ($.isPlainObject(data)) {
                //mixpanel.track("But was using an unsupported device, and got rejected!");
                window.location = "/nope"
            } else {
                setTimeout(function() {
                    $('body').hide();
                    $('body').html(data);
                    $('body').fadeIn(400);
                }, 500)
            }
        })
}