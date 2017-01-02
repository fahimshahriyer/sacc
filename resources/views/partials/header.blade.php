<header class="layout-header layout-header-primary">
    <nav class="navbar navbar-default">
        <div class="drawer-button">
            <i class="icon-menu"></i>
        </div>

        <span class="navbar-title">@yield('title')</span>
        <div class="search-form">
            <i class="icon-search"></i>
            <input type="text" name="search" id="search" placeholder="Search">
        </div>
        <div class="navbar-spacer"></div>
        <a href="#overlay-menu" class="nav-link" data-uk-modal=""><i class="icon-add uk-icon-large"></i></a>
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
    <div id="overlay-menu" class="uk-modal">
        <div class="uk-modal-dialog uk-modal-dialog-large">
            <a href="" class="uk-modal-close uk-close"></a>
            <div class="uk-flex uk-flex-space-around">
                <ul class="home-navigation">
                    <li class="home-navigation-header">Students</li>
                    <li><a href="{{ route('invoice.create') }}" class="nav-link">New Invoice</a></li>
                    <li><a href="{{ route('payment.create') }}" class="nav-link">Receive Payment</a></li>
                    <li><a href="#" class="nav-link">New Adjustment</a></li>
                </ul>

                <ul class="home-navigation">
                    <li class="home-navigation-header">Payplan</li>
                    <li><a href="{{ route('fee.create') }}" class="nav-link">New Fee</a></li>
                    <li><a href="{{ route('fee.index') }}" class="nav-link">Fee List</a></li>
                    <li><a href="{{ route('payplan.create') }}" class="nav-link">New Payplan</a></li>
                    <li><a href="#" class="nav-link">Manage Subscriptions</a></li>
                    <li><a href="#" class="nav-link">Adjust Student Subscription</a></li>
                </ul>

                <ul class="home-navigation">
                    <li class="home-navigation-header">Employees</li>
                    <li><a href="{{ route('invoice.create') }}" class="nav-link">New Invoice</a></li>
                    <li><a href="{{ route('invoice.index') }}" class="nav-link">All Invoices</a></li>
                    <li><a href="" class="nav-link">Manage Invoices</a></li>
                </ul>

                <ul class="home-navigation">
                    <li class="home-navigation-header">Accounting</li>
                    <li><a href="#" class="nav-link">New Account</a></li>
                    <li><a href="#" class="nav-link">New Deposit</a></li>
                    <li><a href="#" class="nav-link">New Expense</a></li>
                    <li><a href="#" class="nav-link"></a></li>
                </ul>
            </div>
        </div>
    </div>
</header>