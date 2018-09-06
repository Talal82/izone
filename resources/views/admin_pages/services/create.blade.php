@extends('layouts.master')

@section('title', 'Create Service')

@section('breadcrumb-header', 'Services')

@section('breadcrumb-detail', 'Edit')

@section('stylesheets')

	<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.master.css') }}">
	<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  	<script>
  		tinymce.init({ 
  			selector:'textarea'
  		});
  	</script>

@endsection

@section('content')
<div class="box box-warning">
	<div class="row">
		<div class="col-md-6 offset-3">
			{!! Form::open(['route' => 'service.store', 'method' => 'POST', 'files' => true]) !!}
				{{ csrf_field() }}

			    {{ Form::label('name', 'Name:', ['class' => 'margin-vertical-10'])}}
			    {{ Form::text('name', null, array('class' => 'form-control'))}}

			    {{ Form::label('detail', 'Detail:', ['class' => 'margin-vertical-10'])}}
			    {{ Form::text('detail', null, array('class' => 'form-control'))}}

			    {{ Form::label('full_detail', "Full Detail:", ['class' => 'margin-vertical-10']) }}
			    {{ Form::textarea('full_detail', null, ['class' => 'form-control']) }}

			    {{ Form::label('image', 'Upload Main Service Image:', ['class' => 'margin-vertical-10']) }}
				{{ Form::file('image', ['class' => 'btn btn-default btn-flat']) }}

				{{ Form::label('transparent_icon', 'Upload Transparent Icon:', ['class' => 'margin-vertical-10']) }}
				{{ Form::file('transparent_icon',['class' => 'btn btn-default btn-flat']) }}
 
				{{ Form::label('visible_icon', 'Upload Visible Icon:', ['class' => 'margin-vertical-10']) }}
				{{ Form::file('visible_icon',['class' => 'btn btn-default btn-flat']) }}

			    {{ Form::submit('Create New Service', array('class' => 'btn btn-success btn-lg btn-block margin-vertical-10')) }}
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection