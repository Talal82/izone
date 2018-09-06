@extends('layouts.master')

@section('title', 'Create Information')

@section('breadcrumb-header', 'Information')

@section('breadcrumb-detail', 'Create')

@section('stylesheets')

	<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.master.css') }}">

@endsection

@section('content')
<div class="box box-warning">
	<div class="row">
		<div class="col-md-6 offset-3">
			{!! Form::open(['route' => 'info.store']) !!}
				{{ csrf_field() }}

			    {{ Form::label('email', 'Email:', ['class' => 'margin-vertical-10'])}}
			    {{ Form::text('email', null, array('class' => 'form-control'))}}

			    {{ Form::label('phone', "Phone:", ['class' => 'margin-vertical-10']) }}
			    {{ Form::text('phone', null, ['class' => 'form-control']) }}

			    {{ Form::label('fax', 'Fax:', ['class' => 'margin-vertical-10']) }}
				{{ Form::text('fax', null, ['class' => 'form-control']) }}

			    {{ Form::label('type', 'Info Type:', ['class' => 'margin-vertical-10'])}}
			    <select class="form-control form-control-lg" name="type">
			    	<option value="header">Header</option>
			    	<option value="footer">Footer</option>
			   	</select>

			    {{ Form::label('address', 'Address:', ['class' => 'margin-vertical-10']) }}
				{{ Form::text('address', null, ['class' => 'form-control']) }}

			    {{ Form::submit('Create New Information', array('class' => 'btn btn-success btn-lg btn-block margin-bottom-10', 'style' => 'margin-top:20px;')) }}
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection