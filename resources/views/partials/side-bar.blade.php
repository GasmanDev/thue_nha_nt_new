<!-- NAVIGATION WIDGET -->
<nav id="navigation-widget-small" class="navigation-widget navigation-widget-desktop closed sidebar left delayed">

    <!-- MENU -->
    <ul class="menu small">
        <!-- MENU ITEM -->
        <li class="side-bar-dashboard menu-item">
            <!-- MENU ITEM LINK -->
            <a class="menu-item-link text-tooltip-tfr" href="{{ url('/home') }}"
                data-title="{{ __('sidebar.dashboard') }}">
                <!-- MENU ITEM LINK ICON -->
                <svg class="menu-item-link-icon icon-newsfeed">
                    <use xlink:href="#svg-newsfeed"></use>
                </svg>
                <!-- /MENU ITEM LINK ICON -->
            </a>
            <!-- /MENU ITEM LINK -->
        </li>
        <!-- /MENU ITEM -->
        <!-- MENU ITEM -->
        <li class="side-bar-users menu-item">
            <!-- MENU ITEM LINK -->
            <a class="menu-item-link text-tooltip-tfr" href="{{ url('/users') }}"
                data-title="{{ __('sidebar.userManagement') }}">
                <!-- MENU ITEM LINK ICON -->
                <svg class="menu-item-link-icon icon-members">
                    <use xlink:href="#svg-members"></use>
                </svg>
                <!-- /MENU ITEM LINK ICON -->
            </a>
            <!-- /MENU ITEM LINK -->
        </li>
        <!-- /MENU ITEM -->
    </ul>
    <!-- /MENU -->
</nav>
<!-- /NAVIGATION WIDGET -->

<!-- NAVIGATION WIDGET -->
<nav id="navigation-widget" class="navigation-widget navigation-widget-desktop sidebar left hidden" data-simplebar>
    <!-- MENU -->
    <ul class="menu">
        <!-- MENU ITEM -->
        <li class="side-bar-dashboard menu-item">
            <!-- MENU ITEM LINK -->
            <a class="menu-item-link" href="{{ url('/home') }}">
                <!-- MENU ITEM LINK ICON -->
                <svg class="menu-item-link-icon icon-newsfeed">
                    <use xlink:href="#svg-newsfeed"></use>
                </svg>
                <!-- /MENU ITEM LINK ICON -->
                {{ __('sidebar.dashboard') }}
            </a>
            <!-- /MENU ITEM LINK -->
        </li>
        <!-- /MENU ITEM -->

        <!-- MENU ITEM -->
        <li class="side-bar-users menu-item">
            <!-- MENU ITEM LINK -->
            <a class="menu-item-link" href="members.html">
                <!-- MENU ITEM LINK ICON -->
                <svg class="menu-item-link-icon icon-members">
                    <use xlink:href="#svg-members"></use>
                </svg>
                <!-- /MENU ITEM LINK ICON -->
                {{ __('sidebar.userManagement') }}
            </a>
            <!-- /MENU ITEM LINK -->
        </li>
        <!-- /MENU ITEM -->
    </ul>
    <!-- /MENU -->
</nav>
<!-- /NAVIGATION WIDGET -->

<!-- NAVIGATION WIDGET -->
<nav id="navigation-widget-mobile" class="navigation-widget navigation-widget-mobile sidebar left hidden"
    data-simplebar>
    <!-- NAVIGATION WIDGET CLOSE BUTTON -->
    <div class="navigation-widget-close-button">
        <!-- NAVIGATION WIDGET CLOSE BUTTON ICON -->
        <svg class="navigation-widget-close-button-icon icon-back-arrow">
            <use xlink:href="#svg-back-arrow"></use>
        </svg>
        <!-- NAVIGATION WIDGET CLOSE BUTTON ICON -->
    </div>
    <!-- /NAVIGATION WIDGET CLOSE BUTTON -->

    <!-- NAVIGATION WIDGET INFO WRAP -->
    <div class="navigation-widget-info-wrap">
        <!-- NAVIGATION WIDGET BUTTON -->
        <p class="navigation-widget-info-button button small secondary">{{ trans('titles.logout') }}</p>
        <!-- /NAVIGATION WIDGET BUTTON -->
    </div>
    <!-- /NAVIGATION WIDGET INFO WRAP -->

    <!-- NAVIGATION WIDGET SECTION TITLE -->
    <p class="navigation-widget-section-title">{{ trans('common.sections') }}</p>
    <!-- /NAVIGATION WIDGET SECTION TITLE -->

    <!-- MENU -->
    <ul class="menu">
        <!-- MENU ITEM -->
        <li class="side-bar-dashboard menu-item">
            <!-- MENU ITEM LINK -->
            <a class="menu-item-link" href="newsfeed.html">
                <!-- MENU ITEM LINK ICON -->
                <svg class="menu-item-link-icon icon-newsfeed">
                    <use xlink:href="#svg-newsfeed"></use>
                </svg>
                <!-- /MENU ITEM LINK ICON -->
                {{ trans('sidebar.dashboard') }}
            </a>
            <!-- /MENU ITEM LINK -->
        </li>
        <!-- /MENU ITEM -->

        <!-- MENU ITEM -->
        <li class="side-bar-users menu-item">
            <!-- MENU ITEM LINK -->
            <a class="menu-item-link" href="overview.html">
                <!-- MENU ITEM LINK ICON -->
                <svg class="menu-item-link-icon icon-members">
                    <use xlink:href="#svg-members"></use>
                </svg>
                <!-- /MENU ITEM LINK ICON -->
                {{ trans('sidebar.userManagement') }}
            </a>
            <!-- /MENU ITEM LINK -->
        </li>
        <!-- /MENU ITEM -->
    </ul>
    <!-- /MENU -->



    <!-- NAVIGATION WIDGET SECTION TITLE -->
    <p class="navigation-widget-section-title">{{ trans('common.myProfile') }}</p>
    <!-- /NAVIGATION WIDGET SECTION TITLE -->

    <!-- NAVIGATION WIDGET SECTION LINK -->
    <a class="navigation-widget-section-link"
        href="{{ url('/profile/' . Auth::user()->name) }}">{!! trans('titles.profile') !!}</a>
    <!-- /NAVIGATION WIDGET SECTION LINK -->
    <!-- NAVIGATION WIDGET SECTION LINK -->
    <a class="navigation-widget-section-link" href="{{ route('home') }}">{{ trans('common.home') }}</a>
    <!-- /NAVIGATION WIDGET SECTION LINK -->
</nav>
<script type="text/javascript">
    const sidebar_active = "<?php echo $sidebar_active; ?>";
    if (sidebar_active && sidebar_active !== '') {
        const need_active = document.getElementsByClassName(`side-bar-${sidebar_active}`);
        if (need_active.length > 0) {
            for (let i = 0, length = need_active.length; i < length; i++) {
                need_active[i].classList.add('active');
            }
        }
    }

</script>
<!-- /NAVIGATION WIDGET -->
