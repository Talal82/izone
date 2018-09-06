@extends('layouts.master')

@section('title', 'General Settings')

@section('breadcrumb-header', 'General Site Settings')

@section('breadcrumb-detail', 'Edit')

@section('stylesheets')

	<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.master.css') }}">

@endsection

@section('content')
<div class="box box-warning">
	
	<div class="row margin-all-10" style="padding-bottom: 10px;">
		<h3>Update Header Info</h3>
		{!! Form::open(['route' => ['headerinfo.update', $headerInfo -> id], 'method' => 'PUT', 'files' => true]) !!}
				{{ csrf_field() }}
		<div class="col-md-6">
				{{ Form::label('site_title', 'Site Title:', ['class' => 'margin-vertical-10'])}}
			    {{ Form::text('site_title', $headerInfo -> site_title, array('class' => 'form-control'))}}

			    {{ Form::label('email', 'Email:', ['class' => 'margin-vertical-10'])}}
			    {{ Form::text('email', $headerInfo -> email, array('class' => 'form-control'))}}

			    {{ Form::label('phone', "Phone:", ['class' => 'margin-vertical-10']) }}
			    {{ Form::text('phone', $headerInfo -> phone, ['class' => 'form-control']) }}
		</div>
		<div class="col-md-6">
				{{ Form::label('fax', 'Fax:', ['class' => 'margin-vertical-10']) }}
				{{ Form::text('fax', $headerInfo -> fax, ['class' => 'form-control']) }}

			    {{ Form::label('address', 'Address:', ['class' => 'margin-vertical-10']) }}
				{{ Form::text('address', $headerInfo -> address , ['class' => 'form-control']) }}

			    {{ Form::submit('Update Header Info', array('class' => 'btn btn-success margin-vertical-10 float-right')) }}
		</div>
		{!! Form::close() !!}
	</div>
</div>

<div class="box box-warning">
	
	<div class="row margin-all-10" style="padding-bottom: 10px;">
		<h3>Update Footer Info</h3>
		{!! Form::open(['route' => ['footerinfo.update', $footerInfo -> id], 'method' => 'PUT', 'files' => true]) !!}
				{{ csrf_field() }}
		<div class="col-md-6">

			    {{ Form::label('email', 'Email:', ['class' => 'margin-vertical-10'])}}
			    {{ Form::text('email', $footerInfo -> email, array('class' => 'form-control'))}}

			    {{ Form::label('phone', "Phone:", ['class' => 'margin-vertical-10']) }}
			    {{ Form::text('phone', $footerInfo -> phone, ['class' => 'form-control']) }}
		</div>
		<div class="col-md-6">
				{{ Form::label('fax', 'Fax:', ['class' => 'margin-vertical-10']) }}
				{{ Form::text('fax', $footerInfo -> fax, ['class' => 'form-control']) }}

			    {{ Form::label('address', 'Address:', ['class' => 'margin-vertical-10']) }}
				{{ Form::text('address', $footerInfo -> address , ['class' => 'form-control']) }}

			    {{ Form::submit('Update Footer Info', array('class' => 'btn btn-success margin-vertical-10 float-right')) }}
		</div>
		{!! Form::close() !!}
	</div>
</div>

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