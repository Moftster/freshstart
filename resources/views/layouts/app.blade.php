<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <script>
    
          $(function() {
              $(".toggle").on("click", function() {
                  if ($(".item").hasClass("active")) {
                      $(".item").removeClass("active");
                  } else {
                      $(".item").addClass("active");
                  }
              });
          });
    
        </script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- Bootstrap CDN --}}
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> --}}
</head>
<body>
    <div id="app">
        <header class="showcase">
        <div class="container">
        <nav>

            {{-- <h1 class="logo">FreshStart Psychotherapy</h1> --}}
 
            <ul class="menu">

                <img href="/" class="logo-image" src="{{ asset('img/logo-ochre-sm.jpg') }}" alt="">


                    <li class="item">
                        <a class="" href="/about">About</a>
                    </li>
                    <li class="item">
                        <a class="" href="/fees">Fees</a>
                    </li>
                    <li class="item">
                        <a class="" href="/ourpeople">Our people</a>
                    </li>
                    <li class="item">
                        <a class="" href="/contact">Contact</a>
                    </li>

                    <!-- Authentication Links -->
                    @guest
                        <li class="item">
                            <a class="nav-link d-none" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="item">
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
                    <li class="toggle">
                        <span class="bars"></span>
                      </li>
                </ul>
        </nav>
    </header>
</div>

        <main class="py-2">
            @yield('content')
        </main>
        
@section('footer')
<footer class="footer">
    <div class="container footer-container">

            <div class="footer-content">            
                <p><strong>FreshStart Psychotherapy</strong></p>
                <p>020 7691 7638</p>
                <p><a href="mailto:enquiries@freshstartpsychotherapy.co.uk">enquiries@freshstartpsychotherapy.co.uk</a></p>  
            </div>

            <div class="footer-content">
                <a href="/privacyandcookies"><img class="social-icon" src="{{ asset('img/privacy.png') }}" alt="Privacy icon"></a>
            </div>

            <div class="footer-content">
                <p>Designed and developed by <a href="https://chillaweb.com/">ChillaWeb</a></p>
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
