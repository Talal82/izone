@extends('layouts.master')

@section('title', 'Certificate Images')

@section('page_title', 'All Certificates')

@section('breadcrumb', 'certificates')

@section('stylesheets')

<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.master.css') }}">

@endsection

@section('content')
<div class="box box-primary">
	<div class="row">
		<div class="col-md-6 offset-2">
			{!! Form::open(['route' => 'certificate.store', 'method' => 'POST', 'files' => true]) !!}
			{{ csrf_field() }}

			{{ Form::label('image', "Upload Certificate Image:", ['class' => 'margin-vertical-10']) }}
			{{ Form::file('image') }}

			{{ Form::submit('Add New Image', array('class' => 'btn btn-success btn-lg btn-block margin-vertical-10')) }}
			{!! Form::close() !!}
		</div>
	</div>
</div>
<br><br>
<div class="box box-primary">
	@foreach($certificates as $certificate)
	<div class="row"">
		<div class="col-md-8 margin-all"">
			<img class="float-left" src="{{ asset('images/'.$certificate -> image) }}" height="100" width="100">
		</div>
		<div class="col-md-2 float-right margin-all text-center">
			{{ Form::open(['route' => ['certificate.destroy', $certificate -> id], 'method' => 'DELETE']) }}

			{{Form::submit('Delete', ['class' => 'btn btn-danger btn-block'])}}

			{{ Form::close() }}
		</div>
	</div>
	@endforeach
	<div class="row">
		<div class="col-md-12 text-center">
			{{ $certificates -> links() }}
		</div>
	</div>
	
</div>

@endsection