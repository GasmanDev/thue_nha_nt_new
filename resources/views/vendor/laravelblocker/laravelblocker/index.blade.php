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

    <div class="w-100 my-5">
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
              <p class="table-header-title">ID</p>
              <!-- /TABLE HEADER TITLE -->
            </div>
            <!-- /TABLE HEADER COLUMN -->

            <!-- TABLE HEADER COLUMN -->
            <div class="table-header-column padded-left">
              <!-- TABLE HEADER TITLE -->
              <p class="table-header-title">Note</p>
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
              <p class="table-header-title">Value</p>
              <!-- /TABLE HEADER TITLE -->
            </div>
            <!-- /TABLE HEADER COLUMN -->

            <!-- TABLE HEADER COLUMN -->
            <div class="table-header-column centered padded">
              <!-- TABLE HEADER TITLE -->
              <p class="table-header-title">UserID</p>
              <!-- /TABLE HEADER TITLE -->
            </div>
            <!-- /TABLE HEADER COLUMN -->

            <!-- TABLE HEADER COLUMN -->
            <div class="table-header-column centered padded">
              <!-- TABLE HEADER TITLE -->
              <p class="table-header-title">Create</p>
              <!-- /TABLE HEADER TITLE -->
            </div>
            <!-- /TABLE HEADER COLUMN -->

            <!-- TABLE HEADER COLUMN -->
            <div class="table-header-column centered padded">
              <!-- TABLE HEADER TITLE -->
              <p class="table-header-title">Update</p>
              <!-- /TABLE HEADER TITLE -->
            </div>
            <div class="table-header-column centered left">
                <!-- TABLE HEADER TITLE -->
                <p class="table-header-title">Action</p>
                <!-- /TABLE HEADER TITLE -->
              </div>
            <!-- /TABLE HEADER COLUMN -->
          </div>
          <!-- /TABLE HEADER -->

          <!-- TABLE BODY -->
          @foreach($blocked as $blockedItem)
          <div class="table-body same-color-rows">
            <!-- TABLE ROW -->
            <div class="table-row micro">
              <!-- TABLE COLUMN -->
              <div class="table-column">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">{!! $blockedItem->id !!}</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column padded-left">
                <!-- TABLE LINK -->
                <a class="table-link" href="marketplace-product.html"><span class="highlighted"> {!! $blockedItem->note !!}</span></a>
                <!-- /TABLE LINK -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title"> {!! $blockedItem->note !!}</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light"> {!! $blockedItem->value !!}</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">
                    @if ($blockedItem->userId)
                    {!! $blockedItem->userId !!}
                @else
                    <span class="disabled">
                        {!! trans('laravelblocker::laravelblocker.none') !!}
                    </span>
                @endif
                </p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">{!! $blockedItem->created_at->format('m/d/Y H:ia') !!}</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">{!! $blockedItem->updated_at->format('m/d/Y H:ia') !!}</p>
                <!-- /TABLE TITLE -->
              </div>
              <div class="table-column centered padded">
                <button class="button secondary">
                    <a href="/blocker/{{ $blockedItem->id }}" data-toggle="tooltip" title="{{ trans("laravelblocker::laravelblocker.tooltips.show") }}">
                        <i class="fa fa-eye fa-fw" aria-hidden="true"></i> <span class="hidden-xs hidden-sm">
                            {!! trans("laravelblocker::laravelblocker.buttons.show") !!}
                        </span>
                    </a>
                </button>
              </div>
              <div class="table-column centered padded">
                <button class="button primary">
                    <a href="/blocker/{{ $blockedItem->id }}/edit" data-toggle="tooltip" title="{{ trans("laravelblocker::laravelblocker.tooltips.edit") }}">
                        <i class="fa fa-eye fa-fw" aria-hidden="true"></i> <span class="hidden-xs hidden-sm">
                            {!! trans("laravelblocker::laravelblocker.buttons.edit") !!}
                        </span>
                    </a>
                </button>
              </div>
              <!-- /TABLE COLUMN -->
              <div class="table-column centered padded">
                <button class="button danger">
                    <a href="/blocker/{{ $blockedItem->id }}" data-toggle="tooltip" title="Delete">
                        <i class="fa fa-eye fa-fw" aria-hidden="true"></i> <span class="hidden-xs hidden-sm">Delete</span>
                    </a>
                </button>
              </div>


              <!-- /TABLE COLUMN -->
            </div>
            <!-- /TABLE ROW -->
          </div>
          @endforeach
          <!-- /TABLE BODY -->
        </div>
        <!-- /TABLE -->
    </div>

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
