@extends('layouts.master')

@section('title', 'About Information')

@section('page-title', 'About Us')

@section('stylesheets')

<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.master.css') }}">

@endsection

@section('content')
		<div class="col-md-12">
			{!! Form::model( $about , ['route' => ['about.update', $about->id],  'method' => 'PUT', 'files' => true]) !!}
			{{ csrf_field() }}
			
			<div class="form-group">
			{{ Form::label('title', 'Title:', ['class' => 'margin-vertical-10'])}}
			{{ Form::text('title', null, array('class' => 'form-control'))}}
			</div>

			<div class="form-group">
			{{ Form::label('about_detail', "About Us Detail:", ['class' => 'm-t-10']) }}
			{{ Form::textarea('about_detail', null, ['class' => 'form-control']) }}
			</div>

			<div class="form-group">
			{{ Form::label('main_image', "Update Main Image:", ['class' => 'm-t-10']) }}<br>
			{{ Form::file('main_image', ['class' => 'btn btn-primary btn-flat dropify']) }}
			</div>
			
			<div class="form-group">
			{{ Form::label('vision_detail', "Our Vision Detail:", ['class' => 'm-t-10']) }}
			{{ Form::textarea('vision_detail', null, ['class' => 'form-control']) }}
			</div>

			<div class="form-group">
			{{ Form::label('vision_image', "Update Vision Image:", ['class' => 'm-t-10']) }}<br>
			{{ Form::file('vision_image', ['class' => 'btn btn-primary btn-flat']) }}
			</div>

			<div class="form-group">
			{{ Form::label('mission_detail', "Our Mission Detail:", ['class' => 'm-t-10']) }}
			{{ Form::textarea('mission_detail', null, ['class' => 'form-control']) }}
			</div>

			<div class="form-group">
			{{ Form::label('mission_image', "Update Mission Image:", ['class' => 'm-t-10']) }}<br>
			{{ Form::file('mission_image', ['class' => 'btn btn-primary btn-flat']) }}
			</div>

			{{ Form::submit('Update Information', array('class' => 'btn btn-success btn-lg btn-block margin-bottom-10', 'style' => 'margin-top:20px;')) }}
			{!! Form::close() !!}
		</div>
@endsection

@section('scripts')

<script src="{{ asset('assets/plugins/tinymce/tinymce.min.js') }}"></script>
<script type="text/javascript">
	$(document).ready(function () {
		tinymce.init({
			selector: "textarea",
			theme: "modern",
			height:300,
			plugins: [
			"advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
			"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
			"save table contextmenu directionality emoticons template paste textcolor"
			],
			toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
			style_formats: [
			{title: 'Bold text', inline: 'b'},
			{title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
			{title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
			{title: 'Example 1', inline: 'span', classes: 'example1'},
			{title: 'Example 2', inline: 'span', classes: 'example2'},
			{title: 'Table styles'},
			{title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
			]
		});
	});
</script>

@endsection