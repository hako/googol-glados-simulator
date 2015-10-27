(function() {
window.history.replaceState('Object', 'Title', '/app');

function next() {
    if (document.getElementById('tick').checked == 1) {
        $("body").fadeOut(400);
        $.ajax({
                url: "/app",
                type: "GET",
                headers: { 'X-IS-GGS': 'true' },
                contentType: "application/x-www-form-urlencoded",
                data: {
                    "s": "2",
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
    } else {
        sweetAlert({title:"Error", text:"Please agree with the terms & conditions to continue.", confirmButtonColor:"#FC2D1E"});
    }
}

$('#download').click(function() {
    next()
})

})();