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
                <a href="/" class="navbar-item">
                    <img alt='Welcome' src="https://vignette.wikia.nocookie.net/clashroyale/images/b/b0/Trade_Tokens.png" />
                </a>
                @if((auth()->check()) AND auth()->user()->role->name === 'admin')
                    <a href ="/traders" class=navbar-item> {{\App\Trader::countTraders()}} traders</a>
                    <a href="/trads "class=navbar-item> {{\App\Trad::countTrads()}} trads ongoing</a>
                @elseif (auth()->check())
                    <a href ="/traders" class=navbar-item> {{\App\Trader::countGroupTraders()}} traders</a>
                    <a href="/trads "class=navbar-item> {{\App\Trad::countGroupTrads()}} trads ongoing</a>
                @endif
            </div>
            <div class="navbar-end">
                @if((auth()->check()) AND auth()->user()->role->name === 'admin')
                    <a href="/my-account" class="navbar-item {{ request()->is('my-account') ? 'is-active' : ''}}">
                        <img alt="{{auth()->user()->nick}}" src="https://vignette.wikia.nocookie.net/clashroyale/images/4/47/Blue_King.png" />   
                    </a>
                    <a href="/admin_card_enter" class="navbar-item {{ request()->is('admin_card_enter') ? 'is-active' : ''}}">New Card</a>
                    <a href="/admin_card_delete" class="navbar-item {{ request()->is('admin_card_delete') ? 'is-active' : ''}}">Delete Card</a>
                    <a href="/admin_new_group" class="navbar-item {{ request()->is('admin_new_group') ? 'is-active' : ''}}">Manage Groups</a>
                    <a href="/disconnect" class="navbar-item {{ request()->is('disconnect') ? 'is-active' : ''}}">
                        <img alt="Disconnect" src="https://cdn3.iconfinder.com/data/icons/fatcow/32/disconnect.png" />
                    </a>                
                @elseif (auth()->check())
                    @if(auth()->user()->role->name === 'leader')
                        <a href="/leader_page" class="navbar-item {{ request()->is('leader_page') ? 'is-active' : ''}}">Leader Page</a>
                    @endif
                    <a href="/my-account" class="navbar-item {{ request()->is('my-account') ? 'is-active' : ''}}">
                        <img alt="{{auth()->user()->nick}}" src="https://vignette.wikia.nocookie.net/clashroyale/images/4/47/Blue_King.png" />
                    </a>                   
                    <a href="/my-trads" class="navbar-item {{ request()->is('my-trads') ? 'is-active' : ''}}">
                        <img alt="My trads" src="http://chittagongit.com//images/arrows-icon/arrows-icon-13.jpg" />
                    </a>
                    <a href="/disconnect" class="navbar-item {{ request()->is('disconnect') ? 'is-active' : ''}}">
                        <img alt="Disconnect" src="https://cdn3.iconfinder.com/data/icons/fatcow/32/disconnect.png" />
                    </a>
                @else
                    <a href="/connexion" class="navbar-item {{ request()->is('connexion') ? 'is-active' : ''}}">Connexion</a>
                    <a href="/subscribe" class="navbar-item {{ request()->is('subscribe') ? 'is-active' : ''}}">Subscribe</a>
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
                    <br />
                    <a target="_blank" style="color:#B0C4DE" href="https://organit.fr/">
                    <img src="{{ asset('img/logo_organit.png') }}" href="https://organit.fr/" height="150" width="275"/>
                    <br /> Développons Votre Application Métier</a>
                </p>
            </div>
        </footer>
    </body>
</html>
