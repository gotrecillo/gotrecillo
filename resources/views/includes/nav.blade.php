<nav class="nav is-dark">
    <div class="nav-left">
        <a class="nav-item" href="{{route('home')}}">
            <img class="logo" src="/images/logo-white.png" alt="Gotrecillo logo">
        </a>
    </div>

    <span class="nav-toggle">
        <span></span>
        <span></span>
        <span></span>
    </span>

    <div class="nav-right nav-menu">
        <a class="nav-item" href="https://github.com/gotrecillo" target="_blank">
            <span class="icon">
                <i class="fa fa-github"></i>
            </span>
        </a>
        <a class="nav-item {{isActiveRoute('home', 'is-active')}}" href="{{ route('home') }}">
            Home
        </a>
        <a class="nav-item {{isActiveRoute('contact', 'is-active')}}" href="{{ route('contact') }}">
            Contact
        </a>
    </div>
</nav>