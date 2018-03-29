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
        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#"><strong>Learn Kirtan</strong></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/basics">Basics <span class="sr-only">(current)</a>
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

        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Sargams</h4>

                    <p class="card-text">
                        Sevet set of notes id called 'Sargam' but in playing a sargam, 'Sa' of next scale is added, thus making eight notes.
                        It is important to learn the sargam keys thoroughly; This will make the playing of the harmonium very easy.
                    </p>

                    <img src="build/images/sargam.jpg" class="img-fluid" />
                </div>
            </div>
        </div>

        <div class="container-fluid mt-sm-4 mb-sm-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Types of Scales</h4>

                    <p class="card-text">
                        There are three types of the scales in harmonium:
                        <ol>
                            <li>Lower Sclae</li>
                            <li>Middle Scale</li>
                            <li>Upper Scale</li>
                        </ol>
                    </p>
                </div>
            </div>
        </div>

        <script src="build/js/app.js" type="text/javascript"></script>
    </body>
</html>
