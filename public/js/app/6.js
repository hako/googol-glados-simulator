var glados6 = new Howl({
    urls: ['../../sounds/glados_s6.wav']
}).play();


function detectIgnore() {
    setTimeout(function() {
        $('#glados').attr("src", "img/googol_glados_idle.svg")
        $('#glados').attr("class", "animated shake")
        var ignore = new Howl({
            urls: ['../../sounds/ignore.wav']
        }).play();
        setTimeout("next()", 1000);
    }, 5000)
}

function next() {
    $.ajax({
            url: "/app",
            type: "GET",
            headers: { 'X-IS-GGS': 'true' },
            contentType: "application/x-www-form-urlencoded",
            data: {
                "s": "7",
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