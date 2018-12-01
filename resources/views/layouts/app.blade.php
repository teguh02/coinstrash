<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#343a40">
    <link href="favicon.ico" rel="shortcut icon" />
    <link href="favicon.png" rel="shortcut icon" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>COINSTRASH</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <style>
          @media (min-width: 601px) {
            .navigasi {background-color: #343a40}
          }
        @media (max-width: 601px) {
            .navigasi {
                background-color: #343a40;
                border-bottom: 0px !important;

            }

            .nav-link {
                color: white !important
            }

            .navbar-toggler-icon {
                filter: invert(100%);
            }
        }
    </style>

    <style>
        @media (min-width: 601px) {
            .nav-link:hover {
                opacity: 0.8;
            }
        }
    </style>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
</head>
<header>
    <div  id="app" >
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel  navigasi d-block" style="top: 0px; position: fixed !important; z-index: 99; width: 100%">
            <div class="container">
                <a class="navbar-brand w3-animate-left" href="{{ url('/') }}">
                    <img class="float-left" src="public/img/sd.png" width="35px" alt="">
                    <div class="float-left p-1 ml-1 hide-sm text-white"> <strong>COINSTRASH</strong> </div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon "></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                          <a href="/" class="nav-link text-white">Home</a>
                      </li>

                      <li class="nav-item">
                          <a href="#" class="nav-link text-white">Contact</a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                        <!-- Authentication Links -->
                        @guest


                        <li class="nav-item">
                            @if (Route::has('register'))
                            <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        </li>
                        @else
                        <li class="nav-item dropdown">

                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="#">Poin Anda {{Auth::user()->poin}}</a>
                              <a class="dropdown-item" href="/home">Dashboard</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

<script>
	function tombol1() {
    	document.getElementById('sisi-kiri').style.display = "none";
      document.getElementById('sisi-kanan').classList.toggle('col-lg-12');
      document.getElementById('tombol1').style.display = "none";
    }

</script>

<script>
   /*function check(e)
   {
   alert(e.keyCode);
   }*/
   document.onkeydown = function(e) {
           if (e.ctrlKey && (e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 85 || e.keyCode === 117)) {//Alt+c, Alt+v will also be disabled sadly.
           }
           return false;
   };
   </script>

</html>
