@extends('layouts.master')

@section('title', 'Gallery Images')

@section('page-title', 'Image Gallery')


@section('stylesheets')

<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.master.css') }}">

@endsection

@section('content')
<div class="col-md-6 offset-2">
	{!! Form::open(['route' => 'gallery.store', 'method' => 'POST', 'files' => true]) !!}
	{{ csrf_field() }}

	{{ Form::label('image', "Upload Gallery Image:", ['class' => 'margin-vertical-10']) }}
	{{ Form::file('image') }}

	{{ Form::submit('Add New Image', array('class' => 'btn btn-success btn-lg btn-block margin-vertical-10')) }}
	{!! Form::close() !!}
</div>
<br><br>
<div class="col-md-12">
	<div class="row card p-2">
		<div class="card-title text-center">
			<h3>All Images</h3>
		</div>
		@foreach($galleryImages as $galleryImage)
		<div class="col-md-8  offset-2 margin-all"">
			<img class="float-left" src="{{ asset('images/'.$galleryImage -> image) }}" height="100" width="100">

			{{ Form::open(['route' => ['gallery.destroy', $galleryImage -> id], 'method' => 'DELETE']) }}

			{{Form::submit('Delete', ['class' => 'btn btn-danger float-right'])}}

			{{ Form::close() }}
		</div>
		@endforeach
	</div>
	<div class="col-md-12 m-t-5">
		<div class="text-center float-right">
			{{ $galleryImages -> links() }}
		</div>
	</div>
	
</div>

@endsection