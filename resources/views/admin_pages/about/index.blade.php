@extends('layouts.master')

@section('title', 'About Information')

@section('page_title', 'Edit About Us Information')

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
	<div class="row  margin-left-10 margin-right-10">
		<div class="col-md-12">
			{!! Form::model( $about , ['route' => ['about.update', $about->id],  'method' => 'PUT', 'files' => true]) !!}
				{{ csrf_field() }}

			    {{ Form::label('title', 'Title:', ['class' => 'margin-vertical-10'])}}
			    {{ Form::text('title', null, array('class' => 'form-control'))}}

			    {{ Form::label('about_detail', "About Us Detail:", ['class' => 'margin-vertical-10']) }}
			    {{ Form::textarea('about_detail', null, ['class' => 'form-control']) }}

			    {{ Form::label('main_image', "Update Main Image:", ['class' => 'margin-vertical-10']) }}
			    {{ Form::file('main_image', ['class' => 'btn btn-primary btn-flat']) }}

			    {{ Form::label('vision_detail', "Our Vision Detail:", ['class' => 'margin-vertical-10']) }}
			    {{ Form::textarea('vision_detail', null, ['class' => 'form-control']) }}

			    {{ Form::label('vision_image', "Update Vision Image:", ['class' => 'margin-vertical-10']) }}
			    {{ Form::file('vision_image', ['class' => 'btn btn-primary btn-flat']) }}

			    {{ Form::label('mission_detail', "Our Mission Detail:", ['class' => 'margin-vertical-10']) }}
			    {{ Form::textarea('mission_detail', null, ['class' => 'form-control']) }}

			    {{ Form::label('mission_image', "Update Mission Image:", ['class' => 'margin-vertical-10']) }}
			    {{ Form::file('mission_image', ['class' => 'btn btn-primary btn-flat']) }}

			    {{ Form::submit('Update Information', array('class' => 'btn btn-success btn-lg btn-block margin-bottom-10', 'style' => 'margin-top:20px;')) }}
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection