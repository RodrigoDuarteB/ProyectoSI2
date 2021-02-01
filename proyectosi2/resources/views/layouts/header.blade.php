    @auth
        <header>
            @include('layouts.menu-sidebar')
        </header>
    @endauth
    <nav class="navbar nav-extended no-padding dark-primary-color" style="margin-bottom: 20px">
        <div class="nav-wrapper">
            <a href="{{ auth()->check() ? route('home') : route('index') }}" class="brand-logo center hide-on-small-only">Title</a>
            @auth
                <ul id="nav-mobile" class="right">
                    <li><a href="{{ route('home') }}" class="waves-effect dark-primary-color-text" type="submit"><i class="material-icons">person</i></a></li>
                    <li><a href="{{ route('logout') }}" class="waves-effect dark-primary-color-text" type="submit">Cerrar sesión</a></li>
                </ul>
                <a href="#!" data-target="sidenav-left" class="sidenav-trigger left show-on-medium-and-up"><i class="material-icons dark-primary-color-icon">menu</i></a>

            @endauth
            @yield('breadcrumb')
        </div>
    </nav>
