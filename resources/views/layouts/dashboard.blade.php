<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ asset('dashboard/css/vendor/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/css/styles.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/css/vendor/simplebar.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/img/favicon.ico') }}" rel="icon">
    {{-- <script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script> --}}
    {{-- @if (Auth::User() && Auth::User()->profile && $theme->link != null && $theme->link != 'null')
            <link rel="stylesheet" type="text/css" href="{{ $theme->link }}">
        @endif --}}

    @yield('head')
    @include('scripts.ga-analytics')

<title>@hasSection('template_title')@yield('template_title') | @endif
    {{ config('app.name', Lang::get('titles.app')) }}</title>
</head>

<body>


<!-- NAV -->
@include('partials.nav')
<!-- /NAV -->
<!-- PAGE LOADER -->
@include('partials.loader')
<!-- /PAGE LOADER -->
<div class="content-grid">
    @yield('content')
</div>
<!-- SIDE BAR -->
@hasSection('sidebar_active')
    @php
        $sidebar_active = app()->view->getSections()['sidebar_active'];
    @endphp
@endif
@include('partials.side-bar', ['sidebar_active' => $sidebar_active])
<!-- /SIDE BAR -->
</div>
{{-- Scripts --}}
{{-- <script src="{{ mix('/js/app.js') }}"></script> --}}

@if (config('settings.googleMapsAPIStatus'))
    {!! HTML::script('//maps.googleapis.com/maps/api/js?key=' . config('settings.googleMapsAPIKey') . '&libraries=places&dummy=.js', ['type' => 'text/javascript']) !!}
@endif

@yield('footer_scripts')
<!-- /CONTENT GRID -->
<script src="{{ asset('dashboard/js/utils/app.js') }}"></script>
<script src="{{ asset('dashboard/js/utils/page-loader.js') }}"></script>
<script src="{{ asset('dashboard/js/vendor/simplebar.min.js') }}"></script>
<script src="{{ asset('dashboard/js/utils/liquidify.js') }}"></script>
<script src="{{ asset('dashboard/js/vendor/xm_plugins.min.js') }}"></script>
<script src="{{ asset('dashboard/js/vendor/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('dashboard/js/global/global.hexagons.js') }}"></script>
<script src="{{ asset('dashboard/js/global/global.tooltips.js') }}"></script>
<script src="{{ asset('dashboard/js/global/global.accordions.js') }}"></script>
<script src="{{ asset('dashboard/js/global/global.charts.js') }}"></script>
<script src="{{ asset('dashboard/js/header/header.js') }}"></script>
<script src="{{ asset('dashboard/js/sidebar/sidebar.js') }}"></script>
<script src="{{ asset('dashboard/js/content/content.js') }}"></script>
<script src="{{ asset('dashboard/js/form/form.utils.js') }}"></script>
<script src="{{ asset('dashboard/js/utils/svg-loader.js') }}"></script>
</body>

</html>
