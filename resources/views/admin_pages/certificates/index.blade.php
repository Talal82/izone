@extends('layouts.master')

@section('title', 'Certificate Images')

@section('page-title', 'Certificates')


@section('stylesheets')

<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.master.css') }}">

@endsection

@section('content')
<div class="col-md-6 offset-2">
	{!! Form::open(['route' => 'certificate.store', 'method' => 'POST', 'files' => true]) !!}
	{{ csrf_field() }}

	{{ Form::label('image', "Upload Certificate Image:", ['class' => 'margin-vertical-10']) }}
	{{ Form::file('image', ['class' => 'form-control-file']) }}

	{{ Form::submit('Add New Certificate', array('class' => 'btn btn-success btn-lg btn-block margin-vertical-10')) }}
	{!! Form::close() !!}
</div>
<br><br>
<div class="col-md-12">

	<div class="row card p-2">
		<div class="card-title text-center">
			<h3>All Certificates</h3>
		</div>
	@foreach($certificates as $certificate)
		<div class="col-md-8 margin-all offset-2">
			<img class="float-left" src="{{ asset('images/'.$certificate -> image) }}" height="100" width="100">
			{{ Form::open(['route' => ['certificate.destroy', $certificate -> id], 'method' => 'DELETE']) }}

			{{Form::submit('Delete', ['class' => 'btn btn-danger float-right'])}}

			{{ Form::close() }}
		</div>
	@endforeach
	</div>
</div>
<div class="col-md-12 m-t-5">
	<div class="text-center float-right">
		{{ $certificates -> links() }}
	</div>
</div>

@endsection