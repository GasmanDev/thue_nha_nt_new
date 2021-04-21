<div class="row">
    <div class="col-sm-8 offset-sm-4 col-md-6 offset-md-6 col-lg-5 offset-lg-7 col-xl-4 offset-xl-8">
        {!! Form::open(['route' => 'search-users', 'method' => 'POST', 'role' => 'form', 'class' => 'needs-validation', 'id' => 'search_users']) !!}
            {!! csrf_field() !!}
            <div class="input-group mb-3">
                {!! Form::text('user_search_box', NULL, ['id' => 'user_search_box', 'class' => 'form-control', 'placeholder' => trans('usersmanagement.search.search-users-ph'), 'aria-label' => trans('usersmanagement.search.search-users-ph'), 'required' => false]) !!}
                <div class="input-group-append">
                    <a href="#" class="input-group-addon btn btn-warning clear-search" data-toggle="tooltip" title="{{ trans('usersmanagement.tooltips.clear-search') }}" style="display:none;">
                        <i class="fa fa-fw fa-times" aria-hidden="true"></i>
                        <span class="sr-only">
                            {!! trans('usersmanagement.tooltips.clear-search') !!}
                        </span>
                    </a>
                    <a href="#" class="input-group-addon btn btn-secondary" id="search_trigger" data-toggle="tooltip" data-placement="bottom" title="{{ trans('usersmanagement.tooltips.submit-search') }}" >
                        <i class="fa fa-search fa-fw" aria-hidden="true"></i>
                        <span class="sr-only">
                            {!!  trans('usersmanagement.tooltips.submit-search') !!}
                        </span>
                    </a>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
</div>
{{-- <div class="section-filters-bar v1 my-2">
    <!-- SECTION FILTERS BAR ACTIONS -->
    <div class="section-filters-bar-actions w-100 mx-auto">
      <!-- FORM -->
      <form class="form">
        <!-- FORM INPUT -->
        <div class="form-input small with-button">
          <label for="friends-search">Search Friends</label>
          <input type="text" id="friends-search" name="friends_search">
          <!-- BUTTON -->
          <button class="button primary">
            <!-- ICON MAGNIFYING GLASS -->
            <svg class="icon-magnifying-glass">
              <use xlink:href="#svg-magnifying-glass"></use>
            </svg>
            <!-- /ICON MAGNIFYING GLASS -->
          </button>
          <!-- /BUTTON -->
        </div>
        <!-- /FORM INPUT -->

        <!-- FORM SELECT -->

        <!-- /FORM SELECT -->
      </form>

      <form class="form ">
        <!-- FORM INPUT -->
        <div class="form-input small with-button">
          <label for="friends-search">Search Friends</label>
          <input type="text" id="friends-search" name="friends_search">
          <!-- BUTTON -->
          <button class="button primary">
            <!-- ICON MAGNIFYING GLASS -->
            <svg class="icon-magnifying-glass">
              <use xlink:href="#svg-magnifying-glass"></use>
            </svg>
            <!-- /ICON MAGNIFYING GLASS -->
          </button>
          <!-- /BUTTON -->
        </div>
        <!-- /FORM INPUT -->

    </form>
      <!-- /FORM -->
    </div>
    <!-- /SECTION FILTERS BAR ACTIONS -->

    <!-- SECTION FILTERS BAR ACTIONS -->
    <!-- /SECTION FILTERS BAR ACTIONS -->
  </div> --}}

{{-- <div class="section-filters-bar v6 v6-2">
    <!-- SECTION FILTERS BAR ACTIONS -->
    <div class="section-filters-bar-actions">
      <!-- FORM -->
      <form class="form">
        <!-- FORM ITEM -->
        <div class="form-item split">
          <!-- FORM INPUT DECORATED -->
          <div class="form-input-decorated">
            <!-- FORM INPUT -->
            <div class="form-input small active">
              <label for="statement-from-date">From Date</label>
              <input type="text" id="statement-from-date" name="statement_from_date" value="02/22/2019">
            </div>
            <!-- /FORM INPUT -->

            <!-- FORM INPUT ICON -->
            <svg class="form-input-icon icon-events">
              <use xlink:href="#svg-events"></use>
            </svg>
            <!-- /FORM INPUT ICON -->
          </div>
          <!-- /FORM INPUT DECORATED -->

          <!-- FORM INPUT DECORATED -->
          <div class="form-input-decorated">
            <!-- FORM INPUT -->
            <div class="form-input small active">
              <label for="statement-to-date">To Date</label>
              <input type="text" id="statement-to-date" name="statement_to_date" value="11/14/2019">
            </div>
            <!-- /FORM INPUT -->

            <!-- FORM INPUT ICON -->
            <svg class="form-input-icon icon-events">
              <use xlink:href="#svg-events"></use>
            </svg>
            <!-- /FORM INPUT ICON -->
          </div>
          <!-- /FORM INPUT DECORATED -->

          <!-- BUTTON -->
          <button class="button primary">
            <!-- ICON MAGNIFYING GLASS -->
            <svg class="icon-magnifying-glass">
              <use xlink:href="#svg-magnifying-glass"></use>
            </svg>
            <!-- /ICON MAGNIFYING GLASS -->
          </button>
          <!-- /BUTTON -->
        </div>
        <!-- /FORM ITEM -->
      </form>
      <!-- /FORM -->
    </div>
    <!-- /SECTION FILTERS BAR ACTIONS -->

    <!-- SECTION FILTERS BAR ACTIONS -->
    <div class="section-filters-bar-actions">
      <!-- BUTTON -->
      <p class="button secondary">Download Statement</p>
      <!-- /BUTTON -->
    </div>
    <!-- /SECTION FILTERS BAR ACTIONS -->
  </div> --}}