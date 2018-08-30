@extends('layouts.master')

@section('title', 'Home Page Banners')

@section('page_title', 'All Banners')

@section('stylesheets')

	<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.master.css') }}">

@endsection

@section('content')
<div class="box box-primary">
	<div class="row">
		<div class="col-md-6 offset-2">
			{!! Form::open(['route' => 'banner.store', 'method' => 'POST', 'files' => true]) !!}
				{{ csrf_field() }}

			    {{ Form::label('name', 'Name:', ['class' => 'margin-vertical-10'])}}
			    {{ Form::text('name', null, array('class' => 'form-control'))}}

			    {{ Form::label('detail', "Detail:", ['class' => 'margin-vertical-10']) }}
			    {{ Form::text('detail', null, ['class' => 'form-control']) }}

			    {{ Form::label('image', "Upload Banner Image:", ['class' => 'margin-vertical-10']) }}
			    {{ Form::file('image') }}

			    {{ Form::submit('Add New Banner', array('class' => 'btn btn-success btn-lg btn-block margin-vertical-10')) }}
			{!! Form::close() !!}
		</div>
	</div>
</div>
<br><br>
<div class="box box-primary">
		@foreach($banners as $banner)
		<div class="row"">
		<div class="col-md-8 margin-all"">
			<img class="float-left" src="{{ asset('images/'.$banner -> image) }}" height="100" width="100">
			<h3 class="margin-left-10">{{ $banner -> name }}</h3>
			<p>{{ $banner -> detail }}</p>
		</div>
		<div class="col-md-2 float-right margin-all text-center">
			<a href="" class="btn btn-default btn-block">View</a>
			<a href="" class="btn btn-danger btn-block">Delete</a>
		</div>
		</div>
		@endforeach
	
</div>

@endsection