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
        <img class="section-banner-icon" src="{{ asset('dashboard/img/banner/accounthub-icon.png') }}"
            alt="accounthub-icon">
        <!-- /SECTION BANNER ICON -->

        <!-- SECTION BANNER TITLE -->
        <p class="section-banner-title">Account Hub</p>
        <!-- /SECTION BANNER TITLE -->

        <!-- SECTION BANNER TEXT -->
        <p class="section-banner-text">Profile info, messages, settings and much more!</p>
        <!-- /SECTION BANNER TEXT -->
    </div>
    <!-- /SECTION BANNER -->

    <!-- GRID -->
    <div class="grid grid-3-9 medium-space">
        <!-- GRID COLUMN -->
        <div class="account-hub-sidebar">
            <!-- SIDEBAR BOX -->
            <div class="sidebar-box no-padding">
                <!-- SIDEBAR MENU -->
                <div class="sidebar-menu round-borders">
                    <!-- SIDEBAR MENU ITEM -->
                    <div class="sidebar-menu-item">
                        <!-- SIDEBAR MENU HEADER -->
                        <div class="sidebar-menu-header accordion-trigger-linked">
                            <!-- SIDEBAR MENU HEADER ICON -->
                            <svg class="sidebar-menu-header-icon icon-profile">
                                <use xlink:href="#svg-profile"></use>
                            </svg>
                            <!-- /SIDEBAR MENU HEADER ICON -->

                            <!-- SIDEBAR MENU HEADER CONTROL ICON -->
                            <div class="sidebar-menu-header-control-icon">
                                <!-- SIDEBAR MENU HEADER CONTROL ICON OPEN -->
                                <svg class="sidebar-menu-header-control-icon-open icon-minus-small">
                                    <use xlink:href="#svg-minus-small"></use>
                                </svg>
                                <!-- /SIDEBAR MENU HEADER CONTROL ICON OPEN -->

                                <!-- SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
                                <svg class="sidebar-menu-header-control-icon-closed icon-plus-small">
                                    <use xlink:href="#svg-plus-small"></use>
                                </svg>
                                <!-- /SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
                            </div>
                            <!-- /SIDEBAR MENU HEADER CONTROL ICON -->

                            <!-- SIDEBAR MENU HEADER TITLE -->
                            <p class="sidebar-menu-header-title">My Profile</p>
                            <!-- /SIDEBAR MENU HEADER TITLE -->

                            <!-- SIDEBAR MENU HEADER TEXT -->
                            <p class="sidebar-menu-header-text">Change your avatar &amp; cover, accept friends, read
                                messages and more!</p>
                            <!-- /SIDEBAR MENU HEADER TEXT -->
                        </div>
                        <!-- /SIDEBAR MENU HEADER -->

                        <!-- SIDEBAR MENU BODY -->
                        <div class="sidebar-menu-body accordion-content-linked">
                            <!-- SIDEBAR MENU LINK -->
                            <a class="sidebar-menu-link" href="hub-profile-info.html">Profile Info</a>
                            <!-- /SIDEBAR MENU LINK -->

                            <!-- SIDEBAR MENU LINK -->
                            <a class="sidebar-menu-link" href="hub-profile-social.html">Social &amp; Stream</a>
                            <!-- /SIDEBAR MENU LINK -->

                            <!-- SIDEBAR MENU LINK -->
                            <a class="sidebar-menu-link" href="hub-profile-notifications.html">Notifications</a>
                            <!-- /SIDEBAR MENU LINK -->

                            <!-- SIDEBAR MENU LINK -->
                            <a class="sidebar-menu-link" href="hub-profile-messages.html">Messages</a>
                            <!-- /SIDEBAR MENU LINK -->

                            <!-- SIDEBAR MENU LINK -->
                            <a class="sidebar-menu-link" href="hub-profile-requests.html">Friend Requests</a>
                            <!-- /SIDEBAR MENU LINK -->
                        </div>
                        <!-- /SIDEBAR MENU BODY -->
                    </div>
                    <!-- /SIDEBAR MENU ITEM -->

                    <!-- SIDEBAR MENU ITEM -->
                    <div class="sidebar-menu-item">
                        <!-- SIDEBAR MENU HEADER -->
                        <div class="sidebar-menu-header accordion-trigger-linked">
                            <!-- SIDEBAR MENU HEADER ICON -->
                            <svg class="sidebar-menu-header-icon icon-settings">
                                <use xlink:href="#svg-settings"></use>
                            </svg>
                            <!-- /SIDEBAR MENU HEADER ICON -->

                            <!-- SIDEBAR MENU HEADER CONTROL ICON -->
                            <div class="sidebar-menu-header-control-icon">
                                <!-- SIDEBAR MENU HEADER CONTROL ICON OPEN -->
                                <svg class="sidebar-menu-header-control-icon-open icon-minus-small">
                                    <use xlink:href="#svg-minus-small"></use>
                                </svg>
                                <!-- /SIDEBAR MENU HEADER CONTROL ICON OPEN -->

                                <!-- SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
                                <svg class="sidebar-menu-header-control-icon-closed icon-plus-small">
                                    <use xlink:href="#svg-plus-small"></use>
                                </svg>
                                <!-- /SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
                            </div>
                            <!-- /SIDEBAR MENU HEADER CONTROL ICON -->

                            <!-- SIDEBAR MENU HEADER TITLE -->
                            <p class="sidebar-menu-header-title">Account</p>
                            <!-- /SIDEBAR MENU HEADER TITLE -->

                            <!-- SIDEBAR MENU HEADER TEXT -->
                            <p class="sidebar-menu-header-text">Change settings, configure notifications, and review your
                                privacy</p>
                            <!-- /SIDEBAR MENU HEADER TEXT -->
                        </div>
                        <!-- /SIDEBAR MENU HEADER -->

                        <!-- SIDEBAR MENU BODY -->
                        <div class="sidebar-menu-body accordion-content-linked">
                            <!-- SIDEBAR MENU LINK -->
                            <a class="sidebar-menu-link" href="hub-account-info.html">Account Info</a>
                            <!-- /SIDEBAR MENU LINK -->

                            <!-- SIDEBAR MENU LINK -->
                            <a class="sidebar-menu-link" href="hub-account-password.html">Change Password</a>
                            <!-- /SIDEBAR MENU LINK -->

                            <!-- SIDEBAR MENU LINK -->
                            <a class="sidebar-menu-link" href="hub-account-settings.html">General Settings</a>
                            <!-- /SIDEBAR MENU LINK -->
                        </div>
                        <!-- /SIDEBAR MENU BODY -->
                    </div>
                    <!-- /SIDEBAR MENU ITEM -->

                    <!-- SIDEBAR MENU ITEM -->
                    <div class="sidebar-menu-item">
                        <!-- SIDEBAR MENU HEADER -->
                        <div class="sidebar-menu-header accordion-trigger-linked">
                            <!-- SIDEBAR MENU HEADER ICON -->
                            <svg class="sidebar-menu-header-icon icon-group">
                                <use xlink:href="#svg-group"></use>
                            </svg>
                            <!-- /SIDEBAR MENU HEADER ICON -->

                            <!-- SIDEBAR MENU HEADER CONTROL ICON -->
                            <div class="sidebar-menu-header-control-icon">
                                <!-- SIDEBAR MENU HEADER CONTROL ICON OPEN -->
                                <svg class="sidebar-menu-header-control-icon-open icon-minus-small">
                                    <use xlink:href="#svg-minus-small"></use>
                                </svg>
                                <!-- /SIDEBAR MENU HEADER CONTROL ICON OPEN -->

                                <!-- SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
                                <svg class="sidebar-menu-header-control-icon-closed icon-plus-small">
                                    <use xlink:href="#svg-plus-small"></use>
                                </svg>
                                <!-- /SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
                            </div>
                            <!-- /SIDEBAR MENU HEADER CONTROL ICON -->

                            <!-- SIDEBAR MENU HEADER TITLE -->
                            <p class="sidebar-menu-header-title">Groups</p>
                            <!-- /SIDEBAR MENU HEADER TITLE -->

                            <!-- SIDEBAR MENU HEADER TEXT -->
                            <p class="sidebar-menu-header-text">Create new groups, manage the ones you created or accept
                                invites!</p>
                            <!-- /SIDEBAR MENU HEADER TEXT -->
                        </div>
                        <!-- /SIDEBAR MENU HEADER -->

                        <!-- SIDEBAR MENU BODY -->
                        <div class="sidebar-menu-body accordion-content-linked">
                            <!-- SIDEBAR MENU LINK -->
                            <a class="sidebar-menu-link" href="hub-group-management.html">Manage Groups</a>
                            <!-- /SIDEBAR MENU LINK -->

                            <!-- SIDEBAR MENU LINK -->
                            <a class="sidebar-menu-link" href="hub-group-invitations.html">Invitations</a>
                            <!-- /SIDEBAR MENU LINK -->
                        </div>
                        <!-- /SIDEBAR MENU BODY -->
                    </div>
                    <!-- /SIDEBAR MENU ITEM -->

                    <!-- SIDEBAR MENU ITEM -->
                    <div class="sidebar-menu-item">
                        <!-- SIDEBAR MENU HEADER -->
                        <div class="sidebar-menu-header accordion-trigger-linked">
                            <!-- SIDEBAR MENU HEADER ICON -->
                            <svg class="sidebar-menu-header-icon icon-store">
                                <use xlink:href="#svg-store"></use>
                            </svg>
                            <!-- /SIDEBAR MENU HEADER ICON -->

                            <!-- SIDEBAR MENU HEADER CONTROL ICON -->
                            <div class="sidebar-menu-header-control-icon">
                                <!-- SIDEBAR MENU HEADER CONTROL ICON OPEN -->
                                <svg class="sidebar-menu-header-control-icon-open icon-minus-small">
                                    <use xlink:href="#svg-minus-small"></use>
                                </svg>
                                <!-- /SIDEBAR MENU HEADER CONTROL ICON OPEN -->

                                <!-- SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
                                <svg class="sidebar-menu-header-control-icon-closed icon-plus-small">
                                    <use xlink:href="#svg-plus-small"></use>
                                </svg>
                                <!-- /SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
                            </div>
                            <!-- /SIDEBAR MENU HEADER CONTROL ICON -->

                            <!-- SIDEBAR MENU HEADER TITLE -->
                            <p class="sidebar-menu-header-title">My Store</p>
                            <!-- /SIDEBAR MENU HEADER TITLE -->

                            <!-- SIDEBAR MENU HEADER TEXT -->
                            <p class="sidebar-menu-header-text">Review your account, manage products check stats and much
                                more!</p>
                            <!-- /SIDEBAR MENU HEADER TEXT -->
                        </div>
                        <!-- /SIDEBAR MENU HEADER -->

                        <!-- SIDEBAR MENU BODY -->
                        <div class="sidebar-menu-body accordion-content-linked accordion-open">
                            <!-- SIDEBAR MENU LINK -->
                            <a class="sidebar-menu-link active" href="hub-store-account.html">My Account</a>
                            <!-- /SIDEBAR MENU LINK -->

                            <!-- SIDEBAR MENU LINK -->
                            <a class="sidebar-menu-link" href="hub-store-statement.html">Sales Statement</a>
                            <!-- /SIDEBAR MENU LINK -->

                            <!-- SIDEBAR MENU LINK -->
                            <a class="sidebar-menu-link" href="hub-store-items.html">Manage Items</a>
                            <!-- /SIDEBAR MENU LINK -->

                            <!-- SIDEBAR MENU LINK -->
                            <a class="sidebar-menu-link" href="hub-store-downloads.html">Downloads</a>
                            <!-- /SIDEBAR MENU LINK -->
                        </div>
                        <!-- /SIDEBAR MENU BODY -->
                    </div>
                    <!-- /SIDEBAR MENU ITEM -->
                </div>
                <!-- /SIDEBAR MENU -->
            </div>
            <!-- /SIDEBAR BOX -->
        </div>
        <!-- /GRID COLUMN -->

        <!-- GRID COLUMN -->
        <div class="account-hub-content">
            <!-- SECTION HEADER -->
            <div class="section-header">
                <!-- SECTION HEADER INFO -->
                <div class="section-header-info">
                    <!-- SECTION PRETITLE -->
                    <p class="section-pretitle">My Store</p>
                    <!-- /SECTION PRETITLE -->

                    <!-- SECTION TITLE -->
                    <h2 class="section-title">Account Overview</h2>
                    <!-- /SECTION TITLE -->
                </div>
                <!-- /SECTION HEADER INFO -->
            </div>
            <!-- /SECTION HEADER -->

            <!-- GRID COLUMN -->
            <div class="grid-column">
                <!-- EARNING STAT BOX -->
                <div class="earning-stat-box full">
                    <!-- EARNING STAT BOX INFO -->
                    <div class="earning-stat-box-info">
                        <!-- EARNING STAT BOX ICON WRAP -->
                        <div class="earning-stat-box-icon-wrap stat-balance">
                            <!-- EARNING STAT BOX ICON -->
                            <svg class="earning-stat-box-icon icon-wallet">
                                <use xlink:href="#svg-wallet"></use>
                            </svg>
                            <!-- /EARNING STAT BOX ICON -->
                        </div>
                        <!-- /EARNING STAT BOX ICON WRAP -->

                        <!-- EARNING STAT BOX TITLE -->
                        <p class="earning-stat-box-title">250.32 <span class="currency">U$D</span></p>
                        <!-- /EARNING STAT BOX TITLE -->

                        <!-- EARNING STAT BOX TEXT -->
                        <p class="earning-stat-box-text">Account Balance</p>
                        <!-- /EARNING STAT BOX TEXT -->
                    </div>
                    <!-- /EARNING STAT BOX INFO -->

                    <!-- USER STATS -->
                    <div class="user-stats">
                        <!-- USER STAT -->
                        <div class="user-stat big">
                            <!-- USER STAT TITLE -->
                            <p class="user-stat-title">7</p>
                            <!-- /USER STAT TITLE -->

                            <!-- USER STAT TEXT -->
                            <p class="user-stat-text">items</p>
                            <!-- /USER STAT TEXT -->
                        </div>
                        <!-- /USER STAT -->

                        <!-- USER STAT -->
                        <div class="user-stat big">
                            <!-- USER STAT TITLE -->
                            <p class="user-stat-title">20</p>
                            <!-- /USER STAT TITLE -->

                            <!-- USER STAT TEXT -->
                            <p class="user-stat-text">comments</p>
                            <!-- /USER STAT TEXT -->
                        </div>
                        <!-- /USER STAT -->

                        <!-- USER STAT -->
                        <div class="user-stat big">
                            <!-- USER STAT TITLE -->
                            <p class="user-stat-title">9</p>
                            <!-- /USER STAT TITLE -->

                            <!-- USER STAT TEXT -->
                            <p class="user-stat-text">ratings</p>
                            <!-- /USER STAT TEXT -->
                        </div>
                        <!-- /USER STAT -->

                        <!-- USER STAT -->
                        <div class="user-stat big">
                            <!-- USER STAT TITLE -->
                            <p class="user-stat-title">361</p>
                            <!-- /USER STAT TITLE -->

                            <!-- USER STAT TEXT -->
                            <p class="user-stat-text">views</p>
                            <!-- /USER STAT TEXT -->
                        </div>
                        <!-- /USER STAT -->
                    </div>
                    <!-- /USER STATS -->
                </div>
                <!-- /EARNING STAT BOX -->

                <!-- GRID -->
                <div class="grid grid-3-3-3 centered">
                    <!-- EARNING STAT BOX -->
                    <div class="earning-stat-box">
                        <!-- EARNING STAT BOX INFO -->
                        <div class="earning-stat-box-info">
                            <!-- EARNING STAT BOX ICON WRAP -->
                            <div class="earning-stat-box-icon-wrap stat-item">
                                <!-- EARNING STAT BOX ICON -->
                                <svg class="earning-stat-box-icon icon-item">
                                    <use xlink:href="#svg-item"></use>
                                </svg>
                                <!-- /EARNING STAT BOX ICON -->
                            </div>
                            <!-- /EARNING STAT BOX ICON WRAP -->

                            <!-- EARNING STAT BOX TITLE -->
                            <p class="earning-stat-box-title">298</p>
                            <!-- /EARNING STAT BOX TITLE -->

                            <!-- EARNING STAT BOX TEXT -->
                            <p class="earning-stat-box-text">Total Items Sold</p>
                            <!-- /EARNING STAT BOX TEXT -->
                        </div>
                        <!-- /EARNING STAT BOX INFO -->
                    </div>
                    <!-- /EARNING STAT BOX -->

                    <!-- EARNING STAT BOX -->
                    <div class="earning-stat-box">
                        <!-- EARNING STAT BOX INFO -->
                        <div class="earning-stat-box-info">
                            <!-- EARNING STAT BOX ICON WRAP -->
                            <div class="earning-stat-box-icon-wrap stat-earning">
                                <!-- EARNING STAT BOX ICON -->
                                <svg class="earning-stat-box-icon icon-earnings">
                                    <use xlink:href="#svg-earnings"></use>
                                </svg>
                                <!-- /EARNING STAT BOX ICON -->
                            </div>
                            <!-- /EARNING STAT BOX ICON WRAP -->

                            <!-- EARNING STAT BOX TITLE -->
                            <p class="earning-stat-box-title">1.925 <span class="currency">U$D</span></p>
                            <!-- /EARNING STAT BOX TITLE -->

                            <!-- EARNING STAT BOX TEXT -->
                            <p class="earning-stat-box-text">Total Earnings</p>
                            <!-- /EARNING STAT BOX TEXT -->
                        </div>
                        <!-- /EARNING STAT BOX INFO -->
                    </div>
                    <!-- /EARNING STAT BOX -->

                    <!-- EARNING STAT BOX -->
                    <div class="earning-stat-box">
                        <!-- EARNING STAT BOX INFO -->
                        <div class="earning-stat-box-info">
                            <!-- EARNING STAT BOX ICON WRAP -->
                            <div class="earning-stat-box-icon-wrap stat-revenue">
                                <!-- EARNING STAT BOX ICON -->
                                <svg class="earning-stat-box-icon icon-revenue">
                                    <use xlink:href="#svg-revenue"></use>
                                </svg>
                                <!-- /EARNING STAT BOX ICON -->
                            </div>
                            <!-- /EARNING STAT BOX ICON WRAP -->

                            <!-- EARNING STAT BOX TITLE -->
                            <p class="earning-stat-box-title">2.203 <span class="currency">U$D</span></p>
                            <!-- /EARNING STAT BOX TITLE -->

                            <!-- EARNING STAT BOX TEXT -->
                            <p class="earning-stat-box-text">Total Revenue</p>
                            <!-- /EARNING STAT BOX TEXT -->
                        </div>
                        <!-- /EARNING STAT BOX INFO -->
                    </div>
                    <!-- /EARNING STAT BOX -->
                </div>
                <!-- /GRID -->

                <!-- WIDGET BOX -->
                <div class="widget-box">
                    <!-- WIDGET BOX ACTIONS -->
                    <div class="widget-box-actions">
                        <!-- WIDGET BOX ACTION -->
                        <div class="widget-box-action">
                            <!-- WIDGET BOX TITLE -->
                            <p class="widget-box-title">Earnings Report</p>
                            <!-- /WIDGET BOX TITLE -->
                        </div>
                        <!-- /WIDGET BOX ACTION -->

                        <!-- WIDGET BOX ACTION -->
                        <div class="widget-box-action">
                            <!-- FORM SELECT -->
                            <div class="form-select v2">
                                <select id="earnings-report-date" name="earnings_report_date">
                                    <option value="0">November 2019</option>
                                    <option value="1">December 2019</option>
                                </select>
                                <!-- FORM SELECT ICON -->
                                <svg class="form-select-icon icon-small-arrow">
                                    <use xlink:href="#svg-small-arrow"></use>
                                </svg>
                                <!-- /FORM SELECT ICON -->
                            </div>
                            <!-- /FORM SELECT -->
                        </div>
                        <!-- /WIDGET BOX ACTION -->
                    </div>
                    <!-- /WIDGET BOX ACTIONS -->

                    <!-- WIDGET BOX CONTENT -->
                    <div class="widget-box-content">
                        <!-- CHART WRAP -->
                        <div class="chart-wrap">
                            <!-- CHART -->
                            <div class="chart">
                                <canvas id="earnings-report-chart"></canvas>
                            </div>
                            <!-- /CHART -->
                        </div>
                        <!-- /CHART WRAP -->
                    </div>
                    <!-- WIDGET BOX CONTENT -->
                </div>
                <!-- /WIDGET BOX -->

                <!-- GRID -->
                <div class="grid grid-6-3_9 stretched">
                    <!-- GRID COLUMN -->
                    <div class="grid-column">
                        <!-- WIDGET BOX -->
                        <div class="widget-box">
                            <!-- WIDGET BOX TITLE -->
                            <p class="widget-box-title">Top Sellers</p>
                            <!-- /WIDGET BOX TITLE -->

                            <!-- WIDGET BOX CONTENT -->
                            <div class="widget-box-content no-margin-top">
                                <!-- TABLE -->
                                <div class="table table-top-sellers join-rows">
                                    <!-- TABLE HEADER -->
                                    <div class="table-header">
                                        <!-- TABLE HEADER COLUMN -->
                                        <div class="table-header-column">
                                            <!-- TABLE HEADER TITLE -->
                                            <p class="table-header-title">Item</p>
                                            <!-- /TABLE HEADER TITLE -->
                                        </div>
                                        <!-- /TABLE HEADER COLUMN -->

                                        <!-- TABLE HEADER COLUMN -->
                                        <div class="table-header-column centered padded">
                                            <!-- TABLE HEADER TITLE -->
                                            <p class="table-header-title">Sales</p>
                                            <!-- /TABLE HEADER TITLE -->
                                        </div>
                                        <!-- /TABLE HEADER COLUMN -->

                                        <!-- TABLE HEADER COLUMN -->
                                        <div class="table-header-column centered padded">
                                            <!-- TABLE HEADER TITLE -->
                                            <p class="table-header-title">Views</p>
                                            <!-- /TABLE HEADER TITLE -->
                                        </div>
                                        <!-- /TABLE HEADER COLUMN -->
                                    </div>
                                    <!-- /TABLE HEADER -->

                                    <!-- TABLE BODY -->
                                    <div class="table-body">
                                        <!-- TABLE ROW -->
                                        <div class="table-row tiny">
                                            <!-- TABLE COLUMN -->
                                            <div class="table-column">
                                                <!-- PRODUCT PREVIEW -->
                                                <div class="product-preview micro">
                                                    <!-- PRODUCT PREVIEW IMAGE -->
                                                    <a href="marketplace-product.html">
                                                        <figure class="product-preview-image liquid">
                                                            <img src="img/marketplace/items/10.jpg" alt="item-10">
                                                        </figure>
                                                    </a>
                                                    <!-- /PRODUCT PREVIEW IMAGE -->

                                                    <!-- PRODUCT PREVIEW INFO -->
                                                    <div class="product-preview-info">
                                                        <!-- PRODUCT PREVIEW TITLE -->
                                                        <p class="product-preview-title"><a
                                                                href="marketplace-product.html">Pixel Diamond Gaming
                                                                Magazine</a></p>
                                                        <!-- /PRODUCT PREVIEW TITLE -->

                                                        <!-- PRODUCT PREVIEW CATEGORY -->
                                                        <p class="product-preview-category digital"><a
                                                                href="marketplace-category.html">HTML Templates</a></p>
                                                        <!-- /PRODUCT PREVIEW CATEGORY -->
                                                    </div>
                                                    <!-- /PRODUCT PREVIEW INFO -->
                                                </div>
                                                <!-- /PRODUCT PREVIEW -->
                                            </div>
                                            <!-- /TABLE COLUMN -->

                                            <!-- TABLE COLUMN -->
                                            <div class="table-column centered padded">
                                                <!-- TABLE TITLE -->
                                                <p class="table-title">130</p>
                                                <!-- /TABLE TITLE -->
                                            </div>
                                            <!-- /TABLE COLUMN -->

                                            <!-- TABLE COLUMN -->
                                            <div class="table-column centered padded">
                                                <!-- TABLE TITLE -->
                                                <p class="table-title">1750</p>
                                                <!-- /TABLE TITLE -->
                                            </div>
                                            <!-- /TABLE COLUMN -->
                                        </div>
                                        <!-- /TABLE ROW -->

                                        <!-- TABLE ROW -->
                                        <div class="table-row tiny">
                                            <!-- TABLE COLUMN -->
                                            <div class="table-column">
                                                <!-- PRODUCT PREVIEW -->
                                                <div class="product-preview micro">
                                                    <!-- PRODUCT PREVIEW IMAGE -->
                                                    <a href="marketplace-product.html">
                                                        <figure class="product-preview-image liquid">
                                                            <img src="img/marketplace/items/01.jpg" alt="item-01">
                                                        </figure>
                                                    </a>
                                                    <!-- /PRODUCT PREVIEW IMAGE -->

                                                    <!-- PRODUCT PREVIEW INFO -->
                                                    <div class="product-preview-info">
                                                        <!-- PRODUCT PREVIEW TITLE -->
                                                        <p class="product-preview-title"><a
                                                                href="marketplace-product.html">Twitch Stream UI Pack</a>
                                                        </p>
                                                        <!-- /PRODUCT PREVIEW TITLE -->

                                                        <!-- PRODUCT PREVIEW CATEGORY -->
                                                        <p class="product-preview-category digital"><a
                                                                href="marketplace-category.html">Stream Packs</a></p>
                                                        <!-- /PRODUCT PREVIEW CATEGORY -->
                                                    </div>
                                                    <!-- /PRODUCT PREVIEW INFO -->
                                                </div>
                                                <!-- /PRODUCT PREVIEW -->
                                            </div>
                                            <!-- /TABLE COLUMN -->

                                            <!-- TABLE COLUMN -->
                                            <div class="table-column centered padded">
                                                <!-- TABLE TITLE -->
                                                <p class="table-title">64</p>
                                                <!-- /TABLE TITLE -->
                                            </div>
                                            <!-- /TABLE COLUMN -->

                                            <!-- TABLE COLUMN -->
                                            <div class="table-column centered padded">
                                                <!-- TABLE TITLE -->
                                                <p class="table-title">1068</p>
                                                <!-- /TABLE TITLE -->
                                            </div>
                                            <!-- /TABLE COLUMN -->
                                        </div>
                                        <!-- /TABLE ROW -->

                                        <!-- TABLE ROW -->
                                        <div class="table-row tiny">
                                            <!-- TABLE COLUMN -->
                                            <div class="table-column">
                                                <!-- PRODUCT PREVIEW -->
                                                <div class="product-preview micro">
                                                    <!-- PRODUCT PREVIEW IMAGE -->
                                                    <a href="marketplace-product.html">
                                                        <figure class="product-preview-image liquid">
                                                            <img src="img/marketplace/items/13.jpg" alt="item-13">
                                                        </figure>
                                                    </a>
                                                    <!-- /PRODUCT PREVIEW IMAGE -->

                                                    <!-- PRODUCT PREVIEW INFO -->
                                                    <div class="product-preview-info">
                                                        <!-- PRODUCT PREVIEW TITLE -->
                                                        <p class="product-preview-title"><a
                                                                href="marketplace-product.html">American Football Team
                                                                Page</a></p>
                                                        <!-- /PRODUCT PREVIEW TITLE -->

                                                        <!-- PRODUCT PREVIEW CATEGORY -->
                                                        <p class="product-preview-category digital"><a
                                                                href="marketplace-category.html">HTML Templates</a></p>
                                                        <!-- /PRODUCT PREVIEW CATEGORY -->
                                                    </div>
                                                    <!-- /PRODUCT PREVIEW INFO -->
                                                </div>
                                                <!-- /PRODUCT PREVIEW -->
                                            </div>
                                            <!-- /TABLE COLUMN -->

                                            <!-- TABLE COLUMN -->
                                            <div class="table-column centered padded">
                                                <!-- TABLE TITLE -->
                                                <p class="table-title">22</p>
                                                <!-- /TABLE TITLE -->
                                            </div>
                                            <!-- /TABLE COLUMN -->

                                            <!-- TABLE COLUMN -->
                                            <div class="table-column centered padded">
                                                <!-- TABLE TITLE -->
                                                <p class="table-title">990</p>
                                                <!-- /TABLE TITLE -->
                                            </div>
                                            <!-- /TABLE COLUMN -->
                                        </div>
                                        <!-- /TABLE ROW -->
                                    </div>
                                    <!-- /TABLE BODY -->
                                </div>
                                <!-- /TABLE -->
                            </div>
                            <!-- WIDGET BOX CONTENT -->
                        </div>
                        <!-- /WIDGET BOX -->
                    </div>
                    <!-- /GRID COLUMN -->

                    <!-- GRID COLUMN -->
                    <div class="grid-column">
                        <!-- WIDGET BOX -->
                        <div class="widget-box">
                            <!-- WIDGET BOX ACTIONS -->
                            <div class="widget-box-actions">
                                <!-- WIDGET BOX ACTION -->
                                <div class="widget-box-action">
                                    <!-- WIDGET BOX TITLE -->
                                    <p class="widget-box-title">Performance</p>
                                    <!-- /WIDGET BOX TITLE -->
                                </div>
                                <!-- /WIDGET BOX ACTION -->

                                <!-- WIDGET BOX ACTION -->
                                <div class="widget-box-action">
                                    <!-- FORM SELECT -->
                                    <div class="form-select v2">
                                        <select id="vs-performance-report-date" name="vs_performance_report_date">
                                            <option value="0">Aug/Nov 2019</option>
                                            <option value="1">Jan/Aug 2019</option>
                                        </select>
                                        <!-- FORM SELECT ICON -->
                                        <svg class="form-select-icon icon-small-arrow">
                                            <use xlink:href="#svg-small-arrow"></use>
                                        </svg>
                                        <!-- /FORM SELECT ICON -->
                                    </div>
                                    <!-- /FORM SELECT -->
                                </div>
                                <!-- /WIDGET BOX ACTION -->
                            </div>
                            <!-- /WIDGET BOX ACTIONS -->

                            <!-- WIDGET BOX CONTENT -->
                            <div class="widget-box-content">
                                <!-- CHART WRAP -->
                                <div class="chart-wrap small">
                                    <!-- CHART -->
                                    <div class="chart">
                                        <canvas id="vs-performance-chart"></canvas>
                                    </div>
                                    <!-- /CHART -->
                                </div>
                                <!-- /CHART WRAP -->
                            </div>
                            <!-- WIDGET BOX CONTENT -->

                            <!-- WIDGET BOX FOOTER -->
                            <div class="widget-box-footer">
                                <!-- REFERENCE ITEM LIST -->
                                <div class="reference-item-list centered">
                                    <!-- REFERENCE ITEM -->
                                    <div class="reference-item">
                                        <!-- REFERENCE BULLET -->
                                        <div class="reference-bullet secondary"></div>
                                        <!-- REFERENCE BULLET -->

                                        <!-- REFERENCE ITEM TEXT -->
                                        <p class="reference-item-text">Views</p>
                                        <!-- /REFERENCE ITEM TEXT -->
                                    </div>
                                    <!-- /REFERENCE ITEM -->

                                    <!-- REFERENCE ITEM -->
                                    <div class="reference-item">
                                        <!-- REFERENCE BULLET -->
                                        <div class="reference-bullet primary"></div>
                                        <!-- REFERENCE BULLET -->

                                        <!-- REFERENCE ITEM TEXT -->
                                        <p class="reference-item-text">Sales</p>
                                        <!-- /REFERENCE ITEM TEXT -->
                                    </div>
                                    <!-- /REFERENCE ITEM -->
                                </div>
                                <!-- /REFERENCE ITEM LIST -->
                            </div>
                            <!-- /WIDGET BOX FOOTER -->
                        </div>
                        <!-- /WIDGET BOX -->
                    </div>
                    <!-- /GRID COLUMN -->
                </div>
                <!-- /GRID -->
            </div>
            <!-- /GRID COLUMN -->

            <!-- SECTION HEADER -->
            <div class="section-header">
                <!-- SECTION HEADER INFO -->
                <div class="section-header-info">
                    <!-- SECTION PRETITLE -->
                    <p class="section-pretitle">My Store</p>
                    <!-- /SECTION PRETITLE -->

                    <!-- SECTION TITLE -->
                    <h2 class="section-title">My Payments</h2>
                    <!-- /SECTION TITLE -->
                </div>
                <!-- /SECTION HEADER INFO -->
            </div>
            <!-- /SECTION HEADER -->

            <!-- GRID COLUMN -->
            <div class="grid-column">
                <!-- GRID -->
                <div class="grid grid-3-6_9 stretched">
                    <!-- GRID COLUMN -->
                    <div class="grid-column">
                        <!-- WIDGET BOX -->
                        <div class="widget-box">
                            <!-- WIDGET BOX TITLE -->
                            <p class="widget-box-title">Payment Method</p>
                            <!-- /WIDGET BOX TITLE -->

                            <!-- WIDGET BOX CONTENT -->
                            <div class="widget-box-content">
                                <!-- FORM -->
                                <form class="form">
                                    <!-- FORM ROW -->
                                    <div class="form-row">
                                        <!-- CHECKBOX WRAP -->
                                        <div class="checkbox-wrap">
                                            <input type="radio" id="payment-method-paypal" name="payment_method"
                                                value="payment-method-paypal" checked>
                                            <!-- CHECKBOX BOX -->
                                            <div class="checkbox-box round"></div>
                                            <!-- /CHECKBOX BOX -->
                                            <label class="accordion-trigger-linked"
                                                for="payment-method-paypal">Paypal</label>

                                            <!-- CHECKBOX INFO -->
                                            <div class="checkbox-info accordion-content-linked accordion-open">
                                                <!-- CHECKBOX INFO TEXT -->
                                                <p class="checkbox-info-text">Click "Confirm Method" to be redirected to
                                                    login and confirm your account.</p>
                                                <!-- /CHECKBOX INFO TEXT -->
                                            </div>
                                            <!-- /CHECKBOX INFO -->
                                        </div>
                                        <!-- /CHECKBOX WRAP -->
                                    </div>
                                    <!-- /FORM ROW -->

                                    <!-- FORM ROW -->
                                    <div class="form-row">
                                        <!-- CHECKBOX WRAP -->
                                        <div class="checkbox-wrap">
                                            <input type="radio" id="payment-method-payoneer" name="payment_method"
                                                value="payment-method-payoneer">
                                            <!-- CHECKBOX BOX -->
                                            <div class="checkbox-box round"></div>
                                            <!-- /CHECKBOX BOX -->
                                            <label class="accordion-trigger-linked"
                                                for="payment-method-payoneer">Payoneer</label>

                                            <!-- CHECKBOX INFO -->
                                            <div class="checkbox-info accordion-content-linked">
                                                <!-- CHECKBOX INFO TEXT -->
                                                <p class="checkbox-info-text">Click "Confirm Method" to be redirected to
                                                    login and confirm your account.</p>
                                                <!-- /CHECKBOX INFO TEXT -->
                                            </div>
                                            <!-- /CHECKBOX INFO -->
                                        </div>
                                        <!-- /CHECKBOX WRAP -->
                                    </div>
                                    <!-- /FORM ROW -->
                                </form>
                                <!-- /FORM -->

                                <!-- BUTTON -->
                                <p class="button full primary">Confirm Method</p>
                                <!-- /BUTTON -->
                            </div>
                            <!-- WIDGET BOX CONTENT -->
                        </div>
                        <!-- /WIDGET BOX -->

                        <!-- WIDGET BOX -->
                        <div class="widget-box">
                            <!-- WIDGET BOX TITLE -->
                            <p class="widget-box-title">Confirmed Method</p>
                            <!-- /WIDGET BOX TITLE -->

                            <!-- WIDGET BOX CONTENT -->
                            <div class="widget-box-content">
                                <!-- STATUS INFO -->
                                <div class="status-info success">
                                    <!-- STATUS ICON WRAP -->
                                    <div class="status-icon-wrap">
                                        <!-- STATUS ICON -->
                                        <svg class="status-icon icon-check">
                                            <use xlink:href="#svg-check"></use>
                                        </svg>
                                        <!-- /STATUS ICON -->
                                    </div>
                                    <!-- /STATUS ICON WRAP -->

                                    <!-- STATUS TITLE -->
                                    <p class="status-title">marinav@payments.com</p>
                                    <!-- /STATUS TITLE -->

                                    <!-- STATUS TEXT -->
                                    <p class="status-text">PayPal</p>
                                    <!-- /STATUS TEXT -->

                                    <!-- STATUS DESCRIPTION -->
                                    <p class="status-description">Your selected payout method was confirmed on Jan 17, 2019
                                    </p>
                                    <!-- /STATUS DESCRIPTION -->
                                </div>
                                <!-- /STATUS INFO -->
                            </div>
                            <!-- WIDGET BOX CONTENT -->
                        </div>
                        <!-- /WIDGET BOX -->
                    </div>
                    <!-- /GRID COLUMN -->

                    <!-- GRID COLUMN -->
                    <div class="grid-column">
                        <!-- WIDGET BOX -->
                        <div class="widget-box">
                            <!-- WIDGET BOX TITLE -->
                            <p class="widget-box-title">Payments History</p>
                            <!-- /WIDGET BOX TITLE -->

                            <!-- WIDGET BOX CONTENT -->
                            <div class="widget-box-content">
                                <!-- TABLE WRAP -->
                                <div class="table-wrap" data-simplebar>
                                    <!-- TABLE -->
                                    <div class="table table-payments join-rows">
                                        <!-- TABLE HEADER -->
                                        <div class="table-header">
                                            <!-- TABLE HEADER COLUMN -->
                                            <div class="table-header-column">
                                                <!-- TABLE HEADER TITLE -->
                                                <p class="table-header-title">Date</p>
                                                <!-- /TABLE HEADER TITLE -->
                                            </div>
                                            <!-- /TABLE HEADER COLUMN -->

                                            <!-- TABLE HEADER COLUMN -->
                                            <div class="table-header-column padded">
                                                <!-- TABLE HEADER TITLE -->
                                                <p class="table-header-title">Method</p>
                                                <!-- /TABLE HEADER TITLE -->
                                            </div>
                                            <!-- /TABLE HEADER COLUMN -->

                                            <!-- TABLE HEADER COLUMN -->
                                            <div class="table-header-column centered padded">
                                                <!-- TABLE HEADER TITLE -->
                                                <p class="table-header-title">Amount</p>
                                                <!-- /TABLE HEADER TITLE -->
                                            </div>
                                            <!-- /TABLE HEADER COLUMN -->

                                            <!-- TABLE HEADER COLUMN -->
                                            <div class="table-header-column padded-left align-right">
                                                <!-- TABLE HEADER TITLE -->
                                                <p class="table-header-title">Status</p>
                                                <!-- /TABLE HEADER TITLE -->
                                            </div>
                                            <!-- /TABLE HEADER COLUMN -->
                                        </div>
                                        <!-- /TABLE HEADER -->

                                        <!-- TABLE BODY -->
                                        <div class="table-body">
                                            <!-- TABLE ROW -->
                                            <div class="table-row micro">
                                                <!-- TABLE COLUMN -->
                                                <div class="table-column">
                                                    <!-- TABLE TEXT -->
                                                    <p class="table-text"><span class="light">Nov 15th, 2019</span></p>
                                                    <!-- /TABLE TEXT -->
                                                </div>
                                                <!-- /TABLE COLUMN -->

                                                <!-- TABLE COLUMN -->
                                                <div class="table-column padded">
                                                    <!-- TABLE TITLE -->
                                                    <p class="table-title">marinav@payments.com</p>
                                                    <!-- /TABLE TITLE -->
                                                </div>
                                                <!-- /TABLE COLUMN -->

                                                <!-- TABLE COLUMN -->
                                                <div class="table-column centered padded">
                                                    <!-- TABLE TITLE -->
                                                    <p class="table-title">$250.32</p>
                                                    <!-- /TABLE TITLE -->
                                                </div>
                                                <!-- /TABLE COLUMN -->

                                                <!-- TABLE COLUMN -->
                                                <div class="table-column padded-left align-right">
                                                    <!-- TABLE TEXT -->
                                                    <p class="table-text"><span class="light">Pending</span></p>
                                                    <!-- /TABLE TEXT -->
                                                </div>
                                                <!-- /TABLE COLUMN -->
                                            </div>
                                            <!-- /TABLE ROW -->

                                            <!-- TABLE ROW -->
                                            <div class="table-row micro">
                                                <!-- TABLE COLUMN -->
                                                <div class="table-column">
                                                    <!-- TABLE TEXT -->
                                                    <p class="table-text"><span class="light">Oct 15th, 2019</span></p>
                                                    <!-- /TABLE TEXT -->
                                                </div>
                                                <!-- /TABLE COLUMN -->

                                                <!-- TABLE COLUMN -->
                                                <div class="table-column padded">
                                                    <!-- TABLE TITLE -->
                                                    <p class="table-title">marinav@payments.com</p>
                                                    <!-- /TABLE TITLE -->
                                                </div>
                                                <!-- /TABLE COLUMN -->

                                                <!-- TABLE COLUMN -->
                                                <div class="table-column centered padded">
                                                    <!-- TABLE TITLE -->
                                                    <p class="table-title">$118.24</p>
                                                    <!-- /TABLE TITLE -->
                                                </div>
                                                <!-- /TABLE COLUMN -->

                                                <!-- TABLE COLUMN -->
                                                <div class="table-column padded-left align-right">
                                                    <!-- TABLE TITLE -->
                                                    <p class="table-title"><span class="highlighted">Paid</span></p>
                                                    <!-- /TABLE TITLE -->
                                                </div>
                                                <!-- /TABLE COLUMN -->
                                            </div>
                                            <!-- /TABLE ROW -->

                                            <!-- TABLE ROW -->
                                            <div class="table-row micro">
                                                <!-- TABLE COLUMN -->
                                                <div class="table-column">
                                                    <!-- TABLE TEXT -->
                                                    <p class="table-text"><span class="light">Sep 15th, 2019</span></p>
                                                    <!-- /TABLE TEXT -->
                                                </div>
                                                <!-- /TABLE COLUMN -->

                                                <!-- TABLE COLUMN -->
                                                <div class="table-column padded">
                                                    <!-- TABLE TITLE -->
                                                    <p class="table-title">marinav@payments.com</p>
                                                    <!-- /TABLE TITLE -->
                                                </div>
                                                <!-- /TABLE COLUMN -->

                                                <!-- TABLE COLUMN -->
                                                <div class="table-column centered padded">
                                                    <!-- TABLE TITLE -->
                                                    <p class="table-title">$337.20</p>
                                                    <!-- /TABLE TITLE -->
                                                </div>
                                                <!-- /TABLE COLUMN -->

                                                <!-- TABLE COLUMN -->
                                                <div class="table-column padded-left align-right">
                                                    <!-- TABLE TITLE -->
                                                    <p class="table-title"><span class="highlighted">Paid</span></p>
                                                    <!-- /TABLE TITLE -->
                                                </div>
                                                <!-- /TABLE COLUMN -->
                                            </div>
                                            <!-- /TABLE ROW -->

                                            <!-- TABLE ROW -->
                                            <div class="table-row micro">
                                                <!-- TABLE COLUMN -->
                                                <div class="table-column">
                                                    <!-- TABLE TEXT -->
                                                    <p class="table-text"><span class="light">Aug 15th, 2019</span></p>
                                                    <!-- /TABLE TEXT -->
                                                </div>
                                                <!-- /TABLE COLUMN -->

                                                <!-- TABLE COLUMN -->
                                                <div class="table-column padded">
                                                    <!-- TABLE TITLE -->
                                                    <p class="table-title">marinav@payments.com</p>
                                                    <!-- /TABLE TITLE -->
                                                </div>
                                                <!-- /TABLE COLUMN -->

                                                <!-- TABLE COLUMN -->
                                                <div class="table-column centered padded">
                                                    <!-- TABLE TITLE -->
                                                    <p class="table-title">$101.68</p>
                                                    <!-- /TABLE TITLE -->
                                                </div>
                                                <!-- /TABLE COLUMN -->

                                                <!-- TABLE COLUMN -->
                                                <div class="table-column padded-left align-right">
                                                    <!-- TABLE TITLE -->
                                                    <p class="table-title"><span class="highlighted">Paid</span></p>
                                                    <!-- /TABLE TITLE -->
                                                </div>
                                                <!-- /TABLE COLUMN -->
                                            </div>
                                            <!-- /TABLE ROW -->

                                            <!-- TABLE ROW -->
                                            <div class="table-row micro">
                                                <!-- TABLE COLUMN -->
                                                <div class="table-column">
                                                    <!-- TABLE TEXT -->
                                                    <p class="table-text"><span class="light">Jul 15th, 2019</span></p>
                                                    <!-- /TABLE TEXT -->
                                                </div>
                                                <!-- /TABLE COLUMN -->

                                                <!-- TABLE COLUMN -->
                                                <div class="table-column padded">
                                                    <!-- TABLE TITLE -->
                                                    <p class="table-title">marinav@payments.com</p>
                                                    <!-- /TABLE TITLE -->
                                                </div>
                                                <!-- /TABLE COLUMN -->

                                                <!-- TABLE COLUMN -->
                                                <div class="table-column centered padded">
                                                    <!-- TABLE TITLE -->
                                                    <p class="table-title">$89.44</p>
                                                    <!-- /TABLE TITLE -->
                                                </div>
                                                <!-- /TABLE COLUMN -->

                                                <!-- TABLE COLUMN -->
                                                <div class="table-column padded-left align-right">
                                                    <!-- TABLE TITLE -->
                                                    <p class="table-title"><span class="highlighted">Paid</span></p>
                                                    <!-- /TABLE TITLE -->
                                                </div>
                                                <!-- /TABLE COLUMN -->
                                            </div>
                                            <!-- /TABLE ROW -->

                                            <!-- TABLE ROW -->
                                            <div class="table-row micro">
                                                <!-- TABLE COLUMN -->
                                                <div class="table-column">
                                                    <!-- TABLE TEXT -->
                                                    <p class="table-text"><span class="light">Jun 15th, 2019</span></p>
                                                    <!-- /TABLE TEXT -->
                                                </div>
                                                <!-- /TABLE COLUMN -->

                                                <!-- TABLE COLUMN -->
                                                <div class="table-column padded">
                                                    <!-- TABLE TITLE -->
                                                    <p class="table-title">marinav@payments.com</p>
                                                    <!-- /TABLE TITLE -->
                                                </div>
                                                <!-- /TABLE COLUMN -->

                                                <!-- TABLE COLUMN -->
                                                <div class="table-column centered padded">
                                                    <!-- TABLE TITLE -->
                                                    <p class="table-title">$109.82</p>
                                                    <!-- /TABLE TITLE -->
                                                </div>
                                                <!-- /TABLE COLUMN -->

                                                <!-- TABLE COLUMN -->
                                                <div class="table-column padded-left align-right">
                                                    <!-- TABLE TITLE -->
                                                    <p class="table-title"><span class="highlighted">Paid</span></p>
                                                    <!-- /TABLE TITLE -->
                                                </div>
                                                <!-- /TABLE COLUMN -->
                                            </div>
                                            <!-- /TABLE ROW -->

                                            <!-- TABLE ROW -->
                                            <div class="table-row micro">
                                                <!-- TABLE COLUMN -->
                                                <div class="table-column">
                                                    <!-- TABLE TEXT -->
                                                    <p class="table-text"><span class="light">May 15th, 2019</span></p>
                                                    <!-- /TABLE TEXT -->
                                                </div>
                                                <!-- /TABLE COLUMN -->

                                                <!-- TABLE COLUMN -->
                                                <div class="table-column padded">
                                                    <!-- TABLE TITLE -->
                                                    <p class="table-title">marinav@payments.com</p>
                                                    <!-- /TABLE TITLE -->
                                                </div>
                                                <!-- /TABLE COLUMN -->

                                                <!-- TABLE COLUMN -->
                                                <div class="table-column centered padded">
                                                    <!-- TABLE TITLE -->
                                                    <p class="table-title">$52.17</p>
                                                    <!-- /TABLE TITLE -->
                                                </div>
                                                <!-- /TABLE COLUMN -->

                                                <!-- TABLE COLUMN -->
                                                <div class="table-column padded-left align-right">
                                                    <!-- TABLE TITLE -->
                                                    <p class="table-title"><span class="highlighted">Paid</span></p>
                                                    <!-- /TABLE TITLE -->
                                                </div>
                                                <!-- /TABLE COLUMN -->
                                            </div>
                                            <!-- /TABLE ROW -->
                                        </div>
                                        <!-- /TABLE BODY -->
                                    </div>
                                    <!-- /TABLE -->
                                </div>
                                <!-- /TABLE WRAP -->
                            </div>
                            <!-- WIDGET BOX CONTENT -->
                        </div>
                        <!-- /WIDGET BOX -->
                    </div>
                    <!-- /GRID COLUMN -->
                </div>
                <!-- /GRID -->
            </div>
            <!-- /GRID COLUMN -->
        </div>
        <!-- /GRID COLUMN -->
    </div>

@endsection
