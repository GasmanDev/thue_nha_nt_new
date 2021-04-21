@extends(config('laravelblocker.laravelBlockerBladeExtended'))

@section(config('laravelblocker.laravelBlockerTitleExtended'))
    {!! trans('laravelblocker::laravelblocker.titles.show-blocked') !!}
@endsection

@php
    switch (config('laravelblocker.blockerBootstapVersion')) {
        case '4':
            $containerClass = 'card';
            $containerHeaderClass = 'card-header bg-warning text-white';
            $containerBodyClass = 'card-body';
            break;
        case '3':
        default:
            $containerClass = 'panel panel-warning';
            $containerHeaderClass = 'panel-heading';
            $containerBodyClass = 'panel-body';
    }
    $blockerBootstrapCardClasses = (is_null(config('laravelblocker.blockerBootstrapCardClasses')) ? '' : config('laravelblocker.blockerBootstrapCardClasses'));
@endphp

@section(config('laravelblocker.blockerBladePlacementCss'))
    @if(config('laravelblocker.enabledDatatablesJs'))
        <link rel="stylesheet" type="text/css" href="{{ config('laravelblocker.datatablesCssCDN') }}">
    @endif
    @if(config('laravelblocker.blockerEnableFontAwesomeCDN'))
        <link rel="stylesheet" type="text/css" href="{{ config('laravelblocker.blockerFontAwesomeCDN') }}">
    @endif
    @include('laravelblocker::partials.styles')
    @include('laravelblocker::partials.bs-visibility-css')
@endsection

@section('content')

    @include('laravelblocker::partials.flash-messages')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="{{ $containerClass }} {{ $blockerBootstrapCardClasses }}">
                    <div class="{{ $containerHeaderClass }}">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                {!! trans('laravelblocker::laravelblocker.blocked-items-title') !!}
                            </span>
                            <div class="btn-group pull-right btn-group-xs">
                                <button type="button" class="btn btn-warning text-white dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v fa-fw" aria-hidden="true"></i>
                                    <span class="sr-only">
                                        {!! trans('laravelblocker::laravelblocker.users-menu-alt') !!}
                                    </span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="{{ route('laravelblocker::blocker.create') }}">
                                        <i class="fa fa-fw fa-plus" aria-hidden="true"></i>
                                        {!! trans('laravelblocker::laravelblocker.buttons.create-new-blocked') !!}
                                    </a>
                                    @if($deletedBlockedItems->count() > 0)
                                        <a class="dropdown-item" href="{{ url('/blocker-deleted') }}">
                                            <i class="fa fa-fw fa-trash-o" aria-hidden="true"></i>
                                            {!! trans('laravelblocker::laravelblocker.buttons.show-deleted-blocked') !!}
                                            <span class="badge-pill badge badge-warning">
                                                {{ $deletedBlockedItems->count() }}
                                            </span>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="{{ $containerBodyClass }}">
                        @if(config('laravelblocker.enableSearchBlocked'))
                            @include('laravelblocker::forms.search-blocked')
                        @endif

                        @include('laravelblocker::partials.blocked-items-table', ['tabletype' => 'normal'])

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="table-wrap" data-simplebar>
        <!-- TABLE -->
        <div class="table table-sales">
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
            <div class="table-header-column padded-left">
              <!-- TABLE HEADER TITLE -->
              <p class="table-header-title">Item</p>
              <!-- /TABLE HEADER TITLE -->
            </div>
            <!-- /TABLE HEADER COLUMN -->

            <!-- TABLE HEADER COLUMN -->
            <div class="table-header-column centered padded">
              <!-- TABLE HEADER TITLE -->
              <p class="table-header-title">Type</p>
              <!-- /TABLE HEADER TITLE -->
            </div>
            <!-- /TABLE HEADER COLUMN -->

            <!-- TABLE HEADER COLUMN -->
            <div class="table-header-column centered padded">
              <!-- TABLE HEADER TITLE -->
              <p class="table-header-title">Code</p>
              <!-- /TABLE HEADER TITLE -->
            </div>
            <!-- /TABLE HEADER COLUMN -->

            <!-- TABLE HEADER COLUMN -->
            <div class="table-header-column centered padded">
              <!-- TABLE HEADER TITLE -->
              <p class="table-header-title">Price</p>
              <!-- /TABLE HEADER TITLE -->
            </div>
            <!-- /TABLE HEADER COLUMN -->

            <!-- TABLE HEADER COLUMN -->
            <div class="table-header-column centered padded">
              <!-- TABLE HEADER TITLE -->
              <p class="table-header-title">Cut</p>
              <!-- /TABLE HEADER TITLE -->
            </div>
            <!-- /TABLE HEADER COLUMN -->

            <!-- TABLE HEADER COLUMN -->
            <div class="table-header-column centered padded">
              <!-- TABLE HEADER TITLE -->
              <p class="table-header-title">Earning</p>
              <!-- /TABLE HEADER TITLE -->
            </div>
            <!-- /TABLE HEADER COLUMN -->

            <!-- TABLE HEADER COLUMN -->
            <div class="table-header-column padded-left"></div>
            <!-- /TABLE HEADER COLUMN -->
          </div>
          <!-- /TABLE HEADER -->

          <!-- TABLE BODY -->
          <div class="table-body same-color-rows">
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
              <div class="table-column padded-left">
                <!-- TABLE LINK -->
                <a class="table-link" href="marketplace-product.html"><span class="highlighted">Pixel Diamond Gaming Magazine</span></a>
                <!-- /TABLE LINK -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">Sale</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">VK1287</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">$26</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">50%</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">$13</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column padded-left">
                <!-- PERCENTAGE DIFF ICON WRAP -->
                <div class="percentage-diff-icon-wrap positive">
                  <!-- PERCENTAGE DIFF ICON -->
                  <svg class="percentage-diff-icon icon-plus-small">
                    <use xlink:href="#svg-plus-small"></use>
                  </svg>
                  <!-- /PERCENTAGE DIFF ICON -->
                </div>
                <!-- /PERCENTAGE DIFF ICON WRAP -->
              </div>
              <!-- /TABLE COLUMN -->
            </div>
            <!-- /TABLE ROW -->

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
              <div class="table-column padded-left">
                <!-- TABLE LINK -->
                <a class="table-link" href="marketplace-product.html"><span class="highlighted">Twitch Stream UI Pack</span></a>
                <!-- /TABLE LINK -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">Sale</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">VK1364</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">$12</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">50%</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">$6</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column padded-left">
                <!-- PERCENTAGE DIFF ICON WRAP -->
                <div class="percentage-diff-icon-wrap positive">
                  <!-- PERCENTAGE DIFF ICON -->
                  <svg class="percentage-diff-icon icon-plus-small">
                    <use xlink:href="#svg-plus-small"></use>
                  </svg>
                  <!-- /PERCENTAGE DIFF ICON -->
                </div>
                <!-- /PERCENTAGE DIFF ICON WRAP -->
              </div>
              <!-- /TABLE COLUMN -->
            </div>
            <!-- /TABLE ROW -->

            <!-- TABLE ROW -->
            <div class="table-row micro">
              <!-- TABLE COLUMN -->
              <div class="table-column">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">Nov 14th, 2019</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column padded-left">
                <!-- TABLE LINK -->
                <a class="table-link" href="marketplace-product.html"><span class="highlighted">Pixel Diamond Gaming Magazine</span></a>
                <!-- /TABLE LINK -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">Sale</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">VK7638</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">$26</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">50%</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">$13</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column padded-left">
                <!-- PERCENTAGE DIFF ICON WRAP -->
                <div class="percentage-diff-icon-wrap positive">
                  <!-- PERCENTAGE DIFF ICON -->
                  <svg class="percentage-diff-icon icon-plus-small">
                    <use xlink:href="#svg-plus-small"></use>
                  </svg>
                  <!-- /PERCENTAGE DIFF ICON -->
                </div>
                <!-- /PERCENTAGE DIFF ICON WRAP -->
              </div>
              <!-- /TABLE COLUMN -->
            </div>
            <!-- /TABLE ROW -->

            <!-- TABLE ROW -->
            <div class="table-row micro">
              <!-- TABLE COLUMN -->
              <div class="table-column">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">Nov 14th, 2019</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column padded-left">
                <!-- TABLE LINK -->
                <a class="table-link" href="marketplace-product.html"><span class="highlighted">Twitch Stream UI Pack</span></a>
                <!-- /TABLE LINK -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">Sale</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">VK7285</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">$12</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">50%</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">$6</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column padded-left">
                <!-- PERCENTAGE DIFF ICON WRAP -->
                <div class="percentage-diff-icon-wrap positive">
                  <!-- PERCENTAGE DIFF ICON -->
                  <svg class="percentage-diff-icon icon-plus-small">
                    <use xlink:href="#svg-plus-small"></use>
                  </svg>
                  <!-- /PERCENTAGE DIFF ICON -->
                </div>
                <!-- /PERCENTAGE DIFF ICON WRAP -->
              </div>
              <!-- /TABLE COLUMN -->
            </div>
            <!-- /TABLE ROW -->

            <!-- TABLE ROW -->
            <div class="table-row micro">
              <!-- TABLE COLUMN -->
              <div class="table-column">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">Nov 14th, 2019</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column padded-left">
                <!-- TABLE LINK -->
                <a class="table-link" href="marketplace-product.html"><span class="highlighted">Twitch Stream UI Pack</span></a>
                <!-- /TABLE LINK -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">Sale</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">VK9673</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">$12</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">50%</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">$6</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column padded-left">
                <!-- PERCENTAGE DIFF ICON WRAP -->
                <div class="percentage-diff-icon-wrap positive">
                  <!-- PERCENTAGE DIFF ICON -->
                  <svg class="percentage-diff-icon icon-plus-small">
                    <use xlink:href="#svg-plus-small"></use>
                  </svg>
                  <!-- /PERCENTAGE DIFF ICON -->
                </div>
                <!-- /PERCENTAGE DIFF ICON WRAP -->
              </div>
              <!-- /TABLE COLUMN -->
            </div>
            <!-- /TABLE ROW -->

            <!-- TABLE ROW -->
            <div class="table-row micro">
              <!-- TABLE COLUMN -->
              <div class="table-column">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">Nov 12th, 2019</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column padded-left">
                <!-- TABLE LINK -->
                <a class="table-link" href="marketplace-product.html"><span class="highlighted">Gaming Coin Badges Pack</span></a>
                <!-- /TABLE LINK -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">Purchase</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">VK2589</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">$6</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">-</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">-$6</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column padded-left">
                <!-- PERCENTAGE DIFF ICON WRAP -->
                <div class="percentage-diff-icon-wrap negative">
                  <!-- PERCENTAGE DIFF ICON -->
                  <svg class="percentage-diff-icon icon-minus-small">
                    <use xlink:href="#svg-minus-small"></use>
                  </svg>
                  <!-- /PERCENTAGE DIFF ICON -->
                </div>
                <!-- /PERCENTAGE DIFF ICON WRAP -->
              </div>
              <!-- /TABLE COLUMN -->
            </div>
            <!-- /TABLE ROW -->

            <!-- TABLE ROW -->
            <div class="table-row micro">
              <!-- TABLE COLUMN -->
              <div class="table-column">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">Nov 9th, 2019</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column padded-left">
                <!-- TABLE LINK -->
                <a class="table-link" href="marketplace-product.html"><span class="highlighted">People Illustrations Pack 01</span></a>
                <!-- /TABLE LINK -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">Purchase</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">VK3146</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">$5</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">-</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">-$5</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column padded-left">
                <!-- PERCENTAGE DIFF ICON WRAP -->
                <div class="percentage-diff-icon-wrap negative">
                  <!-- PERCENTAGE DIFF ICON -->
                  <svg class="percentage-diff-icon icon-minus-small">
                    <use xlink:href="#svg-minus-small"></use>
                  </svg>
                  <!-- /PERCENTAGE DIFF ICON -->
                </div>
                <!-- /PERCENTAGE DIFF ICON WRAP -->
              </div>
              <!-- /TABLE COLUMN -->
            </div>
            <!-- /TABLE ROW -->

            <!-- TABLE ROW -->
            <div class="table-row micro">
              <!-- TABLE COLUMN -->
              <div class="table-column">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">Nov 9th, 2019</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column padded-left">
                <!-- TABLE LINK -->
                <a class="table-link" href="marketplace-product.html"><span class="highlighted">Pixel Diamond Gaming Magazine</span></a>
                <!-- /TABLE LINK -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">Sale</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">VK4577</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">$26</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">50%</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">$13</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column padded-left">
                <!-- PERCENTAGE DIFF ICON WRAP -->
                <div class="percentage-diff-icon-wrap positive">
                  <!-- PERCENTAGE DIFF ICON -->
                  <svg class="percentage-diff-icon icon-plus-small">
                    <use xlink:href="#svg-plus-small"></use>
                  </svg>
                  <!-- /PERCENTAGE DIFF ICON -->
                </div>
                <!-- /PERCENTAGE DIFF ICON WRAP -->
              </div>
              <!-- /TABLE COLUMN -->
            </div>
            <!-- /TABLE ROW -->

            <!-- TABLE ROW -->
            <div class="table-row micro">
              <!-- TABLE COLUMN -->
              <div class="table-column">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">Nov 9th, 2019</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column padded-left">
                <!-- TABLE LINK -->
                <a class="table-link" href="marketplace-product.html"><span class="highlighted">Emerald Dragon Digital Marketplace</span></a>
                <!-- /TABLE LINK -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">Sale</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">VK6379</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">$24</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">50%</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">$12</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column padded-left">
                <!-- PERCENTAGE DIFF ICON WRAP -->
                <div class="percentage-diff-icon-wrap positive">
                  <!-- PERCENTAGE DIFF ICON -->
                  <svg class="percentage-diff-icon icon-plus-small">
                    <use xlink:href="#svg-plus-small"></use>
                  </svg>
                  <!-- /PERCENTAGE DIFF ICON -->
                </div>
                <!-- /PERCENTAGE DIFF ICON WRAP -->
              </div>
              <!-- /TABLE COLUMN -->
            </div>
            <!-- /TABLE ROW -->

            <!-- TABLE ROW -->
            <div class="table-row micro">
              <!-- TABLE COLUMN -->
              <div class="table-column">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">Nov 8th, 2019</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column padded-left">
                <!-- TABLE LINK -->
                <a class="table-link" href="marketplace-product.html"><span class="highlighted">Pixel Diamond Gaming Magazine</span></a>
                <!-- /TABLE LINK -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">Sale</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">VK9932</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">$26</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">50%</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">$13</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column padded-left">
                <!-- PERCENTAGE DIFF ICON WRAP -->
                <div class="percentage-diff-icon-wrap positive">
                  <!-- PERCENTAGE DIFF ICON -->
                  <svg class="percentage-diff-icon icon-plus-small">
                    <use xlink:href="#svg-plus-small"></use>
                  </svg>
                  <!-- /PERCENTAGE DIFF ICON -->
                </div>
                <!-- /PERCENTAGE DIFF ICON WRAP -->
              </div>
              <!-- /TABLE COLUMN -->
            </div>
            <!-- /TABLE ROW -->

            <!-- TABLE ROW -->
            <div class="table-row micro">
              <!-- TABLE COLUMN -->
              <div class="table-column">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">Nov 5th, 2019</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column padded-left">
                <!-- TABLE LINK -->
                <a class="table-link" href="marketplace-product.html"><span class="highlighted">Twitch Stream UI Pack</span></a>
                <!-- /TABLE LINK -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">Sale</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">VK1274</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">$12</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">50%</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">$6</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column padded-left">
                <!-- PERCENTAGE DIFF ICON WRAP -->
                <div class="percentage-diff-icon-wrap positive">
                  <!-- PERCENTAGE DIFF ICON -->
                  <svg class="percentage-diff-icon icon-plus-small">
                    <use xlink:href="#svg-plus-small"></use>
                  </svg>
                  <!-- /PERCENTAGE DIFF ICON -->
                </div>
                <!-- /PERCENTAGE DIFF ICON WRAP -->
              </div>
              <!-- /TABLE COLUMN -->
            </div>
            <!-- /TABLE ROW -->

            <!-- TABLE ROW -->
            <div class="table-row micro">
              <!-- TABLE COLUMN -->
              <div class="table-column">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">Nov 4th, 2019</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column padded-left">
                <!-- TABLE LINK -->
                <a class="table-link" href="marketplace-product.html"><span class="highlighted">Emerald Dragon Digital Marketplace</span></a>
                <!-- /TABLE LINK -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">Sale</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">VK3345</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">$24</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">50%</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">$12</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column padded-left">
                <!-- PERCENTAGE DIFF ICON WRAP -->
                <div class="percentage-diff-icon-wrap positive">
                  <!-- PERCENTAGE DIFF ICON -->
                  <svg class="percentage-diff-icon icon-plus-small">
                    <use xlink:href="#svg-plus-small"></use>
                  </svg>
                  <!-- /PERCENTAGE DIFF ICON -->
                </div>
                <!-- /PERCENTAGE DIFF ICON WRAP -->
              </div>
              <!-- /TABLE COLUMN -->
            </div>
            <!-- /TABLE ROW -->
          </div>
          <!-- /TABLE BODY -->
        </div>
        <!-- /TABLE -->
      </div>
      <!-- /TABLE

    @include('laravelblocker::modals.confirm-modal',[
        'formTrigger' => 'confirmDelete',
        'modalClass' => 'danger',
        'actionBtnIcon' => 'fa-trash-o'
    ])

@endsection

@section(config('laravelblocker.blockerBladePlacementJs'))
    @if(config('laravelblocker.enablejQueryCDN'))
        <script type="text/javascript" src="{{ config('laravelblocker.JQueryCDN') }}"></script>
    @endif
    @if (config('laravelblocker.enabledDatatablesJs'))
        @include('laravelblocker::scripts.datatables')
    @endif
    @include('laravelblocker::scripts.confirm-modal', ['formTrigger' => '#confirmDelete'])
    @if(config('laravelblocker.tooltipsEnabled'))
        @include('laravelblocker::scripts.tooltips')
    @endif
    @if(config('laravelblocker.enableSearchBlocked'))
        @include('laravelblocker::scripts.search-blocked', ['searchtype' => 'normal'])
    @endif
@endsection

@yield('inline_template_linked_css')
@yield('inline_footer_scripts')
