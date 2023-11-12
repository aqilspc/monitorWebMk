<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ url ('/') }}">
            <span class="align-middle">Mikrotik</span>
        </a>

        <ul class="sidebar-nav">
   
            <li class="sidebar-item {!! url ('/') ? 'is-active' : '' !!}">
                <a class="sidebar-link" href="{{ url ('/')}}">
                    <i class="align-middle" data-feather="sliders"></i> <span
                        class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item {!! url ('/sign-in') ? 'is-active' : '' !!}">
                <a class="sidebar-link" href="{{ url ('/sign-in')}}">
                    <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Sign In</span>
                </a>
            </li>

            <li class="sidebar-item {!! url ('/connectUser') ? 'is-active' : '' !!}">
                <a class="sidebar-link" href="{{ url ('/connectUser')}}">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Connected Users</span>
                </a>
            </li>

            <li class="sidebar-item {!! url ('/blockedUser') ? 'is-active' : '' !!}">
                <a class="sidebar-link" href="{{ url ('/blockedUser')}}">
                    <i class="align-middle" data-feather="slash"></i> <span class="align-middle">Blocked Users</span>
                </a>
            </li>

        </ul>

    </div>
</nav>