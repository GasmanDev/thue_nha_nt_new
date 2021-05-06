{{-- @extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('auth.forgot') }}
                                </a>
                            </div>
                        </div>

                        <p class="text-center mb-3">
                            Or Login with
                        </p>

                        @include('partials.socials-icons')

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
@extends('layouts.auth')
@section('content')
<div class="form-box login-register-form-element">
    <!-- FORM BOX DECORATION -->
    <img class="form-box-decoration overflowing" src="{{asset('dashboard/img/landing/rocket.png')}}" alt="img">
    <!-- /FORM BOX DECORATION -->

    <!-- FORM BOX TITLE -->
    <h2 class="form-box-title">{{ trans('auth.login') }} {{ trans('common.appName') }}</h2>
    <!-- /FORM BOX TITLE -->
    <!-- FORM -->
    <form class="form"  method="POST" action="{{ route('login') }}">
        @csrf
      <!-- FORM ROW -->
      <div class="form-row">
        <!-- FORM ITEM -->
        <div class="form-item">
          <!-- FORM INPUT -->
          <div class="form-input">
            <label for="login-username">{{ trans('auth.ph_name') }}</label>
            <input type="text" id="login-username" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" required>

            @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
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
        <div class="form-item">
          <!-- FORM INPUT -->
          <div class="form-input">
            <label for="login-password">{{ trans('auth.ph_password') }}</label>
            <input id="login-password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </div>
          <!-- /FORM INPUT -->
        </div>
        <!-- /FORM ITEM -->
      </div>
      <!-- /FORM ROW -->

      <!-- FORM ROW -->
      <div class="form-row space-between">
        <!-- FORM ITEM -->
        {{-- <div class="form-item">
          <!-- CHECKBOX WRAP -->
          <div class="checkbox-wrap">
            <input type="checkbox" id="login-remember" name="remember" {{ old('remember') ? 'checked' : '' }}>

            <!-- CHECKBOX BOX -->
            <div class="checkbox-box">
              <!-- ICON CROSS -->
              <svg class="icon-cross">
                <use xlink:href="#svg-cross"></use>
              </svg>
              <!-- /ICON CROSS -->
            </div>
            <!-- /CHECKBOX BOX -->
            <label for="login-remember">Remember Me</label>
          </div>
          <!-- /CHECKBOX WRAP -->
        </div> --}}
        <!-- /FORM ITEM -->

        <!-- FORM ITEM -->
        <div class="form-item">
          <!-- FORM LINK -->
          <a class="form-link" href="{{ route('password.request') }}">
            {{ __('auth.forgot') }}
         </a>

          <!-- /FORM LINK -->
        </div>
        <!-- /FORM ITEM -->
      </div>
      <!-- /FORM ROW -->

      <!-- FORM ROW -->
      <div class="form-row">
        <!-- FORM ITEM -->
        <div class="form-item">

          <button type="submit" class="button medium secondary">
            {{ __('auth.login') }}
            </button>
          <!-- /BUTTON -->
        </div>
        <!-- /FORM ITEM -->
      </div>
      <!-- /FORM ROW -->
    </form>
    <!-- /FORM -->

    <!-- LINED TEXT -->
    {{-- <p class="lined-text">Login with your Social Account</p>
    <!-- /LINED TEXT -->

    <!-- SOCIAL LINKS -->
    <div class="social-links">
      <!-- SOCIAL LINK -->

      <a class="social-link facebook" href="{{url('/login-facebook')}}">
        <!-- ICON FACEBOOK -->
        <svg class="icon-facebook">
          <use xlink:href="#svg-facebook"></use>
        </svg>
        <!-- /ICON FACEBOOK -->
      </a>
      <!-- /SOCIAL LINK -->

      <!-- SOCIAL LINK -->
      <a class="social-link twitter" href="#">
        <!-- ICON TWITTER -->
        <svg class="icon-twitter">
          <use xlink:href="#svg-twitter"></use>
        </svg>
        <!-- /ICON TWITTER -->
      </a>
      <!-- /SOCIAL LINK -->

      <!-- SOCIAL LINK -->
      <a class="social-link twitch" href="#">
        <!-- ICON TWITCH -->
        <svg class="icon-twitch">
          <use xlink:href="#svg-twitch"></use>
        </svg>
        <!-- /ICON TWITCH -->
      </a>
      <!-- /SOCIAL LINK -->

      <!-- SOCIAL LINK -->
      <a class="social-link youtube" href="#">
        <!-- ICON YOUTUBE -->
        <svg class="icon-youtube">
          <use xlink:href="#svg-youtube"></use>
        </svg>
        <!-- /ICON YOUTUBE -->
      </a>
      <!-- /SOCIAL LINK -->
    </div>
    <!-- /SOCIAL LINKS --> --}}
</div>
<div class="form-box login-register-form-element">
    <!-- FORM BOX DECORATION -->
    <img class="form-box-decoration" src="{{asset('dashboard/img/landing/rocket.png')}}" alt="rocket">
    <!-- /FORM BOX DECORATION -->

    <!-- FORM BOX TITLE -->
    <h2 class="form-box-title">{{ trans('auth.register') }} {{ trans('common.appName') }}</h2>
    <!-- /FORM BOX TITLE -->
    <!-- FORM -->
    <form class="form" method="POST" action="{{ route('register') }}">
        @csrf
      <!-- FORM ROW -->
      <div class="form-row">
        <!-- FORM ITEM -->
        <div class="form-item">
          <!-- FORM INPUT -->
          <div class="form-input">
            <label for="register-email">{{ trans('auth.ph_email') }}</label>
            <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
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
        <div class="form-item">
          <!-- FORM INPUT -->
          <div class="form-input">
            <label for="register-username">{{ trans('auth.ph_name') }}</label>
            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
          </div>
          <!-- /FORM INPUT -->
        </div>
        <!-- /FORM ITEM -->
      </div>
      {{-- <div class="form-row">
        <!-- FORM ITEM -->
        <div class="form-item">
          <!-- FORM INPUT -->
          <div class="form-input">
            <label for="register-username">First name</label>
            <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required>

                                @if ($errors->has('first_name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
          </div>
          <!-- /FORM INPUT -->
        </div>
        <!-- /FORM ITEM -->
      </div>
      <div class="form-row">
        <!-- FORM ITEM -->
        <div class="form-item">
          <!-- FORM INPUT -->
          <div class="form-input">
            <label for="register-username">Last name</label>
            <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required>

            @if ($errors->has('last_name'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('last_name') }}</strong>
                </span>
            @endif
          </div>
          <!-- /FORM INPUT -->
        </div>
        <!-- /FORM ITEM -->
      </div> --}}
      <!-- /FORM ROW -->

      <!-- FORM ROW -->
      <div class="form-row">
        <!-- FORM ITEM -->
        <div class="form-item">
          <!-- FORM INPUT -->
          <div class="form-input">
            <label for="register-password">{{ trans('auth.ph_password') }}</label>
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
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
        <div class="form-item">
          <!-- FORM INPUT -->
          <div class="form-input">
            <label for="register-password-repeat">{{ trans('auth.ph_password_conf') }}</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
          </div>
          <!-- /FORM INPUT -->
        </div>
        <!-- /FORM ITEM -->
      </div>
      <div class="form-row">
        <div class="form-item">
            @if(config('settings.reCaptchStatus'))
            <div class="form-group">
                <div class="col-sm-6 col-sm-offset-4">
                    <div class="g-recaptcha" data-sitekey="{{ config('settings.reCaptchSite') }}"></div>
                </div>
            </div>
         @endif
        </div>
      </div>
      <!-- /FORM ROW -->

      <!-- FORM ROW -->
      {{-- <div class="form-row">
        <!-- FORM ITEM -->
        <div class="form-item">
          <!-- CHECKBOX WRAP -->
          <div class="checkbox-wrap">
            <input type="checkbox" id="register-newsletter" name="register_newsletter" checked>
            <!-- CHECKBOX BOX -->
            <div class="checkbox-box">
              <!-- ICON CROSS -->
              <svg class="icon-cross">
                <use xlink:href="#svg-cross"></use>
              </svg>
              <!-- /ICON CROSS -->
            </div>
            <!-- /CHECKBOX BOX -->
            <label for="register-newsletter">Send me news and updates via email</label>
          </div>
          <!-- /CHECKBOX WRAP -->
        </div>
        <!-- /FORM ITEM -->
      </div> --}}
      <!-- /FORM ROW -->

      <!-- FORM ROW -->
      <div class="form-row">
        <!-- FORM ITEM -->
        <div class="form-item">
          <!-- BUTTON -->
          {{-- <button class="button medium primary">Register Now!</button> --}}
          <button type="submit" class="button medium primary">
            {{ __('auth.register') }}
         </button>
          <!-- /BUTTON -->
        </div>
        <!-- /FORM ITEM -->
      </div>
      <!-- /FORM ROW -->
    </form>
    <!-- /FORM -->

    <!-- FORM TEXT -->
    <p class="form-text">Copyright 2021 <a href="#">{{ trans('common.appName') }}</a></p>
    <!-- /FORM TEXT -->
</div>
@endsection
