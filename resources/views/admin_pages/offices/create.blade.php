@extends('layouts.master')

@section('title', 'Create Information')

@section('breadcrumb-header', 'Offices')

@section('breadcrumb-detail', 'Create')

@section('stylesheets')

	<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.master.css') }}">

@endsection

@section('content')
<div class="box box-warning">
	<div class="row">
		<div class="col-md-6 offset-3">
			{!! Form::open(['route' => 'office.store']) !!}
				{{ csrf_field() }}

			    {{ Form::label('name', 'Name:', ['class' => 'margin-vertical-10'])}}
			    {{ Form::text('name', null, array('class' => 'form-control'))}}

			    {{ Form::label('address', "Address:", ['class' => 'margin-vertical-10']) }}
			    {{ Form::text('address', null, ['class' => 'form-control']) }}

			    {{ Form::label('po_box', 'P.O Box:', ['class' => 'margin-vertical-10']) }}
				{{ Form::text('po_box', null, ['class' => 'form-control']) }}

			    {{ Form::label('phone', 'Phone:', ['class' => 'margin-vertical-10']) }}
				{{ Form::text('phone', null, ['class' => 'form-control']) }}

				{{ Form::label('fax', 'Fax:', ['class' => 'margin-vertical-10']) }}
				{{ Form::text('fax', null, ['class' => 'form-control']) }}

				{{ Form::label('email', 'Email:', ['class' => 'margin-vertical-10']) }}
				{{ Form::text('email', null, ['class' => 'form-control']) }}

				{{ Form::label('latitude', 'Latitude:', ['class' => 'margin-vertical-10']) }}
				{{ Form::text('latitude', null, ['class' => 'form-control']) }}

				{{ Form::label('longitude', 'Longitude:', ['class' => 'margin-vertical-10']) }}
				{{ Form::text('longitude', null, ['class' => 'form-control']) }}

			    {{ Form::submit('Create New Office', array('class' => 'btn btn-success btn-lg btn-block margin-vertical-10')) }}
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection