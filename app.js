/*
    The Googol GLaDOS Simulator by Alex I'Anson and Wesley Hill 
    is licensed under the Creative Commons Attribution-NonCommercial 4.0 International License.
    http://creativecommons.org/licenses/by-nc/4.0/

    Based on a work at http://alexianson.co.uk/archive/gg/.
    
    app.js
*/

// app.js handles the routing logic of the Googol GLaDOS Simulator using express.
var version = {
    'version': "v3.0.1",
    'release_name': "caroline-release"
}

var MobileDetect = require('mobile-detect');
var express = require('express');
var chalk = require('chalk');
var bp = require('body-parser');
var nunjucks = require('nunjucks');


//var ac = require('appcache-node');
var app = express();
// Create a cache for offline access, invalidate each hour.
// add manifest="app.cache" to app_layout and index_layout
// var cache = ac.newCache(["components/bootstrap/dist/css/bootstrap.css", 
//                          "components/bootstrap/dist/js/bootstrap.min.js",
//                          "components/howler/howler.min.js",
//                          "components/animate.css/animate.css",
//                          "components/jquery/dist/jquery.min.js",
//                          "components/ionicons/css/ionicons.css",
//                          "components/icomoon/dist/css/style.css",
//                          "css/stylish-portfolio.css",
//                          "css/modern-buttons.css",
//                          "css/fonts.css",
//                          "css/app/index.css",
//                          "css/real-world.css",
//                          "css/fonts/Averia/averia_sans_libre_regular.svg",
//                          "css/fonts/Averia/averia_sans_libre_regular.ttf",
//                          "css/fonts/Averia/averia_sans_libre_regular.woff",
//                          "css/fonts/Catull.svg",
//                          "css/fonts/Catull.ttf",
//                          "css/fonts/Catull.woff",
//                          "components/icomoon/dist/fonts/icomoon.svg",
//                          "components/icomoon/dist/fonts/icomoon.ttf",
//                          "components/icomoon/dist/fonts/icomoon.woff",
//                          "components/ionicons/fonts/ionicons.svg?v=2.0.0#Ionicons",
//                          "components/ionicons/fonts/ionicons.ttf?v=2.0.0",
//                          "components/ionicons/fonts/ionicons.woff?v=2.0.0",
//                          "components/bootstrap/dist/css/bootstrap.css.map",
//                          "components/jquery/dist/jquery.min.map",
//                          "sounds/chicken.wav",
//                          "sounds/ignore.wav",
//                          "sounds/glados_s6.wav",
//                          "sounds/glados_s7.wav",
//                          "sounds/glados_s8.wav",
//                          "sounds/glados_s9.wav",
//                          "sounds/glados_s10.wav",
//                          "js/app/index.js",
//                          ])
// cache += "\nNETWORK:\n*"

var googol = chalk.blue("g") + chalk.red("o") + chalk.yellow("o") + chalk.blue("g") + chalk.red("o") + chalk.green("l");
var glados = chalk.yellow("g") + chalk.green("l") + chalk.red("a") + chalk.blue("d") + chalk.red("o") + chalk.blue("s");

// Express settings.
app.set('port', (process.env.PORT || 5000));
app.set('view engine', 'html');
app.set('views', __dirname + '/views');
app.use(express.static(__dirname + '/public'));
app.disable('x-powered-by');

//  Configure view template for nunjucks.
var nunjucksTemplate = nunjucks.configure('views', {
    autoescape:true,
    express:app
});

nunjucksTemplate.addFilter('random', function(array) {
    return array[Math.floor(Math.random() * array.length)]
});

// Nunjucks custom filters.
nunjucksTemplate.addFilter('json', function(obj) {
    return JSON.stringify(obj);
});


// Configuration

// App environment detection.
if (process.env.NODE_HOME) {
    if (process.env.NODE_HOME.match("heroku")) {
        process.env.ON_HEROKU = true
    }
} else {
    process.env.ON_HEROKU = false
}

// Set SHOW_RELEASE_NAME to true if not defined.
if (!process.env.SHOW_RELEASE_NAME) {
    process.env.SHOW_RELEASE_NAME = true
    version['show_release_name'] = process.env.SHOW_RELEASE_NAME
} else {
    version['show_release_name'] = process.env.SHOW_RELEASE_NAME
}

// Cache
// app.all('/app.cache', function(req, res){
//     res.writeHead(200, {'Content-Type': 'text/cache-manifest'});
//     res.end(cache);
// })

// Routes.

// Index.
app.get('/', function(req, res) {
    var ismob = isMobile(req)
    on_heroku = process.env.ON_HEROKU
    footerWords = ['Made', 'Crafted', 'Designed', 'Built', 'Created']
    date = new Date()
    res.render("index.html", {
        words: footerWords,
        on_heroku: on_heroku,
        mob:ismob,
        v: version,
        year:date.getFullYear()
    })
});

// robots.txt
app.all('/robots.txt', function(req, res) {
    robotstxt = ""
    robotstxt += "User-Agent: *" 
    robotstxt += "\nDisallow: /app/"
    robotstxt += "\nDisallow: /end/"
    robotstxt += "\nDisallow: /nope/"
    res.writeHead(200, {'Content-Type': 'text/plain'});
    res.end(robotstxt)
});

// User-Agent Checker.
function isMobile(req) {
    md = new MobileDetect(req.headers['user-agent'])
    if (md.mobile() || md.is("Console") || md.is("Watch") || md.is("MobileBot") || md.match("\b(Nintendo|Nintendo WiiU|Nintendo 3DS|PLAYSTATION|Xbox)\b")) {
        return true
    } else {
        return false
    } 
}

// Nope.
app.get('/nope', function(req, res, next) {
    if(isMobile(req) == true){
        res.render("toobad",{device:md.mobile()})
    } else {
        res.redirect("/")
    }
});

// App
app.get('/app', function(req, res) {
    if(isMobile(req) == true){
        res.render("toobad",{device:md.mobile()})
    } else {
        exists = req.get('X-IS-GGS')
        q = req.query['s']
        if (exists) {
            if (q == 1) {
                res.render("1")
            } else if (q == 2) {
                res.render("2")
            } else if (q == 3) {
                res.render("3")
            } else if (q == 4) {
                res.render("4")
            } else if (q == 5) {
                res.render("5")
            } else if (q == 6) {
                res.render("6")
            } else if (q == 7) {
                res.render("7")
            } else if (q == 8) {
                res.render("8")
            } else if (q == 9) {
                res.render("9")
            } else if (q == 10) {
                res.render("10")
            } else if (q == 11) {
                on_heroku = process.env.ON_HEROKU
                footerWords = ['Made', 'Crafted', 'Designed', 'Built', 'Created']
                date = new Date()
                res.render("end", {
                    words: footerWords,
                    on_heroku: on_heroku,
                    v: version,
                    year:date.getFullYear()
                })
            } else {
                res.redirect("/")
            }
        } else {
            res.redirect("/")
        }
    }
});

// Run server.
app.listen(app.get('port'), function() {
    var env = app.settings.env
    console.log(googol + " " + glados + ":simulator listening on port " + chalk.cyan.bold(app.get('port')));
    if (env == "development") {
        console.log("environment status: " + chalk.yellow.bold(env))
    } else {
        console.log("environment status: " + chalk.green.bold(env))
    }
});