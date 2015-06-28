var glados10 = new Howl({
    urls: ['../../sounds/glados_s10.wav']
}).play();

function umad() {
    $('#gladosbody').append('<img class="animated rotateIn" src="img/umad.gif" loop="false" id="tdgif" style="position:absolute;left:20;top:20;display:none;width:120;"></img>');
    $('#tdgif').fadeIn();
    $('#webbrowser').fadeIn(1500);
    setTimeout('overload()', 11000);
}

function overload() {
    $("body").fadeOut(1000);
    setTimeout("next()", 2000);
}

function next() {
    $.ajax({
            url: "/app",
            type: "GET",
            headers: { 'X-IS-GGS': 'true' },
            contentType: "application/x-www-form-urlencoded",
            data: {
                "s": "11",
            },
        })
        .success(function(data) {
            if ($.isPlainObject(data)) {
                //mixpanel.track("But was using an unsupported device, and got rejected!");
                window.location = "/nope"
            } else {
                setTimeout(function() {
                    $("body").fadeIn();
                    window.history.replaceState('Object', 'Title', '/end');
                    $('body').html(data);
                }, 500)
            }
        })
}
