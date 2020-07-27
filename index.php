<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <!-- Our Linked Style -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">

    <!-- Link Google Font family Arvo -->
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">

    <title>Social Networks API's</title>

</head>
<body>
            <!-- Facebook Like and Share Button plugin code -->
            <div id="fb-root"></div>
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v7.0" nonce="wN8aK8Rv"></script>
            <!-- Script for youtube -->
            <script src="https://apis.google.com/js/platform.js"></script>

    <div class="jumbotron">
        <div class="container-fluid">
            <h1>Join us and build Freedom</h1>
            <p>We make freedom, we love freedom, we spread freedom</p>
        </div>

        <form class="form-horizontal">
<!--            email form input-->
            <div class="form-group">
                <div class="col-xs-offset-2 col-xs-8">
                    <input type="email" placeholder="Your Email" id="email" class="form-control">
                </div>
            </div>
<!--            button subscribe input-->
            <div class="form-group">
                <div class="col-xs-offset-3 col-xs-6">
                    <input id="submit" type="submit" class="btn btn-lg btn-info" value="Subscribe">
                </div>
            </div>
        </form>

        <!-- Youtube video -->
        <iframe width="560" height="315" src="https://www.youtube.com/embed/ehyRiWKB3_w" frameborder="0" allow="accelerometer; autoplay; encrypted-media;
         gyroscope; picture-in-picture">
        </iframe>

        <div class="row">
<!--            Facebook buttons-->
            <div class="col-sm-offset-3 col-sm-2">
                <div class="fb-like" data-href="https://alimas.host20.uk/" data-width=""
                     data-layout="box_count" data-action="like" data-size="small" data-share="true">
                </div>
            </div>

<!--            Youtube subscribe button-->
            <div class="col-sm-2">
                <div class="g-ytsubscribe" data-channelid="UCJdlSvWm7aZW38Ec-tp4Oug" data-layout="full"
                     data-theme="dark" data-count="default">
                </div>
            </div>

<!--            Twitter button-->
            <div class="col-sm-2">
                <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button"
                   data-size="large" data-text="Hi i think...." data-url="https://alimas.host20.uk/WEB/" data-show-count="false">
                </a>
            </div>
        </div>

            <!--    Twitter TimeLine-->
             <div class="container">
                <a class="twitter-timeline" href="https://twitter.com/Expwakefield?ref_src=twsrc%5Etfw"
                data-chrome="nofooter noborders" data-tweet-limit="2">
                    Tweets by Expwakefield
                </a>
            </div>
    </div>
<!-- Twitter script -->
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<!--        <script>window.twttr = (function(d, s, id) {-->
<!--                var js, fjs = d.getElementsByTagName(s)[0],-->
<!--                    t = window.twttr || {};-->
<!--                if (d.getElementById(id)) return t;-->
<!--                js = d.createElement(s);-->
<!--                js.id = id;-->
<!--                js.src = "https://platform.twitter.com/widgets.js";-->
<!--                fjs.parentNode.insertBefore(js, fjs);-->
<!---->
<!--                t._e = [];-->
<!--                t.ready = function(f) {-->
<!--                    t._e.push(f);-->
<!--                };-->
<!---->
<!--                return t;-->
<!--            }(document, "script", "twitter-wjs"));</script>-->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="js/jquery-3.5.1.js"></script>
            <script src="js/bootstrap.min.js"></script>
    </body>
</html>