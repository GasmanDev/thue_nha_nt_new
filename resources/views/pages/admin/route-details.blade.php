@extends('layouts.dashboard')

@section('template_title')
	Routing Information
@endsection
@section('sidebar_active', 'users')

@section('content')
<div class="section-banner">
    <!-- SECTION BANNER ICON -->

    <img class="section-banner-icon" src="{{ asset('dashboard/img/banner/streams-icon.png') }}" alt="php-info">

    <!-- /SECTION BANNER ICON -->

    <!-- SECTION BANNER TITLE -->
    <p class="section-banner-title">
        Routing Information
        <span class="badge badge-primary pull-right">{{ count($routes) }} routes</span>
    </p>
    <!-- /SECTION BANNER TITLE -->

    <!-- SECTION BANNER TEXT -->
    <p class="section-banner-text">Check out all the members streams!</p>
    <!-- /SECTION BANNER TEXT -->
</div>
	<div class="w-100 my-5">
		<div class="row">
			<div class="col-md-12">

				@include('partials.form-status')

				<div class="card">
					<div class="card-header">

					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped table-sm data-table">
								<thead>
									<tr class="success">
					                    <th>URI</th>
					                    <th>Name</th>
					                    <th>Type</th>
					                    <th>Method</th>
									</tr>
								</thead>
								<tbody>
							        @foreach ($routes as $route)
										<tr>
				                        <td>{{$route->uri}}</td>
				                        <td>{{$route->getName()}}</td>
				                        <td>{{$route->getPrefix()}}</td>
				                        <td>{{$route->getActionMethod()}}</td>
										</tr>
							        @endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
