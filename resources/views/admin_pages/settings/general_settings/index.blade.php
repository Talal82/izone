@extends('layouts.master')

@section('title', 'General Settings')

@section('page-title', 'General Settings')


@section('stylesheets')

<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.master.css') }}">

@endsection

@section('content')

{!! Form::open(['route' => ['headerinfo.update', $headerInfo -> id], 'method' => 'PUT', 'files' => true]) !!}
<div class="card">
	<div class="card-header">
		<h4 style="display: inline; margin-top: 10px;">Update Header Info</h4>
		{{ Form::submit('Submit', array('class' => 'btn btn-success pull-right')) }}
	</div>
	<div class="card-body">
		<div class="row">
			
			<div class="col-md-6 form-group">
				{{ Form::label('site_title', 'Site Title:', ['class' => 'margin-vertical-10'])}}
				{{ Form::text('site_title', $headerInfo -> site_title, array('class' => 'form-control'))}}
			</div>

			<div class="col-md-6 form-group">
				{{ Form::label('email', 'Email:', ['class' => 'margin-vertical-10'])}}
				{{ Form::text('email', $headerInfo -> email, array('class' => 'form-control'))}}
			</div>

			<div class="col-md-6 form-group">
				{{ Form::label('phone', "Phone:", ['class' => 'margin-vertical-10']) }}
				{{ Form::text('phone', $headerInfo -> phone, ['class' => 'form-control']) }}
			</div>

			<div class="col-md-6 form-group">
				{{ Form::label('fax', 'Fax:', ['class' => 'margin-vertical-10']) }}
				{{ Form::text('fax', $headerInfo -> fax, ['class' => 'form-control']) }}
			</div>

			<div class="col-md-6 form-group">
				{{ Form::label('address', 'Address:', ['class' => 'margin-vertical-10']) }}
				{{ Form::text('address', $headerInfo -> address , ['class' => 'form-control']) }}
			</div>



		</div>
	</div>
</div>
{!! Form::close() !!}

<hr>

{!! Form::open(['route' => ['footerinfo.update', $footerInfo -> id], 'method' => 'PUT', 'files' => true]) !!}
<div class="card">
	<div class="card-header">
		<h4 style="display: inline;">Update Footer Info</h4>
		{{ Form::submit('Submit', array('class' => 'btn btn-success pull-right')) }}
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-md-6 form-group">			{{ Form::label('email', 'Email:', ['class' => 'margin-vertical-10'])}}
				{{ Form::text('email', $footerInfo -> email, array('class' => 'form-control'))}}
			</div>

			<div class="col-md-6 form-group">
				{{ Form::label('phone', "Phone:", ['class' => 'margin-vertical-10']) }}
				{{ Form::text('phone', $footerInfo -> phone, ['class' => 'form-control']) }}
			</div>

			<div class="col-md-6 form-group">
				{{ Form::label('fax', 'Fax:', ['class' => 'margin-vertical-10']) }}
				{{ Form::text('fax', $footerInfo -> fax, ['class' => 'form-control']) }}
			</div>

			<div class="col-md-6 form-group">
				{{ Form::label('address', 'Address:', ['class' => 'margin-vertical-10']) }}
				{{ Form::text('address', $footerInfo -> address , ['class' => 'form-control']) }}
			</div>
		</div>
	</div>
</div>
{!! Form::close() !!}










{{-- <div class="box box-warning">
	
	<div class="row margin-all-10">
		<h3>Update Social Links</h3>
		{!! Form::open(['route' => ['sociallinks.update'], 'method' => 'PUT', 'files' => true]) !!}
				{{ csrf_field() }}

			<div class="col-md-6">
				    {{ Form::label('facebook_link', 'Facebook Link:' , ['class' => 'margin-vertical-10']) }}
				    {{ Form::text('facebook_link', $facebook -> link, array('class' => 'form-control'))}}
			</div>
			<div class="col-md-6">
				    {{ Form::label('twitter_link', 'Twitter Link:' , ['class' => 'margin-vertical-10']) }}
				    {{ Form::text('twitter_link', $twitter -> link, array('class' => 'form-control'))}}
			</div>
			<div class="col-md-6">
				    {{ Form::label('instagram_link', 'Instagram Link:' , ['class' => 'margin-vertical-10']) }}
				    {{ Form::text('instagram_link', $instagram -> link, array('class' => 'form-control'))}}
			</div>
			<div class="col-md-6">
				    {{ Form::label('google_link', 'Google Link:' , ['class' => 'margin-vertical-10']) }}
				    {{ Form::text('google_link', $google -> link, array('class' => 'form-control'))}}
			</div>
		<div class="col-md-12">
			{{ Form::submit('Update Social Link', array('class' => 'btn btn-success margin-vertical-10 float-right')) }}
		{!! Form::close() !!}
		</div>

	</div>

</div> --}}
@endsection