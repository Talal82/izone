@extends('layouts.master')

@section('title', 'View Service')

@section('breadcrumb-header', 'Services')

@section('breadcrumb-detail', 'View Service')

@section('stylesheets')

<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.master.css') }}">

@endsection


@section('content')
<div class="box box-warning">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-8">
				<h2 class="text-center">{{ $service -> name }}</h2>
				<p><strong>Short Detail:</strong></p>
				<p>{{ $service -> detail }}</p>
				
				<p><strong>Detail:</strong></p>
				{!! $service -> full_detail !!}
				<div class="row">
					<div class="col-md-4">
						<h3>Main Service Image:</h3>
					</div>
					<div class="col-md-3 float-right margin-vertical-10 text-center">
						<h3>Hover Icons:</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<img src="{{ asset('images/'.$service -> image) }}" width="400" height="400" class="float-left margin-vertical-10">
					</div>
					<div class="col-md-3 float-right margin-vertical-10 well text-center">
						<h5>Transparent Icon</h5>
						<img src="{{ asset('images/'.$service -> transparent_icon) }}" width="100" height="100">
						<h5>Visible Icon</h5>
						<img src="{{ asset('images/'.$service -> visible_icon) }}" width="100" height="100" class="margin-top-10">
					</div>
				</div>
				

			</div>
			<div class="col-md-4 margin-vertical-10">
				<div class="well">
					<dl class="dl-horizontal">
						<dt>Created At:</dt>
						<dd> {{ date('M j,Y h:i a' , strtotime($service -> created_at)) }} </dd>
					</dl>
					<dl class="dl-horizontal">
						<dt>Last Updated:</dt>
						<dd> {{ date('M j,Y h:i a', strtotime($service -> created_at)) }} </dd>
					</dl>
					<hr>
					<div class="row">
						<div class="col-sm-6">
							{!! Html::linkRoute('service.edit', 'Edit', array($service -> id), array('class' => 'btn btn-primary btn-block')) !!}
						</div>
						<div class="col-sm-6">
							{{ Form::open(['route' => ['service.destroy', $service -> id], 'method' => 'DELETE']) }}

							{{Form::submit('Delete', ['class' => 'btn btn-danger btn-block'])}}

							{{ Form::close() }}
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
@endsection