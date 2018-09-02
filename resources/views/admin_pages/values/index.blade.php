@extends('layouts.master')

@section('title', 'Values')

@section('page_title', 'Our Values')

@section('breadcrumb', 'values')

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
		<div class="col-md-6 offset-2">
			{!! Form::open(['route' => 'value.store', 'method' => 'POST']) !!}
				{{ csrf_field() }}

			    {{ Form::label('name', 'Name:', ['class' => 'margin-vertical-10'])}}
			    {{ Form::text('name', null, array('class' => 'form-control'))}}

			    {{ Form::label('detail', "Detail:", ['class' => 'margin-vertical-10']) }}
			    {{ Form::textarea('detail', null, ['class' => 'form-control']) }}

			    {{ Form::submit('Add New Banner', array('class' => 'btn btn-success btn-lg btn-block margin-vertical-10')) }}
			{!! Form::close() !!}
		</div>
	</div>
</div>
<br><br>
<div class="box box-primary">
		@foreach($values as $value)
		<div class="row"">
		<div class="col-md-8 margin-all">
			<h3>Value Name:</h3>
			<p>{{ $value -> name }}</p>
			<h3>Detail:</h3>
			{!! $value -> detail !!}
		</div>
		<div class="col-md-2 float-right margin-all margin-top-10 text-center">
			<a href="{{ route('value.edit', [$value -> id]) }}" class="btn btn-primary btn-block">Edit</a>
			{{ Form::open(['route' => ['value.destroy', $value -> id], 'method' => 'DELETE']) }}

			{{Form::submit('Delete', ['class' => 'btn btn-danger btn-block margin-top-10'])}}

			{{ Form::close() }}
		</div>
		</div>
		<hr>
		@endforeach
	
</div>

@endsection