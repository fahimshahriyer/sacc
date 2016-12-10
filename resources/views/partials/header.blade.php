<header class="layout-header layout-header-primary">
    <nav class="navbar navbar-default">
        <div class="drawer-button">
            <i class="icon-menu"></i>
        </div>

        <span class="navbar-title">Dashboard</span>
        <div class="search-form">
            <i class="icon-search"></i>
            <input type="text" name="search" id="search" placeholder="Search">
        </div>
        <div class="navbar-spacer"></div>
        <div data-uk-dropdown="{mode:'click', pos:'bottom-right'}" style="position: relative;">
            <a class="nav-link">
                <img src="/avatar.png" class="uk-border-circle" alt="avatar" width="36px" height="36px">
                <span class="uk-margin-left">{{ Auth::user()->name }}</span>
                <i class="icon-arrow-drop-down"></i>
            </a>
            <div class="uk-dropdown uk-dropdown-bottom">
                <ul class="uk-nav uk-nav-dropdown">
                    <li><a href="#">Item</a></li>
                    <li><a href="#">Another item</a></li>
                    <li class="uk-nav-header">Header</li>
                    <li><a href="#">Item</a></li>
                    <li><a href="#">Another item</a></li>
                    <li class="uk-nav-divider"></li>
                    <li>
                        <a href="{{ url('/logout') }}" onclick="event.preventDefault(); 
                            document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>