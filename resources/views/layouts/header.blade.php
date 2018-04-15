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
                <li
                    @if ($tab === 'home')
                        class="nav-item active"
                    @else
                        class="nav-item"
                    @endif
                >
                    <a class="nav-link" href="/">
                        Home
                        @if ($tab === 'home')
                            <span class="sr-only">(current)</span>
                        @endif
                    </a>
                </li>
                <li
                    @if ($tab === 'basics')
                        class="nav-item active"
                    @else
                        class="nav-item"
                    @endif
                >
                    <a class="nav-link" href="/basics">
                        Basics
                        @if ($tab === 'basics')
                            <span class="sr-only">(current)</span>
                        @endif
                    </a>
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