<div class="col-md-12">
    <div class="de-flex sm-pt10">
        <div class="de-flex-col">
            <!-- logo begin -->
            <div id="logo">
                <a href="{{ route('index') }}">
                    <img alt="" class="logo" src="images/logo-light.png" />
                    <img alt="" class="logo-2" src="images/logo-green.png" />
                </a>
            </div>
            <!-- logo close -->
        </div>
        <div class="de-flex-col header-col-mid">
            <!-- mainmenu begin -->
            <ul id="mainmenu">
                <li>
                    <a href="{{ route('index') }}">Inicio<span></span></a>
                </li>
                <li>
                    <a href="#">Seguros<span></span></a>
                    <ul>
                        <li><a href="{{ route('lifeinsurance') }}">Seguro de vida</a></li>
                        <li><a href="{{ route('homeinsurance') }}">Seguro de hogar</a></li>
                        <li><a href="{{ route('carinsurance') }}">Seguro de coche</a></li>

                    </ul>
                </li>
                @guest
                    @if (Route::has('login'))
                        <li>
                            <a href="{{ route('logueo') }}">Login<span></span></a>
                        </li>
                    @endif
                    @if (Route::has('register'))
                        <li>
                            <a href="{{ route('registro') }}">Registro<span></span></a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ ucfirst(Auth::user()->name) }}
                        </a>
                        <ul>
                            <li><a href="{{ route('home') }}">Administrar</a> </li>
                            <li><a class="" href="{{ route('logout') }}"
                                   onclick="event.preventDefault()
                                            document.getElementById('logout-form').submit()">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form></li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
        <div class="de-flex-col">
            <div class="h-phone"><span>Necesitas ayuda?</span><i class="fa fa-phone"></i> +34 959 48 99 04</div>
            <span id="menu-btn"></span>
        </div>
    </div>
</div>
