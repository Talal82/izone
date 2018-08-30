@extends('layouts.master')

@section('title', 'View Office')

@section('page_title', 'View Office')

@section('stylesheets')

<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.master.css') }}">

@endsection


@section('content')
<div class="box box-primary">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-8">
				<h2>{{ $office -> name }}</h2>
				<p><strong>Email:</strong> {{ $office -> email }}</p>
				<p><strong>Phone:</strong> {{ $office -> phone }}</p>
				<p><strong>Fax:</strong> {{ $office -> email }}</p>
				<p><strong>P.O.Box:</strong> {{ $office -> po_box }}</p>
				<p><strong>Latitude:</strong> {{ $office -> latitude }}</p>
				<p><strong>Longitude:</strong> {{ $office -> longitude }}</p>
				<p><strong>Address:</strong> {{ $office -> address }}</p>

			</div>
			<div class="col-md-4 margin-vertical-10">
				<div class="well">
					<dl class="dl-horizontal">
						<dt>Created At:</dt>
						<dd> {{ date('M j,Y h:i a' , strtotime($office -> created_at)) }} </dd>
					</dl>
					<dl class="dl-horizontal">
						<dt>Last Updated:</dt>
						<dd> {{ date('M j,Y h:i a', strtotime($office -> created_at)) }} </dd>
					</dl>
					<hr>
					<div class="row">
						<div class="col-sm-6">
							{!! Html::linkRoute('office.edit', 'Edit', array($office -> id), array('class' => 'btn btn-primary btn-block')) !!}
						</div>
						<div class="col-sm-6">
							{{ Form::open(['route' => ['office.destroy', $office -> id], 'method' => 'DELETE']) }}

							{{Form::submit('Delete', ['class' => 'btn btn-danger btn-block'])}}

							{{ Form::close() }}
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
@endsection