<!doctype html>
<html lang="{{ app()->getLocale() }}" class="full-height">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Learn Gurbani Kirtan</title>
        <link rel="stylesheet" type="text/css" href="build/css/app.css">
    </head>
    <body>
        <div id="logo-panel" class="container">
            <nav id="main-nav" class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#"><strong>Learn Kirtan</strong></a>
                <div class="float-right">
                    <a href="#"><strong>Sign Up</strong></a>
                    <button type="button" class="btn btn-primary btn-rounded btn-sm">Login</button>
                </div>
            </nav>
        </div>

<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark cyan accent-4">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="mainmenu" class="collapse navbar-collapse" id="navbarSupportedContent-7">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/basics">Basics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Raags</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Shabads</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!--Intro Section-->
<section class="view gray-bg">
    <div class="full-bg-img">
        <div class="container flex-center">
            <div class="row flex-center pt-5 mt-3">
                <div class="col-md-6 text-center text-md-left margins">
                    <div>
                        <h1 class="h1-responsive wow fadeInLeft" data-wow-delay="0.3s">Learn Kirtan Online</h1>
                            <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
                            <h6 class="wow fadeInLeft" data-wow-delay="0.3s">
                                Kirtan is a precious gift and singing together with love makes it even more joyful.
                            </h6>
                            <br>
                            <a class="btn btn-default wow fadeInLeft" data-wow-delay="0.3s">Learn more</a>
                            <a class="btn btn-default wow fadeInLeft" data-wow-delay="0.3s">Register</a>
                    </div>
                </div>

                <div class="col-md-6 wow fadeInRight d-flex justify-content-center" data-wow-delay="0.3s">
                    <img src="build/images/harmonium.png" alt="" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
</section>

<!--Main Navigation-->
        <script src="build/js/app.js" type="text/javascript"></script>
        <script type="text/javascript">
            new WOW().init();
        </script>
    </body>
</html>
