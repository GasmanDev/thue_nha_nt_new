@extends('layouts.dashboard')

@section('template_title')
    {!! trans('usersmanagement.showing-all-users') !!}
@endsection

@section('template_linked_css')
    @if(config('usersmanagement.enabledDatatablesJs'))
        <link rel="stylesheet" type="text/css" href="{{ config('usersmanagement.datatablesCssCDN') }}">
    @endif
    <style type="text/css" media="screen">
        .users-table {
            border: 0;
        }
        .users-table tr td:first-child {
            padding-left: 15px;
        }
        .users-table tr td:last-child {
            padding-right: 15px;
        }
        .users-table.table-responsive,
        .users-table.table-responsive table {
            margin-bottom: 0;
        }
    </style>
@endsection

@section('content')
    <div class="py-5">
        <div class="section-header-info">
            <!-- SECTION PRETITLE -->
            <p class="section-pretitle">Browse Marina's</p>
            <!-- /SECTION PRETITLE -->

            <!-- SECTION TITLE -->
            <h2 class="section-title">Showing All Users <span class="highlighted">82</span></h2>
            <!-- /SECTION TITLE -->
          </div>
          <div class="section-filters-bar v1 my-2">
            <!-- SECTION FILTERS BAR ACTIONS -->
            <div class="section-filters-bar-actions w-100 mx-auto">
              <!-- FORM -->
              {{-- <form class="form">
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
              </form> --}}
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
          </div>

        <div class="grid">
            <!-- USER PREVIEW -->
            @foreach($users as $user)
            <div class="user-preview landscape">
              <!-- USER PREVIEW INFO -->

              <div class="user-preview-info" id="users_table">
                <!-- USER SHORT DESCRIPTION -->
                <div class="user-stats">
                    <!-- USER STAT -->
                    <div class="user-stat">
                      <!-- USER STAT TITLE -->
                      <p class="user-stat-title">ID</p>
                      <!-- /USER STAT TITLE -->

                      <!-- USER STAT TEXT -->
                      <p class="user-stat-text">{{$user->id}}</p>
                      <!-- /USER STAT TEXT -->
                    </div>
                    <!-- /USER STAT -->
                  </div>
                <div class="user-short-description landscape tiny">

                  <!-- USER SHORT DESCRIPTION TITLE -->
                  <p class="user-short-description-title"><a href="group-timeline.html">Username</a></p>
                  <!-- /USER SHORT DESCRIPTION TITLE -->

                  <!-- USER SHORT DESCRIPTION TEXT -->
                  <p class="user-short-description-text">{{$user->name}}</p>
                  <!-- /USER SHORT DESCRIPTION TEXT -->
                </div>
                <!-- /USER SHORT DESCRIPTION -->
                <div class="user-short-description landscape tiny">

                    <!-- USER SHORT DESCRIPTION TITLE -->
                    <p class="user-short-description-title"><a href="group-timeline.html">Email</a></p>
                    <!-- /USER SHORT DESCRIPTION TITLE -->

                    <!-- USER SHORT DESCRIPTION TEXT -->
                    <p class="user-short-description-text">{{ $user->email }}</p>
                    <!-- /USER SHORT DESCRIPTION TEXT -->
                  </div>
                <!-- USER STATS -->
                <div class="user-stats">
                  <!-- USER STAT -->
                  <div class="user-stat">
                    <!-- USER STAT TITLE -->
                    <p class="user-stat-title">FirstName</p>
                    <!-- /USER STAT TITLE -->

                    <!-- USER STAT TEXT -->
                    <p class="user-stat-text">{{$user->first_name}}</p>
                    <!-- /USER STAT TEXT -->
                  </div>
                  <!-- /USER STAT -->
                  <div class="user-stat">
                    <!-- USER STAT TITLE -->
                    <p class="user-stat-title">LastName</p>
                    <!-- /USER STAT TITLE -->

                    <!-- USER STAT TEXT -->
                    <p class="user-stat-text">{{$user->last_name}}</p>
                    <!-- /USER STAT TEXT -->
                  </div>
                  <!-- USER STAT -->
                  <div class="user-stat">
                    <!-- USER STAT TITLE -->
                    <p class="user-stat-title">Role</p>

                    <!-- /USER STAT TITLE -->

                    <!-- USER STAT TEXT -->
                    <p class="user-stat-text">
                        @foreach ($user->roles as $user_role)
                        @if ($user_role->name == 'User')
                            @php $badgeClass = 'primary' @endphp
                        @elseif ($user_role->name == 'Admin')
                            @php $badgeClass = 'warning' @endphp
                        @elseif ($user_role->name == 'Unverified')
                            @php $badgeClass = 'danger' @endphp
                        @else
                            @php $badgeClass = 'default' @endphp
                        @endif
                        <span class="badge badge-{{$badgeClass}}">{{ $user_role->name }}</span>
                        @endforeach
                    </p>
                    <!-- /USER STAT TEXT -->
                  </div>
                  <!-- /USER STAT -->

                  <!-- USER STAT -->

                  <div class="user-stat">
                    <!-- USER STAT TITLE -->
                    <p class="user-stat-title">Create</p>
                    <!-- /USER STAT TITLE -->

                    <!-- USER STAT TEXT -->
                    <p class="user-stat-text">{{$user->created_at}}</p>
                    <!-- /USER STAT TEXT -->
                  </div>
                  <div class="user-stat">
                    <!-- USER STAT TITLE -->
                    <p class="user-stat-title">Updte</p>
                    <!-- /USER STAT TITLE -->

                    <!-- USER STAT TEXT -->
                    <p class="user-stat-text">{{$user->created_at}}</p>
                    <!-- /USER STAT TEXT -->
                  </div>
                  <!-- /USER STAT -->
                </div>
                <div class="user-preview-actions">
                    <!-- BUTTON -->
                    <button class="button secondary">
                        <a href="{{ URL::to('users/' . $user->id) }}" data-toggle="tooltip" title="Show">
                            {!! trans('usersmanagement.buttons.show') !!}
                        </a>
                    </button>
                    <!-- /BUTTON -->

                    <!-- BUTTON -->
                    <button class="button primary">
                        <a href="{{ URL::to('users/' . $user->id . '/edit') }}" data-toggle="tooltip" title="Edit">
                            {!! trans('usersmanagement.buttons.edit') !!}
                        </a>
                    </button>
                    <button class="button danger" data-target="#confirmDelete" data-messages="Are you sure you want to delete this user ?">
                        <a href="{{ URL::to('users/' . $user->id) }}" data-toggle="tooltip" title="'Delete'))   ">
                            {!! trans('usersmanagement.buttons.delete') !!}
                        </a>
                    </button>
                    <!-- /BUTTON -->
                </div>
                <!-- /USER PREVIEW ACTIONS -->
              </div>


              <!-- /USER PREVIEW INFO -->
            </div>
            @endforeach
        </div>
    </div>
    @include('modals.modal-delete')

@endsection

@section('footer_scripts')
    @if ((count($users) > config('usersmanagement.datatablesJsStartCount')) && config('usersmanagement.enabledDatatablesJs'))
        @include('scripts.datatables')
    @endif
    @include('scripts.delete-modal-script')
    @include('scripts.save-modal-script')
    @if(config('usersmanagement.tooltipsEnabled'))
        @include('scripts.tooltips')
    @endif
    @if(config('usersmanagement.enableSearchUsers'))
        @include('scripts.search-users')
    @endif
@endsection
