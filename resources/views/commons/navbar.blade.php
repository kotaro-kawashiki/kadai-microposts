<header>
    <nav class="navbar navbar-light bg-primary navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h1><a class="navbar-brand" href="/" style="color:black; font-size:120%;">Taroposts</a></h1>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right pager">
                    @if (Auth::check())
                        <li>{!! link_to_route('users.index', 'Users', ['class' => 'btn-secondary']) !!}</li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-header">menus</li>
                                <li>{!! link_to_route('users.show', 'Myprofile', ['id' => Auth::user()->id]) !!}</li>
                                <li>{!! link_to_route('users.favorites', 'Favorites', ['id' => Auth::user()->id]) !!}</li>
                                <li role="separator" class="divider"></li>
                                <li>{!! link_to_route('logout.get', 'Logout') !!}</li>
                            </ul>
                        </li>
                    @else
                        <li>{!! link_to_route('signup.get', 'Signup') !!}</li>
                        <li>{!! link_to_route('login', 'Login') !!}</li>
                    @endif
                    
                </ul>
            </div>
        </div>
    </nav>
</header>