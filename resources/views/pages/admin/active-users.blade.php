@extends('layouts.dashboard')

@section('template_title')
    {{ trans('titles.activeUsers') }}
@endsection

@section('content')

    <div class="container">
        <div>
             <users-count :registered={{ $users }} ></users-count>
        </div>
    </div>

@endsection
