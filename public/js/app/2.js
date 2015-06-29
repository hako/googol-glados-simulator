var speedstage = '1';

function download_speed()

{
    if (speedstage == '1') {
        document.getElementById('kbsspeed').innerHTML = '0.3 kb/s';
        speedstage = '2';
        setTimeout("download_speed()", 700);
        return false;
    }
    if (speedstage == '2') {
        document.getElementById('kbsspeed').innerHTML = '0.7 kb/s';
        speedstage = '3';
        setTimeout("download_speed()", 1000);
        return false;
    }
    if (speedstage == '3') {
        document.getElementById('kbsspeed').innerHTML = '0.4 kb/s';
        speedstage = '4';
        setTimeout("download_speed()", 900);
        return false;
    }
    if (speedstage == '4') {
        document.getElementById('kbsspeed').innerHTML = '0.9 kb/s';
        speedstage = '5';
        setTimeout("download_speed()", 3000);
        return false;
    }
    if (speedstage == '5') {
        document.getElementById('kbsspeed').innerHTML = '1.3 kb/s';
        speedstage = '6';
        setTimeout("download_speed()", 400);
        return false;
    }
    if (speedstage == '6') {
        document.getElementById('kbsspeed').innerHTML = '0.2 kb/s';
        speedstage = '1';
        setTimeout("download_speed()", 1400);
        return false;
    }
    if (speedstage == '10') {
        document.getElementById('kbsspeed').innerHTML = '<span class="Finished">Finished</span>';
        return false;
    }
}

function prepare_download_persay() {
    setTimeout("start_download_persay()", 2000);
}

function start_download_persay() {
    document.getElementById('loadingbar').innerHTML = '<div id="loader" style="width:0;height:100%;background:#55bb00;"></div>';
    $('#loader').animate({
        width: "100%"
    }, 60000, function() {
        finish_download_persay();
    });
    download_speed();
}

function finish_download_persay() {
    speedstage = '10';

    $('#results').fadeOut(700, function() {
        document.getElementById('results').innerHTML = '<br><br><center><button class="btn btn-1 btn-1a" OnClick="next()"  type="button" style="padding: 29px 50px;">Install</button></center>';
        $('#results').fadeIn();
    });
}

function next() {
    $('body').fadeOut(400)
    $.ajax({
            url: "/app",
            type: "GET",
            headers: {
                'X-IS-GGS': 'true'
            },
            contentType: "application/x-www-form-urlencoded",
            data: {
                "s": "3",
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