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
                <a class="navbar-brand" href="/"><strong>Learn Kirtan</strong></a>
                <div class="float-right">
                    @guest
                        <a href="{{ route('register') }}"><strong>Sign Up</strong></a>
                        <a href="{{ route('login') }}" class="btn btn-primary btn-rounded btn-sm"><strong>Login</strong></a>
                    @else
                        <ul>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    @endguest
                </div>
            </nav>
        </div>

<!--Navbar-->
<nav class="navbar navbar-expand-md navbar-inverse navbar-dark cyan accent-4">
    <div class="container-fluid">
        <div class="navbar-header">
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div id="mainmenu" class="collapse navbar-collapse">
            <ul class="nav navbar-nav mr-auto">
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