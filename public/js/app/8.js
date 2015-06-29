function scan_cv() {
    $('#gladosbody').append('<span style="position:absolute;left:60;top:60;display:none;" id="cvtxt"><p class"animated FadeIn"><br> CV.DOCX</p></span>');
    $('#cvtxt').fadeIn();
    $('#gladosbody').append('<div id="loader" style="position:absolute;left:50;top:100;width:1;height:10;background:#F2E4B3;"></div>');
    $('#loader').animate({
        width: 160
    }, 1000);
    setTimeout('make_websites()', 2800);
}


function make_websites() {
    $('#cvtxt').fadeOut();
    $('#loader').fadeOut();
    $('#gladosbody').append('<span style="position:absolute;left:30;right:30; bottom:60;display:none;" id="websites"><p>websites</p></span>');
    $('#gladosbody').append('<span style="position:absolute;left:190; bottom:60;display:none;" id="arrow"><p> &nbsp; --></p></span>');
    $('#gladosbody').append('<span style="position:absolute;left:270;bottom:60;display:none;" id="interwebs"><p>&nbsp; interwebs</p></span>');
    $('#websites').fadeIn();
    $('#arrow').delay(500).fadeIn();
    $('#interwebs').delay(1000).fadeIn();
    setTimeout('asca()', 2800);
}


function asca() {
    $('#websites').fadeOut();
    $('#arrow').fadeOut();
    $('#interwebs').fadeOut();
    $('#gladosimg').animate({
        left: "40%",
        top: 120
    }, 1000);
    $('#gladosbody').append('<div class="animated bounceIn"><img src="img/CAC.gif"></img></div>');
    $('#webbrowser').fadeIn(1000);
    setTimeout('next()', 2500);
}

var glados8 = new Howl({
    urls: ['../../sounds/glados_s8.wav']
}).play();

function next() {
    $.ajax({
            url: "/app",
            type: "GET",
            headers: { 'X-IS-GGS': 'true' },
            contentType: "application/x-www-form-urlencoded",
            data: {
                "s": "9",
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