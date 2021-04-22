<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- bootstrap 4.3.1 -->
    <link href="{{ asset('dashboard/css/vendor/bootstrap.min.css') }}" rel="stylesheet">
    <!-- styles -->
    <link href="{{ asset('dashboard/css/styles.min.css') }}" rel="stylesheet">
    <!-- favicon -->
    <link href="{{ asset('dashboard/img/favicon.ico') }}" rel="ico">

<title>@hasSection('template_title')@yield('template_title') | @endif
    {{ config('app.name', Lang::get('titles.app')) }}</title>
</head>

<body>

<!-- LANDING -->
<div class="landing">
    <!-- LANDING DECORATION -->
    <div class="landing-decoration"></div>
    <!-- /LANDING DECORATION -->
    <!-- LANDING INFO -->
    <div class="landing-info">
        <!-- LOGO -->
        <div class="logo">
            <!-- ICON LOGO VIKINGER -->
            {{-- <svg class="icon-logo-vikinger">
                <use xlink:href="#svg-logo-vikinger"></use>
            </svg> --}}
            <img class="icon-logo-gohome" src="{{asset('dashboard/img/gohomelogo.png')}}" alt="Go Home Logo">
            <!-- /ICON LOGO VIKINGER -->
        </div>
        <!-- /LOGO -->

        <!-- LANDING INFO PRETITLE -->
        <h2 class="landing-info-pretitle">{{ trans('common.welcomeTo') }}</h2>
        <!-- /LANDING INFO PRETITLE -->

        <!-- LANDING INFO TITLE -->
        <h1 class="landing-info-title">Go Home</h1>
        <!-- /LANDING INFO TITLE -->

        <!-- LANDING INFO TEXT -->
        <p class="landing-info-text">{{ trans('common.landingInfo') }}</p>
        <!-- /LANDING INFO TEXT -->

        <!-- TAB SWITCH -->
        <div class="tab-switch">
            <!-- TAB SWITCH BUTTON -->
            <p class="tab-switch-button login-register-form-trigger">{{ trans('auth.login') }}</p>
            <!-- /TAB SWITCH BUTTON -->

            <!-- TAB SWITCH BUTTON -->
            <p class="tab-switch-button login-register-form-trigger">{{ trans('auth.register') }}</p>
            <!-- /TAB SWITCH BUTTON -->
        </div>
        <!-- /TAB SWITCH -->
    </div>
    <!-- /LANDING INFO -->

    <!-- LANDING FORM -->
    <div class="landing-form">
        <!-- FORM BOX -->
        <!-- /FORM BOX -->

        <!-- FORM BOX -->
        @yield('content')

        <!-- /FORM BOX -->
    </div>
    <!-- /LANDING FORM -->
</div>
<!-- /LANDING -->

<!-- app -->
<script src="{{ asset('dashboard/js/utils/app.js') }}"></script>
<script src="{{ asset('dashboard/js/vendor/xm_plugins.min.js') }}"></script>
<script src="{{ asset('dashboard/js/form/form.utils.js') }}"></script>
<script src="{{ asset('dashboard/js/landing/landing.tabs.js') }}"></script>
<script src="{{ asset('dashboard/js/utils/svg-loader.js') }}"></script>

</body>

</html>
