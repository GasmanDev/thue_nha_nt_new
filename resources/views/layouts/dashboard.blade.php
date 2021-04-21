<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="{{asset('dashboard/css/vendor/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('dashboard/css/styles.min.css')}}" rel="stylesheet">
<link href="{{asset('dashboard/css/vendor/simplebar.css')}}" rel="stylesheet">
<link href="{{asset('dashboard/img/favicon.ico')}}" rel="icon">


{{-- <script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script> --}}
{{-- @if (Auth::User() && (Auth::User()->profile) && $theme->link != null && $theme->link != 'null')
            <link rel="stylesheet" type="text/css" href="{{ $theme->link }}">
        @endif --}}

@yield('head')
@include('scripts.ga-analytics')

  <title>Vikinger | Marketplace</title>
</head>
<body>


  <!-- HEADER -->

@include('partials.nav')
  <!-- /HEADER -->
  <!-- CONTENT GRID --><div class="page-loader">
    <!-- PAGE LOADER DECORATION -->
    <div class="page-loader-decoration">
        <!-- ICON LOGO -->
        <svg class="icon-logo" viewBox="0 0 28 40" preserveAspectRatio="xMinYMin meet">
          <path d="M27.18,24.038c-0.141-0.095-0.244-0.146-0.244-0.146l-0.005-0.049C25.489,22.783,23.103,22,23.103,22c1.542,0,2.582-0.563,3.501-1.334c-0.049-0.055,0.7-0.666,0.7-0.666c0.146-8.251-4.477-12.745-7.001-14.667C18.15,9.564,16.802,14,16.802,14c-0.219-4.426,0.243-8.072,0.7-10.667c-0.85-0.452-1.956-0.698-2.296-1.537C14.865,0.957,14.015,0,14.015,0L14,0.014L13.985,0c0,0-0.85,0.957-1.19,1.796c-0.34,0.839-1.445,1.085-2.295,1.537C10.957,5.928,11.418,9.574,11.2,14c0,0-1.349-4.436-3.501-8.667C5.174,7.255,0.551,11.749,0.697,20c0,0,0.75,0.611,0.701,0.666C2.316,21.437,3.357,22,4.898,22c0,0-2.387,0.783-3.829,1.844l-0.005,0.049c0,0-0.104,0.051-0.244,0.146c-0.48,0.397-0.806,0.828-0.819,1.269c-0.023,0.521,0.263,1.181,1.233,1.973c0,0,0.136,9.259,9.69,11.29c0,0,0.212,0.815,0.975,1.431L14,38l2.102,2c0.763-0.615,0.975-1.431,0.975-1.431c9.555-2.031,9.689-11.29,9.689-11.29c0.971-0.792,1.256-1.451,1.233-1.973C27.986,24.866,27.659,24.436,27.18,24.038z M4.198,26c2.362,0.121,3.517,1.473,5.602,4c0.799,0.969,2.059,0.83,2.059,0.83L11.899,34C5.249,34,4.198,26,4.198,26z M14,28.162l-2.97-2.828l2.101-2.001l-2.101-2l2.101-2l-2.101-2L14,14.505l2.972,2.828l-2.102,2l2.102,2l-2.102,2l2.102,2.001L14,28.162z M16.102,34l0.041-3.17c0,0,1.26,0.139,2.059-0.83c2.085-2.527,3.239-3.879,5.602-4C23.803,26,22.752,34,16.102,34z M13.3,26h1.4v-1.333h-1.4V26z M13.3,22h1.4v-1.334h-1.4V22z M13.3,18h1.4v-1.333h-1.4V18z"/>
        </svg>
        <!-- /ICON LOGO -->
      </div>
      <!-- /PAGE LOADER DECORATION -->

      <!-- PAGE LOADER INFO -->
      <div class="page-loader-info">
        <!-- PAGE LOADER INFO TITLE -->
        <p class="page-loader-info-title">Vikinger</p>
        <!-- /PAGE LOADER INFO TITLE -->

        <!-- PAGE LOADER INFO TEXT -->
        <p class="page-loader-info-text">Loading...</p>
        <!-- /PAGE LOADER INFO TEXT -->
      </div>
      <!-- /PAGE LOADER INFO -->

      <!-- PAGE LOADER INDICATOR -->
      <div class="page-loader-indicator loader-bars">
        <div class="loader-bar"></div>
        <div class="loader-bar"></div>
        <div class="loader-bar"></div>
        <div class="loader-bar"></div>
        <div class="loader-bar"></div>
        <div class="loader-bar"></div>
        <div class="loader-bar"></div>
        <div class="loader-bar"></div>
      </div>
      <!-- /PAGE LOADER INDICATOR -->
    </div>
    <!-- /PAGE LOADER -->
    <div class="content-grid">
        <div class="section-banner">
            <!-- SECTION BANNER ICON -->
            <img class="section-banner-icon" src="{{asset('dashboard/img/banner/marketplace-icon.png')}}" alt="marketplace-icon">
            <!-- /SECTION BANNER ICON -->

            <!-- SECTION BANNER TITLE -->
            <p class="section-banner-title">Marketplace</p>
            <!-- /SECTION BANNER TITLE -->

            <!-- SECTION BANNER TEXT -->
            <p class="section-banner-text">The best place for the community to buy and sell!</p>
            <!-- /SECTION BANNER TEXT -->
          </div>
        @yield('content')
    </div>
    <!-- NAVIGATION WIDGET -->
    <nav id="navigation-widget-small" class="navigation-widget navigation-widget-desktop closed sidebar left delayed">
      <!-- USER AVATAR -->
      <a class="user-avatar small no-outline online" href="profile-timeline.html">
        <!-- USER AVATAR CONTENT -->
        <div class="user-avatar-content">
          <!-- HEXAGON -->
          <div class="hexagon-image-30-32" data-src="{{asset('dashboard/img/avatar/01.jpg')}}"></div>
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
          <p class="user-avatar-badge-text">24</p>
          <!-- /USER AVATAR BADGE TEXT -->
        </div>
        <!-- /USER AVATAR BADGE -->
      </a>
      <!-- /USER AVATAR -->

      <!-- MENU -->
      <ul class="menu small">
        <!-- MENU ITEM -->
        <li class="menu-item ">
          <!-- MENU ITEM LINK -->
          <a class="menu-item-link text-tooltip-tfr" href="{{ url('/home') }}" data-title="Dashboard">
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
        <li class="menu-item">
          <!-- MENU ITEM LINK -->
          <a class="menu-item-link text-tooltip-tfr" href="{{ url('/active-users') }}" data-title="Admin">
            <!-- MENU ITEM LINK ICON -->
            <svg class="menu-item-link-icon icon-members">
              <use xlink:href="#svg-members"></use>
            </svg>
            <!-- /MENU ITEM LINK ICON -->
          </a>
          <!-- /MENU ITEM LINK -->
        </li>
        <!-- /MENU ITEM -->
        <!-- MENU ITEM -->
        <li class="menu-item active">
          <!-- MENU ITEM LINK -->
          <a class="menu-item-link text-tooltip-tfr" href="marketplace.html" data-title="Marketplace">
            <!-- MENU ITEM LINK ICON -->
            <svg class="menu-item-link-icon icon-marketplace">
              <use xlink:href="#svg-marketplace"></use>
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
      <!-- NAVIGATION WIDGET COVER -->
      <figure class="navigation-widget-cover liquid">
        <img src="{{asset('dashboard/img/cover/01.jpg')}}" alt="cover-01">
      </figure>
      <!-- /NAVIGATION WIDGET COVER -->

      <!-- USER SHORT DESCRIPTION -->
      <div class="user-short-description">
        <!-- USER SHORT DESCRIPTION AVATAR -->
        <a class="user-short-description-avatar user-avatar medium" href="profile-timeline.html">
          <!-- USER AVATAR BORDER -->
          <div class="user-avatar-border">
            <!-- HEXAGON -->
            <div class="hexagon-120-132"></div>
            <!-- /HEXAGON -->
          </div>
          <!-- /USER AVATAR BORDER -->

          <!-- USER AVATAR CONTENT -->
          <div class="user-avatar-content">
            <!-- HEXAGON -->
            <div class="hexagon-image-82-90" data-src="{{asset('dashboard/img/cover/01.jpg')}}"></div>
            <!-- /HEXAGON -->
          </div>
          <!-- /USER AVATAR CONTENT -->

          <!-- USER AVATAR PROGRESS -->
          <div class="user-avatar-progress">
            <!-- HEXAGON -->
            <div class="hexagon-progress-100-110"></div>
            <!-- /HEXAGON -->
          </div>
          <!-- /USER AVATAR PROGRESS -->

          <!-- USER AVATAR PROGRESS BORDER -->
          <div class="user-avatar-progress-border">
            <!-- HEXAGON -->
            <div class="hexagon-border-100-110"></div>
            <!-- /HEXAGON -->
          </div>
          <!-- /USER AVATAR PROGRESS BORDER -->

          <!-- USER AVATAR BADGE -->
          <div class="user-avatar-badge">
            <!-- USER AVATAR BADGE BORDER -->
            <div class="user-avatar-badge-border">
              <!-- HEXAGON -->
              <div class="hexagon-32-36"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR BADGE BORDER -->

            <!-- USER AVATAR BADGE CONTENT -->
            <div class="user-avatar-badge-content">
              <!-- HEXAGON -->
              <div class="hexagon-dark-26-28"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR BADGE CONTENT -->

            <!-- USER AVATAR BADGE TEXT -->
            <p class="user-avatar-badge-text">24</p>
            <!-- /USER AVATAR BADGE TEXT -->
          </div>
          <!-- /USER AVATAR BADGE -->
        </a>
        <!-- /USER SHORT DESCRIPTION AVATAR -->

        <!-- USER SHORT DESCRIPTION TITLE -->
        <p class="user-short-description-title"><a href="profile-timeline.html">Marina Valentine</a></p>
        <!-- /USER SHORT DESCRIPTION TITLE -->

        <!-- USER SHORT DESCRIPTION TEXT -->
        <p class="user-short-description-text"><a href="#">www.gamehuntress.com</a></p>
        <!-- /USER SHORT DESCRIPTION TEXT -->
      </div>
      <!-- /USER SHORT DESCRIPTION -->

      <!-- USER STATS -->
      <div class="user-stats">
        <!-- USER STAT -->
        <div class="user-stat">
          <!-- USER STAT TITLE -->
          <p class="user-stat-title">930</p>
          <!-- /USER STAT TITLE -->

          <!-- USER STAT TEXT -->
          <p class="user-stat-text">posts</p>
          <!-- /USER STAT TEXT -->
        </div>
        <!-- /USER STAT -->

        <!-- USER STAT -->
        <div class="user-stat">
          <!-- USER STAT TITLE -->
          <p class="user-stat-title">82</p>
          <!-- /USER STAT TITLE -->

          <!-- USER STAT TEXT -->
          <p class="user-stat-text">friends</p>
          <!-- /USER STAT TEXT -->
        </div>
        <!-- /USER STAT -->

        <!-- USER STAT -->
        <div class="user-stat">
          <!-- USER STAT TITLE -->
          <p class="user-stat-title">5.7k</p>
          <!-- /USER STAT TITLE -->

          <!-- USER STAT TEXT -->
          <p class="user-stat-text">visits</p>
          <!-- /USER STAT TEXT -->
        </div>
        <!-- /USER STAT -->
      </div>
      <!-- /USER STATS -->

      <!-- MENU -->
      <ul class="menu">
        <!-- MENU ITEM -->
        <li class="menu-item">
          <!-- MENU ITEM LINK -->
          <a class="menu-item-link" href="{{ url('/home') }}">
            <!-- MENU ITEM LINK ICON -->
            <svg class="menu-item-link-icon icon-newsfeed">
              <use xlink:href="#svg-newsfeed"></use>
            </svg>
            <!-- /MENU ITEM LINK ICON -->
            Dashboard
          </a>
          <!-- /MENU ITEM LINK -->
        </li>
        <!-- /MENU ITEM -->

        <!-- MENU ITEM -->
        <li class="menu-item">
          <!-- MENU ITEM LINK -->
          <a class="menu-item-link" href="members.html">
            <!-- MENU ITEM LINK ICON -->
            <svg class="menu-item-link-icon icon-members">
              <use xlink:href="#svg-members"></use>
            </svg>
            <!-- /MENU ITEM LINK ICON -->
            Admin
          </a>
          <!-- /MENU ITEM LINK -->
        </li>
        <!-- /MENU ITEM -->

        <!-- MENU ITEM -->
        <li class="menu-item active">
          <!-- MENU ITEM LINK -->
          <a class="menu-item-link" href="marketplace.html">
            <!-- MENU ITEM LINK ICON -->
            <svg class="menu-item-link-icon icon-marketplace">
              <use xlink:href="#svg-marketplace"></use>
            </svg>
            <!-- /MENU ITEM LINK ICON -->
            Marketplace
          </a>
          <!-- /MENU ITEM LINK -->
        </li>
        <!-- /MENU ITEM -->
      </ul>
      <!-- /MENU -->
    </nav>
    <!-- /NAVIGATION WIDGET -->

    <!-- NAVIGATION WIDGET -->
    <nav id="navigation-widget-mobile" class="navigation-widget navigation-widget-mobile sidebar left hidden" data-simplebar>
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
        <!-- NAVIGATION WIDGET INFO -->
        <div class="navigation-widget-info">
          <!-- USER AVATAR -->
          <a class="user-avatar small no-outline" href="profile-timeline.html">
            <!-- USER AVATAR CONTENT -->
            <div class="user-avatar-content">
              <!-- HEXAGON -->
              <div class="hexagon-image-30-32" data-src="{{asset('dashboard/img/avatar/01.jpg')}}"></div>
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
              <p class="user-avatar-badge-text">24</p>
              <!-- /USER AVATAR BADGE TEXT -->
            </div>
            <!-- /USER AVATAR BADGE -->
          </a>
          <!-- /USER AVATAR -->

          <!-- NAVIGATION WIDGET INFO TITLE -->
          <p class="navigation-widget-info-title"><a href="profile-timeline.html">Marina Valentine</a></p>
          <!-- /NAVIGATION WIDGET INFO TITLE -->

          <!-- NAVIGATION WIDGET INFO TEXT -->
          <p class="navigation-widget-info-text">Welcome Back!</p>
          <!-- /NAVIGATION WIDGET INFO TEXT -->
        </div>
        <!-- /NAVIGATION WIDGET INFO -->

        <!-- NAVIGATION WIDGET BUTTON -->
        <p class="navigation-widget-info-button button small secondary">Logout</p>
        <!-- /NAVIGATION WIDGET BUTTON -->
      </div>
      <!-- /NAVIGATION WIDGET INFO WRAP -->

      <!-- NAVIGATION WIDGET SECTION TITLE -->
      <p class="navigation-widget-section-title">Sections</p>
      <!-- /NAVIGATION WIDGET SECTION TITLE -->

      <!-- MENU -->
      <ul class="menu">
        <!-- MENU ITEM -->
        <li class="menu-item">
          <!-- MENU ITEM LINK -->
          <a class="menu-item-link" href="newsfeed.html">
            <!-- MENU ITEM LINK ICON -->
            <svg class="menu-item-link-icon icon-newsfeed">
              <use xlink:href="#svg-newsfeed"></use>
            </svg>
            <!-- /MENU ITEM LINK ICON -->
            Newsfeed
          </a>
          <!-- /MENU ITEM LINK -->
        </li>
        <!-- /MENU ITEM -->

        <!-- MENU ITEM -->
        <li class="menu-item">
          <!-- MENU ITEM LINK -->
          <a class="menu-item-link" href="overview.html">
            <!-- MENU ITEM LINK ICON -->
            <svg class="menu-item-link-icon icon-overview">
              <use xlink:href="#svg-overview"></use>
            </svg>
            <!-- /MENU ITEM LINK ICON -->
            Overview
          </a>
          <!-- /MENU ITEM LINK -->
        </li>
        <!-- /MENU ITEM -->

        <!-- MENU ITEM -->
        <li class="menu-item">
          <!-- MENU ITEM LINK -->
          <a class="menu-item-link" href="groups.html">
            <!-- MENU ITEM LINK ICON -->
            <svg class="menu-item-link-icon icon-group">
              <use xlink:href="#svg-group"></use>
            </svg>
            <!-- /MENU ITEM LINK ICON -->
            Groups
          </a>
          <!-- /MENU ITEM LINK -->
        </li>
        <!-- /MENU ITEM -->

        <!-- MENU ITEM -->
        <li class="menu-item">
          <!-- MENU ITEM LINK -->
          <a class="menu-item-link" href="members.html">
            <!-- MENU ITEM LINK ICON -->
            <svg class="menu-item-link-icon icon-members">
              <use xlink:href="#svg-members"></use>
            </svg>
            <!-- /MENU ITEM LINK ICON -->
            Members
          </a>
          <!-- /MENU ITEM LINK -->
        </li>
        <!-- /MENU ITEM -->

        <!-- MENU ITEM -->
        <li class="menu-item">
          <!-- MENU ITEM LINK -->
          <a class="menu-item-link" href="badges.html">
            <!-- MENU ITEM LINK ICON -->
            <svg class="menu-item-link-icon icon-badges">
              <use xlink:href="#svg-badges"></use>
            </svg>
            <!-- /MENU ITEM LINK ICON -->
            Badges
          </a>
          <!-- /MENU ITEM LINK -->
        </li>
        <!-- /MENU ITEM -->

        <!-- MENU ITEM -->
        <li class="menu-item">
          <!-- MENU ITEM LINK -->
          <a class="menu-item-link" href="quests.html">
            <!-- MENU ITEM LINK ICON -->
            <svg class="menu-item-link-icon icon-quests">
              <use xlink:href="#svg-quests"></use>
            </svg>
            <!-- /MENU ITEM LINK ICON -->
            Quests
          </a>
          <!-- /MENU ITEM LINK -->
        </li>
        <!-- /MENU ITEM -->

        <!-- MENU ITEM -->
        <li class="menu-item">
          <!-- MENU ITEM LINK -->
          <a class="menu-item-link" href="streams.html">
            <!-- MENU ITEM LINK ICON -->
            <svg class="menu-item-link-icon icon-streams">
              <use xlink:href="#svg-streams"></use>
            </svg>
            <!-- /MENU ITEM LINK ICON -->
            Streams
          </a>
          <!-- /MENU ITEM LINK -->
        </li>
        <!-- /MENU ITEM -->

        <!-- MENU ITEM -->
        <li class="menu-item">
          <!-- MENU ITEM LINK -->
          <a class="menu-item-link" href="events.html">
            <!-- MENU ITEM LINK ICON -->
            <svg class="menu-item-link-icon icon-events">
              <use xlink:href="#svg-events"></use>
            </svg>
            <!-- /MENU ITEM LINK ICON -->
            Events
          </a>
          <!-- /MENU ITEM LINK -->
        </li>
        <!-- /MENU ITEM -->

        <!-- MENU ITEM -->
        <li class="menu-item">
          <!-- MENU ITEM LINK -->
          <a class="menu-item-link" href="forums.html">
            <!-- MENU ITEM LINK ICON -->
            <svg class="menu-item-link-icon icon-forums">
              <use xlink:href="#svg-forums"></use>
            </svg>
            <!-- /MENU ITEM LINK ICON -->
            Forums
          </a>
          <!-- /MENU ITEM LINK -->
        </li>
        <!-- /MENU ITEM -->

        <!-- MENU ITEM -->
        <li class="menu-item active">
          <!-- MENU ITEM LINK -->
          <a class="menu-item-link" href="marketplace.html">
            <!-- MENU ITEM LINK ICON -->
            <svg class="menu-item-link-icon icon-marketplace">
              <use xlink:href="#svg-marketplace"></use>
            </svg>
            <!-- /MENU ITEM LINK ICON -->
            Marketplace
          </a>
          <!-- /MENU ITEM LINK -->
        </li>
        <!-- /MENU ITEM -->
      </ul>
      <!-- /MENU -->

      <!-- NAVIGATION WIDGET SECTION TITLE -->
      <p class="navigation-widget-section-title">My Profile</p>
      <!-- /NAVIGATION WIDGET SECTION TITLE -->

      <!-- NAVIGATION WIDGET SECTION LINK -->
      <a class="navigation-widget-section-link" href="hub-profile-info.html">Profile Info</a>
      <!-- /NAVIGATION WIDGET SECTION LINK -->

      <!-- NAVIGATION WIDGET SECTION LINK -->
      <a class="navigation-widget-section-link" href="hub-profile-social.html">Social &amp; Stream</a>
      <!-- /NAVIGATION WIDGET SECTION LINK -->

      <!-- NAVIGATION WIDGET SECTION LINK -->
      <a class="navigation-widget-section-link" href="hub-profile-notifications.html">Notifications</a>
      <!-- /NAVIGATION WIDGET SECTION LINK -->

      <!-- NAVIGATION WIDGET SECTION LINK -->
      <a class="navigation-widget-section-link" href="hub-profile-messages.html">Messages</a>
      <!-- /NAVIGATION WIDGET SECTION LINK -->

      <!-- NAVIGATION WIDGET SECTION LINK -->
      <a class="navigation-widget-section-link" href="hub-profile-requests.html">Friend Requests</a>
      <!-- /NAVIGATION WIDGET SECTION LINK -->

      <!-- NAVIGATION WIDGET SECTION TITLE -->
      <p class="navigation-widget-section-title">Account</p>
      <!-- /NAVIGATION WIDGET SECTION TITLE -->

      <!-- NAVIGATION WIDGET SECTION LINK -->
      <a class="navigation-widget-section-link" href="hub-account-info.html">Account Info</a>
      <!-- /NAVIGATION WIDGET SECTION LINK -->

      <!-- NAVIGATION WIDGET SECTION LINK -->
      <a class="navigation-widget-section-link" href="hub-account-password.html">Change Password</a>
      <!-- /NAVIGATION WIDGET SECTION LINK -->

      <!-- NAVIGATION WIDGET SECTION LINK -->
      <a class="navigation-widget-section-link" href="hub-account-settings.html">General Settings</a>
      <!-- /NAVIGATION WIDGET SECTION LINK -->

      <!-- NAVIGATION WIDGET SECTION TITLE -->
      <p class="navigation-widget-section-title">Groups</p>
      <!-- /NAVIGATION WIDGET SECTION TITLE -->

      <!-- NAVIGATION WIDGET SECTION LINK -->
      <a class="navigation-widget-section-link" href="hub-group-management.html">Manage Groups</a>
      <!-- /NAVIGATION WIDGET SECTION LINK -->

      <!-- NAVIGATION WIDGET SECTION LINK -->
      <a class="navigation-widget-section-link" href="hub-group-invitations.html">Invitations</a>
      <!-- /NAVIGATION WIDGET SECTION LINK -->

      <!-- NAVIGATION WIDGET SECTION TITLE -->
      <p class="navigation-widget-section-title">My Store</p>
      <!-- /NAVIGATION WIDGET SECTION TITLE -->

      <!-- NAVIGATION WIDGET SECTION LINK -->
      <a class="navigation-widget-section-link" href="hub-store-account.html">My Account <span class="highlighted">$250,32</span></a>
      <!-- /NAVIGATION WIDGET SECTION LINK -->

      <!-- NAVIGATION WIDGET SECTION LINK -->
      <a class="navigation-widget-section-link" href="hub-store-statement.html">Sales Statement</a>
      <!-- /NAVIGATION WIDGET SECTION LINK -->

      <!-- NAVIGATION WIDGET SECTION LINK -->
      <a class="navigation-widget-section-link" href="hub-store-items.html">Manage Items</a>
      <!-- /NAVIGATION WIDGET SECTION LINK -->

      <!-- NAVIGATION WIDGET SECTION LINK -->
      <a class="navigation-widget-section-link" href="hub-store-downloads.html">Downloads</a>
      <!-- /NAVIGATION WIDGET SECTION LINK -->

      <!-- NAVIGATION WIDGET SECTION TITLE -->
      <p class="navigation-widget-section-title">Main Links</p>
      <!-- /NAVIGATION WIDGET SECTION TITLE -->

      <!-- NAVIGATION WIDGET SECTION LINK -->
      <a class="navigation-widget-section-link" href="#">Home</a>
      <!-- /NAVIGATION WIDGET SECTION LINK -->

      <!-- NAVIGATION WIDGET SECTION LINK -->
      <a class="navigation-widget-section-link" href="#">Careers</a>
      <!-- /NAVIGATION WIDGET SECTION LINK -->

      <!-- NAVIGATION WIDGET SECTION LINK -->
      <a class="navigation-widget-section-link" href="#">Faqs</a>
      <!-- /NAVIGATION WIDGET SECTION LINK -->

      <!-- NAVIGATION WIDGET SECTION LINK -->
      <a class="navigation-widget-section-link" href="#">About Us</a>
      <!-- /NAVIGATION WIDGET SECTION LINK -->

      <!-- NAVIGATION WIDGET SECTION LINK -->
      <a class="navigation-widget-section-link" href="#">Our Blog</a>
      <!-- /NAVIGATION WIDGET SECTION LINK -->

      <!-- NAVIGATION WIDGET SECTION LINK -->
      <a class="navigation-widget-section-link" href="#">Contact Us</a>
      <!-- /NAVIGATION WIDGET SECTION LINK -->

      <!-- NAVIGATION WIDGET SECTION LINK -->
      <a class="navigation-widget-section-link" href="#">Privacy Policy</a>
      <!-- /NAVIGATION WIDGET SECTION LINK -->
    </nav>
    <!-- /NAVIGATION WIDGET -->
  </div>
 {{-- Scripts --}}
 {{-- <script src="{{ mix('/js/app.js') }}"></script> --}}

 @if(config('settings.googleMapsAPIStatus'))
     {!! HTML::script('//maps.googleapis.com/maps/api/js?key='.config("settings.googleMapsAPIKey").'&libraries=places&dummy=.js', array('type' => 'text/javascript')) !!}
 @endif

 @yield('footer_scripts')
  <!-- /CONTENT GRID -->
  <script src="{{asset('dashboard/js/utils/app.js')}}"></script>
  <script src="{{asset('dashboard/js/utils/page-loader.js')}}"></script>
  <script src="{{asset('dashboard/js/vendor/simplebar.min.js')}}"></script>
  <script src="{{asset('dashboard/js/utils/liquidify.js')}}"></script>
  <script src="{{asset('dashboard/js/vendor/xm_plugins.min.js')}}"></script>
  <script src="{{asset('dashboard/js/global/global.hexagons.js')}}"></script>
  <script src="{{asset('dashboard/js/global/global.tooltips.js')}}"></script>
  <script src="{{asset('dashboard/js/header/header.js')}}"></script>
  <script src="{{asset('dashboard/js/sidebar/sidebar.js')}}"></script>
  <script src="{{asset('dashboard/js/content/content.js')}}"></script>
  <script src="{{asset('dashboard/js/form/form.utils.js')}}"></script>
  <script src="{{asset('dashboard/js/utils/svg-loader.js')}}"></script>
</body>
</html>
