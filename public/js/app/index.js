(function() {

preloadSounds();

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

function next() {
    $('#nextButton').attr('disabled','true')
    $('#chickenButton').attr('disabled','true')
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

$('#chickenButton').mouseenter(function(){
    $('#chickenButton').attr("class", "btn btn-1-1 btn-warning animated shake");
    setTimeout(function() { 
        $('#chickenButton').attr("class", "btn btn-1-1 btn-warning");
    }, 500)
});

$('#nextButton').click(function() {
    next()
})

$('#chickenButton').click(function() {
    chicken()
})

function chicken() {
    $('#nextButton').attr('disabled','true')
    $('#chickenButton').attr('disabled','true')
    var chicken = new Howl({
        urls: ['../../sounds/chicken.wav']
    }).play();

    $("body").fadeOut(400);

    setTimeout(function(){
        window.location = 'http://www.hakobaito.co.uk/b/q-is-the-gg-s-simulator-a-virus';
    }, 3000);

}

function preloadSounds() {
    var preloadChicken = new Howl({
        urls: ['../../sounds/chicken.wav'],
        autoplay:false,
        buffer:true
    }).stop();

    var preloadS6 = new Howl({
        urls: ['../../sounds/glados_s6.wav'],
        autoplay:false,
        buffer:true
    }).stop();

    var preloadIgnore = new Howl({
        urls: ['../../sounds/ignore.wav'],
        autoplay:false,
        buffer:true
    }).stop();

    var preloadS7 = new Howl({
        urls: ['../../sounds/glados_s7.wav'],
        autoplay:false,
        buffer:true
    }).stop();

    var preloadS8 = new Howl({
        urls: ['../../sounds/glados_s8.wav'],
        autoplay:false,
        buffer:true
    }).stop();

    var preloadS9 = new Howl({
        urls: ['../../sounds/glados_s9.wav'],
        autoplay:false,
        buffer:true
    }).stop();

    var preloadS10 = new Howl({
        urls: ['../../sounds/glados_s10.wav'],
        autoplay:false,
        buffer:true
    }).stop();
}
})();