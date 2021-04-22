@extends('layouts.dashboard')
@section('sidebar_active', 'users')

@section('template_title')
    {!! trans('usersmanagement.create-new-user') !!}
@endsection


@section('template_fastload_css')
@endsection

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
    <div class="grid small-space">
        <!-- GRID COLUMN -->
        <div class="grid-column">
          <!-- WIDGET BOX -->
          <div class="widget-box">
            <!-- WIDGET BOX TITLE -->
            <p class="widget-box-title">Create New User</p>
            <!-- /WIDGET BOX TITLE -->

            <!-- WIDGET BOX CONTENT -->
            <div class="widget-box-content">
              <!-- FORM -->
              <form class="form">
                <!-- FORM ROW -->
                <div class="form-row split">
                    <!-- FORM ITEM -->
                    <div class="form-item {{ $errors->has('email') ? ' has-error ' : '' }}">
                      <!-- FORM INPUT -->
                      <div class="form-input small">
                        <label for="billing-email">Email</label>
                        <input type="text" id="email" name="email">
                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                          @endif
                      </div>
                      <!-- /FORM INPUT -->
                    </div>
                    <!-- /FORM ITEM -->

                    <!-- FORM ITEM -->
                    <div class="form-item">
                      <!-- FORM INPUT -->
                      <div class="form-input small {{ $errors->has('name') ? ' has-error ' : '' }}">
                        <label for="name">User Name</label>
                        <input type="text" id="name" name="name">
                        @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                      </div>
                      <!-- /FORM INPUT -->
                    </div>
                    <!-- /FORM ITEM -->
                  </div>
                  <!-- /FORM ROW -->
                <div class="form-row split">
                  <!-- FORM ITEM -->
                  <div class="form-item {{ $errors->has('first_name') ? ' has-error ' : '' }}">
                    <!-- FORM INPUT -->
                    <div class="form-input small">
                      <label for="first-name">First Name</label>
                      <input type="text" id="first-name" name="first_name">
                      @if ($errors->has('first_name'))
                      <span class="help-block">
                          <strong>{{ $errors->first('first_name') }}</strong>
                      </span>
                    @endif
                    </div>
                    <!-- /FORM INPUT -->
                  </div>
                  <!-- /FORM ITEM -->

                  <!-- FORM ITEM -->
                  <div class="form-item {{ $errors->has('last_name') ? ' has-error ' : '' }}">
                    <!-- FORM INPUT -->
                    <div class="form-input small">
                      <label for="last_name">Last Name</label>
                      <input type="text" id="last_name" name="last_name">
                      @if ($errors->has('last_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('last_name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <!-- /FORM INPUT -->
                  </div>
                  <!-- /FORM ITEM -->
                </div>
                <!-- /FORM ROW -->
                <!-- FORM ROW -->
                <div class="form-row">
                  <!-- FORM ITEM -->
                  <div class="form-item {{ $errors->has('role') ? ' has-error ' : '' }}">
                    <!-- FORM SELECT -->
                    <div class="form-select">
                      <label for="role">Role</label>
                      <select id="role" name="role">
                        <option value="">{{ trans('forms.create_user_ph_role') }}</option>
                                @if ($roles)
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                @endif
                      </select>
                      @if ($errors->has('role'))
                      <span class="help-block">
                          <strong>{{ $errors->first('role') }}</strong>
                      </span>
                    @endif
                      <!-- FORM SELECT ICON -->
                      <svg class="form-select-icon icon-small-arrow">
                        <use xlink:href="#svg-small-arrow"></use>
                      </svg>
                      <!-- /FORM SELECT ICON -->
                    </div>
                    <!-- /FORM SELECT -->
                  </div>
                  <!-- /FORM ITEM -->
                </div>
                <div class="form-row">
                    <!-- FORM ITEM -->
                    <div class="form-item {{ $errors->has('password_confirmation') ? ' has-error ' : '' }}">
                      <!-- FORM INPUT -->
                      <div class="form-input small">
                        <label for="password">Password</label>
                        <input type="text" id="password_confirmation" name="password_confirmation">
                        @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                      @endif
                      </div>
                      <!-- /FORM INPUT -->
                    </div>
                    <!-- /FORM ITEM -->
                </div>
                <div class="form-row">
                    <!-- FORM ITEM -->
                    <div class="form-item {{ $errors->has('first_name') ? ' has-error ' : '' }}">
                      <!-- FORM INPUT -->
                      <div class="form-input small">
                        <label for="first-name">Confirm Password</label>
                        <input type="text" id="first-name" name="first_name">
                        @if ($errors->has('first_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('first_name') }}</strong>
                        </span>
                      @endif
                      </div>
                      <!-- /FORM INPUT -->
                    </div>
                    <!-- /FORM ITEM -->
                </div>
                <div class="form-row w-50 mx-auto">
                    <!-- FORM ITEM -->
                    <div class="form-item">
                        <!-- BUTTON -->
                        <button type="submit" class="button full primary">Create New User!</button>
                        <!-- /BUTTON -->
                    </div>
                    <!-- /FORM ITEM -->
                </div>

                <!-- /FORM ROW -->
              </form>
              <!-- /FORM -->
            </div>
            <!-- WIDGET BOX CONTENT -->
          </div>
          <!-- /WIDGET BOX -->
        </div>
        <!-- /GRID COLUMN -->

        <!-- GRID COLUMN -->
        <!-- /GRID COLUMN -->
    </div>

@endsection

@section('footer_scripts')
@endsection
