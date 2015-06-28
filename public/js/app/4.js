function next() {
 $("body").fadeOut(400);
    $.ajax({
            url: "/app",
            type: "GET",
            headers: { 'X-IS-GGS': 'true' },
            contentType: "application/x-www-form-urlencoded",
            data: {
                "s": "5",
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