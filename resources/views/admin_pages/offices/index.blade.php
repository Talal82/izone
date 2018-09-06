@extends('layouts.master')

@section('title', 'Offices')

@section('breadcrumb-header', 'Offices')

@section('breadcrumb-detail', 'All Offices')

@section('stylesheets')

	<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.master.css') }}">

@endsection

@section('content')
<div class="box box-warning">
	<div class="row">
		<div class="col-md-12">
			<a href="{{ route('office.create') }}" class="btn btn-lg btn-primary margin-vertical-10 float-right">Create new Office</a>
			<table class="table">
				<thead>
					<tr class="bg-primary">
						<th>Name</th>
						<th>Address</th>
						<th>P.O.Box</th>
						<th>Phone</th>
						<th>Fax</th>
						<th>Email</th>
						<th>Latitude</th>
						<th>Longitude</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody class="text-md-left card-text">
					@foreach($offices as $office)
					<tr>
						<td>{{ $office -> name }}</td>
						<td>{{ $office -> address }}</td>
						<td>{{ $office -> po_box }}</td>
						<td>{{ $office -> phone }}</td>
						<td>{{ $office -> fax }}</td>
						<td>{{ $office -> email }}</td>
						<td>{{ $office -> latitude }}</td>
						<td>{{ $office -> longitude }}</td>
						<td style="width: 100px;">
							<a href="{{ route('office.show', [$office -> id]) }}" class="btn btn-default btn-xs float-left">View</a>
							{{ Form::open(['route' => ['office.destroy', $office -> id], 'method' => 'DELETE']) }}

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