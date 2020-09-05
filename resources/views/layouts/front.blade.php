<!DOCTYPE html>
<html lang="{{ app()->getlocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,inital-scale=1">
        
        <!--CSRF Token-->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>@yield('title')</title>
        
        <!--Script-->
        <script src="{{ secure_asset('js/app.js') }}"defer></script>
        
        <!--Fonts-->
        
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com.com/css?family=raieway:300,400,600" rel="stylesheet" type="text/css">
        
        <!--styles-->
        
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        
        <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
        </head>
        <body>
            <ul class="navbar-nav ml-auto">
                @guest
              <li><a class="nav-link" href="{{ route('login') }}">{{ __('login') }}</a></li>
              @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
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
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
        </body>
</html>
            
                
                
                        
                            
                        
                        
                            
                            
                        