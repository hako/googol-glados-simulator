$('#video_background').hide();
$('#video_background').delay(1500).fadeIn(5000);

window.onresize = resize;
window.onload = resize;

function resize() {
    var windowWidth = (window.innerWidth);
    var windowHeight = (window.innerHeight);
    var windowProportion = windowWidth / windowHeight;

    var origWidth = 568;
    var origHeight = 360;
    var origProportion = origWidth / origHeight;

    var proportion = windowHeight / origHeight;
    if (windowProportion >= origProportion) {
        proportion = windowWidth / origWidth;
    }

    document.getElementById('video_background').style.width = proportion * origWidth + "px";
    document.getElementById('video_background').style.height = proportion * origHeight + "px";
}

$('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
            $('html,body').animate({
                scrollTop: target.offset().top
            }, 1000);
            return false;
        }
    }
});

function redirect() {
    window.location = 'http://www.hakobaito.co.uk/b/q-is-the-gg-s-simulator-a-virus';
}

function next() {
    $("body").fadeOut(400);
    $.ajax({
            url: "/app",
            type: "GET",
            headers: { 'X-IS-GGS': 'true' },
            contentType: "application/x-www-form-urlencoded",
            data: {
                "s": "1",
            },
        })
        .success(function(data) {
            if ($.isPlainObject(data)) {
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

$('#chicken').mouseenter(function(){
    $('#chicken').attr("class", "btn btn-1-1 btn-warning animated shake");
    setTimeout(function() { 
        $('#chicken').attr("class", "btn btn-1-1 btn-warning");
    }, 500)
});

function chicken() {
        var chicken = new Howl({
            urls: ['../../sounds/chicken.wav']
        }).play();

        $("body").fadeOut(400);

        setTimeout('redirect()', 3000);
    }