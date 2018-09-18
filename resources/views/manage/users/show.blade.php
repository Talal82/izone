@extends('layouts.master')

@section('title', 'Users Management')

@section('page-title', 'Users')

@section('content')
<div class="card p-2">
	<div class="card-header">
		<h4 style="display: inline;">View Users</h4>
		<a href="{{ route('users.edit',[$user -> id]) }}" class="btn btn-primary pull-right m-0"><span class="fa fa-wrench m-0"></span> Edit</a>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-md-4">
				<div>
					<label>Name:</label>
					<p class="container">{{ $user -> name }}</p>
				</div>
				<div>
					<label>Email:</label>
					<p class="container">{{ $user -> email }}</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection