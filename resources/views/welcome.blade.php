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
        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
        </div> -->

        <!-- <nav class="navbar navbar-expand-lg navbar-light scrolling-navbar grey lighten-2 top-nav-collapse">

            <a class="navbar-brand font-weight-bold title" href="#">Learn Kirtan</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="#">Basics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="#">Raags</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="#">Shabads</a>
                    </li>
                </ul>

                <ul class="navbar-nav mr-auto pull-right">
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="#">My Acccount</a>
                    </li>
                </ul>
            </div>

        </nav> -->

 <!--Main Navigation-->
 <header>

<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
    <div class="container">
        <a class="navbar-brand" href="#"><strong>Learn Kirtan</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Basics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Raags</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Shabads</a>
                </li>
            </ul>
            <ul class="navbar-nav mr-auto float-right">
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="">My Acccount</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!--Intro Section-->
<section class="view intro-2 hm-gradient">
    <div class="full-bg-img">
        <div class="container flex-center">
            <div class="row flex-center pt-5 mt-3">
                <div class="col-md-6 text-center text-md-left margins">
                    <div class="white-text">
                        <h1 class="h1-responsive wow fadeInLeft" data-wow-delay="0.3s">Learn Kirtan Online</h1>
                            <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
                            <h6 class="wow fadeInLeft" data-wow-delay="0.3s">
                                Kirtan is a precious gift and singing together with love makes it even more joyful.
                            </h6>
                            <br>
                            <a class="btn btn-outline-white wow fadeInLeft" data-wow-delay="0.3s">Learn more</a>
                            <a class="btn btn-outline-white wow fadeInLeft" data-wow-delay="0.3s">Register 
                                <i class="fa fa-android left right" aria-hidden="true"></i>
                                <i class="fa fa-apple left" aria-hidden="true"></i>
                                <i class="fa fa-windows" aria-hidden="true"></i>
                                <i class="fas fa-user"></i>
                            </a>
                    </div>
                </div>

                <div class="col-md-6 wow fadeInRight d-flex justify-content-center" data-wow-delay="0.3s">
                    <img src="build/images/harmonium.png" alt="" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
</section>

</header>
<!--Main Navigation-->

<!--Main Layout-->
<main>

<div class="container">
    
    <!--Grid row-->
    <div class="row py-5">

        <!--Grid column-->
        <div class="col-md-12 text-center">

            <p>Welcome to the learn kirtan site.</p>

        </div>
        <!--Grid column-->

    </div>
    <!--Grid row-->

</div>

</main>
<!--Main Layout-->

        
        <script src="build/js/app.js" type="text/javascript"></script>
        <script type="text/javascript">
            new WOW().init();
        </script>
    </body>
</html>
