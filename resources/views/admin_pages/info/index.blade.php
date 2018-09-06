@extends('layouts.master')

@section('title', 'Information Index')

@section('breadcrumb-header', 'Information')

@section('breadcrumb-detail', 'Index')

@section('stylesheets')

	<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.master.css') }}">

@endsection

@section('content')

<div class="box box-warning">
	<div class="row">
		<div class="col-md-12">
			<a href="{{ route('info.create') }}" class="btn btn-lg btn-primary margin-vertical-10 float-right">Create new Info</a>
			<table class="table">
				<thead>
					<tr class="bg-primary">
						<th>Email</th>
						<th>Phone</th>
						<th>Fax</th>
						<th>Type</th>
						<th>Address</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody class="text-md-left card-text">
					@foreach($infos as $info)
					<tr>
						<td>{{ $info -> email }}</td>
						<td>{{ $info -> phone }}</td>
						<td>{{ $info -> fax }}</td>
						<td>{{ $info -> type }}</td>
						<td>{{ $info -> address }}</td>
						<td style="width: 120px;">
							<a href="{{ route('info.edit', [$info -> id]) }}" class="btn btn-primary btn-xs float-left"><i class="fa fa-pencil-square fas"></i> Edit</a>
							{{ Form::open(['route' => ['info.destroy', $info -> id], 'method' => 'DELETE']) }}

							<button type="submit" class="btn btn-danger btn-xs">
								<i class="fa fa-trash"></i> Delete
							</button>

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