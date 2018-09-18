@extends('layouts.master')

@section('title', 'Users Management')

@section('page-title', 'Manage Users')

@section('content')
<div class="card p-2">
	<div class="card-header">
		<h4 style="display: inline;">All Users</h4>
		<a href="{{ route('users.create') }}" class="btn btn-primary pull-right m-0"><span class="fa fa-plus m-0"></span> Create</a>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-md-12">
				<table id="table" class="table">
					<thead class="bg-primary text-white">
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Email</th>
							<th>Date Created</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody class="text-md-left card-text">
						@foreach($users as $user)
						<tr>
							<td>{{ $user -> id }}</td>
							<td>{{ $user -> name }}</td>
							<td>{{ $user -> email }}</td>
							<td>{{ $user -> created_at -> toFormattedDateString() }}</td>
							<td>
								<a href="{{ route('users.edit', [$user -> id]) }}" class="btn btn-icon waves-effect waves-light btn-primary float-left m-b-5"><i class="fa fa-wrench"></i></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				
			</div>
		</div>
	</div>
</div>
<div class="pull-right m-t-5">
	{{ $users -> links() }}
</div>
@endsection