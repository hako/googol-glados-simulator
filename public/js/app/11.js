$('#video_background').hide();
$('#video_background').delay(1500).fadeIn(5000);
window.onresize = resize;
window.onload = resize;

function resize() {
    var windowWidth = (window.innerWidth);
    var windowHeight = (window.innerHeight);
    var windowProportion = windowWidth / windowHeight;


    var origWidth = 568;
    var origHeight = 360; // Video size
    var origProportion = origWidth / origHeight;

    var proportion = windowHeight / origHeight;
    if (windowProportion >= origProportion) {
        proportion = windowWidth / origWidth;
    }

    document.getElementById('video_background').style.width = proportion * origWidth + "px";
    document.getElementById('video_background').style.height = proportion * origHeight + "px";
}