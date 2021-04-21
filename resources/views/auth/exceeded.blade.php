@extends('layouts.dashboard')

@section('template_title')
	{!! trans('titles.exceeded') !!}
@endsection

@section('content')
	<div class="my-5 w-100">
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<div class="panel panel-danger">
					<div class="panel-heading">
						{!! trans('titles.exceeded') !!}
					</div>
					<div class="panel-body">
						<p>
							{!! trans('auth.tooManyEmails', ['email' => $email, 'hours' => $hours]) !!}
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
