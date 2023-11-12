<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ url ('/') }}">
            <span class="align-middle">Mikrotik Monitor</span>
        </a>

        <ul class="sidebar-nav">
   
            <li class="sidebar-item {{Request::segment(1) == 'home' ? 'active' : ''}}">
                <a class="sidebar-link" href="{{ url ('/home')}}">
                    <i class="align-middle" data-feather="sliders"></i> <span
                        class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item {{Request::segment(1) == 'connectUser' ? 'active' : ''}}">
                <a class="sidebar-link" href="{{ url ('/connectUser')}}">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Connected Users</span>
                </a>
            </li>

            <li class="sidebar-item {{Request::segment(1) == 'blockedUser' ? 'active' : ''}}">
                <a class="sidebar-link" href="{{ url ('/blockedUser')}}">
                    <i class="align-middle" data-feather="slash"></i> <span class="align-middle">Blocked Users</span>
                </a>
            </li>

        </ul>

    </div>
</nav>