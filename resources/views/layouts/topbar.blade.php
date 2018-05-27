<nav class="navbar navbar-expand-md navbar-fixed-top">
    <div class="container-fluid">
        <a href="#menu-toggle" class="mr-5" id="menu-toggle">
            <i class="fa fa-bars"> </i>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                <li><a class="nav-link" href="{{ route('register') }}">{{ __('Cadastre-se') }}</a></li>
                @else
                <li class="nav-item dropdown" style="display: flex;">
                    <img class="user-img" src="images/user.png">
                    <a id="navbarDropdown" 
                       class="nav-link dropdown-toggle" 
                       href="#" role="button"
                       data-toggle="dropdown" 
                       aria-haspopup="true" 
                       aria-expanded="false" 
                       v-pre>
                        {{ Auth::user()->name}} {{Auth::user()->surname}}
                        <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="">
                            <i class="fa fa-user-astronaut"></i> Meu Perfil
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                <i class="fa fa-space-shuttle"></i>
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