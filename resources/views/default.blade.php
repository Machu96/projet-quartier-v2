<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    {!! Html::style('css/knacss.css') !!}
    {!! Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') !!}
    {!! Html::style('css/main.css') !!}

</head>

<body class="main">

<nav class="navigation">
    <div class="barre-menu" role="main">
        <a href="#" class="nav-button"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></a>
        <h2 class="mobile title">Vieux Lyon</h2>
    </div>
    <div class="menu">
        <ul class="content-menu">
            <a href="{{ route('home') }}"><li>{{ trans('menu.home') }}</li></a>
            <a href="{{ action('PlaceController@index') }}"><li>{{ trans('menu.lieux') }}</li></a>
            <a href="{{ action('CatalogController@index') }}"><li>{{ trans('menu.produit') }}</li></a>
            <a href="{{ action('JourneyController@index') }}"><li>{{ trans('menu.parcours') }}</li></a>
            <a href="{{ action('CartController@index') }}"><li>{{ trans('menu.panier') }}</li></a>


            <a href="{{ action('DashboardController@analytics') }}"><li>{{ trans('menu.connexion') }}</li></a>
            <li class="flex-container" id="flags-form">
                <form action="{!! url('language/fr') !!}" method="GET">
                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                    <button type="submit" name="lang" value="fr">
                        <svg class="flag" xmlns="http://www.w3.org/2000/svg" width="45" height="30"><rect width="45" height="30" fill="#ED2939"/><rect width="30" height="30" fill="#fff"/><rect width="15" height="30" fill="#002395"/></svg>
                    </button>
                </form>
                <form action="{!! url('language/en') !!}" method="GET">
                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
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
    </div>
</nav>
<div class="mobile black-layout"></div>

@yield('content')
<div id="footer-picture">
    <footer>
        <span>Copyright VieuxLyon 2016 - <a href="#">Mentions légales</a> - Institut G4</span>
    </footer>
</div>

{!! Html::script('js/jquery.js') !!}
@yield('script')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.debug.js"></script>
<script>

    (function() {

// old browser or not ?
        if ( !('querySelector' in document && 'addEventListener' in window) ) {
            return;
        }
        window.document.documentElement.className += 'js-enabled';

        function toggleNav() {

// Define targets
            var target = document.querySelector('.content-menu');
            var button = document.querySelector('.nav-button');
            var icon = document.querySelector('a i');
            var blackLayout = document.querySelector('.mobile.black-layout');


// click-touch event
            if ( button ) {
                button.addEventListener('click',function(e) {
                        target.classList.toggle('is-opened');
                        if(target.classList.contains('is-opened')){
                            icon.classList.remove('fa-bars');
                            icon.classList.add('fa-times');
                            blackLayout.classList.add('active');
                        }else {
                            icon.classList.remove('fa-times');
                                icon.classList.add('fa-bars');
                            blackLayout.classList.remove('active');
                        }
                        e.preventDefault();
                    }, false );
            }
        } // end toggleNav()

        toggleNav();
    }());
</script>

</body>
</html>
