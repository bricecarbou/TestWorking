<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.css" />
    </head>
    <body>
        <nav class="navbar is-light">
            <div class="navbar-start">
                <a href="/" class="navbar-item">Welcome</a>
            </div>
            <div class="navbar-end">
                @if(auth()->check())
                    <a href="/my-account" class="navbar-item">My account</a>
                    <a href="/disconnect" class="navbar-item">Disconnect</a>
                @else
                    <a href="/connexion" class="navbar-item">Connexion</a>
                    <a href="/subscribe" class="navbar-item">Subscribe</a>
                @endif

            </div>
        </nav>        
        
        <div class="container">
            @include('flash::message')
            
            @yield('contain')
        </div>
        
        <footer class="footer">
            <div class="content has-text-centered">
                <p>
                <a href="https://www.facebook.com/GreatEscapeFRCR/">Great Escape FR</a>
                </p>
            </div>
        </footer>
    </body>
</html>
