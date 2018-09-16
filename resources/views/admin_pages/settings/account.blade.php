@extends('layouts.master')

@section('title', 'Accounts Settings')

@section('page-title', 'Account Settings')


@section('stylesheets')

<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.master.css') }}">

@endsection

@section('content')

{!! Form::open(['route' => ['account.update', Auth::user() -> id], 'method' => 'PUT', 'files' => true]) !!}
{{ csrf_field() }}
	<div class="card">
		<div class="card-header">
			<h4 style="display: inline;">
				Reset Your Password
			</h4>
			<input class="btn btn-success pull-right" type="submit" value="Submit">
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="name">Name</label>
						<input class="form-control" placeholder="Name" required="required" name="name" type="text" value="{{ Auth::user() -> name }}" id="name">
					</div>
				</div>


				<div class="col-md-6">
					<div class="form-group">
						<label for="email">Email</label>
						<input class="form-control" placeholder="Email Address" required="required" name="email" type="email" value="{{ Auth::user() -> email }}" id="email">
					</div>
				</div>

				<div class="col-md-12"><label>Reset Your Password</label></div>
				<div class="col-md-6">
					<div class="form-group">
						<input class="form-control" placeholder="Old Password" name="password" type="password" value="">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<input class="form-control" placeholder="Password" name="new_password" type="password" value="">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<input class="form-control" placeholder="Confirm Password" required="required" name="comfirm_password" type="password" value="">
					</div>
				</div>

			</div>
		</div>

	</div>

{!! Form::close() !!}

@endsection