@extends('layouts.master')

@section('title', 'Projects')

@section('page_title', 'Our Projects')

@section('breadcrumb', 'projects')

@section('stylesheets')

	<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.master.css') }}">

@endsection

@section('content')
<div class="box box-primary">
	<div class="row">
		<div class="col-md-12">
			<a href="{{ route('project.create') }}" class="btn btn-lg btn-primary margin-vertical-10 float-right">Create new Project</a>
			<table class="table">
				<thead>
					<tr class="bg-primary">
						<th>Title</th>
						<th>Name</th>
						<th>Owner</th>
						<th>Consultant</th>
						<th>Status</th>
						<th>Featured</th>
						<th>Image</th>
						<th>Detail</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody class="text-md-left card-text">
					@foreach($projects as $project)
					<tr>
						<td>{{ $project -> title }}</td>
						<td>{{ $project -> name }}</td>
						<td>{{ $project -> owner }}</td>
						<td>{{ $project -> consultant }}</td>
						<td>{{ $project -> status }}</td>
						<td>{{ $project -> featured }}</td>
						<td>{{ $project -> main_image }}</td>
						<td>{{ $project -> detail }}</td>
						<td style="width: 100px;">
							<a href="{{ route('project.show', [$project -> id]) }}" class="btn btn-default btn-xs float-left">View</a>
							{{ Form::open(['route' => ['project.destroy', $project -> id], 'method' => 'DELETE']) }}

							{{Form::submit('Delete', ['class' => 'btn btn-danger btn-xs float-left'])}}

							{{ Form::close() }}
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection