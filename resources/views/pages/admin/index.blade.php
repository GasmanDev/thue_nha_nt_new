@extends('layouts.dashboard')

@section('template_title')
    {{ trans('titles.manage') }}
@endsection

@section('sidebar_active', 'dashboard')

    {{-- @section('head')
@endsection --}}

@section('content')
    <div class="section-banner">
        <!-- SECTION BANNER ICON -->
        <img class="section-banner-icon" src="{{ asset('dashboard/img/banner/overview-icon.png') }}"
            alt="accounthub-icon">
        <!-- /SECTION BANNER ICON -->

        <!-- SECTION BANNER TITLE -->
        <p class="section-banner-title">{{ trans('dashboard.overview') }}</p>
        <!-- /SECTION BANNER TITLE -->

        <!-- SECTION BANNER TEXT -->
        <p class="section-banner-text">{{ trans('dashboard.overviewInfo') }}</p>
        <!-- /SECTION BANNER TEXT -->
    </div>
    <!-- /SECTION BANNER -->

@endsection
