@extends('layouts.master')

@section('title', 'Edit Banner Info')

@section('page-title', 'Banners')

@section('stylesheets')

<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.master.css') }}">

@endsection

@section('content')
<div class="col-md-12">
	{!! Form::model( $banner , ['route' => ['banner.update', $banner->id], 'method' => 'PUT', 'files' => true, 'style' => 'display: block;' ]) !!}

	<div class="row">
		<div class="col-md-8">
			{{ csrf_field() }}

			{{ Form::label('name', 'Name:', ['class' => 'm-t-10'])}}
			{{ Form::text('name', null, array('class' => 'form-control'))}}

			{{ Form::label('detail', 'Detail:', ['class' => 'm-t-10'])}}
			{{ Form::text('detail', null, array('class' => 'form-control'))}}

			{{ Form::label('image', 'Update Banner Image:', ['class' => 'm-t-10'])}}
			{{ Form::file('image', ['class' => 'form-control-file'])}}

		</div>
		<div class="col-md-4 card p-2">
			<dl class="dl-horizontal">
				<dt>Created At:</dt>
				<dd> {{ date('M j,Y h:i a' , strtotime($banner -> created_at)) }} </dd>
			</dl>
			<dl class="dl-horizontal">
				<dt>Last Updated:</dt>
				<dd> {{ date('M j,Y h:i a', strtotime($banner -> created_at)) }} </dd>
			</dl>
			<hr>
			<div class="row">
				<div class="col-sm-6">
					<a href="{{ route('banner.show', [$banner -> id]) }}" class="btn btn-danger btn-block">Cancel</a>
					{{-- {!! Html::linkRoute('office.view', 'Cancel', array($office -> id), array('class' => 'btn btn-danger btn-block')) !!} --}}
				</div>
				<div class="col-sm-6">
					{{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
				</div>
			</div>
		</div>

	</div>
	{!! Form::close() !!}
</div>
@endsection