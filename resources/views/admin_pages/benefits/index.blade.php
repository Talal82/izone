@extends('layouts.master')

@section('title', 'Benefits')

@section('page-title', 'Company Benefits')


@section('stylesheets')

<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.master.css') }}">

@endsection

@section('content')
<div class="col-md-6 offset-2">
	{!! Form::open(['route' => 'benefit.store', 'method' => 'POST']) !!}
	{{ csrf_field() }}

	{{ Form::label('name', 'Name:', ['class' => 'margin-vertical-10'])}}
	{{ Form::text('name', null, array('class' => 'form-control'))}}

	{{ Form::label('detail', "Detail:", ['class' => 'margin-vertical-10']) }}
	{{ Form::textarea('detail', null, ['class' => 'form-control']) }}

	{{ Form::submit('Add New Benefit', array('class' => 'btn btn-success btn-lg btn-block margin-vertical-10')) }}
	{!! Form::close() !!}
</div>
<br><br>

	@foreach($benefits as $benefit)
	<div class="col-md-12 p-2">
	<div class="row card p-10">
		<div class="col-md-8 margin-all">
			<h3>Benefit Name:</h3>
			<p>{{ $benefit -> name }}</p>
			<h3>Detail:</h3>
			{!! $benefit -> detail !!}
		</div>
		<div class="col-md-2 margin-top-10 text-center">
			<a href="{{ route('benefit.edit', [$benefit -> id]) }}" class="btn btn-primary btn-block">Edit</a>
			{{ Form::open(['route' => ['benefit.destroy', $benefit -> id], 'method' => 'DELETE']) }}

			{{Form::submit('Delete', ['class' => 'btn btn-danger btn-block margin-top-10'])}}

			{{ Form::close() }}
		</div>
	</div>
	</div>
	<hr>

	@endforeach


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