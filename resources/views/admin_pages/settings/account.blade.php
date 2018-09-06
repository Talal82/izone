@extends('layouts.master')

@section('title', 'Accounts Settings')

@section('breadcrumb-header', 'Accounts Settings')

@section('breadcrumb-detail', 'Edit')

@section('stylesheets')

<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.master.css') }}">

@endsection

@section('content')

{{-- <section class="content">


	<form method="PUT" action="{{ route('account.update', [Auth::user() -> id]) }}" accept-charset="UTF-8">
		<input name="_method" type="hidden" value="PUT">
		<input name="_token" type="hidden" value="{{ Auth::user() -> remember_token }}">

		<div class="box box-warning">
			<div class="box-header with-border">
				<h3 class="box-title">
					Reset Your Password
				</h3>

				<input class="btn btn-warning  pull-right" type="submit" value="Submit">
			</div>
			<div class="box-body">
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
							<input class="form-control" placeholder="Old Password" required="required" name="password" type="password" value="">
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


	</form>


</section> --}}
{!! Form::open(['route' => ['account.update', Auth::user() -> id], 'method' => 'PUT', 'files' => true]) !!}
{{ csrf_field() }}
<div class="box box-warning">
	<div class="box-header with-border">
		<h3 class="box-title">
			Reset Your Password
		</h3>

		<input class="btn btn-warning  pull-right" type="submit" value="Submit">
	</div>
	<div class="box-body">
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