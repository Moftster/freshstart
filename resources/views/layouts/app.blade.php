<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header class="showcase">
        <div class="container">
        <nav>
            <img href="/" class="logo-image" src="{{ asset('img/logo-ochre-sm.jpg') }}" alt="">

            {{-- <h1 class="logo">FreshStart Psychotherapy</h1> --}}
 
            <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/fees">Fees</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/clients">Clients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/therapists">Therapists</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/people">People</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>

                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link d-none" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
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
        </nav>
    </header>
</div>

        <main class="py-2">
            @yield('content')
        </main>
        
@section('footer')
<footer class="footer ">
    <div class="container">

        <div class="row d-flex justify-content-center">
            <a href="https://www.instagram.com/chillaweb/"><img class="social-icon" src="{{ asset('icons/insta.png') }}" alt="Instagram logo"></a>
            <a href="https://twitter.com/ChillaWeb"><img class="social-icon" src="{{ asset('icons/twitter.png') }}" alt="Twitter logo"></a>
            <a href="https://www.youtube.com/channel/UCYlZTdMURVPbf60rtldAX7g?view_as=subscriber"><img class="social-icon" src="{{ asset('icons/youtube.png') }}" alt="YouTube logo"></a>
            <a href="/privacyandcookies"><img class="social-icon" src="{{ asset('icons/privacy.png') }}" alt="Privacy icon"></a>

        </div>

        <nav class="navbar navbar-expand-md navbar- justify-content-center">

            <div class="row">            
                <ul class="navbar-nav text-center">
                    {{-- <li class="nav-item">
                        <a class="nav-link text-secondary" href="/services">Services</a>
                    </li>                         --}}
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="/portfolio">Portfolio</a>
                    </li>                                         
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="/blog">Blog</a>
                    </li>       
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="/contact">Contact</a>
                    </li>                        

                </ul>
            </div>

        </nav>

    </div>
  </footer>

</div>

</body>
</html>
@show
</body>
</html>
