function click_bomb() {
    $('#webbrowser').fadeOut();
    setTimeout('click_bomb_exe()', 1000);
}

function click_bomb_exe() {
    $('#gladosbody').append('<span style="position:absolute;right:30;top:40;display:none;" id="cbexe"><p> xterm clckbmb ping -i </p></span>');
    $('#cbexe').fadeIn();
    setTimeout('imaginable_scale()', 1000);
}

function imaginable_scale() {
    $('#cbexe').fadeOut(500, function() {
        $('#cbexe').remove()
    });
    $('#gladosbody').append('<div style="position:absolute;right:50;top:40;display:none;" id="cbapp"><p>Clickbomb Value</p><br><input class="Googol_Simulator_Font_Colour" type="text" value="" id="cbstf" readonly="readonly"></div>');
    $('#cbapp').fadeIn(1000);
    setTimeout('agoogol()', 2300);
}

function agoogol() {
    document.getElementById('cbstf').value = '10^100';
    setTimeout('next()', 2000);
}

var glados9 = new Howl({
    urls: ['../../sounds/glados_s9.wav']
}).play();

function next() {
    $.ajax({
            url: "/app",
            type: "GET",
            headers: { 'X-IS-GGS': 'true' },
            contentType: "application/x-www-form-urlencoded",
            data: {
                "s": "10",
            },
        })
        .success(function(data) {
            if ($.isPlainObject(data)) {
                //mixpanel.track("But was using an unsupported device, and got rejected!");
                window.location = "/nope"
            } else {
                setTimeout(function() {
                    $('body').html(data);
                }, 500)
            }
        })
}