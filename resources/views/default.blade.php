<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        {!! Html::style('css/knacss.css') !!}
        {!! Html::style('css/style.css') !!}
        {!! Html::style('css/home.css') !!}
        {!! Html::style('css/parcours.css') !!}
    </head>

    <body>
        {{--<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif
        </div>--}}
        <nav>
            <ul class="menu">
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li><a href="{{ action('PlaceController@index') }}">Lieux culturels</a></li>
                <li><a href="{{ action('CatalogController@index') }}">Produits</a></li>
                <li><a href="{{ action('JourneyController@index') }}">Parcours</a></li>
                <li><a href="{{ action('CartController@index') }}">Mon panier</a></li>
                <li>
                    <form id="flags-form" action="" method="get">
                        <button type="submit" name="lang" value="fr">
                            <svg class="flag" xmlns="http://www.w3.org/2000/svg" width="45" height="30"><rect width="45" height="30" fill="#ED2939"/><rect width="30" height="30" fill="#fff"/><rect width="15" height="30" fill="#002395"/></svg>
                        </button>

                        <button type="submit" name="lang" value="en">
                            <svg class="flag" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 30" width="50" height="30">
                                <clipPath id="t">
                                    <path d="M30,15 h30 v15 z v15 h-30 z h-30 v-15 z v-15 h30 z"/>
                                </clipPath>
                                <path d="M0,0 v30 h60 v-30 z" fill="#00247d"/>
                                <path d="M0,0 L60,30 M60,0 L0,30" stroke="#fff" stroke-width="6"/>
                                <path d="M0,0 L60,30 M60,0 L0,30" clip-path="url(#t)" stroke="#cf142b" stroke-width="4"/>
                                <path d="M30,0 v30 M0,15 h60" stroke="#fff" stroke-width="10"/>
                                <path d="M30,0 v30 M0,15 h60" stroke="#cf142b" stroke-width="6"/>
                            </svg>
                        </button>
                    </form>
                </li>
            </ul>
        </nav>

        <div>
            @yield('content')
        </div>


        {!! Html::script('js/jquery.js') !!}
        @yield('script')
    </body>
</html>
