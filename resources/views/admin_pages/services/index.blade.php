@extends('layouts.master')

@section('title', 'Services')

@section('page_title', 'Our Services')

@section('stylesheets')

	<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.master.css') }}">

@endsection

@section('content')
<div class="box box-primary">
	<div class="row">
		<div class="col-md-12">
			<a href="{{ route('service.create') }}" class="btn btn-lg btn-primary margin-vertical-10 float-right">Create new Service</a>
			<table class="table">
				<thead>
					<tr class="bg-primary">
						<th>Name</th>
						<th>Detail</th>
						<th>Image</th>
						<th>Transparent Icon</th>
						<th>Visible Icon</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody class="text-md-left card-text">
					@foreach($services as $service)
					<tr>
						<td>{{ $service -> name }}</td>
						<td>{{ $service -> detail }}</td>
						<td>{{ $service -> image }}</td>
						<td>{{ $service -> transparent_icon }}</td>
						<td>{{ $service -> visible_icon }}</td>
						<td style="width: 100px;">
							<a href="{{ route('service.show', [$service -> id]) }}" class="btn btn-default btn-xs float-left">View</a>
							{{ Form::open(['route' => ['service.destroy', $service -> id], 'method' => 'DELETE']) }}

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