<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>


<body id="body-pd">
    <div id="app">


        <header class="header" id="header">
            @guest
            @if (Route::has('login'))
            <i class="fab fa-wordpress-simple icc"></i>
            <a class="navbar-brand " href="{{ url('/') }}">
                <h2>
                    <h2>Work<span>Kit</span></h2>

                </h2>
            </a>
            @endif
            @else
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
            @endguest


            <!-- <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div> -->
            <ul class="navbar-nav ml-auto">

                @guest
                @if (Route::has('login'))
                <li class="nav-item collapse">
                    <button type="button" class="btn btn-primary my-0 px-5 pb-0"><a href="{{ route('login') }}">
                            <h5>Log - in</h5>
                        </a></button>
                </li>

                @endif

                @if (Route::has('register'))
                <li class="nav-item mt-1">
                    <button type="button" class="btn btn-primary my-0 px-5 pb-0"><a href="{{ route('register') }}">
                            <h5>Sign-up</h5>
                        </a></button>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link bg-success dropdown-toggle bg-primary rounded text-white px-3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </header>

        @guest
        @if (Route::has('login'))
        @endif
        @else
        <div class="l-navbar" id="nav-bar">

            <nav class="nav">
                <div> <a href="#" class="nav_logo"> <i class='fab fa-wordpress-simple icn'></i> <span class="nav_logo-name">
                            <h2>Work<span>Kit</span></h2>
                        </span> </a>
                    <div class="form-group has-search ml-3">
                        <span class="fa fa-search form-control-feedback"></span>
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <hr>
                    <div class="nav_list">
                        <a class="nav_links"><span class="nav_name">APPS</span></a>

                        <a href="#" class="nav_link active"><i class='bx bx-grid-alt nav_icon'></i><span class="nav_name">Dashboard</span></a>
                        <a href="#" class="nav_link"><i class='bx bx-user nav_icon'></i><span class="nav_name">Team</span> </a>
                        <a href="#" class="nav_link"><i class='bx bx-message-square-detail nav_icon'></i><span class="nav_name">Chat</span> </a>
                        <a href="#" class="nav_link"><i class='bx bx-bookmark nav_icon'></i><span class="nav_name">Project</span> </a>

                        <a class="nav_links"><span class="nav_name">PROJECTS</span></a>

                        <a href="#" class="nav_link"><i class='bx bx-folder nav_icon'></i><span class="nav_name">Workkit</span> </a>
                        <a href="#" class="nav_link"><i class='bx bx-bar-chart-alt-2 nav_icon'></i><span class="nav_name">Codetisan</span>
                            <a href="#" class="nav_link"><i class='bx bx-bar-chart-alt-2 nav_icon'></i><span class="nav_name">Fandomo</span>
                                <a href="#" class="nav_link"><i class='bx bx-bar-chart-alt-2 nav_icon'></i><span class="nav_name">Veecast</span>
                                </a>
                    </div>
                </div>
                <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
            </nav>
        </div>
        @endguest





        <main class="py-4">
            @yield('content')
        </main>
    </div>

</body>
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="js/js.js"></script>

</html>


<!-- <nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand " href="{{ url('/') }}">
                    <h2>
                        <h2>Work<span>Kit</span></h2>

                    </h2>
                </a>
                <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav mr-auto">

                    </ul>


                    <ul class="navbar-nav ml-auto">

                        @guest
                        @if (Route::has('login'))

                        <li class="nav-item collapse">
                            <button type="button" class="btn btn-primary my-0 px-5 pb-0"><a href="{{ route('login') }}">
                                    <h5>Log - in</h5>
                                </a></button>
                        </li>

                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item mt-1">
                            <button type="button" class="btn btn-primary my-0 px-5 pb-0"><a href="{{ route('register') }}">
                                    <h5>Sign-up</h5>
                                </a></button>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link bg-success dropdown-toggle bg-primary rounded text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> -->