{{-- <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {!! config('app.name', trans('titles.app')) !!}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="sr-only">{!! trans('titles.toggleNav') !!}</span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent"> --}}
{{-- Left Side Of Navbar --}}


{{-- <ul class="navbar-nav mr-auto">
                @role('admin')
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {!! trans('titles.adminDropdownNav') !!}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item {{ (Request::is('roles') || Request::is('permissions')) ? 'active' : null }}" href="{{ route('laravelroles::roles.index') }}">
                                {!! trans('titles.laravelroles') !!}
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item {{ Request::is('users', 'users/' . Auth::user()->id, 'users/' . Auth::user()->id . '/edit') ? 'active' : null }}" href="{{ url('/users') }}">
                                {!! trans('titles.adminUserList') !!}
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item {{ Request::is('users/create') ? 'active' : null }}" href="{{ url('/users/create') }}">
                                {!! trans('titles.adminNewUser') !!}
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item {{ Request::is('themes','themes/create') ? 'active' : null }}" href="{{ url('/themes') }}">
                                {!! trans('titles.adminThemesList') !!}
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item {{ Request::is('logs') ? 'active' : null }}" href="{{ url('/logs') }}">
                                {!! trans('titles.adminLogs') !!}
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item {{ Request::is('activity') ? 'active' : null }}" href="{{ url('/activity') }}">
                                {!! trans('titles.adminActivity') !!}
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item {{ Request::is('phpinfo') ? 'active' : null }}" href="{{ url('/phpinfo') }}">
                                {!! trans('titles.adminPHP') !!}
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item {{ Request::is('routes') ? 'active' : null }}" href="{{ url('/routes') }}">
                                {!! trans('titles.adminRoutes') !!}
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item {{ Request::is('active-users') ? 'active' : null }}" href="{{ url('/active-users') }}">
                                {!! trans('titles.activeUsers') !!}
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item {{ Request::is('blocker') ? 'active' : null }}" href="{{ route('laravelblocker::blocker.index') }}">
                                {!! trans('titles.laravelBlocker') !!}
                            </a>
                        </div>
                    </li>
                @endrole
            </ul> --}}


{{-- Right Side Of Navbar
            <ul class="navbar-nav ml-auto">
                {{-- Authentication Links --}}
{{-- @guest
                    <li><a class="nav-link" href="{{ route('login') }}">{{ trans('titles.login') }}</a></li>
                    @if (Route::has('register'))
                        <li><a class="nav-link" href="{{ route('register') }}">{{ trans('titles.register') }}</a></li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            @if (Auth::User()->profile && Auth::user()->profile->avatar_status == 1)
                                <img src="{{ Auth::user()->profile->avatar }}" alt="{{ Auth::user()->name }}" class="user-avatar-nav">
                            @else
                                <div class="user-avatar-nav"></div>
                            @endif
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item {{ Request::is('profile/'.Auth::user()->name, 'profile/'.Auth::user()->name . '/edit') ? 'active' : null }}" href="{{ url('/profile/'.Auth::user()->name) }}">
                                {!! trans('titles.profile') !!}
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
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
</nav> --}}




<header class="header">
    <!-- HEADER ACTIONS -->
    <div class="header-actions">
        <!-- HEADER BRAND -->
        <div class="header-brand">
            <!-- LOGO -->
            <div class="logo">
                <!-- ICON LOGO VIKINGER -->
                <svg class="icon-logo-vikinger small">
                    <use xlink:href="#svg-logo-vikinger"></use>
                </svg>
                <!-- /ICON LOGO VIKINGER -->
            </div>
            <!-- /LOGO -->

            <!-- HEADER BRAND TEXT -->
            <h1 class="header-brand-text">Vikinger</h1>
            <!-- /HEADER BRAND TEXT -->
        </div>
        <!-- /HEADER BRAND -->
    </div>
    <!-- /HEADER ACTIONS -->

    <!-- HEADER ACTIONS -->
    <div class="header-actions">
        <!-- SIDEMENU TRIGGER -->
        <div class="sidemenu-trigger navigation-widget-trigger">
            <!-- ICON GRID -->
            <svg class="icon-grid">
                <use xlink:href="#svg-grid"></use>
            </svg>
            <!-- /ICON GRID -->
        </div>
        <!-- /SIDEMENU TRIGGER -->

        <!-- MOBILEMENU TRIGGER -->
        <div class="mobilemenu-trigger navigation-widget-mobile-trigger">
            <!-- BURGER ICON -->
            <div class="burger-icon inverted">
                <!-- BURGER ICON BAR -->
                <div class="burger-icon-bar"></div>
                <!-- /BURGER ICON BAR -->

                <!-- BURGER ICON BAR -->
                <div class="burger-icon-bar"></div>
                <!-- /BURGER ICON BAR -->

                <!-- BURGER ICON BAR -->
                <div class="burger-icon-bar"></div>
                <!-- /BURGER ICON BAR -->
            </div>
            <!-- /BURGER ICON -->
        </div>
        <!-- /MOBILEMENU TRIGGER -->

        <!-- NAVIGATION -->
        <nav class="navigation">
            <!-- MENU MAIN -->
            <ul class="menu-main">
                <!-- MENU MAIN ITEM -->
                <li class="menu-main-item">
                    <!-- MENU MAIN ITEM LINK -->
                    <a class="menu-main-item-link" href="{{ url('/home') }}">Home</a>
                    <!-- /MENU MAIN ITEM LINK -->
                </li>
                <!-- /MENU MAIN ITEM -->
            </ul>
            <!-- /MENU MAIN -->
        </nav>
        <!-- /NAVIGATION -->
    </div>

    <!-- /HEADER ACTIONS -->
    <div class="flex-fill"></div>

    <!-- HEADER ACTIONS -->
    <div class="header-actions">
        <!-- ACTION LIST -->
        <div class="action-list dark">
            <div class="action-list-item-wrap">
                <!-- ACTION ITEM -->
                <div class="action-list-item dark header-settings-dropdown-trigger">
                    <!-- ACTION ITEM ICON -->
                    <svg class="action-item-icon icon-settings">
                        <use xlink:href="#svg-settings"></use>
                    </svg>
                    <!-- /ACTION ITEM ICON -->
                </div>
                <!-- /ACTION ITEM -->

                <!-- DROPDOWN NAVIGATION -->
                <div class="dropdown-navigation header-settings-dropdown">
                    <div class="dropdown-divider"></div>
                    <!-- /DROPDOWN NAVIGATION LINK -->

                    <!-- DROPDOWN NAVIGATION LINK -->
                    <a class="dropdown-navigation-link {{ Request::is('roles') || Request::is('permissions') ? 'active' : null }}"
                        href="{{ route('laravelroles::roles.index') }}">
                        {!! trans('titles.laravelroles') !!}
                    </a>
                    <!-- /DROPDOWN NAVIGATION LINK -->

                    <!-- DROPDOWN NAVIGATION LINK -->
                    <a class="dropdown-navigation-link {{ Request::is('users', 'users/' . Auth::user()->id, 'users/' . Auth::user()->id . '/edit') ? 'active' : null }}"
                        href="{{ url('/users') }}">
                        {!! trans('titles.adminUserList') !!}
                    </a>
                    <!-- /DROPDOWN NAVIGATION LINK -->

                    <!-- DROPDOWN NAVIGATION LINK -->
                    <a class="dropdown-navigation-link {{ Request::is('users/create') ? 'active' : null }}"
                        href="{{ url('/users/create') }}">
                        {!! trans('titles.adminNewUser') !!}
                    </a>
                    <!-- /DROPDOWN NAVIGATION LINK -->

                    <!-- DROPDOWN NAVIGATION LINK -->
                    <a class="dropdown-navigation-link  {{ Request::is('logs') ? 'active' : null }}"
                        href="{{ url('/logs') }}">
                        {!! trans('titles.adminLogs') !!}
                    </a>
                    <!-- /DROPDOWN NAVIGATION LINK -->

                    <!-- DROPDOWN NAVIGATION CATEGORY -->
                    <p class="dropdown-navigation-category">Account</p>
                    <!-- /DROPDOWN NAVIGATION CATEGORY -->

                    <!-- DROPDOWN NAVIGATION LINK -->
                    <a class="dropdown-navigation-link {{ Request::is('activity') ? 'active' : null }}"
                        href="{{ url('/activity') }}">
                        {!! trans('titles.adminActivity') !!}
                    </a>
                    <!-- /DROPDOWN NAVIGATION LINK -->

                    <!-- DROPDOWN NAVIGATION LINK -->
                    <a class="dropdown-navigation-link {{ Request::is('phpinfo') ? 'active' : null }}"
                        href="{{ url('/phpinfo') }}">
                        {!! trans('titles.adminPHP') !!}
                    </a>
                    <!-- /DROPDOWN NAVIGATION LINK -->

                    <!-- DROPDOWN NAVIGATION LINK -->
                    <a class="dropdown-navigation-link {{ Request::is('routes') ? 'active' : null }}"
                        href="{{ url('/routes') }}">
                        {!! trans('titles.adminRoutes') !!}
                    </a>


                    <!-- DROPDOWN NAVIGATION LINK -->
                    <a class="dropdown-navigation-link {{ Request::is('active-users') ? 'active' : null }}"
                        href="{{ url('/active-users') }}">
                        {!! trans('titles.activeUsers') !!}
                    </a>
                    <!-- /DROPDOWN NAVIGATION LINK -->

                    <!-- DROPDOWN NAVIGATION LINK -->
                    <a class="dropdown-navigation-link {{ Request::is('blocker') ? 'active' : null }}"
                        href="{{ route('laravelblocker::blocker.index') }}">
                        {!! trans('titles.laravelBlocker') !!}
                    </a>
                    <!-- /DROPDOWN NAVIGATION BUTTON -->
                </div>
                <!-- /DROPDOWN NAVIGATION -->
            </div>

            <!-- ACTION LIST ITEM WRAP -->
            <div class="action-list-item-wrap">
                <!-- ACTION LIST ITEM -->
                <div class="action-list-item unread header-dropdown-trigger">
                    <!-- ACTION LIST ITEM ICON -->
                    <svg class="action-list-item-icon icon-notification">
                        <use xlink:href="#svg-notification"></use>
                    </svg>
                    <!-- /ACTION LIST ITEM ICON -->
                </div>
                <!-- /ACTION LIST ITEM -->

                <!-- DROPDOWN BOX -->
                <div class="dropdown-box header-dropdown">
                    <!-- DROPDOWN BOX HEADER -->
                    <div class="dropdown-box-header">
                        <!-- DROPDOWN BOX HEADER TITLE -->
                        <p class="dropdown-box-header-title">Notifications</p>
                        <!-- /DROPDOWN BOX HEADER TITLE -->

                        <!-- DROPDOWN BOX HEADER ACTIONS -->
                        <div class="dropdown-box-header-actions">
                            <!-- DROPDOWN BOX HEADER ACTION -->
                            <p class="dropdown-box-header-action">Mark all as Read</p>
                            <!-- /DROPDOWN BOX HEADER ACTION -->

                            <!-- DROPDOWN BOX HEADER ACTION -->
                            <p class="dropdown-box-header-action">Settings</p>
                            <!-- /DROPDOWN BOX HEADER ACTION -->
                        </div>
                        <!-- /DROPDOWN BOX HEADER ACTIONS -->
                    </div>
                    <!-- /DROPDOWN BOX HEADER -->

                    <!-- DROPDOWN BOX LIST -->
                    <div class="dropdown-box-list" data-simplebar>
                        <!-- DROPDOWN BOX LIST ITEM -->
                        <div class="dropdown-box-list-item unread">
                            <!-- USER STATUS -->
                            <div class="user-status notification">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="profile-timeline.html">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-outline">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-30-32"
                                                data-src="{{ asset('dashboard/img/avatar/03s.jpg') }}"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR CONTENT -->

                                        <!-- USER AVATAR PROGRESS -->
                                        <!-- /USER AVATAR PROGRESS -->

                                        <!-- USER AVATAR PROGRESS BORDER -->
                                        <div class="user-avatar-progress-border">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-border-40-44"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR PROGRESS BORDER -->

                                        <!-- USER AVATAR BADGE -->
                                        <div class="user-avatar-badge">
                                            <!-- USER AVATAR BADGE BORDER -->
                                            <div class="user-avatar-badge-border">
                                                <!-- HEXAGON -->
                                                <div class="hexagon-22-24"></div>
                                                <!-- /HEXAGON -->
                                            </div>
                                            <!-- /USER AVATAR BADGE BORDER -->

                                            <!-- USER AVATAR BADGE CONTENT -->
                                            <div class="user-avatar-badge-content">
                                                <!-- HEXAGON -->
                                                <div class="hexagon-dark-16-18"></div>
                                                <!-- /HEXAGON -->
                                            </div>
                                            <!-- /USER AVATAR BADGE CONTENT -->

                                            <!-- USER AVATAR BADGE TEXT -->
                                            <p class="user-avatar-badge-text">16</p>
                                            <!-- /USER AVATAR BADGE TEXT -->
                                        </div>
                                        <!-- /USER AVATAR BADGE -->
                                    </div>
                                    <!-- /USER AVATAR -->
                                </a>
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <p class="user-status-title"><a class="bold" href="profile-timeline.html">Nick
                                        Grissom</a> posted a comment on your <a class="highlighted"
                                        href="profile-timeline.html">status update</a></p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TIMESTAMP -->
                                <p class="user-status-timestamp">2 minutes ago</p>
                                <!-- /USER STATUS TIMESTAMP -->

                                <!-- USER STATUS ICON -->
                                <div class="user-status-icon">
                                    <!-- ICON COMMENT -->
                                    <svg class="icon-comment">
                                        <use xlink:href="#svg-comment"></use>
                                    </svg>
                                    <!-- /ICON COMMENT -->
                                </div>
                                <!-- /USER STATUS ICON -->
                            </div>
                            <!-- /USER STATUS -->
                        </div>
                        <!-- /DROPDOWN BOX LIST ITEM -->

                        <!-- DROPDOWN BOX LIST ITEM -->
                        <div class="dropdown-box-list-item">
                            <!-- USER STATUS -->
                            <div class="user-status notification">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="profile-timeline.html">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-outline">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-30-32"
                                                data-src="{{ asset('dashboard/img/avatar/07.jpg') }}"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR CONTENT -->

                                        <!-- USER AVATAR PROGRESS -->
                                        <!-- /USER AVATAR PROGRESS -->

                                        <!-- USER AVATAR PROGRESS BORDER -->
                                        <div class="user-avatar-progress-border">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-border-40-44"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR PROGRESS BORDER -->

                                        <!-- USER AVATAR BADGE -->
                                        <div class="user-avatar-badge">
                                            <!-- USER AVATAR BADGE BORDER -->
                                            <div class="user-avatar-badge-border">
                                                <!-- HEXAGON -->
                                                <div class="hexagon-22-24"></div>
                                                <!-- /HEXAGON -->
                                            </div>
                                            <!-- /USER AVATAR BADGE BORDER -->

                                            <!-- USER AVATAR BADGE CONTENT -->
                                            <div class="user-avatar-badge-content">
                                                <!-- HEXAGON -->
                                                <div class="hexagon-dark-16-18"></div>
                                                <!-- /HEXAGON -->
                                            </div>
                                            <!-- /USER AVATAR BADGE CONTENT -->

                                            <!-- USER AVATAR BADGE TEXT -->
                                            <p class="user-avatar-badge-text">26</p>
                                            <!-- /USER AVATAR BADGE TEXT -->
                                        </div>
                                        <!-- /USER AVATAR BADGE -->
                                    </div>
                                    <!-- /USER AVATAR -->
                                </a>
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <p class="user-status-title"><a class="bold" href="profile-timeline.html">Sarah
                                        Diamond</a> left a like <img class="reaction"
                                        src="{{ asset('dashboard/img/reaction/like.png') }}" alt="reaction-like">
                                    reaction on your <a class="highlighted" href="profile-timeline.html">status
                                        update</a></p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TIMESTAMP -->
                                <p class="user-status-timestamp">17 minutes ago</p>
                                <!-- /USER STATUS TIMESTAMP -->

                                <!-- USER STATUS ICON -->
                                <div class="user-status-icon">
                                    <!-- ICON THUMBS UP -->
                                    <svg class="icon-thumbs-up">
                                        <use xlink:href="#svg-thumbs-up"></use>
                                    </svg>
                                    <!-- /ICON THUMBS UP -->
                                </div>
                                <!-- /USER STATUS ICON -->
                            </div>
                            <!-- /USER STATUS -->
                        </div>
                        <!-- /DROPDOWN BOX LIST ITEM -->

                        <!-- DROPDOWN BOX LIST ITEM -->
                        <div class="dropdown-box-list-item">
                            <!-- USER STATUS -->
                            <div class="user-status notification">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="profile-timeline.html">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-outline">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-30-32"
                                                data-src="{{ asset('dashboard/img/avatar/02.jpg') }}"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR CONTENT -->

                                        <!-- USER AVATAR PROGRESS -->
                                        <div class="user-avatar-progress">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-progress-40-44"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR PROGRESS -->

                                        <!-- USER AVATAR PROGRESS BORDER -->
                                        <div class="user-avatar-progress-border">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-border-40-44"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR PROGRESS BORDER -->

                                        <!-- USER AVATAR BADGE -->
                                        <div class="user-avatar-badge">
                                            <!-- USER AVATAR BADGE BORDER -->
                                            <div class="user-avatar-badge-border">
                                                <!-- HEXAGON -->
                                                <div class="hexagon-22-24"></div>
                                                <!-- /HEXAGON -->
                                            </div>
                                            <!-- /USER AVATAR BADGE BORDER -->

                                            <!-- USER AVATAR BADGE CONTENT -->
                                            <div class="user-avatar-badge-content">
                                                <!-- HEXAGON -->
                                                <div class="hexagon-dark-16-18"></div>
                                                <!-- /HEXAGON -->
                                            </div>
                                            <!-- /USER AVATAR BADGE CONTENT -->

                                            <!-- USER AVATAR BADGE TEXT -->
                                            <p class="user-avatar-badge-text">13</p>
                                            <!-- /USER AVATAR BADGE TEXT -->
                                        </div>
                                        <!-- /USER AVATAR BADGE -->
                                    </div>
                                    <!-- /USER AVATAR -->
                                </a>
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <p class="user-status-title"><a class="bold" href="profile-timeline.html">Destroy
                                        Dex</a> posted a comment on your <a class="highlighted"
                                        href="profile-photos.html">photo</a></p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TIMESTAMP -->
                                <p class="user-status-timestamp">31 minutes ago</p>
                                <!-- /USER STATUS TIMESTAMP -->

                                <!-- USER STATUS ICON -->
                                <div class="user-status-icon">
                                    <!-- ICON COMMENT -->
                                    <svg class="icon-comment">
                                        <use xlink:href="#svg-comment"></use>
                                    </svg>
                                    <!-- /ICON COMMENT -->
                                </div>
                                <!-- /USER STATUS ICON -->
                            </div>
                            <!-- /USER STATUS -->
                        </div>
                        <!-- /DROPDOWN BOX LIST ITEM -->

                        <!-- DROPDOWN BOX LIST ITEM -->
                        <div class="dropdown-box-list-item">
                            <!-- USER STATUS -->
                            <div class="user-status notification">
                                <!-- USER STATUS AVATAR -->
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <p class="user-status-title"><a class="bold" href="profile-timeline.html">The Green
                                        Goo</a> left a love <img class="reaction"
                                        src="{{ asset('dashboard/img/reaction/love.png') }}" alt="reaction-love">
                                    reaction on your <a class="highlighted" href="profile-timeline.html">status
                                        update</a></p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TIMESTAMP -->
                                <p class="user-status-timestamp">2 hours ago</p>
                                <!-- /USER STATUS TIMESTAMP -->

                                <!-- USER STATUS ICON -->
                                <div class="user-status-icon">
                                    <!-- ICON THUMBS UP -->
                                    <svg class="icon-thumbs-up">
                                        <use xlink:href="#svg-thumbs-up"></use>
                                    </svg>
                                    <!-- /ICON THUMBS UP -->
                                </div>
                                <!-- /USER STATUS ICON -->
                            </div>
                            <!-- /USER STATUS -->
                        </div>
                        <!-- /DROPDOWN BOX LIST ITEM -->
                    </div>
                    <!-- /DROPDOWN BOX LIST -->

                    <!-- DROPDOWN BOX BUTTON -->
                    <a class="dropdown-box-button secondary" href="hub-profile-notifications.html">View all
                        Notifications</a>
                    <!-- /DROPDOWN BOX BUTTON -->
                </div>
                <!-- /DROPDOWN BOX -->
            </div>
            <!-- /ACTION LIST ITEM WRAP -->
        </div>
        <!-- /ACTION LIST -->

        <!-- ACTION ITEM WRAP -->
        <div class="action-item-wrap">
            <!-- ACTION ITEM -->
            <div class="action-item dark header-settings-dropdown-trigger">
                <!-- ACTION ITEM ICON -->
                <svg class="action-item-icon icon-members">
                    <use xlink:href="#svg-members"></use>
                </svg>

                <!-- /ACTION ITEM ICON -->
            </div>
            <!-- /ACTION ITEM -->

            <!-- DROPDOWN NAVIGATION -->
            <div class="dropdown-navigation header-settings-dropdown">
                <!-- DROPDOWN NAVIGATION HEADER -->
                <div class="dropdown-navigation-header">
                    <!-- USER STATUS -->
                    <div class="user-status">
                        <p class="user-status-title">
                            <span class="bold">
                                Hi
                                {{ Auth::user()->name }}
                            </span>
                        </p>
                    </div>
                    <!-- /USER STATUS -->
                </div>
                <!-- /DROPDOWN NAVIGATION HEADER -->

                <!-- DROPDOWN NAVIGATION CATEGORY -->
                <p class="dropdown-navigation-category">My Profile</p>
                <!-- /DROPDOWN NAVIGATION CATEGORY -->

                <!-- DROPDOWN NAVIGATION LINK -->
                {{-- <a class="dropdown-navigation-link" href="hub-profile-info.html">Profile Info</a> --}}
                <a class="dropdown-navigation-link {{ Request::is('profile/' . Auth::user()->name, 'profile/' . Auth::user()->name . '/edit') ? 'active' : null }}"
                    href="{{ url('/profile/' . Auth::user()->name) }}">
                    {!! trans('titles.profile') !!}
                </a>
                <div class="dropdown-divider"></div>
                <!-- /DROPDOWN NAVIGATION LINK -->

                <!-- DROPDOWN NAVIGATION LINK -->
                <a class="dropdown-navigation-link" href="hub-profile-social.html">Social &amp; Stream</a>
                <!-- /DROPDOWN NAVIGATION LINK -->

                <!-- DROPDOWN NAVIGATION LINK -->
                <a class="dropdown-navigation-link" href="hub-profile-notifications.html">Notifications</a>
                <!-- /DROPDOWN NAVIGATION LINK -->

                <!-- DROPDOWN NAVIGATION LINK -->
                <a class="dropdown-navigation-link" href="hub-profile-messages.html">Messages</a>
                <!-- /DROPDOWN NAVIGATION LINK -->

                <!-- DROPDOWN NAVIGATION LINK -->
                <a class="dropdown-navigation-link" href="hub-profile-requests.html">Friend Requests</a>
                <!-- /DROPDOWN NAVIGATION LINK -->

                <!-- DROPDOWN NAVIGATION CATEGORY -->
                <p class="dropdown-navigation-category">Account</p>
                <!-- /DROPDOWN NAVIGATION CATEGORY -->

                <!-- DROPDOWN NAVIGATION LINK -->
                <a class="dropdown-navigation-link" href="hub-account-info.html">Account Info</a>
                <!-- /DROPDOWN NAVIGATION LINK -->

                <!-- DROPDOWN NAVIGATION LINK -->
                <a class="dropdown-navigation-link" href="hub-account-password.html">Change Password</a>
                <!-- /DROPDOWN NAVIGATION LINK -->

                <!-- DROPDOWN NAVIGATION LINK -->
                <a class="dropdown-navigation-link" href="hub-account-settings.html">General Settings</a>
                <!-- /DROPDOWN NAVIGATION LINK -->



                <!-- DROPDOWN NAVIGATION CATEGORY -->
                <p class="dropdown-navigation-category">My Store</p>
                <!-- /DROPDOWN NAVIGATION CATEGORY -->

                <!-- DROPDOWN NAVIGATION LINK -->
                <a class="dropdown-navigation-link" href="hub-store-account.html">My Account <span
                        class="highlighted">$250,32</span></a>
                <!-- /DROPDOWN NAVIGATION LINK -->

                <!-- DROPDOWN NAVIGATION LINK -->
                <a class="dropdown-navigation-link" href="hub-store-statement.html">Sales Statement</a>
                <!-- /DROPDOWN NAVIGATION LINK -->

                <!-- DROPDOWN NAVIGATION LINK -->
                <a class="dropdown-navigation-link" href="hub-store-items.html">Manage Items</a>
                <!-- /DROPDOWN NAVIGATION LINK -->

                <!-- DROPDOWN NAVIGATION LINK -->
                <a class="dropdown-navigation-link" href="hub-store-downloads.html">Downloads</a>
                <!-- /DROPDOWN NAVIGATION LINK -->

                <!-- DROPDOWN NAVIGATION BUTTON -->
                <a class="dropdown-navigation-button button small secondary" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <!-- /DROPDOWN NAVIGATION BUTTON -->
            </div>
            <!-- /DROPDOWN NAVIGATION -->
        </div>
        <!-- /ACTION ITEM WRAP -->
    </div>
    <!-- /HEADER ACTIONS -->
</header>
