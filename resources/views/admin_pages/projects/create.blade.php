@extends('layouts.master')

@section('title', 'Create Project')

@section('page_title', 'Create Project')

@section('breadcrumb', 'projects')

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
<div class="box box-primary">
	<div class="row">
		<div class="col-md-6 offset-3">
			{!! Form::open(['route' => 'project.store', 'method' => 'POST', 'files' => true]) !!}
				{{ csrf_field() }}

			    {{ Form::label('title', 'Title:', ['class' => 'margin-top-10'])}}
			    {{ Form::text('title', null, array('class' => 'form-control'))}}

			    {{ Form::label('name', 'Name:', ['class' => 'margin-top-10'])}}
			    {{ Form::text('name', null, array('class' => 'form-control'))}}

			    {{ Form::label('owner', 'Owner:', ['class' => 'margin-top-10'])}}
			    {{ Form::text('owner', null, array('class' => 'form-control'))}}

			    {{ Form::label('consultant', 'Consultant:', ['class' => 'margin-top-10'])}}
			    {{ Form::text('consultant', null, array('class' => 'form-control'))}}

			    {{ Form::label('status', 'Status:', ['class' => 'margin-top-10'])}}
			    <select class="form-control form-control-lg" name="status">
			    	<option value="Ongoing">Ongoing</option>
			    	<option value="Completed">Completed</option>
			    </select>
			    <br>

			    <input type="checkbox" name="featured" class="form-check-input">
			    {{ Form::label('featured', 'Featured:',['class', ''])}}<br>


			    {{ Form::label('main_image', 'Upload Main Project Image:', ['class' => 'margin-top-10']) }}
				{{ Form::file('main_image', ['class' => 'btn btn-default btn-flat']) }}

			    {{ Form::label('detail', "Detail:", ['class' => 'margin-top-10']) }}
			    {{ Form::textarea('detail', null, ['class' => 'form-control']) }}

			    {{ Form::submit('Create New Project', array('class' => 'btn btn-success btn-lg btn-block margin-vertical-10')) }}
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection